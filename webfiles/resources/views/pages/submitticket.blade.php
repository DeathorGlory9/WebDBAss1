@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../public/css/submitticket.css">
<div class="content-container-small submit-ticket-container">
	<form type="frmSubmit">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col col-md-12">
						<h3 class="page-header">Submit Ticket</h3>
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
			<div class="col-md-6">
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
			<div class="col-last col-md-12">
				<input type="submit" id="btnSubmit" name="btnSubmit" value="Submit Ticket">
			</div>
		</div>
	</form>
</div>
@stop
