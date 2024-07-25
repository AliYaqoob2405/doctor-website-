
@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Panel</div>
                    <div class="card-body">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="query" placeholder="Search...">
                            <button type="submit">Search</button>
                        </form>
                        <a href="{{ url('#') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table" style="width: 1900px">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                        <th>Subject</th>
                                        <th>gender</th>
                                        <th>image</th>
                                        <th>disease_type</th>
                                        <th>city</th>
                                        <th>message</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($users as $user)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{$user->subject}}</td>
                                        <td>{{ $user->gender}}</td>
                                        <td>{{ $user->image }}</td>
                                        <td>{{ $user->disease_type }}</td>
                                        <td>{{$user->city}}</td>
                                        <td>{{ $user->message }}</td>
                                        <td>{{$user->status}}</td>
                                            <td>
                                            <a href="{{ route('show',$user->id)}}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('edit', $user->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/delete' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchForm').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('search') }}",
                type: "GET",
                data: { query: query },
                success: function(data) {
                    // Handle the response data
                    console.log(data);
                }
            });
        });
    });
</script>
<div id="searchResults"></div>

