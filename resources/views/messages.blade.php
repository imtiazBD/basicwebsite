@extends('layouts.app')

		@section('content')
		  <h4><i>Messages</i></h4>

		  @if(count($messages)>0)
               @foreach($messages as $message)
                  
                  <ul class="list-group">
                      <li class="list-inline-item">Name :{{ $message->name }}</li>
                      <li class="list-inline-item">Email :{{ $message->email }}</li>
                      <li class="list-inline-item">Message :{{ $message->message }}</li>
                  </ul>
                  <hr>

               @endforeach

		  @endif

		@endsection

		@section('sidebar')
		  @parent
		  <marquee><p style="color:red;">This is appended sidebar from Homepage</p></marquee>
		@endsection 