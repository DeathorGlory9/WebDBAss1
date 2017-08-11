@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../public/css/viewticket.css">
<div class="content-container-small view-ticket-container">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col col-md-12">
					<h3 class="page-header">Ticket View</h3>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikStatus">Status</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4">
					<p id="tikFName">First Name</p>
				</div>
				<div class="col col-md-6">
					<p id="tikLName">Last Name</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikIssueTitle">Issue Title</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikOS">Operating System</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikDescription">Issue Description</p>
				</div>
			</div>
		</div>
		<div id="comments-container" class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<p>Issue comments</p>
				</div>
			</div>
			<div id="comment-container-row" class="row">
				<div id="comment-section" class="col-md-12">
					<p>No comments<p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form>
						<textarea name="txtaIssueComment" placeholder="Comment"></textarea>
						<input type="submit" id="btnSubmitComment" name="btnSubmitComment" value="Make Comment">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
