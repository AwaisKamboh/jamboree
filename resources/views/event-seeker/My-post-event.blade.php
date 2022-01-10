@extends('main.layout')
@section('title')
     {{"Jamboree | My-Posted-Events"}}
 @endsection
@section('content')
@include('includes.header')
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/post-event.jpeg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">My Posted Events</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="home.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post An Event</span> 
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
                        <h4 class="title title-line pb-5">MY Posted Events </h4>
                    </div>
                </div>
            </div>
           {{-- <?php
                                                        include"connection.php";
                                                        $user=implode($_SESSION["User"]);
                                                        $email=$_SESSION["email"];
                                                        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'") or die("Error: " . mysqli_error($conn));                        
                                                        $row=mysqli_fetch_array($query); 
                                                        $id=$row["id"];
                                                        $sql= "SELECT * FROM `postevent`  WHERE `u_id`=$id ORDER BY `id` DESC";
                                                        $result=mysqli_query($conn,$sql);

                                                        if ($result->num_rows > 0) {
                                                        
                                                        while($rows=mysqli_fetch_array($result))
                                                        { $id=$rows['id'];

                                                  echo'
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
                                                        <img src="images/eventpostlogo.PNG" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">'; echo ucwords($rows['event_title']); echo'</a></h5>
                                                        <p class="text-muted mb-0">Posted by: ';
                                                                                                                 echo  ucwords($rows['u_name']);
                                                                                                                       echo '</p>
                                                        <p><span class="text-dark">posted on:</span>'; echo $rows['currentdate']." time:".$rows['currenttime']; echo'</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>'; echo ucwords($rows['location'].", ".$rows['city']); echo '</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2">Budget <span class="text-primary">Rs</span>'; echo $rows['budgetmin']."-".$rows['budgetmax']; echo '</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0">'; echo $rows['event_date']; echo '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light " >
                                            <div class="row justify-content-center ">
                                                <div class="col-md-2">
                                                    <div>';
                                                         
                                                        echo " <a href='My-post-event.php?del_id=$rows[id]'"; echo' class="text-primary">Remove Post <i class="mdi mdi-chevron-double-right"></i></a>
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
                </div>';?>
                                    
<?php
if (isset($_GET['del_id'])){
    $del_sql="DELETE FROM `postevent` WHERE `id`='$_GET[del_id]'";
    if(mysqli_query($conn, $del_sql)) {
         ?>
<script>window.location="My-post-event.php";</script>
<?php
}
else {
                echo "fail";
            }
                                                        }}}//end of if
                                                        
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