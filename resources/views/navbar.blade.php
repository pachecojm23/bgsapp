<!-- Header -->
<header id="header">
    <h1 id="logo"> {!! HTML::link('/', 'BILL GATES SCHOOL')!!}</h1>
    <nav id="nav">
        <ul>
            <li>{!! HTML::link('/', 'Home')!!}</li>
 			<li>
				<a href="#">Staff</a>
		        <ul>
                    <li>{!! HTML::link('#', 'Pre-School')!!}</li>
					<li>{!! HTML::link('#', 'Elementary School')!!}</li>
					<li>{!! HTML::link('#', 'Junior High School')!!}</li>
					<li>{!! HTML::link('#', 'Personal Administrative')!!}</li>
				</ul>
			</li>
			
			<li>
				<a href="#">Quienes Somos</a>
		        <ul>
                    <li>{!! HTML::link('#', 'Misión')!!}</li>
					<li>{!! HTML::link('#', 'Visión')!!}</li>
					<li>{!! HTML::link('#', 'Nuestros Símbolos')!!}</li>
					<li>{!! HTML::link('#', 'Principios y Valores')!!}</li>
					<li>{!! HTML::link('#', 'Nuestros Alumnos')!!}</li>
				</ul>
			</li>
			           
			<li>
				<a href="#">Gestión Aula</a>
		        <ul>
                    <li>{!! HTML::link('/homeworks', 'Tareas')!!}</li>
					<li>{!! HTML::link('https://www.engrade.com/user/login.php', 'Engrade', array('target'=>'_blank'))!!}</li>
					<!--li><a href="right-sidebar.html">Right Sidebar</a></li>
				    <li><a href="no-sidebar.html">No Sidebar</a></li>
					<li>
						<a href="#">Submenu</a>
							<ul>
								<li><a href="#">Option 1</a></li>
								<li><a href="#">Option 2</a></li>
								<li><a href="#">Option 3</a></li>
								<li><a href="#">Option 4</a></li>
							</ul>
					</li-->
				</ul>
			</li>
			<li>
                <a href="#">Institucional</a>
                <ul>
                    <li>{!! HTML::link('/schedules', 'Horarios 2016')!!}</li>
					<li>{!! HTML::link('#', 'Manual de Padres')!!}</li>
					<li>{!! HTML::link('#', 'Prospecto Escolar')!!}</li>
					<li>{!! HTML::link('#', 'Madres Enlace')!!}</li>
					<li>{!! HTML::link('#', 'Comité de Apoyo')!!}</li>
					<li>{!! HTML::link('#', 'Gobierno Estudiantil')!!}</li>
					<li>{!! HTML::link('#', 'Calendario Escolar')!!}</li>
					<li>{!! HTML::link('#', 'Pénsum Complementario')!!}</li>
                </ul>
            </li>
			<!--li><a href="#" class="button special">Sign Up</a></li-->
		</ul>
	</nav>
</header>