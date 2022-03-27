@extends('backend.layouts.master')
@section('title','Manage Admin')
    

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Events Info</h5>
            <div class="card-body">
                <form action="{{route('event.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                       <strong> <label for="inputUserName">Event Name</label></strong>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Category</label>
                        <select id="inputPassword" name="category"class="form-control">
                            @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">User </label>
                        <select id="inputPassword" name="user"class="form-control">
                            @foreach ($users as $user)
                            <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription"> Description </label>
                        <input id="inputDescription" type="text" name="description"  data-parsley-trigger="change"   autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSpeaker"> Speaker</label>
                        <input id="inputSpeaker" name="speaker" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">City</label>
                        <input id="inputCity" name="city" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Location</label>
                        <input id="inputLocation" name="location" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Date</label>
                        <input id="inputLocation" name="date" type="date"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Start Time</label>
                        <input id="inputLocation" name="start_time" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">End Time</label>
                        <input id="inputLocation" name="end_time" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Seats</label>
                        <input id="inputLocation" name="seats" type="number"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Price</label>
                        <input id="inputLocation" name="price" type="text"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">contact_email</label>
                        <input id="inputLocation" name="contact_email" type="email"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">contact_phone</label>
                        <input id="inputLocation" name="contact_phone" type="number"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Image 1</label>
                        <input id="inputLocation" name="image1" type="file"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">image 2</label>
                        <input id="inputLocation" name="image2" type="file"   class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">image 3</label>
                        <input id="inputLocation" name="image3" type="file"   class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary w-25">Add</button>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form -->

    <!-- striped table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Events Table</h5>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Event Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col ">Speaker</th>
                                                <th scope="col ">City</th>
                                                <th scope="col ">Location</th>
                                                <th scope="col ">Date</th>
                                                <th scope="col ">Start Time</th>
                                                <th scope="col ">End Time</th>
                                                <th scope="col">Seats</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Contact Email</th>
                                                <th scope="col">Contact Password</th>
                                                <th scope="col">image1</th>
                                                <th scope="col">image2</th>
                                                <th scope="col">image3</th>
                                                <th>Edit</th>
                                                <th> Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach ($events as $event)
                                            <tr>
                                                <th scope="row">{{$event->id}}</th>
                                                <td>{{$event->name}}</td>
                                                <td>{{$event->category->name}}</td>
                                                <td>{{$event->speaker}}</td>
                                                <td>{{$event->city}}</td>
                                                <td>{{$event->location}}</td>
                                                <td>{{$event->date}}</td>
                                                <td>{{$event->start_time}}</td>
                                                <td>{{$event->end_time}}</td>
                                                <td>{{$event->seats}}</td>
                                                <td>{{$event->price}}</td>
                                                <td>{{$event->contact_email}}</td>
                                                <td>{{$event->contact_phone}}</td>
                                                <td><img width='80' height='80' src="{{$event->image1}}" alt="image1"></td>
                                                <td><img width='80' height='80' src="{{$event->image2}}" alt="image2"></td>
                                                <td><img  width='80' height='80' src="{{$event->image3}}" alt="image3"></td>
                                                <td><a href="{{route('event.edit',['id'=>$event->id])}}"><i class="far fa-edit"></i></a></td>
                                                <td><a href="{{route('event.destroy',['id'=>$event->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                               
                                               
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->
                    </div>
@endsection