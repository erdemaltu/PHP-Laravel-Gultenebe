<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('frontend')}}/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend')}}/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
      .dropdown-menu .dropdown-menu {
          position: absolute;
          top: 0;
          left: 100%;
          margin-top: -5px;
          margin-left: 0;
          border-radius: 0.25rem;
      }

      .dropdown:hover > .dropdown-menu {
          display: block;
      }

      .dropdown-item:hover {
          background-color: #f8f9fa;
          color: #F86D72;
      }

      .dropdown-arrow {
          float: right;
          font-size: 12px;
          margin-left: 5px;
          color: #6c757d; 
      }

      .dropdown:hover .dropdown-arrow {
          color: #F86D72; 
      }


      .dropdown-menu {
          overflow: visible;
      }

      #hero {
          height: 300px;
      }

      .service-image {
          max-width: 100%; 
          max-height: 400px; 
          height: auto; 
          object-fit: cover; 
          margin: 0 auto; 
      }

      .img-fluid {
          border-radius: 8px; 
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
          max-height: 500px; 
          object-fit: cover; 
      }

      .text-justify {
          text-align: justify;
      }

      .rounded-input {
          border-radius: 25px;
          padding: 10px;
      }

      .card {
          border: none;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
          background-color: rgba(100, 149, 237, 0.1); 
      }

        #languageSelector {
            position: relative;
        }

        #languageSelector .dropdown-toggle {
            padding: 5px 10px;
            border-radius: 8px;
            background-color: rgba(248, 249, 250, 0.8);
            border: 1px solid #ced4da;
            color: #495057;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.2s, box-shadow 0.2s;
        }

        #languageSelector .dropdown-toggle:hover {
            background-color: rgba(248, 249, 250, 1);
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        #languageSelector .dropdown-menu {
            background-color: white;
            border: 1px solid #e4e4e4;
            border-radius: 8px;
            padding: 5px 0;
        }

        #languageSelector .dropdown-item {
            padding: 8px 15px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.2s;
        }

        #languageSelector .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        #languageSelector .flag-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        #languageSelector .language-text {
            margin-left: 5px;
        }

        #languageSelector .dropdown-item.active {
            font-weight: bold;
            background-color: #e9ecef;
        }


      @media (max-width: 768px) {
          .text-justify {
              text-align: left; 
          }

          .container h1 {
              font-size: 1.75rem;
          }

          .container p {
              font-size: 0.9rem; 
          }  

          #hero {
              height: 200px; 
          }

          #hero h1 {
              font-size: 1.5rem;
          }

          .img-fluid {
              max-height: 300px; 
          }
        }  
    </style>
  </head>
  <body>
    @include('frontend._header')
    @yield('content')
    @include('frontend._footer')
    @yield('footer')
  </body>
</html>
