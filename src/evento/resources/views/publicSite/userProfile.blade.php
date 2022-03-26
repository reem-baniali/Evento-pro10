@extends('publicSite.layout.master')

@section('title','User-Profile')
@section('content')


<section class="ftco-section  ">

  <div class="container  mt-5 border" style="text-align: center;">
        <div class="row pb-2 ">
            <div class="container ">
                <div class="row align-items-center flex-row-reverse ">
                    <div class="col-lg-10"> 
                        <div class="about-text go-to">
                            <h3 class="dark-color pt-4 mb-4" style="text-align:start">Hello  <strong>{{ Auth::user()->name }}</strong></h3>
                            <h6 class="theme-color lead" style="text-align:start ; font-weight: 400">Enjoy your
                                experience at Evento</h6>
                            <p style="text-align:start ; font-weight: 400">The website is the portal to what ever you
                                would like to browse from any Event and you can create yours</p>
                            <div class="row about-list">
                                <div class="col-md-2">
                                    <div class="media">
                                        <label
                                            style="text-align:start; color:#233e62; font-weight: 600 ">E-mail:</label>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="media">

                                        <label style="text-align:end">{{ Auth::user()->email }}</label>
                                    </div>

                                  

                                </div>
                            </div>
                          
                        </div>


                 <div class="d-block mt-5 ">
                            <a href="{{ route("users.edit",Auth::user()->id) }}" ><button type="button"
                                    class="btn btn-primary w-25">Edit your Profile</button></a>
              
                            <a href="{{ route("create2") }}"  ><button type="button"
                                    class="btn btn-primary ml-3 w-25">Create Event</button></a>

                            {{-- <a href="{{ route("booking.show") }}" ><button type="button"
                                    class="btn btn-primary ml-3 w-25">My Events</button></a>  --}}
                        </div>
                    </div>
                    
                </div>

            </div>
            
    </div> 

 
</section>
@endsection