@extends('layouts.default')
@section('content')
<link href="{{ asset('/css/viewticket.css') }}" rel="stylesheet">
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
				<div class="col col-md-12">
					<p id="tikFName">Name: {{$ticket->firstName}} {{$ticket->lastName}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikIssueTitle">Issue: {{$ticket->issueTitle}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikOS">OS: {{$ticket->os}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<p id="tikDescription">Description:<br/>{{$ticket->description}}</p>
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
