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
            display: inline-block;
        }

        #login a {
            text-decoration: none;
        }

        #login:hover {
            background-color: blue;
            transition: 0.4s;
        }

        #login a:hover {
            color: aqua;
            transition: 0.4s;
        }

        .container {
            margin-top: 15px;
            flex-wrap: wrap;
        }


        .vid {
            width: 65%;
            height: 300px;
            background-color: skyblue;
            position: absolute;
            left: 0;
            margin-left: 20px;
            border-radius: 10px;


        }

        .md {
            width: 30%;
            height: 300px;
            background-color: blue;
            position: absolute;
            right: 0;
            margin-right: 20px;
            border-radius: 10px;

        }

        .judul {
            position: relative;
            top: 303px;
            width: 340px;
            margin: start;
            font-size: 20px;
            border: 2px solid blueviolet;
            border-radius: 10px;

        }

        .judul p {
            text-align: center;

        }

        .judul2 {
            position: absolute;
            top: 374px;
            width: 340px;
            right: 0;
            margin-right: 45px;
            font-size: 20px;
            border: 2px solid blueviolet;
            border-radius: 10px;

        }

        .judul2 p {
            text-align: center;

        }



        .jadwak {
            position: relative;
            top: 310px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .jadwak ul{
            list-style: none;

        }

        .jadwak ul li {
            margin: 1px 29px;
            float: left;
            padding: 5px 15px;
            border-radius: 6px;

        }

        .jadlist {
            position: relative;
            top: 280px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .jadlist ul{
            list-style: none;

        }

        .jadlist ul li {
            margin: 5px 32px;
            float: left;
            padding: 5px 15px;
            background-color: skyblue;
            border-radius: 6px;
        }



    </style>

</head>

    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://imgs.search.brave.com/5vDY-nqURtYeVo9-NbhGILkB9Y4c6cBLuVGpxEy4_5s/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTMy/NDU2OTAzMC92ZWN0/b3IvbS1sZXR0ZXIt/bGluZXItbG9nby1k/ZXNpZ24uanBnP3M9/NjEyeDYxMiZ3PTAm/az0yMCZjPXJ1ejhi/ZHVvTmpSc3RDMG82/VWdsZXMzTWRuckxW/ZGVDNmtMbUg2U3dY/Z3c9" width="30" height="24" class="d-inline-block align-text-top">

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



            {{-- Judul 1 --}}
            <div class="judul">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates delectus animi aperiam, et praesentium, culpa ducimus dignissimos magni!</p>
            </div>
            {{-- Judul 1--}}

            {{-- Judul 2--}}
            <div class="judul2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates delectus animi aperiam, et praesentium, culpa ducimus dignissimos magni!</p>
                </div>
                {{-- Judul 2--}}


            {{-- Jadwal Sholat --}}

            <div class="jadwak">
                <ul>
                    <li>Subuh</li>
                    <li>Dzuhur</li>
                    <li>Ashar</li>
                    <li>Magrib</li>
                    <li>isya</li>
                </ul>
            </div>

            <div class="jadlist">
                <ul>
                    <li>04.03</li>
                    <li>11.33</li>
                    <li>14.50</li>
                    <li>17.43</li>
                    <li>18.55</li>
                </ul>
            </div>
            {{-- Jadwal Sholat --}}

        </div>


        {{-- Script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>

