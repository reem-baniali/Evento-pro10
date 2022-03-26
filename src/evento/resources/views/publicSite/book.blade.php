

@extends('publicSite.layout.master')

@section('title','Event Details')
@section('content')

{{-- internal css style part --}}
<style>
  .page_link>a:hover {
    font-weight: 900;
  }

  body {
    overflow-x: hidden
  }

  .container-fluid {
    background-image: linear-gradient(to right, #7B1FA2, #E91E63)
  }

  .sm-text {
    font-size: 10px;
    letter-spacing: 1px
  }

  .sm-text-1 {
    font-size: 14px
  }

  .green-tab {
    background-color: #00C853;
    color: #fff;
    border-radius: 5px;
    padding: 5px 3px 5px 3px
  }

  .btn-red {
    background-color: #E64A19;
    color: #fff;
    border-radius: 20px;
    border: none;
    outline: none
  }

  .btn-red:hover {
    background-color: #BF360C
  }

  .btn-red:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
  }

  .round-icon {
    font-size: 40px;
    padding-bottom: 10px
  }

  .fa-circle {
    font-size: 10px;
    color: #EEEEEF
  }

  .green-dot {
    color: #4CAF50
  }

  .red-dot {
    color: #E64A19
  }

  .yellow-dot {
    color: #FFD54F
  }

  .grey-text {
    color: #BDBDBD
  }

  .green-text {
    color: #4CAF50
  }

  .block {
    border-right: 1px solid #F5EEEE;
    border-top: 1px solid #F5EEEE;
    border-bottom: 1px solid #F5EEEE
  }

  .profile-pic img {
    border-radius: 50%
  }

  .rating-dot {
    letter-spacing: 5px
  }

  .via {
    border-radius: 20px;
    height: 28px
  }

  

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");



.card {
    background-color: #fff;
    padding: 14px;
    border: none
}

.demo {
    width: 100%
}

ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom: 0
}
/* 
li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor: pointer
} */

img {
    display: block;
    height: auto;
    width: 100%
}

.stars i {
    color: #f6d151
}

.stars span {
    font-size: 13px
}

hr {
    color: #d4d4d4
}

.badge {
    padding: 5px !important;
    padding-bottom: 6px !important
}

.badge i {
    font-size: 10px
}

.profile-image {
    width: 35px
}

.comment-ratings i {
    font-size: 13px
}

.username {
    font-size: 12px
}

.comment-profile {
    line-height: 17px
}

.date span {
    font-size: 12px
}

.p-ratings i {
    color: #f6d151;
    font-size: 12px
}

.btn-long {
    padding-left: 35px;
    padding-right: 35px
}

.buttons {
    margin-top: 15px
}

.buttons .btn {
    height: 46px
}

.buttons .cart {
    border-color: #ff7676;
    color: #ff7676
}

.buttons .cart:hover {
    background-color: #e86464 !important;
    color: #fff
}

.buttons .buy {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676
}

.buttons .buy:focus,
.buy:active {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676;
    box-shadow: none
}

.buttons .buy:hover {
    color: #fff;
    background-color: #e86464;
    border-color: #e86464
}

.buttons .wishlist {
    background-color: #fff;
    border-color: #ff7676
}

.buttons .wishlist:hover {
    background-color: #e86464;
    border-color: #e86464;
    color: #fff
}

.buttons .wishlist:hover i {
    color: #fff
}

.buttons .wishlist i {
    color: #ff7676
}

.comment-ratings i {
    color: #f6d151
}

.followers {
    font-size: 9px;
    color: #d6d4d4
}

.store-image {
    width: 42px
}

.dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px
}

.bullet-text {
    font-size: 12px
}

.my-color {
    margin-top: 10px;
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-transform: uppercase;
    transition: 0.5s all
}

label.radio .red {
    background-color: red;
    border-color: red
}

label.radio .blue {
    background-color: blue;
    border-color: blue
}

label.radio .green {
    background-color: green;
    border-color: green
}

label.radio .orange {
    background-color: orange;
    border-color: orange
}

label.radio input:checked+span {
    color: #fff;
    position: relative
}

label.radio input:checked+span::before {
    opacity: 1;
    content: '\2713';
    position: absolute;
    font-size: 13px;
    font-weight: bold;
    left: 4px
}

.card-body {
    padding: 0.3rem 0.3rem 0.2rem
}
body {
    background: #eee
}
/* .main-single-page{
background-color: red
} */


 
</style>

{{-- Company name and desc + breedcrumbs section --}}
<section class="ftco-section bg-light">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="page_link mb-sm-5 mb-md-5">
        <a href="/">Home</a>
        <a href="{{ route('allEvents') }}">/ events</a>
        <a href={{ route('event',$booked_event->id) }}>
          / {{ $booked_event->name }}</a>
      </div>


      <div class="container rounded ">
    </div>
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
        <h2>{{$booked_event->name}}</h2>
        <div class="row mb-1" >
            <div class="col-md-7 ">
                <div class="card">
                    <h5 class="card-header">Event Info</h5>
                    <div class="card-body">
                        <table class="table ">
                        
                              <tr>
                                <th scope="col"> Price</th>
                                <td scope="col"> {{$booked_event->price}} JD</td>
                              </tr>
                              <tr>
                                <th scope="col"> Speaker</th>
                                <td scope="col">  {{$booked_event->speaker}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> City & Location</th>
                                <td scope="col">  {{$booked_event->city}} - {{$booked_event->location}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> Date</th>
                                <td scope="col">  {{$booked_event->date}}</td>
                            </tr>
                         
                            <tr>
                                <th scope="col"> Time</th>
                                <td scope="col">  {{$booked_event->start_time}} to {{ $booked_event->end_time }}</td>
                            </tr>
                       
                           
                          
                            </tbody>
                          </table>
                    </div>
                </div>

  
                </div>
            <div class="col-md-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <a href="{{ route('event', $booked_event->id ) }}" class="pull-right">Back to Events</a>
                        </div>
    
                    </div>
                    <form action="{{ route('booking.store',$booked_event->id ) }} " method="post">
                        @csrf
                 <div class="row mt-5">
                     
                        <div class="col-md-6"> <span> How many Seats :  </span> </div>
                        <div class="col-md-6"> <input class="rounded" type="integer" name="number_of_seats"/>  </div>
                    </div> 
                    <hr>
                    <div class="row mt-5">
                        <div class="col-md-6"><span>  Price for each Seat :  </span></div>
                        <div class="col-md-6" ><strong> {{$booked_event->price}} JD</strong></div>
                    </div>
                    <hr>
           <input type="hidden" value="{{ Auth::user()->id }} " name="user_id"> 
                     <input type="hidden" value="{{$booked_event->id }} " name="event_id"> 
                     <input type="hidden" value="{{$booked_event->price }} " name="price"> 

                    <p class="mb-0 "><button   class="btn btn-primary mt-5">Confirm Booking <span
                      class="ion-ios-arrow-round-forward"></span></button></p>
                    </form>
                </div>
            </div>
        </div>

    

    
</section>

@endsection

