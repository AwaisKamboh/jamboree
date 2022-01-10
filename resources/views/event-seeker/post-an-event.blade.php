@extends('main.layout')
@section('title')
    {{"Jamboree | Post-Event"}}
@endsection
@section('content')
<!-- Loader -->
@include('includes.header')
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/post-events.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Create A new Job</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="/" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post A Job</span> 
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
                            
                            <form method="POST" action="#" name="contact-form" id="contact-form3">
                                @csrf
                                <h4 class="text-dark mb-3">Post a New Event :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Title</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="" name="title" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Type</label>
                                            <div class="form-button">
                                                <select  class="form-control" id="exampleFormControlSelect2" name="type">
                                                    <option selected value="">Select</option>
                                                    <option value="Anniversary">anniversary</option>
                                                    <option value="Birthday">birthday</option>
                                                    <option value="Marriage" >custom</option>
                                                    <option value="Custom">marriage</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location</label>
                                             <input id="Location" type="text" class="form-control resume" placeholder="" name="location" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Budget</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="Rs-8000" name="budgetmin" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Budget</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="Rs-20000" name="budgetmax" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                   
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Date</label>
                                            <input type="date" class="form-control resume" placeholder="d/m/y" name="event_date" required>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Description</label>
                                            <textarea name="description" rows="6" class="form-control resume" placeholder="Add some details" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <button class="btn btn-primary" name="postevent">Post event</button>
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