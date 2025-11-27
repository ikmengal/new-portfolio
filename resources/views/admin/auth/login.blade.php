@extends('admin.auth.master')
@push('title', $title ?? 'Login')
@section('content')
    <!-- Content -->
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                                <div class="app-brand justify-content-center mb-4 mt-2">
                                    <a href="{{ route('admin.login') }}" class="app-brand-link gap-2">
                                        {{-- <span class="app-brand-logo demo"> --}}
                                            @if(isset(setting()->black_logo) && !empty(setting()->black_logo))
                                                <img width="100" src="{{ asset('admin/assets/settings').'/'.setting()->black_logo }}" class="img-fluid" alt="Logo" />
                                            @else
                                                <img width="100" src="{{ asset('admin/assets/img/branding/logo.png') }}" class="img-fluid " alt="Logo" />
                                            @endif
                                        {{-- </span> --}}
                                    </a>
                                </div>
                            <!-- /Logo -->
                            <h4 class="mb-1 pt-2">Welcome to @if (isset(setting()->name) && !empty(setting()->name)) {{ setting()->name ?? '' }} @else {{ appName() }} @endif! 👋</h4>
                            <p class="mb-4">Please sign-in to your account and start the adventure</p>
                            <div id="errorMessage"></div>
                            <form id="loginForm" class="mb-3" action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" @if(isset($_COOKIE["email"])) value="{{ $_COOKIE["email"] }}" @endif name="email" placeholder="Enter your email" autofocus />
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                        {{-- <a href="auth-forgot-password-basic.html">
                                            <small>Forgot Password?</small>
                                        </a> --}}
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" @if(isset($_COOKIE["password"])) value="{{ $_COOKIE["password"] }}" @endif name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" @if(isset($_COOKIE["email"])) checked @endif />
                                        <label class="form-check-label" for="remember"> Remember Me </label>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <span id="login-btn" style="display: none;">
                                        <button type="submit" id="loginButton" class="btn btn-primary d-grid w-100">Sign in </button>
                                    </span>

                                    <div id="loader" style="display: none;">
                                        <button type="button" class="btn btn-primary w-100" disabled><span class="spinner-border me-1" role="status" aria-hidden="true"></span>Loading...</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- Login -->
            </div>
        </div>
    <!-- Content -->
@endsection
@push('js')
    <script>
      $(document).ready(function(){
        $('#login-btn').show();
        $('#loginButton').click(function(e){
          e.preventDefault();
            var email = $("#email").val();
            var password = $("#password").val();

            if(email && password){
              $('#login-btn').hide();
              $("#loader").show();
              $("#errorMessage").hide();

              var url = $('#loginForm').attr('action');

              $.ajax({
                type : 'POST',
                url : $('#loginForm').attr('action'),
                data : $('#loginForm').serialize(),
                success: function(response){
                  if(response.success == true){
                    window.location.href = response.route;
                  }else{
                    $('#login-btn').show();
                    $("#loader").hide();
                    var message = '<div class="alert alert-danger">' + response.error + '</div>';
                    $("#errorMessage").html(message).show();
                  }
                },
                error: function(){
                  console.log(error);
                  $('#login-btn').show();
                  $("#loader").hide();
                  var message = '<div class="alert alert-danger"> Invalid email & password </div>';
                  $("#errorMessage").html(message).show();
                }
              });
            }else{
              var message = '<div class="alert alert-danger">Please insert email and password</div>'
              $('#errorMessage').html(message).show;
            }
          });
      });
    </script>
    <script type="text/javascript">
        $(document).on('click','i[class^="ti ti-eye"]',function(){
            var getType=$(this).parent().parent().find('input').attr('type');
            if(getType!='text'){
                $(this).attr('class','ti ti-eye-off');
                $(this).parent().parent().find('input').attr('type','password');
            }else{
                $(this).attr('class','ti ti-eye');
                $(this).parent().parent().find('input').attr('type','text');
            }
        });
    </script>
@endpush
