<?php

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\{
    Auth,
    Http,
    Log,
    DB
};
use Illuminate\Support\Str;
use App\Models\{
    OrderType,
    BookAudio,
    Setting,
    BookUrl,
    User,
    Book
};
use Carbon\Carbon;

function currentDate(){
    return Carbon::now();
}

function dateFormat($date){
    return Carbon::parse($date)->format('m/d/Y');
}

function dateTimeFormat($date){
    if(isset($date) && !empty($date)){
        return Carbon::parse($date)->format('M/d/Y, h:i: A');
    }else{
        return null;
    }
}

function appName(){
    return env("APP_NAME") ?? "Portfolio Application";
}

function setting(){
    $setting = Setting::first();
    return $setting ?? null;
}

function getRole($user_id = null){
    if(isset($user_id) && !empty($user_id)){
        $user = User::where('id', $user_id)->first();
        return $user->getRoleNames()->first() ?? null;
    }else{
        return Auth::user()->getRoleNames()->first() ?? null;
    }
}

function getSlug(){
    return Str::random(30)."-".time()."-".Str::random(30);
}

function getShortSlug(){
    return Str::random(10)."-".time()."-".Str::random(10);
}

function slug($title){
    $slug = Str::slug($title);
    return $slug;
}

function uploadSingleFile($file = null, $folder_name = null, $prefix = null, $old_image = null){
    $folder = public_path($folder_name);
    if (isset($old_image) && !empty($old_image) && file_exists($folder . "/" . $old_image)) {
        unlink($folder . "/" . $old_image);
    }

    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }
    $name = $prefix . "-" .  Str::random(6) . time() . "." . $file->getClientOriginalExtension();
    $file->move($folder, $name);
    return $name;
}

function uploadSingleImageOrVideo($file = null, $folder_name = null, $old_image = null){
    $folder = public_path($folder_name);

    // Delete old file if exists
    if (isset($old_image) && !empty($old_image) && file_exists($folder . "/" . $old_image)) {
        unlink($folder . "/" . $old_image);
    }

    // Create folder if not exists
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }

    // Get file extension and MIME type
    $extension = $file->getClientOriginalExtension();
    $mimeType = $file->getMimeType();

    // Determine file type: image or video
    $fileType = Str::contains($mimeType, 'video') ? 'video' : 'image';

    // Generate file name
    $name = $fileType . "-" . Str::random(6) . time() . "." . $extension;

    // Move file
    $file->move($folder, $name);

    // Return all data
    return [
        'name'       => $name,
        'extension'  => $extension,
        'mime_type'  => $mimeType,
        'file_type'  => $fileType,
        'full_path'  => $folder_name . '/' . $name,
    ];
}

function getPermissionNames($model){
    $names = '';
    $permissionNames = Permission::where('label', $model->label)->get();
    if(isset($permissionNames) && !blank($permissionNames)){
        foreach ($permissionNames as $key => $permissionName) {
            $name = explode('-', $permissionName->name);
            if(isset($name[1]) && !empty($name[1])){
                if($name[1]=='list'){
                    $names .= '<span class="badge bg-label-success text-capitalize mb-1">'.$name[1].'</span>'." ";
                }
                elseif($name[1]=='create'){
                    $names .= '<span class="badge bg-label-primary text-capitalize mb-1">'.$name[1].'</span>'." ";
                }
                elseif($name[1]=='edit'){
                    $names .= '<span class="badge bg-label-info text-capitalize mb-1">'.$name[1].'</span>'." ";
                }
                elseif($name[1]=='delete'){
                    $names .= '<span class="badge bg-label-danger text-capitalize mb-1">'.$name[1].'</span>'." ";
                }
                elseif($name[1]=='status'){
                    $names .= '<span class="badge bg-label-success text-capitalize mb-1">'.$name[1].'</span>'." ";
                }else{
                    $names .= '<span class="badge bg-label-secondary text-capitalize mb-1">'.$name[1].'</span>'." ";
                }
            }
        }
        return Str::ucfirst($names);
    }else{
        return null;
    }
}

function getPermissionItems($permission){
    if(isset($permission) && !empty($permission)){
        $allItemNames = Permission::where('label', $permission->label)->get();
        if(isset($allItemNames) && !blank($allItemNames)){
            return $allItemNames;
        }else{
            return null;
        }
    }else{
        return null;
    }
}

function getPItemName($ItemName){
    // Split the string by dashes
    $segments = explode('-', $ItemName);

    // Remove the first segment (e.g., 'clients')
    array_shift($segments);

    // Join the remaining segments with dashes
    return implode('-', $segments);
}

function getPermissionName($id){
    if(isset($id) && !empty($id)){
        $name = Permission::where('id', $id)->first();
        if(isset($name) && !empty($name)){
            return $name->name;
        }else{
            return null;
        }
    }else{
        return null;
    }
}

function selectThePermissionEditRole($previousPermissions){
    if(isset($previousPermissions) && !blank($previousPermissions)){
        $oldPermissionsIds = Permission::whereIn('name', $previousPermissions)->pluck('id');
        if(isset($oldPermissionsIds) && !blank($oldPermissionsIds)){
            return $oldPermissionsIds;
        }else{
            return null;
        }
    }else{
        return null;
    }
}

function selectIds($oldPermissions, $id){
    if(isset($oldPermissions) && !blank($oldPermissions)){
        foreach ($oldPermissions as $key => $oldPermission) {
            if($oldPermission === $id){
                return true;
            }else{
                continue;
            }
        }
    }else{
        return false;
    }
}

function getPermissionAllName($data){
    $data = Permission::whereIn('id', $data)->get();
    $permissions = [];
    foreach ($data as $key => $value) {
        $permissions[] = $value->name;
    }
    return $permissions;
}

function remarksLimit($remarks = null, $limit = 31){
    if (isset($remarks) && !empty($remarks)) {
        if (strlen($remarks) > $limit) {
            $remarksLimit = substr($remarks, 0, $limit) . "...";
        } else {
            $remarksLimit = $remarks;
        }
        return $remarksLimit;
    } else {
        return null;
    }
}

function getUserToken($bearerToken){
    if($bearerToken == ""){
        return response()->json(["success" => false, "message" => "Enter authorized token"], 500);
    }

    $userToken = DB::table('personal_access_tokens')->where('id', $bearerToken)->first();

    if(empty($userToken)){
        return response()->json(["success" => false, "message" => "Un-authorize Access, Please login to continue"], 500);
    }else{
        $user = User::where('id', $userToken->tokenable_id)->first();
        return $user ?? null;
    }
}

function getOrderType($id){
    $order= OrderType::where('id', $id)->first();
    if(!empty($order->title) && $id > 0){

    return $order->title;
    }
}

function verifyBook($book_id){
    $check = Book::where('id', $book_id)->first();
    if (!empty($check)) {
        return $check;
    }
    return false;
}

function verifyAudio($audio_id){
    $check = BookAudio::where('id', $audio_id)->first();
    if (!empty($check)) {
        return $check;
    }
    return false;
}

function numberFormat($number){
    if($number){
        return number_format($number,2);
    }else{
        return 0;
    }
}

function getTypeStatus($book_id, $type){
    $record = BookUrl::where('book_id', $book_id)->where('order_type_id',$type)->first();
    if(!empty($record) && isset($record)){
        return true;
    }
    return false;
}

function BookOrderType($hasUrls)
{
    $orderTypes = OrderType::get();
    if ($orderTypes && $orderTypes->count() > 0) {
        $data = [];
        foreach ($orderTypes as $orderType) {
            $data[] = [
                'id'          => $orderType->id,
                'IsAvailable' => $hasUrls->pluck('order_type_id')->contains($orderType->id),
                'title'       => $orderType->title,
            ];
        }
        return $data;
    }
    return false;
}

// function verifyCountry($country_id){
//     $check = Country::where('id', $country_id)->first();
//     if (!empty($check)) {
//         return $check;
//     }
//     return false;
// }

// function verifyState($state_id){
//     $check = State::where('id', $state_id)->first();
//     if (!empty($check)) {
//         return $check;
//     }
//     return false;
// }

// function verifyCity($city_id){
//     $check = City::where('id', $city_id)->first();
//     if (!empty($check)) {
//         return $check;
//     }
//     return false;
// }
