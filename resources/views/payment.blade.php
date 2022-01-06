@extends('main.layout')
@section('title')
     {{"Jamboree | Payments"}}
 @endsection
@section('content')
@include('includes.header')
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/payment.JPEG') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Payment Form</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post an event</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section" >
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form" >
                            <div id="message3"></div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row justify-content-center">
                                        <div class="form-group app-label mt-2">
                                            <h5 class="text-dark mb-3">Payment Form</h5>
                                        </div> 
                                           
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Enter Amount</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="Rs-8000">
                                        </div>
                                    </div>
                                </div>
                            
                            
                            <div class="row">
                        
                                </div>
                                
                                <hr>
                            
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form3">
                                 
                                <h4 class="text-dark mb-3">Payment Details :</h4>
                                
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Name On Card *</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Card Number *</label>
                                            <input id="minimum-salary" type="password" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                 
                                    <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">MM *</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                   <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">YY *</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                     <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">CVC Code *</label>
                                            <input id="minimum-salary" type="password" class="form-control resume" placeholder="********">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <a href="#" class="btn btn-primary">Payment Now</a>
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
    