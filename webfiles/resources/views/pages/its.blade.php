@extends('layouts.default')
@section('content')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <div class="content-container home-content-container">
        <div class="home-container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                  <tr>
                      <td>{{ $ticket->issueTitle }}</td>
                      <td>{{ $ticket->status }}</td>
                      <td>{{ $ticket->description }}</td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
