


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<Title>Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
</head>
<body>

@include ('layouts.partials.nav')
<div class="container">
@include ('flash::message')	

@yield('content')
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script> $('#flash-overlay-modal').modal();</script>
</body>
</html>
