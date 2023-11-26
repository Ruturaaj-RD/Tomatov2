@extends('CommonViews\commonlayout')

@section('content')

<head>
    <style> 
 body {
                background-image: url(tomato.jpg);
            }</style>

</head>
<div class="unsuccesslogin">
    <h1 style="text-align:center"><b>Incorrect Email or Password!!</b></h1>

    <div style="text-align:center">
        <a href="/welcome" class="btn btn-info" role="button">Back to welcome page</a>
    </div>
</div> 

@stop