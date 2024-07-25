@extends('admin.layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ route('update', $user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("Post")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />

        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
        <br><span style="color:red"> @error('name'){{$message}}@enderror</span></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
        <span style="color:red"> @error('email'){{$message}}@enderror</span></br>

        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$user->phone}}" class="form-control"></br>
        <span style="color:red"> @error('phone'){{$message}}@enderror</span></br>

        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$user->subject}}" class="form-control"></br>
        <span style="color:red"> @error('subject'){{$message}}@enderror</span></br>

        <label>Disease_Type</label></br>
        <input type="text" name="disease_type" id="disease_type" value="{{$user->disease_type}}" class="form-control"></br>
        <span style="color:red"> @error('disease_type'){{$message}}@enderror</span></br>

        <label>Image</label></br>
        <input type="text" name="image" id="image" value="{{$user->image}}" class="form-control"></br>
        <span style="color:red"> @error('image'){{$message}}@enderror</span></br>

        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$user->gender}}" class="form-control"></br>
        <span style="color:red"> @error('gender'){{$message}}@enderror</span></br>

        <label>City</label></br>
        <input type="text" name="city" id="city" value="{{$user->city}}" class="form-control"></br>
        <span style="color:red"> @error('city'){{$message}}@enderror</span></br>

        <label>Message</label></br>
        <input type="text" name="message" id="message" value="{{$user->message}}" class="form-control"></br>
        <span style="color:red"> @error('message'){{$message}}@enderror</span></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
