
   @extends('main.layout')
   @section('title')
       {{"Jamboree | Home"}}
   @endsection
   @section('content')
  @include('includes.header')  
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/bidding.jpeg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">BIDS</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Bids</span> 
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
                        <h4 class="title title-line pb-5">BIDS </h4>
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
                                                        $sql= "SELECT * FROM `proposal` WHERE `p_u_id`='$id'";
                                                        
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
                                                        <img src="images/icons/bid.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">Bid by: ';
                                                                                                                 echo  ucwords($rows['pro_u_name']);
                                                                                                                       echo '</a></h5>
                                                       
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-4">
                                                    <div>
                                                        <h6 >Offer <span class="text-primary">Rs</span>'; echo $rows['bid']; echo '</h6>
                                                    </div>
                                                </div>
                                               <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label >Event Title:-</label>
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">';
                                                                             echo  ucwords($rows['event_title']);
                                                                            echo '</label>
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
                                                        <p>';
                                                                             echo  ucwords($rows['pro_detail']);
                                                                            echo '</p> 
                                                                            <hr>
                                                    </div>
                                                </div>
                                        </center>
                                        <div class="p-3 bg-light " >
                                            <div class="row justify-content-center ">
                                                <div class="col-md-4">
                                                    <div>
                                                       <p>Bid on Date:'; echo $rows['date']." Time:".$rows['time']; ;echo'</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <div>';
                                                      echo "<a href='chat.php' class='text-primary' name='bid'>Message<i class='mdi mdi-chevron-double-right'></i></a>";
                                                  echo '  </div>
                                                </div>
                                                 <div class="col-md-2">
                                                    <div>
                                                        ';
                                                  echo "<a href='employeedinner.php?hire_id=$rows[id]' class='text-primary' name='bid'>Hire <i class='mdi mdi-chevron-double-right'></i></a>";
                                                    echo '
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
                </div>';

                                                        
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
                            <p class="mb-0">© 2021 Jamboree Version 1.0.</p>
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
 