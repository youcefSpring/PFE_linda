<!DOCTYPE html>
<html>
<head>
 <title>{{ $title }}</title>
</head>
<body>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <img src="{{ asset('front/image/said.png')}}" alt="LOGO" class="responsive" style="max-width: 180px; bgcolor:grey;"/>

        </div>
        <div class="col-md-4"></div>
    </div>
 <h1>{{ $title }}</h1>


<p>{!! $body !!}</p>
<p>Thank you</p>

</body>
</html>
