@extends('CommonViews\commonlayout')

@section('content')

<div>

    <head>
        <style>
             body {
                background-image: url(tomato.jpg);
            }
            .loginclass {

                background: #fff;
                width: 500px;
                margin: 65px auto;
                display: -webkit-box;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                border-radius: 4px;
                box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);

            }

            form {
                justify-content: center;
            }

            h1 {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            label {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
        </style>
    </head>

    <body>

        <div class="loginclass" style="text-align:center" justify-content="center">
            <h1>Trader Login Page</h1><br>
            <form action="traderloginfun" method="post">
                {{@csrf_field()}}
                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="Enter Email"><br>
                <span style="color:red">@error('email'){{$message}}@enderror</span><br>
                <br>
                <label for="pass">Password : </label>
                <input type="password" name="pass" placeholder="Enter Password"><br>
                <span style="color:red">@error('pass'){{$message}}@enderror</span><br><br>
                <button type="submit">submit</button>
            </form>
        </div>
        <div style="text-align:center">
        <a href="/welcome" class="btn btn-info" role="button">Back to welcome page</a>
    </div>
        </div>
    </body>

@stop