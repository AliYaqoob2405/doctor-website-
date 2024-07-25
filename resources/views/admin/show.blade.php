@extends('admin.layout')
@section('content')


<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">ID : {{ $user->id }}</h5>
        <h5 class="card-title">Name : {{ $user->name }}</h5>
        <h5 class="card-text">Email : {{ $user->email }}</h5>
        <h5 class="card-text">Phone : {{ $user->phone }}</h5>
        <h5 class="card-text">Subject: {{ $user->subject }}</h5>
        <h5 class="card-text">Gender : {{ $user->gender }}</h5>
        <h5 class="card-text">Image : {{ $user->image }}</h5>
        <h5 class="card-text">Disease_tyh5e: {{ $user->disease_tyh5e }}</h5>
        <h5 class="card-text">City : {{ $user->city }}</h5>
        <h5 class="card-text">Message : {{ $user->message }}</h5>

    </div>
    <a href="{{ route('',$user->id)}}"  title="Done"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Done</button></a>

    </hr>

  </div>
</div>
