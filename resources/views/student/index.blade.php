@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Profile</th>
                            @if (Auth::user()->role == 2)
                            <th scope="col" class="d-none">Action</th>
                            @else
                            <th scope="col">Action</th>
                            @endif
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($students as $student)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->address }}</td>
                            <td><img src="{{ asset('storage/student/'.$student->profile) }}" width="50px" height="50px"></td>
                            @if (Auth::user()->role == 2)
                            <td class="d-none">
                              <a href="{{ route('student.edit',$student->id) }}" class="btn btn-warning">E</a>
                              <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">D</button>
                              </form>
                            </td>
                            @else
                            <td>
                              <a href="{{ route('student.edit',$student->id) }}" class="btn btn-warning">E</a>
                              <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">D</button>
                              </form>
                            </td>
                            @endif 
                          </tr>
                          @endforeach 
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection