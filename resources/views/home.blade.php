@extends('layouts.app')

		@section('content')
		  <h4><i>Home</i></h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ad ullam reiciendis vitae. Consequuntur odit neque quam, officia accusantium rerum et ut, nihil, optio reiciendis voluptatibus amet rem expedita excepturi.</p>
		@endsection

		@section('sidebar')
		  @parent
		  <marquee><p style="color:red;">This is appended sidebar from Homepage</p></marquee>
		@endsection 