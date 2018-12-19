<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{URL::asset('/scss/app.scss') }}" > -->
    <link rel="stylesheet" href="{{URL::asset('/css/style.css') }}" >
 </head>

<body>

<div id="user">
    <input type="text" name="zoekbalk" placeholder="zoeken">
    <input name="zoek" type="submit" value="zoeken">  
    <input type="button" value="Home" onclick="location.href='/welcome';">
    <input type="button" value="Contact" onclick="location.href='/contact';">
    <input type="button" value="Over ons" onclick="location.href='/about';">
    <input type="button" value="Ik" onclick="location.href='/personal';">
</div>

    


    @yield('content')




</body>
</html>