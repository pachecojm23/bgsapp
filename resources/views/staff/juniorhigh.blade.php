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

        <!-- Main -->
<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>STAFF ELEMENTARY</h2>
		</header>

		<!-- Content -->
		<section id="content">
            <div class="table-wrapper">
			    
                <table>
					<thead>
						<tr>
							<CENTER><th align="center">Grade</th>
							<th align="center">Teacher Staff</th></center>
						</tr>
					</thead>
					<tbody>
                        <tr>
							<td align="center">6th Grade</td>
							<td align="center">{!!HTML::link('/docs/Staff/9. Sexto Grado.pdf','View Teachers',array('target' =>'_blank'))!!}.</td>
						</tr>
                        <tr>
							<td align="center">7th Grade</td>
							<td align="center">{!!HTML::link('/docs/Staff/10. Septimo Grado.pdf','View Teachers',array('target' =>'_blank'))!!}</td>
						</tr>
                        <tr>
							<td align="center">8th Grade</td>
							<td align="center">{!!HTML::link('/docs/Staff/11. Octavo Grado.pdf','View Teachers',array('target' =>'_blank'))!!}</td>
						</tr>		
					</tbody>
				</table>
			</div>
	    </section>
	</div>
</div>

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