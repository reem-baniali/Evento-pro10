@extends('publicSite.layout.master')

@section('title','Edit')
@section('content')


<section class="ftco-section ">
    <div class="container mt-5 border">
        <div class="row mb-5 pb-2 ">
            <div class="container ">
                <div class="row align-items-center flex-row-reverse ">
                    <div class="col-lg-10 p-5">
                        <div class="about-text go-to">
                            <h3 class="dark-color mb-3">Edit Profile</h3>
                            <form action="{{route('users.update',Auth::user()->id)}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row about-list" style="justify-content:center">

                                    <div class="col-md-12 mb-3"><label class="labels">My Name</label><input type="text"
                                            class="form-control" placeholder="Name" value="{{ Auth::user()->name }}"
                                            name="name">
                                    </div>
                                    <div class="col-md-12 mb-3"><label class="labels">My Email</label><input type="email"
                                            class="form-control" value="{{ Auth::user()->email }}" placeholder="Email"
                                            name="email"></div>
                                  <input type="hidden" value="1" name="user_type">

                                    <div class="col-md-12 mb-3"><label class="labels">My Password</label><input
                                        type="password" class="form-control" placeholder="Password"
                                        value="{{ Auth::user()->password }}" name="password">
                                </div>

                                    
                                </div>
                                <div class="mt-5 text-center float-right"><button class="btn btn-primary profile-button"
                                        type="submit">Save Changes</button></div>
                        </div>
                    </div>
                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection