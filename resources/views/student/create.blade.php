@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control"  name="phone" id="exampleFormControlInput1" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                        <input type="date" class="form-control"  name="date_of_birth" id="exampleFormControlInput1" placeholder="Date of birth">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                            <label class="form-check-label" for="male">
                              Male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="0">
                            <label class="form-check-label" for="female">
                              Female
                            </label>
                          </div>
                    </div>
                    <div class="mb-3">
                        <h5>Skills</h5>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="Java" id="flexCheckDefault1">
                            <label class="form-check-label" for="flexCheckDefault1">
                              Java
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="Angular" id="flexCheckChecked2" >
                            <label class="form-check-label" for="flexCheckChecked2">
                              Angular
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="WebDevelopment" id="flexCheckChecked3" >
                            <label class="form-check-label" for="flexCheckChecked3">
                              WebDevelopment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="Server" id="flexCheckChecked4" >
                            <label class="form-check-label" for="flexCheckChecked4">
                              Server
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="AWS" id="flexCheckChecked5" >
                            <label class="form-check-label" for="flexCheckChecked5">
                              AWS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="skill[]" type="checkbox" value="WebDesign" id="flexCheckChecked6" >
                            <label class="form-check-label" for="flexCheckChecked6">
                              WebDesign
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" name="is_fullstack" type="checkbox" value="1" id="is_fullstack" >
                            <label class="form-check-label" for="is_fullstack">
                              FullStack Developer
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control"  name="address" id="exampleFormControlInput1" placeholder="Address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profile</label>
                        <input type="file" class="form-control"  name="profile" id="exampleFormControlInput1" placeholder="Profile">
                    </div>
                    <div class="mb-3">
                        <a href="{{route('student.index')}}" class="btn btn-outline-dark">Back</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection