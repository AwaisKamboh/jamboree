{{-- <?php
session_start();
include_once("connection.php");
if(isset($_GET['submit']))
{
    $email=$_GET['email'];
    $sql= "SELECT `email` FROM users WHERE `email`='$email'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {echo "<script>
location.href='signup.php';
alert('email already exist');
</script>";   
    }
    else{    
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $username=$_GET['username'];
    $gender=$_GET['gender'];
    $address=$_GET['address'];
  $sql="INSERT INTO `users`(`fname`,`lname`, `email`, `password`,`username`, `gender`, `address`) VALUES  ('$fname','$lname','$email','$password','$username','$gender','$address')";
     if($conn->query($sql)===TRUE){
          $_SESSION["User"]=$username;
          $_SESSION["email"]=$femail;
         echo "<script>
        location.href='home.php';
        </script>";   
         }
    else
    {
        echo "fail";
    }
    
}
}
 ?> --}}
@extends('main.layout')
@section('title')
     {{"Jamboree | Signup"}}
 @endsection
@section('content')
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="vh-100" style="background: url('/assets/images/signup-bg.jpg') center no-repeat scroll;">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Signup</h4>  
                                    </div>
                                    <form class="login-form" action="signup.php" method="GET">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>First name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="First Name" name="fname" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                                
                                                    <label>Last name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" required="">
                                                </div>
                                                <div class="form-group position-relative">
                                                    <label>Enter a Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="username" placeholder="username" required="">
                                                </div>
                                            </div>
                                                 <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Gender  <span class="text-danger">*</span></label>
                                                    <div class="registration-form-box">
                                                        <i class="fa fa-list-alt"></i>
                                                        <select id="select-category" class="demo-default" name="gender">
                                                            <option value="" disabled selected>Select one</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">other</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                               <div class="form-group position-relative">
                                                    <label>Address <span class="text-danger">*</span></label>
                                                   <textarea  class="form-control" placeholder="Address" required="" name="address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary w-100" name="submit">Register</button>
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Signup With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="/login" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->
        @endsection
