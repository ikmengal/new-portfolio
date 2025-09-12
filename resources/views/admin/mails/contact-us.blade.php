<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailData['title'] }}</title>
</head>
<body>
    <h3>Name: {!! $mailData['name'] !!}</h3>
    <h5>Email: {!! $mailData['email'] !!}</h5>
    <p>{!! $mailData['body'] !!}</p>
    <br>
    <p>Thank you,</p>
    <p>Ik Mengal Solutions</p>
</body>
</html>
