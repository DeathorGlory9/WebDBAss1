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
                      @foreach($ticket as $value)
                      <td>{{ $value->issueTitle }}</td>
                      @endforeach
                          @foreach($ticket as $value)
                              <td>{{ $value->status }}</td>
                          @endforeach
                          @foreach($ticket as $value)
                              <td>{{ $value->description }}</td>
                          @endforeach
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
