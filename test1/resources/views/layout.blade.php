<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Learning Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        .footer{
            width:100%;
            height:150px;
            background-color:black;
            color:white;
            font-size:16px;
            position:fixed;
            bottom:0px;
        }
        #map{

        }
        #contacts{
 position:absolute;
            right:0px;
            width:30%;
            height:auto;
            padding:5px 5px 5px 5px;
           
        }
        #contacts ul li{
                        padding:2px 2px 2px 2px;
                        list-style-type:none;


        }
        #media{
 position:absolute;
            left:0px;
            width:30%;
            height:auto;


        }
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>
<div class="container-fluid col-md-12 ">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="navbar-header">
        <ul class="nav nav-tabs">
           <li class="nav-item active"><a class="nav-link text-white" href="./">Home</a></li>
           <li class="nav-item"><a class="nav-link text-white" href="./about">About</a></li>
           <li class="nav-item"><a class="nav-link text-white" href="./contact">Contact</a></li>
          
            <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">task</a>
  
           <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./showtask">show tasks</a></li>

           <li><a class="dropdown-item" href="./create">create a task</a></li>
           <li><a class="dropdown-item" href="./#">edit a task</a></li>
           <li><a class="dropdown-item" href="./#">delete a task</a></li>
        </ul>
        </li>
        </ul>
        
    </div>
</nav>
</div>
@yield("content")
<div class="footer"><div id="media"><img src=""/><img src=""/><img src=""/><img src=""/></div><div id="contacts"><ul><li>address:united kingdom-streeet gamble -avenue tail -block 3</li><li>tel-001297845636<br/>fax:001956235425326</li><li>email:support@notlle.com</li><li></li></ul></div><div id="map"><img/></div>copy right 2024 27 octobr-web design with laravel </div>
<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
