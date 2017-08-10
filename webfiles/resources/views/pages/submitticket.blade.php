@extends('layouts.default')
@section('content')
<div class="content-container">
	<form type="submit">
		<div class="row">
			<div class="col col-md-6">
				<div class="row">
					<div class="col col-md-12">
						<h3>Submit Ticket</h3>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<input type="text" placeholder="First Name" name="txtFirstName">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<input type="text" placeholder="Last Name" name="txtLastName">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<input type="text" placeholder="Email" name="txtEmail">
					</div>
				</div>
			</div>
			<div class="col col-md-6">
				<div class="row">
					<div class="col col-md-12">
						<input type="text" placeholder="Issue Title" name="txtIssueTitle">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<input type="text" placeholder="Your Operating system" name="txtOS">
					</div>
				</div>
				<div class="row">
					<div class="col col-md-12">
						<textarea name="txtaIssue" placeholder="Issue Description"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-12">
				<input type="submit" name="btnSubmit" value="Submit Ticket">
			</div>
		</div>
	</form>
</div>
@stop
