@extends('CommonViews\commonlayout')

@section('content')
<head>
    <style> body {
                background-image: url(tomato.jpg);
            }</style>
</head>
<div style="text-align:center">
<h3>Registration Successful</h3>

</div>

<div style="text-align:center">
        <a href="/welcome" class="btn btn-info" role="button">Back to welcome page</a>
    </div>
@stop