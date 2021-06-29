<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <title>Login Page</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="theme/html/demo4/dist/assets/css/pages/login/login-149d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="theme/html/demo4/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8" rel="stylesheet"
        type="text/css" />
    <link href="theme/html/demo4/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8" rel="stylesheet"
        type="text/css" />
    <link href="theme/html/demo4/dist/assets/css/style.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="img/icon.jpg" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url(theme/html/demo4/dist/assets/media/bg/bg-1.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="img/logo.png" class="max-h-100px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h2 class="opacity-60 font-weight-bold">Welcome to<strong> Sumeru Infrastructures</strong></h2>
                            <h3>Log In To Admin</h3>
                            <p class="opacity-60 font-weight-bold">Enter your details to login to your account</p>
                        </div>
                        <form id="form">
                            {{@csrf_field()}}
                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="text" placeholder="Email" name="username" autocomplete="off" />
                                    <span style="color: red;" id="username_error" class="field_error"></span>
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="password" placeholder="Password" name="password" />
                                    <span style="color: red;" id="password_error" class="field_error"></span>
                            </div>
                            <div class="form-group text-center">
                            <a href="forgotpassword" class="text-light">Forgot Password?</a>
                            </div>
                            <div class="form-group text-center mt-10">
                                <!-- <input type="submit" value="Log In" name=""> -->
                                   <button type="submit" id="kt_login_signin_submit"
                                        class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button><br>
                                    <span style="color:red;">{{session() -> get('error')}}</span>
                                    <span id="error_msg" style="color:red;"></span>
                                    <span id="success_msg" style="color:white;"></span>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#8950FC",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <!-- <script src="theme/html/demo4/dist/assets/plugins/global/plugins.bundle49d8.js?v=7.2.8"></script> -->
    <!-- <script src="theme/html/demo4/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.js?v=7.2.8"></script> -->
    <!-- <script src="theme/html/demo4/dist/assets/js/scripts.bundle49d8.js?v=7.2.8"></script> -->
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="theme/html/demo4/dist/assets/js/pages/custom/login/login-general49d8.js?v=7.2.8"></script> -->
    <!--end::Page Scripts-->
    <script type="text/javascript">
        $(document).ready(function(){
        $("#form").submit(function(e){
          e.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'auth',
            data:$("#form").serialize(),
            type:'post',
            success:function(result){
              if (result.status == 'error') {
                $('#error_msg').html(result.error);
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('#form')[0].reset();
                $('#success_msg').html(result.msg);
                setTimeout(function(){
                 window.location.href = '../admin/ERP/dashboard'; 
               }, 1000);
              }
            }
          });
        })
      });
    </script>
</body>

</html>