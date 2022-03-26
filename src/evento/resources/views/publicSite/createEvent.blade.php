@extends('publicSite.layout.master')

@section('title','Create Event')
@section('content')
<div class="row">
<div class="container">

<div class="col-md-10">
    <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                <h6 class="pull-right">Back to my profile</h6>
            </div>

        </div>
        <h4 class="mt-5">  </h4>
      
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
            <div class="card">
                <h5 class="card-header">Events Info</h5>
                <div class="card-body">
                    <form action="{{route('store2')}}" method="post"  enctype="multipart/form-data">
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
                        <input type="hidden" name="user" value="{{ Auth::user()->id }}">
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
                                <button type="submit" class="btn btn-space btn-primary w-50 mt-2">Add Event</button>
                                    
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
   
    </div>
</div>
</div>



@endsection