@extends('backend.layouts.master')

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Events Info</h5>
            <div class="card-body">
                <form action="{{route('event.update',['id'=>$event->id])}}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group">
                       <strong> <label for="inputUserName">Event Title</label></strong>
                        <input id="inputUserName" type="text" name="name" value="{{$event->name}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="inputUserName">Event Category</label>
                    <select id="inputPassword" name="category"    class="form-control">
                        @foreach ($categories as $category)
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">Description</label></strong>
                        <input id="inputUserName" type="text" name="description" value="{{$event->description}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputSpeaker">Speaker</label></strong>
                        <input id="inputSpeaker" type="text" name="speaker" value="{{$event->speaker}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">city</label></strong>
                        <input id="inputUserName" type="text" name="city" value="{{$event->city}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">location</label></strong>
                        <input id="inputUserName" type="text" name="location" value="{{$event->location}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">date</label></strong>
                        <input id="inputUserName" type="text" name="date" value="{{$event->date}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">start_time</label></strong>
                        <input id="inputUserName" type="text" name="start_time" value="{{$event->start_time}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">end_time</label></strong>
                        <input id="inputUserName" type="text" name="end_time" value="{{$event->end_time}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">seats</label></strong>
                        <input id="inputUserName" type="text" name="seats" value="{{$event->seats}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                       <strong> <label for="inputUserName">price</label></strong>
                        <input id="inputUserName" type="text" name="price" value="{{$event->price}}" data-parsley-trigger="change" required="" placeholder="Admin Name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Contact Email </label>
                        <input id="inputEmail" type="email" name="contact_email" value="{{$event->contact_email}}" data-parsley-trigger="change" required="" placeholder="Admin Email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Contact phone </label>
                        <input id="inputphone" type="number" name="contact_phone" value="{{$event->contact_phone}}" data-parsley-trigger="change" required="" placeholder="Admin Email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">image 1 </label>
                        <input id="inputphone" type="file" name="image1" value="{{$event->image1}}" data-parsley-trigger="change" required="" placeholder="Admin Email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">image 2 </label>
                        <input id="inputphone" type="file" name="image2" value="{{$event->image2}}" data-parsley-trigger="change" required="" placeholder="Admin Email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">image 3 </label>
                        <input id="inputphone" type="file" name="image3" value="{{$event->image3}}" data-parsley-trigger="change" required="" placeholder="Admin Email" autocomplete="off" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary w-25">Update</button>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form -->
@endsection