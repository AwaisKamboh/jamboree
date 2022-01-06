@extends('main.layout')
@section('title')
    {{"Jamboree | Profile"}}
@endsection
@section('content')
@include('includes.header')
    {{-- <script src="/assets/bootstrap/js/npm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        $(document).ready(function(){
                          $('[data-toggle="tooltip"]').tooltip();
                          $('[data-toggle="popover"]').popover();
                          });
    </script> --}}




    <section class="bg-home" style="background: url('/assets/images/p4.JPEG') center center;margin-top:-150px">
            {{-- <?php
include"connection.php";
        $view = isset($_GET['view']) ? $_GET['view'] : '';
$sql= "SELECT * FROM `users` WHERE `username` = '$view'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
while($rows=mysqli_fetch_array($result))
{
?> --}}
        <div class="row">
        <div class="well col-md-8" style="margin-left: 20%;margin-top: 5%" >
        <div class="col-md-3" style="float: left;">
           {{-- <a href="<?php echo "usersprofile.php?view=$view"?>" ><img src="test_files/<?php echo $rows["image"] ?>" class="img-circle img-responsive" width="100%"></a> --}}
            
            </div>
            {{-- <div style="float: left;"> <h1><?php echo ucwords($rows['fname']." ".$rows['lname']) ?></h1>             --}}
            {{-- <span class="glyphicon glyphicon-home"></span> <?php echo ucwords($rows['address'])?> --}}
            </div>
            <div style="clear: both"></div>
            <div style="float: left" class="container">
                <div class="col-md-6" style="margin-left: 20%;margin-top: 2%">
                     
                     
<!--                    1 panel-->
                        <div class="panel panel-default">
                            
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%"> Title</h3>   
                            </div>             
                            
                        <div class="panel-body "  style="height: 100%">
                        <h4>Title</h4>
                        </div>
                        </div>
                    
<!--                    2nd panel-->
                    
                    <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%">Overview</h3>
                            
                           </div>
                        <div class="panel-body "  style="height: 100%">
                        <p>Description</p>
                         </div>
                       
                        </div>
                </div>
               
                
            </div>
        </div>
        
        <div class="well col-md-8" style="margin-left: 20%;margin-top: 1%" >
            
             <div style="float: left" class="container">
                 
                <div class="col-md-6" style="margin-left: 20%;margin-top: 2%">
                    
                    
<!--                        3 panel-->
                          <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%"> Skills</h3>
                            </div>
                        <div class="panel-body "  style="height: 100%">
                                <p>Skils</p>
                            </div>
 {{-- <?php
}}//end of if
?> --}}
                        </div>
                 
<!--                 4 panel-->

                     <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%">Portfolio</h3>
                            
                          </div>
                        
                         <div class="panel-body "  style="height: 100%">
                            {{-- <?php       
                        include_once("connection.php");
                         $view = isset($_GET['view']) ? $_GET['view'] : '';
                             $query= "SELECT * FROM `users` WHERE `username` = '$view'";
                             $result=mysqli_query($conn,$query);
        
                            if ($result->num_rows > 0) {
                            while($rows=mysqli_fetch_array($result))
                            {
                            $id=$rows["id"];
                            $sql="SELECT * FROM `portfolio` WHERE `u_id`= '$id'";
                            $run=mysqli_query($conn, $sql);
                                        while($rows= mysqli_fetch_array($run)) {  ?>

                                    <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="test_files/<?php echo $rows["image"] ?>" class="img-thumbnail img-responsive" width="50%"></a>
                            {{-- <?php
                                        }}}//end of if
                                        ?> --}} --}}

                  
                         
                            </div>
                       
                        </div>
                 </div>

                 
                 
                </div>
            </div>
        </div>
        </section>
 
        <!-- counter end -->
    
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