@extends('CommonViews\commonlayout')

@section('content')

<div>

    <head>
        <style>
            body {
                background-image: url(tomato.jpg);
            }

            .Regisclass {

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


        <div class="Regisclass" style="text-align:center" justify-content="center">

            <h1>Farmer Registration Form</h1><br>
            <form action="registerfarmerfun" method="post" id="102">

                {{csrf_field()}}
                <label for="fname">First Name : </label>
                <input type="text" name="fname" placeholder="Enter First name"><br>
                <span style="color:red">@error('fname'){{$message}}@enderror</span>
                <br>

                <label for="lname">Last Name : </label>
                <input type="text" name="lname" placeholder="Enter Last name"><br>
                <span style="color:red">@error('fname'){{$message}}@enderror</span>
                <br>

                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="Enter Email"><br>
                <span style="color:red">@error('email'){{$message}}@enderror</span>
                <br>

                <label for="pass">Create Password : </label>
                <input type="password" name="pass" placeholder="Create Password"><br>
                <span style="color:red">@error('password'){{$message}}@enderror</span>
                <br>

                <label for="city">City/Village: </label>
                <input type="text" name="city" placeholder="Enter City/Village"><br>
                <span style="color:red">@error('city'){{$message}}@enderror</span>
                <br>

                <label for="address">Farm Address : </label>
                <input type="text" name="address" placeholder="Enter Farm Address"><br>
                <span style="color:red">@error('address'){{$message}}@enderror</span>
                <br>

                <label for="size">Farm Size : </label>
                <input type="number" name="size" placeholder="Enter Farm Size"><br>
                <span style="color:red">@error('size'){{$message}}@enderror</span>
                <br>

                <label for="contact">Contact : </label>
                <input type="number" name="contact" placeholder="Enter Phone"><br>
                <span style="color:red">@error('contact'){{$message}}@enderror</span>
                <br>

                <button type="submit">submit</button>


            </form>
        </div>
        <div style="text-align:center">
            <a href="/welcome" class="btn btn-info" role="button">Back to welcome page</a>
        </div>
    </body>
</div>
@stop