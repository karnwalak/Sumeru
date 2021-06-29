<?php
$id = request() -> route('id');
?>
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <title>Forgot Password Page</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="/theme/html/demo4/dist/assets/css/pages/login/login-149d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/theme/html/demo4/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8" rel="stylesheet"
        type="text/css" />
    <link href="/theme/html/demo4/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8" rel="stylesheet"
        type="text/css" />
    <link href="/theme/html/demo4/dist/assets/css/style.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="/shortcut icon" href="img/logoicon.png" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login--><br>  
        <!--begin::Login--><br>  
        <!--begin::Login--><br>  
        <!--begin::Login--><br>  
        <!--begin::Login--><br>  
        <!--begin::Login--><br>  
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4>Set Your Password</h4>
                <form id="form">
                    {{@csrf_field()}}
                    <input type="password" placeholder="Enter Your Password" name="password" class="form-control">
                    <!--begin::Login--><br>  
                    <span class="text-danger field_error" id="password_error"></span>
                    <input type="hidden" name="id" value="{{$id}}"> <br>
                    <input type="password" placeholder="Confirm Your Password" name="confirm_password" class="form-control"> <br>
                    <span class="text-danger field_error" id="confirm_password_error"></span>
                    <button type="submit" class="btn btn-primary">SET PASSWORD</button><br>
                    <span class="text-danger" id="error_msg"></span>
                    <span class="text-success" id="success_msg"></span>
                </form>
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


    <!--end::Page Scripts-->
    <script type="text/javascript">
        $(document).ready(function(){
        $("#form").submit(function(e){
          e.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'../setPassword',
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
              }
            }
          });
        })
      });
    </script>
</body>

</html>