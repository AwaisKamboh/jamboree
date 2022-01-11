@extends('main.layout')
@section('title')
    {{"Jamboree | My-Perposals"}}
@endsection
@section('content')
      @include('includes.header-worker')    
    <!-- Start home -->
   
    <section class="bg-half page-next-level" style="background: url('/assets/images/proposal.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">MY Proposals </h4>
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
                        <h4 class="title title-line pb-5">MY Proposals  </h4>
                    </div>
                </div>
            </div>
           @foreach ($proposals as $proposal)
               
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
                                                        <img src="/assets/images/icons/contract.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">{{$proposal->event->title}}</a></h5>
                                                        <p class="text-muted mb-0">Posted by:{{$proposal->event->user->name}}</p>
                                                        <p class="text-muted mb-0">Bid by:{{$proposal->user->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>{{$proposal->event->location}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2">My Offer <span class="text-primary">Rs</span>{{$proposal->bid}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0">3 days</p>
                                                    </div>
                                                </div>
                                                <br>
                                                
                                                <div class="col-md-4" style="margin-left: 20%">
                                                    <div>
                                                    
                                                        <h6>Event Discription </h6>
                                                        <hr>
                                                        <p>{{$proposal->event->description}}</p> 
                                                                            <hr>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div>
                                                    
                                                        <h6>My proposal </h6>
                                                        <hr>
                                                        <p>{{$proposal->detail}}</p> 
                                                                            <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-4"><span class="text-dark"> Date :</span>{{$proposal->created_at->format('Y-m-d')}} Time:{{$proposal->created_at->format('H:i:s')}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                       
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

            {{--
                        
{{-- <?php
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
                            <p class="mb-0">© 2021 EVMart Version 0.1.</p>
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