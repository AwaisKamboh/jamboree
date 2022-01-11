
 @extends('main.layout')
 @section('title')
     {{"Jamboree | Event-Worker"}}
 @endsection
 @section('content')
   @include('includes.header-worker')
    <!-- Start Home -->
    <section class="bg-home" style="background: url('/assets/images/event-plans.png') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">Find events to work on & Get Paid!.</h6>
                                <h1 class="heading font-weight-bold mb-4">Try the Event Finder!
                                </h1>
                                  <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <h1 class="heading font-weight-bold mb-4">Here Are Some Event Feeds Down Below!
                                </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
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
                        <h4 class="title title-line pb-5">Events Feed</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Latest feed of posted events from event plan seekers.</p>
                    </div>
                </div>
            </div>
        
            @foreach ($events as $event)
                
            
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
                                                        <img src="/assets/images/eventpostlogo.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                       <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">{{$event->title}}</a></h5>
                                                                                      
                                                        <p class="text-muted mb-0">Posted by: {{$event->user->name}}</p>
                                                        
                                                 </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>{{$event->location}}, {{$event->city}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2">Budget <span class="text-primary">Rs</span>{{$event->budget_min}}-{{$event->budget_max}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0">Event to be done on{{$event->event_date}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Requirements :</span> Will be told separately.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">posted on:</span>{{$event->created_at}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div> 
                                                 @if(Auth::user()->id == $event->user->id)                 
                                                <a href='#' class='btn btn-primary disabled'>Apply Now <i class='mdi mdi-chevron-double-right'></i></a>       
                                                 @else                    
                                                 <a href='/event-worker/apply/{{$event->id}}' class='btn btn-primary '>Apply Now <i class='mdi mdi-chevron-double-right'></i></a> 
                                                 @endauth
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>           
                           @endforeach <!-- end row -->
                     </div>
          
        <!-- end containar -->
    </section>
    <!-- all jobs end -->

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