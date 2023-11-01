<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mading KU</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins';
            font-weight: 600;
            box-sizing: border-box;
        }

        #login {
            padding: 7px 14px;
            background-color: skyblue;
            border-radius: 7px;
            margin-right: 15px;
            display: inline;
        }

        #login a {
            text-decoration: none;
        }

        #login:hover {
            background-color: blue;
            transition: 1s;
        }

        #login a:hover {
            color: aqua;
        }

        .container {
            margin-top: 40px;
        }


        .vid {
            width: 40%;
            height: 200px;
            padding: 150px 150px;
            background-color: skyblue;


        }

        .md {
            width: 40%;
            height: 200px;
            padding: 150px 150px;
            background-color: blue;



        }



    </style>

</head>

    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" width="30" height="24" class="d-inline-block align-text-top">
                    MadingKU
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <div id="login">
                    <a href="/login" >Login</a>
                </div>
              </div>
            </div>
          </nav>
        {{-- Navbar --}}



        <div class="container">
            
            {{-- Video --}}
                <div class="vid">

                </div>
            {{-- Video --}}

            {{-- Mading --}}
            <div class="md">

            </div>
            {{-- Mading --}}
        </div>


        {{-- Script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>

