<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">        
    <title>Личный кабинет</title>
    <link rel="icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/owner/images/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/owner/css/bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.2/jquery-ui.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/owner/js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/ui-lightness/jquery-ui.css">
    
</head>
<body>



<div class="wrapper view-port">
    <header>
		<!-- START MAIN NAVIGATION -->
					@yield('navigation')
		<!-- END MAIN NAVIGATION -->
	</header>	
	
    <section>
       <!-- START CONTENT1 -->	
       				@yield('content')       
       <!-- Конец CONTENT -->
    </section>
    <footer>
    	<!-- START CONTENT1 -->	
       				@yield('footer')       
       <!-- Конец CONTENT -->
    </footer>
</div>
</body>
</html>
