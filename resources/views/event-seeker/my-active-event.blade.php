
 @extends('main.layout')
 @section('title')
     {{"Jamboree | Active-Events"}}
 @endsection
 @section('content')
    @include('includes.header')
    {{-- {{dd($events_active)}} --}}
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/activeevent.JPG') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">MY Active Events</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Poste An Event</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
  <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">MY Active Events</h4>
                    </div>
                </div>
            </div>
          @foreach ($events_active as $event_active)
              
         
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/icons/bid.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">Bid by: 
                                                             {{ucwords($event_active->proposal->user->name)}}
                                                                                                                       
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-4">
                                                    <div>
                                                        <h6 >Offer <span class="text-primary">Rs</span>{{$event_active->proposal->bid}}</h6>
                                                    </div>
                                                </div>
                                               <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label >Event Title:-</label>
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">{{$event_active->event->title}}</label>
                                        </div>
                                        </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <center>
                                        <div class="col-md-6">
                                                    <div>
                                                    
                                                        <h6>Details </h6>
                                                        <hr>
                                                        <p>{{$event_active->proposal->detail}}</p> 
                                                                            <hr>
                                                    </div>
                                                </div>
                                        </center>
                                        <div class="p-3 bg-light " >
                                            <div class="row justify-content-center ">
                                                <div class="col-md-10">
                                                    <div>
                                                       <p>Bid on Date:{{$event_active->proposal->created_at->format('Y-m-d')}} Time:{{$event_active->proposal->created_at->format('H:i:s')}}
                                                        </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <div>
                                                       <a href='chat.php?user=$pun' class='text-primary'>Message <i class='mdi mdi-chevron-double-right'></i></a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                    

                                </div>
                            </div>
                        </div>
                       
                                           
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                @endforeach
                 {{--";

                                                        
}}//end of if
?> --}}
            </div>
            <!-- end row -->

            <!-- end row -->
          
           
        <!-- end containar -->
    </section>

    <!-- footer start -->
    <footer class="footer">
            <div class="container">
                <div class="row">
        
                <!-- Any content in footer for users -->
                   
                </div>
            </div>
        </footer>
        <!-- footer end -->
        <hr>
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="">
                            <p class="mb-0">© 2021 Jamboree Version 0.1.</p>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
    
        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->
@endsection
    
  