<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('/css/style.css') }}" type="text/css">
 </head>
<body>
<div id="user">
    <ul>
    <li><a href="welcome">Home</a></li>
    <li>Neem <a href="/contact">contact</a> met ons voor meer informatie.</li>
    <li>Over <a href="/about">mij?</a></li>
    <input type="button" value="Home" onclick="location.href='/welcome';">
    <input type="button" value="Contact" onclick="location.href='/contact';">
    <input type="button" value="Over ons" onclick="location.href='/about';">
</div>

    @yield('content')




</body>
</html>