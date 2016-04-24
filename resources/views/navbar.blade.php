<!-- Header -->
<header id="header">
    <h1 id="logo"> {!! HTML::link('/', 'BILL GATES SCHOOL')!!}</h1>
    <nav id="nav">
        <ul>
            <li>{!! HTML::link('/', 'Home')!!}</li>
            
			<li>
				<a href="#">Actividades Académicas</a>
		        <ul>
                    <li>{!! HTML::link('/homeworks', 'Tareas')!!}</li>
					<li>{!! HTML::link('https://www.engrade.com/user/login.php', 'Engrade', array('target'=>'_blank'))!!}</li>
					<li><a href="right-sidebar.html">Right Sidebar</a></li>
				    <li><a href="no-sidebar.html">No Sidebar</a></li>
					<li>
						<a href="#">Submenu</a>
							<ul>
								<li><a href="#">Option 1</a></li>
								<li><a href="#">Option 2</a></li>
								<li><a href="#">Option 3</a></li>
								<li><a href="#">Option 4</a></li>
							</ul>
					</li>
				</ul>
			</li>
			<li><a href="elements.html">Elements</a></li>
			<li><a href="#" class="button special">Sign Up</a></li>
		</ul>
	</nav>
</header>