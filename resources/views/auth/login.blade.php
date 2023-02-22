<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/template')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('/template')}}/assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('/template')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{asset('/template')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('/template')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/template')}}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">

    </div>
  </div>
  <main class="main-content  mt-0">

    <div id="flashError" data-flash="{{session()->get('error')}}">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" action="{{url('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required autofocus>
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required autofocus>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-10"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('template/assets')}}/js/jquery/jquery.min.js"></script>
  <script src="{{asset('template/assets')}}/js/jquery-ui/jquery-ui.min.js"></script>
  <script src="{{asset('/template')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('/template')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('/template')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{asset('/template')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{asset('template/')}}/sweetalert2/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
            var flashError =$('#flashError').data('flash');
            if (flashError) {
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: flashError,
              })
            }
              var flash =$('#flash').data('flash');
              if (flash) {
                  Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: flash,
                })
              }
              $(document).on('click', '#btn-hapus', function(e){
                e.preventDefault();
                var link = $(this).attr('href');
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  confirmButtonColor: '#00a65a',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!',
                  showCancelButton: true,
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = link;
                  }
                })
              })
            </script>
    <script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/template/')}}assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
