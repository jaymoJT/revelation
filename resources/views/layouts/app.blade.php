<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('leoblaze.jpg') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Leoblaze') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Google fonts exclamation icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- Custom CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    <!-- <script>
      (function(d,t) {
        var BASE_URL="https://app.chatwoot.com";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.defer = true;
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatwootSDK.run({
            websiteToken: '45K1FZ1UxES32WfNhqvu8hzX',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
    </script> -->
    
    <script>
      document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        counter.innerText = '0';

        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const current = +counter.innerText;

            const increment = target / 200;  // Adjust this value for speed

            if (current < target) {
                counter.innerText = `${Math.ceil(current + increment)}`;
                setTimeout(updateCounter, 1);  // Adjust this value for speed
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
});


    </script>
    

        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.landingnav')

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>




    <!-- <div class="container fixed-bottom">
            <div class="wrapper">
                <div class="justify-content-sm-center">
                    <div class="text-center">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="material-symbols-outlined">notification_important</span> Our domain registration and web hosting services are under maintenance. Please use our live chat for assistance. We'll be back shortly!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                        
                    </div>
                </div>
            </div>
    </div>   -->
  <footer>
    <div class="container">
      <div class="wrapper">
      <div class="row">
          <div class="col-md-3">
            <h3>Revelation Bible College</h3>
            
          </div>
          <div class="col-md-3">
            <h3>Quick links</h3>
            <ul>
              <li><a href="#">How to apply</a> </li>
              <li><a href="#">Courses</a> </li>
              <li><a href="#">Course Qualifications</a> </li>
              <li><a href="#">Our Intake</a> </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Partners</h3>
            <ul>
              <li><a href="#">Partner one</a></li>
              <li><a href="#">Partner two</a></li>
              <li><a href="#">Partner Three</a></li>
              <li><a href="#">Partner Four</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Get in Touch</h3>
            <div class="subscripbtion-form">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="email address" required="require" name="" />
                  <button class="btn btn-secondary rounded-pill">Subscribe</button> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="wrapper-small">
          <div class="d-flex align-items-center justify-content-center">
            <p style="color:#fff !important;">Copyright: Leoblaze Ventures, 2024</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</html>
