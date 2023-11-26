@extends('FarmerViews\farmerlayout')

@section('content')


<div>

    <head>
        <style>
           

            .Regisclass {

                background-color:salmon;
                width: 600px;
                margin: 60px auto;
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

            <h1 style="color:white"><b>Tomato Trade Form</b></h1><br>
            <form action='farmerraisetrade' method='post' id='106'>

                {{csrf_field()}}
                <label for="dname">Display Name: </label>
                <input type="text" name="dname" placeholder="Enter Name"><br>
                <span style="color:red">@error('dname'){{$message}}@enderror</span>
                <br>

                <label for="dcontact">Display Contact : </label>
                <input type="number" name="dcontact" placeholder="Enter Number"><br>
                <span style="color:red">@error('dcontact'){{$message}}@enderror</span>
                <br>

                <label for="daddress">Display Address : </label>
                <input type="text" name="daddress" placeholder="Enter Address"><br>
                <span style="color:red">@error('daddress'){{$message}}@enderror</span>
                <br>

                <label for="dquantity">Quantity of Tomatoes (in kg) : </label>
                <input type="number" name="dquantity" placeholder="Enter Weight of Tomatoes to sell"><br>
                <span style="color:red">@error('dquantity'){{$message}}@enderror</span>
                <br>

                <label for="tsize">Tomatoes Size : </label>
                <input type="text" name="tsize" placeholder="Enter tomtoes size"><br>
                <h6 style="color:blue">*Tomato Sizes can be 1) Small 2) Medium 3) Large </h6>
                <span style="color:red">@error('tsize'){{$message}}@enderror</span>
                <br>

                <label for="expprice">Expected Price per Kg : </label>
                <input type="number" name="expprice" placeholder="Enter Expected Price"><br>
                <span style="color:red">@error('expprice'){{$message}}@enderror</span>
                <br>

                <label for="vehicle">Has a Delivery Vehicle ? : </label>
                <input type="text" name="vehicle" placeholder="yes or no"><br>
                <span style="color:red">@error('vehicle'){{$message}}@enderror</span>
                <br>

                <button type="submit">submit</button>
            </form>
        </div>
    </body>
</div>
@stop