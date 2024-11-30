
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pendukung Keputusan</title>

    <!-- Bootstrap -->
    <link href="{{asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('gentelella/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/postlogin" method="POST">
              @csrf
              <h1>PT HEVEA ANUGRAH NATURA</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="password" required="" />
              </div>
              <div>
                <button type="submit">Log In</button>
              </div>
              {{-- <div>
                <a class="btn btn-default submit" href="login">Log inn</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div> --}}

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Punya Akun?
                  <a href="#signup" class="to_register">Daftar Disini</a>
                </p>

                <div class="clearfix"></div>
                <br />

                {{-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div> --}}
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="/postregistration" method="POST">
              @csrf
              <h1>Buat Akun</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="password" required="" />
              </div>
              <div>
                <button type="submit"> Submit</button>
              </div>
              {{-- <div>
                <a class="btn btn-default submit" href="postregistration">Submit</a>
              </div> --}}
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Punya Akun?
                  <a href="#signin" class="to_register"> Log in Disini </a>
                </p>

                <div class="clearfix"></div>
                <br />

                {{-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div> --}}
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
