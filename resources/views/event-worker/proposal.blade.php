
 @extends('main.layout')
 @section('title')
     {{"Jamboree | Apply for job"}}
 @endsection
 @section('content')
   @include('includes.header-worker')
    {{-- {{dd($event)}} --}}
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('images/web.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">New Proposal</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="home.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Send A Proposal</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <div class="row">
                            <div class="col-md-2">
                                <img src="/assets/images/icons/events.png" class="img-circle img-responsive" width="70%" >
                                </div>
                                    <div class="form-group app-label mt-2">
                                    <h4 class="text-dark mb-3">{{$event->user->name}}</h4>
                                 </div>
                                 </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <h5 class="text-dark mb-3">Event Title:-</h5>
                                        </div> 
                                            <div class="form-group app-label mt-2">
                                            <h5 class="text-muted">{{$event->title}}.</h5>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Description</label>
                                            <textarea disabled id="description" rows="6" class="form-control resume" placeholder="">{{$event->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Type:-</label>
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">{{$event->type}}</label>
                                        </div>
                                        </div>
                                    </div>
                                 <div class="col-md-4">
                                     <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location:-</label>
                                        </div>
                                         <div class="form-group app-label mt-2">
                                            <label class="text-muted">{{$event->location}}</label>
                                        </div>
                                     </div>
                                       </div>
                                      <div class="col-md-4">
                                       <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Date:-</label>
                                        </div>
                                         <div class="form-group app-label mt-2">
                                            <label class="text-muted">{{$event->date}}></label>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                             <label class="text-muted">Minimum Budget:-</label>                                           
                                        </div>
                                            <div class="form-group app-label mt-2">                                             
                                            <label class="text-muted">Rs.{{$event->budget_min}}</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Budget:-</label>                                            
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">Rs.{{$event->budget_max}}</label>                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <hr>                            
                                <form method="POST" action="/event-worker/apply" name="contact-form" id="contact-form3">                         
                                    <h4 class="text-dark mb-3">Fill Carefully :</h4>  
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group app-label mt-2">
                                                    <label class="text-muted">BID</label>
                                                        <input id="minimum-salary" type="text" class="form-control resume" placeholder="Rs-8000" name="bid">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Why are you valid of this job?</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder="Describe how will you be becneficial" name="detail"></textarea>
                                        </div>
                                    </div>
                                </div>

                      <input type="hidden" value="{{$event->id}}" name="event_id">
                 <div class="row">
                        <div class="col-lg-12 mt-2">
                   <input type="submit" class="btn btn-primary" name='submit' value="submit" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A EVENT END -->

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