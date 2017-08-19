<link rel="stylesheet" href="../public/css/header.css">

<div class="navbar content-container">
	<a id="logo" href="/">
		<img src="{{asset('images/logo.jpg')}}" width="200">
	</a>
	@if(Session::get('Login') == 'Yes')
		<a id="login" href="/WebDBAss1/webfiles/public/logout">
			<h3>Logout</h3>
		</a>
	@else
		<a id="login" href="/WebDBAss1/webfiles/public/login">
			<h3>Login</h3>
		</a>
	@endif
</div>
<div class="nav-container">
	<div class="content-container">
		<nav>
		    <ul class="nav nav-justified">
		        <li><a href="/WebDBAss1/webfiles/public/index">Home</a></li>
		        <li><a href="/WebDBAss1/webfiles/public/faq">FAQ</a></li>
		        <li><a href="/WebDBAss1/webfiles/public/submitticket">Submit Ticket</a></li>
		        <li><a href="/WebDBAss1/webfiles/public/viewticket">Tickets</a></li>
				@if(Session::get('Login') == 'Yes')
					<li><a href="/WebDBAss1/webfiles/public/its">ITS View</a></li>
				@endif
		    </ul>
		</nav>
	</div>
</div>
