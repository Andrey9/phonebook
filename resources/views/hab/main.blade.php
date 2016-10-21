
<!DOCTYPE html "-//w3c//dtd XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1-transitional.dtd">
<html>
<head>


    <link rel="stylesheet" href="{{URL::asset ('css/bootstrap.min.css')}}" rel="stylesheet">

</head>


<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <span class="glyphicon glyphicon-phone-alt"></span>
            </a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/record/create')}}">Додати новий запис</a></li>
                </ul>
        </div>
    </div>

</nav>


@yield('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jq.."></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>


