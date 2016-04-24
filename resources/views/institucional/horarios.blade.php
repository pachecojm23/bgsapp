<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bill Gates School and American Eagles Academy</title>
		
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        {!! Html::style('assets/css/main.css') !!}
		<!--link rel="stylesheet" href="assets/css/main.css" /-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        
        <link href="favicon.png" sizes="16x16" type="image/png" rel="icon">
	</head>
    
	<body class="landing">

        <div id="page-wrapper">

        @include('navbar')

        @include('institucional/main')

        @include('footer')
        
        </div>

		<!-- Scripts -->
            {!! Html::script('assets/js/jquery.min.js') !!}
            {!! Html::script('assets/js/jquery.scrolly.min.js') !!}
            {!! Html::script('assets/js/jquery.dropotron.min.js') !!}
            {!! Html::script('assets/js/jquery.scrollex.min.js') !!}
            {!! Html::script('assets/js/skel.min.js') !!}
            {!! Html::script('assets/js/util.js') !!}
            {!! Html::script('assets/js/main.js') !!}           

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            
			<!--script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script-->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<!--script src="assets/js/main.js"--><!--/script-->

	</body>
</html>