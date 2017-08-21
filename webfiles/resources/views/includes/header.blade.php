<link rel="stylesheet" href="../public/css/header.css">

<div class="navbar content-container">
	<a id="logo" href="/">
		<img src="{{asset('images/logo.jpg')}}" width="200">
	</a>
	@if(Session::get('Login') == 'Yes')
		<h3>{{Html::link('/logout', 'Logout', array('id'=>'login'))}}</h3>
	@else
		<h3>{{Html::link('/login', 'Login', array('id'=>'login'))}}</h3>
	@endif
</div>
<div class="nav-container">
	<div class="content-container">
		<nav>
		    <ul class="nav nav-justified">
		        <li>{{Html::link('/index', 'Home' )}}</li>
		        <li>{{Html::link('/faq', 'FAQ')}}</li>
		        <li>{{Html::link('/submitticket', 'Submit Ticket')}}</li>
		        <li>{{Html::link('/viewticket', 'View Tickets')}}</li>
				@if(Session::get('Login') == 'Yes')
					<li>{{Html::link('/its', 'ITS View')}}</li>
				@endif
		    </ul>
		</nav>
	</div>
</div>
