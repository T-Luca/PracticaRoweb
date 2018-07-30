<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel CRUD Operations - Basic</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body style="background-color:#39cccc">
<div class="container">
    <h1 align="center">Task Manager</h1>
    @yield('content')
</div>
<!-- Status bar -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.progress .progress-bar').progressbar({display_text: 'fill', use_percentage: false});
    });
</script>
</body>
</html>