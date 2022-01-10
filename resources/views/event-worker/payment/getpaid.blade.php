
@extends('main.layout')
@section('title')
    {{"Jamboree | get-Paid"}}
@endsection
@section('content')
@include('includes.header-worker')    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('images/getpaid.jpeg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">MY Account</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
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
                                            <h5 class="text-dark mb-3">My Account</h5>
                                        </div> 
                                           
                                        </div>
                                    </div>
                                </div>
                            <?php
                                // include"connection.php";
                                // $account_holder = implode($_SESSION["User"]);
                                // $balance_sql="SELECT * FROM `jamboree_account` where `account_holder`= '$account_holder'";
                                // $res = mysqli_query($conn, $balance_sql);
                                // if ($res->num_rows > 0) {                                                    
                                // while($rowsB=mysqli_fetch_array($res))
                                // { $balance=$rowsB['current_balance'];}}
                                // if(empty($balance)){ ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                             <p class="text-muted mb-0 mo-mb-2">Current Balance <span class="text-primary">Rs </span>0.00</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                // }else {  
                            ?>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                             <p class="text-muted mb-0 mo-mb-2">Current Balance <span class="text-primary">Rs </span>93849</p>
                                            
                                        </div>
                                    </div>
                                </div>
                          <?php 
//                            }

                                
//                             if(isset($_POST['withdraw'])){
//                                 $account_withdraw = implode($_SESSION["User"]);
//                                 $name_on_card = $_POST['name_on_card'];
//                                 $card_number = $_POST['card_number'];
//                                 $amount= $_POST['amount'];
//                                 $valid_from = $_POST['valid_from'];
//                                 $valid_till = $_POST['valid_till'];
//                                 $date= date("Y-m-d");
//                                 $time=date("h:i:sa");
                                
                                        
//                                 $withdraw_query = "INSERT INTO `withdraw` (`w_user`, `name_on_card`, `card_number`, `amount`, `valid_from`, `until_valid`, `date`, `time`) VALUES ('$account_withdraw','$name_on_card','$card_number','$amount',' $valid_from','$valid_till','$date','$time')";
// //                               checking balance for the user from Jamboree_account
                             
                                
//                                     if($conn->query($withdraw_query)=== TRUE) {
                                            
//                                         $updated_amount= $balance - $amount;
//                                         $update_account = "UPDATE `jamboree_account` SET `current_balance`='$updated_amount',`date`='$date',`time`='$time' WHERE `account_holder`='$account_withdraw'";
                                        
//                                                  if($conn->query($update_account)=== TRUE){
//                                                      echo "<script>
//                                                         location.href='getpait.php';
//                                                         alert('Withdraw Successfully done');
//                                                         </script>";
//                                                  }else{
//                                                      echo "<script>
//                                                         location.href='getpait.php';
//                                                         alert('Failed to Update');
//                                                         </script>";
//                                                  }

//                                     }else{
//                                         echo "<script>
//                                                 location.href='getpait.php';
//                                                 alert('Withdraw failed.
//                                                 Please Check Your Jamboree Balance or
//                                                 Try Again Latter!');
//                                                 </script>";
//                                     }
//                             }
                            ?>
                            
                            
                                
                                <hr>
                            
                            <form method="POST"  name="withdraw" >
                                 
                                <h4 class="text-dark mb-3">Account Details :</h4>
                                
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Name On Card *</label>
                                            <input  type="text" class="form-control resume" placeholder="Name" name="name_on_card" required>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Card Number *</label>
                                            <input type="text" maxlength="14" class="form-control resume" placeholder="---- ---- ---- ----" name="card_number" required>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Amount *</label>
                                            <input  type="number" min="0" class="form-control resume" placeholder="Rs.0.00" name="amount" required>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                 
                                    <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Valid From *</label>
                                            <input  type="text" class="form-control resume" placeholder="MM/YY" name="valid_from" required>
                                        </div>
                                    </div>
                                   <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Until End *</label>
                                            <input  type="text" class="form-control resume" placeholder="MM/YY" name="valid_till" required>
                                        </div>
                                    </div>
                                </div>
                                 <?php 
                            //    $check_balance = "SELECT * FROM `jamboree_account` WHERE `account_holder` = '$account_holder'";
                            //     $check_balance_res = mysqli_query($conn, $check_balance);
                            //     $resulti = mysqli_fetch_assoc($check_balance_res);
                            //     $bal= $resulti['current_balance'];
                            //     if(!empty($bal)){
                                ?>
                                      <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <input type="submit" value="withdraw now" name="withdraw" class="btn btn-primary">
                                    </div>
                                </div>
                                <?php 
                            // } else{
                                 ?>
                                     <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <input type="button" value="withdraw now" name="withdraw" class="btn btn-primary disabled">
                                    </div>
                                </div>
                                <?php
                            //  }
                              ?>
                                
                               
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