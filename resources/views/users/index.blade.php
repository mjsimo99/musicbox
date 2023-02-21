@extends('bands.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add bands </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm mb-3" title="Add new Bands">
                            Add new
                        </a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Actions</th>        
                                </tr>
                            </thead>


                            {{-- <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>satoru</td>
                                        <td>home</td>
                                        <td>
                                            <a href="" title="view bands"><button class="btn btn-info btn-sm"><i class="fa fa-eye mx-1"></i>View</button></a>
                                            <a href="" title="edit bands"><button class="btn btn-primary btn-sm"><i class="fa fa-edit mx-1"></i>Edit</button></a>
                                            <a href="" title="delete bands"><button class="btn btn-danger btn-sm"><i class="fa fa-trash mx-1"></i>Delete</button></a>

                                    </tr>
                            </tbody> --}}
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>
                                            <a href="{{ url('/users/' . $user->id) }}" title="View Users"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/users/' . $user->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/users' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{-- <tbody>
                                @foreach($bands as $band)
                                    <tr>
                                        <td>{{ $band->id }}</td>
                                        <td>{{ $band->name }}</td>
                                        <td>{{ $band->genre }}</td>
                                    </tr>
                                @endforeach
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection