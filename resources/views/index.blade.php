<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Class Project" />

    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/selectize.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.css" />
    <link rel="stylesheet" href="/assets/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />

</head>

<body>
 <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->  
  
    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        @auth
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Welcome, {{Auth::user()->name}}</a></li>
                        @else
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Welcome, Guest</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.php" class="logo">
                    <img src="/assets/images/logo9.png" alt="" class="logo-light" width="100px" />
                    <img src="/assets/images/logo10.png" alt="" class="logo-dark" width="100px" />
                </a>
            </div>                 
            
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/event_seeker">Event Seeker</a></li>
                    <li><a href="/event_worker">Event Worker</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Signup</a></li>
                    <li><a href="/post_event">Post Event</a></li>

                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Start Home -->
    <section class="bg-home" style="background: url('/assets/images/event-plans.png') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">Create events & hire professionals for management.</h6>
                                <h1 class="heading font-weight-bold mb-4">Get your Event Done.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Event title...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default">
                                                        <option value="" disabled selected>Choose City</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                        <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                                        <option value="Ahmadpur East">Ahmadpur East</option>
                                                        <option value="Ali Khan Abad">Ali Khan Abad</option>
                                                        <option value="Alipur">Alipur</option>
                                                        <option value="Arifwala">Arifwala</option>
                                                        <option value="Attock">Attock</option>
                                                        <option value="Bhera">Bhera</option>
                                                        <option value="Bhalwal">Bhalwal</option>
                                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                                        <option value="Bahawalpur">Bahawalpur</option>
                                                        <option value="Bhakkar">Bhakkar</option>
                                                        <option value="Burewala">Burewala</option>
                                                        <option value="Chillianwala">Chillianwala</option>
                                                        <option value="Chakwal">Chakwal</option>
                                                        <option value="Chichawatni">Chichawatni</option>
                                                        <option value="Chiniot">Chiniot</option>
                                                        <option value="Chishtian">Chishtian</option>
                                                        <option value="Daska">Daska</option>
                                                        <option value="Darya Khan">Darya Khan</option>
                                                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                        <option value="Dhaular">Dhaular</option>
                                                        <option value="Dina">Dina</option>
                                                        <option value="Dinga">Dinga</option>
                                                        <option value="Dipalpur">Dipalpur</option>
                                                        <option value="Faisalabad">Faisalabad</option>
                                                        <option value="Fateh Jhang">Fateh Jang</option>
                                                        <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                        <option value="Gojra">Gojra</option>
                                                        <option value="Gujranwala">Gujranwala</option>
                                                        <option value="Gujrat">Gujrat</option>
                                                        <option value="Gujar Khan">Gujar Khan</option>
                                                        <option value="Hafizabad">Hafizabad</option>
                                                        <option value="Haroonabad">Haroonabad</option>
                                                        <option value="Hasilpur">Hasilpur</option>
                                                        <option value="Haveli">Haveli</option>
                                                        <option value="Lakha">Lakha</option>
                                                        <option value="Jalalpur">Jalalpur</option>
                                                        <option value="Jattan">Jattan</option>
                                                        <option value="Jampur">Jampur</option>
                                                        <option value="Jaranwala">Jaranwala</option>
                                                        <option value="Jhang">Jhang</option>
                                                        <option value="Jhelum">Jhelum</option>
                                                        <option value="Kalabagh">Kalabagh</option>
                                                        <option value="Karor Lal Esan">Karor Lal Esan</option>
                                                        <option value="Kasur">Kasur</option>
                                                        <option value="Kamalia">Kamalia</option>
                                                        <option value="Kamoke">Kamoke</option>
                                                        <option value="Khanewal">Khanewal</option>
                                                        <option value="Khanpur">Khanpur</option>
                                                        <option value="Kharian">Kharian</option>
                                                        <option value="Khushab">Khushab</option>
                                                        <option value="Kot Adu">Kot Adu</option>
                                                        <option value="Jauharabad">Jauharabad</option>
                                                        <option value="Lahore">Lahore</option>
                                                        <option value="Lalamusa">Lalamusa</option>
                                                        <option value="Layyah">Layyah</option>
                                                        <option value="Liaquat Pur">Liaquat Pur</option>
                                                        <option value="Lodhran">Lodhran</option>
                                                        <option value="Malakwal">Malakwal</option>
                                                        <option value="Mamoori">Mamoori</option>
                                                        <option value="Mailsi">Mailsi</option>
                                                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                        <option value="mian Channu">Mian Channu</option>
                                                        <option value="Mianwali">Mianwali</option>
                                                        <option value="Multan">Multan</option>
                                                        <option value="Murree">Murree</option>
                                                        <option value="Muridke">Muridke</option>
                                                        <option value="Mianwali Bangla">Mianwali Bangla</option>
                                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                                        <option value="Narowal">Narowal</option>
                                                        <option value="Okara">Okara</option>
                                                        <option value="Renala Khurd">Renala Khurd</option>
                                                        <option value="Pakpattan">Pakpattan</option>
                                                        <option value="Pattoki">Pattoki</option>
                                                        <option value="Pir Mahal">Pir Mahal</option>
                                                        <option value="Qaimpur">Qaimpur</option>
                                                        <option value="Qila Didar Singh">Qila Didar Singh</option>
                                                        <option value="Rabwah">Rabwah</option>
                                                        <option value="Raiwind">Raiwind</option>
                                                        <option value="Rajanpur">Rajanpur</option>
                                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                        <option value="Rawalpindi">Rawalpindi</option>
                                                        <option value="Sadiqabad">Sadiqabad</option>
                                                        <option value="Safdarabad">Safdarabad</option>
                                                        <option value="Sahiwal">Sahiwal</option>
                                                        <option value="Sangla Hill">Sangla Hill</option>
                                                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                        <option value="Sargodha">Sargodha</option>
                                                        <option value="Shakargarh">Shakargarh</option>
                                                        <option value="Sheikhupura">Sheikhupura</option>
                                                        <option value="Sialkot">Sialkot</option>
                                                        <option value="Sohawa">Sohawa</option>
                                                        <option value="Soianwala">Soianwala</option>
                                                        <option value="Siranwali">Siranwali</option>
                                                        <option value="Talagang">Talagang</option>
                                                        <option value="Taxila">Taxila</option>
                                                        <option value="Toba Tek  Singh">Toba Tek Singh</option>
                                                        <option value="Vehari">Vehari</option>
                                                        <option value="Wah Cantonment">Wah Cantonment</option>
                                                        <option value="Wazirabad">Wazirabad</option>
                                                        <option value="Badin">Badin</option>
                                                        <option value="Bhirkan">Bhirkan</option>
                                                        <option value="Rajo Khanani">Rajo Khanani</option>
                                                        <option value="Chak">Chak</option>
                                                        <option value="Dadu">Dadu</option>
                                                        <option value="Digri">Digri</option>
                                                        <option value="Diplo">Diplo</option>
                                                        <option value="Dokri">Dokri</option>
                                                        <option value="Ghotki">Ghotki</option>
                                                        <option value="Haala">Haala</option>
                                                        <option value="Hyderabad">Hyderabad</option>
                                                        <option value="Islamkot">Islamkot</option>
                                                        <option value="Jacobabad">Jacobabad</option>
                                                        <option value="Jamshoro">Jamshoro</option>
                                                        <option value="Jungshahi">Jungshahi</option>
                                                        <option value="Kandhkot">Kandhkot</option>
                                                        <option value="Kandiaro">Kandiaro</option>
                                                        <option value="Karachi">Karachi</option>
                                                        <option value="Kashmore">Kashmore</option>
                                                        <option value="Keti Bandar">Keti Bandar</option>
                                                        <option value="Khairpur">Khairpur</option>
                                                        <option value="Kotri">Kotri</option>
                                                        <option value="Larkana">Larkana</option>
                                                        <option value="Matiari">Matiari</option>
                                                        <option value="Mehar">Mehar</option>
                                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                                        <option value="Mithani">Mithani</option>
                                                        <option value="Mithi">Mithi</option>
                                                        <option value="Mehrabpur">Mehrabpur</option>
                                                        <option value="Moro">Moro</option>
                                                        <option value="Nagarparkar">Nagarparkar</option>
                                                        <option value="Naudero">Naudero</option>
                                                        <option value="Naushahro Feroze">Naushahro Feroze</option>
                                                        <option value="Naushara">Naushara</option>
                                                        <option value="Nawabshah">Nawabshah</option>
                                                        <option value="Nazimabad">Nazimabad</option>
                                                        <option value="Qambar">Qambar</option>
                                                        <option value="Qasimabad">Qasimabad</option>
                                                        <option value="Ranipur">Ranipur</option>
                                                        <option value="Ratodero">Ratodero</option>
                                                        <option value="Rohri">Rohri</option>
                                                        <option value="Sakrand">Sakrand</option>
                                                        <option value="Sanghar">Sanghar</option>
                                                        <option value="Shahbandar">Shahbandar</option>
                                                        <option value="Shahdadkot">Shahdadkot</option>
                                                        <option value="Shahdadpur">Shahdadpur</option>
                                                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                                                        <option value="Shikarpaur">Shikarpaur</option>
                                                        <option value="Sukkur">Sukkur</option>
                                                        <option value="Tangwani">Tangwani</option>
                                                        <option value="Tando Adam Khan">Tando Adam Khan</option>
                                                        <option value="Tando Allahyar">Tando Allahyar</option>
                                                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                                        <option value="Thatta">Thatta</option>
                                                        <option value="Umerkot">Umerkot</option>
                                                        <option value="Warah">Warah</option>
                                                        <option value="Abbottabad">Abbottabad</option>
                                                        <option value="Adezai">Adezai</option>
                                                        <option value="Alpuri">Alpuri</option>
                                                        <option value="Akora Khattak">Akora Khattak</option>
                                                        <option value="Ayubia">Ayubia</option>
                                                        <option value="Banda Daud Shah">Banda Daud Shah</option>
                                                        <option value="Bannu">Bannu</option>
                                                        <option value="Batkhela">Batkhela</option>
                                                        <option value="Battagram">Battagram</option>
                                                        <option value="Birote">Birote</option>
                                                        <option value="Chakdara">Chakdara</option>
                                                        <option value="Charsadda">Charsadda</option>
                                                        <option value="Chitral">Chitral</option>
                                                        <option value="Daggar">Daggar</option>
                                                        <option value="Dargai">Dargai</option>
                                                        <option value="Darya Khan">Darya Khan</option>
                                                        <option value="dera Ismail Khan">Dera Ismail Khan</option>
                                                        <option value="Doaba">Doaba</option>
                                                        <option value="Dir">Dir</option>
                                                        <option value="Drosh">Drosh</option>
                                                        <option value="Hangu">Hangu</option>
                                                        <option value="Haripur">Haripur</option>
                                                        <option value="Karak">Karak</option>
                                                        <option value="Kohat">Kohat</option>
                                                        <option value="Kulachi">Kulachi</option>
                                                        <option value="Lakki Marwat">Lakki Marwat</option>
                                                        <option value="Latamber">Latamber</option>
                                                        <option value="Madyan">Madyan</option>
                                                        <option value="Mansehra">Mansehra</option>
                                                        <option value="Mardan">Mardan</option>
                                                        <option value="Mastuj">Mastuj</option>
                                                        <option value="Mingora">Mingora</option>
                                                        <option value="Nowshera">Nowshera</option>
                                                        <option value="Paharpur">Paharpur</option>
                                                        <option value="Pabbi">Pabbi</option>
                                                        <option value="Peshawar">Peshawar</option>
                                                        <option value="Saidu Sharif">Saidu Sharif</option>
                                                        <option value="Shorkot">Shorkot</option>
                                                        <option value="Shewa Adda">Shewa Adda</option>
                                                        <option value="Swabi">Swabi</option>
                                                        <option value="Swat">Swat</option>
                                                        <option value="Tangi">Tangi</option>
                                                        <option value="Tank">Tank</option>
                                                        <option value="Thall">Thall</option>
                                                        <option value="Timergara">Timergara</option>
                                                        <option value="Tordher">Tordher</option>
                                                        <option value="Awaran">Awaran</option>
                                                        <option value="Barkhan">Barkhan</option>
                                                        <option value="Chagai">Chagai</option>
                                                        <option value="Dera Bugti">Dera Bugti</option>
                                                        <option value="Gwadar">Gwadar</option>
                                                        <option value="Harnai">Harnai</option>
                                                        <option value="Jafarabad">Jafarabad</option>
                                                        <option value="Jhal Magsi">Jhal Magsi</option>
                                                        <option value="Kacchi">Kacchi</option>
                                                        <option value="Kalat">Kalat</option>
                                                        <option value="Kech">Kech</option>
                                                        <option value="Kharan">Kharan</option>
                                                        <option value="Khuzdar">Khuzdar</option>
                                                        <option value="Killa Abdullah">Killa Abdullah</option>
                                                        <option value="Killa Saifullah">Killa Saifullah</option>
                                                        <option value="Kohlu">Kohlu</option>
                                                        <option value="Lasbela">Lasbela</option>
                                                        <option value="Lehri">Lehri</option>
                                                        <option value="Loralai">Loralai</option>
                                                        <option value="Mastung">Mastung</option>
                                                        <option value="Musakhel">Musakhel</option>
                                                        <option value="Nasirabad">Nasirabad</option>
                                                        <option value="Nushki">Nushki</option>
                                                        <option value="Panjgur">Panjgur</option>
                                                        <option value="Pishin valley">Pishin Valley</option>
                                                        <option value="Quetta">Quetta</option>
                                                        <option value="Sherani">Sherani</option>
                                                        <option value="Sibi">Sibi</option>
                                                        <option value="Sohbatpur">Sohbatpur</option>
                                                        <option value="Washuk">Washuk</option>
                                                        <option value="Zhob">Zhob</option>
                                                        <option value="Ziarat">Ziarat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-category" class="demo-default">
                                                        <option value="">Event Type</option>
                                                        <option value="1m">Marriage</option>
                                                        <option value="2b">Birthday</option>
                                                        <option value="3b">Anniversary</option>
                                                        <option value="4b">Custom</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Quick Post Event">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Popular Event Categories</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post an event with relevant information and we will quickly show you some of the best Event Planners available across your area.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-account d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Marriage</h5>
                                <p class="text-success mb-0 rounded">290 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-desktop-classic d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Birthday</h5>
                                <p class="text-success mb-0 rounded">77 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-bank d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Anniversary</h5>
                                <p class="text-success mb-0 rounded">90 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-auto-fix d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Customized Events</h5>
                                <p class="text-success mb-0 rounded">930 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <a href="javascript:void(0)" class="btn btn-primary-outline">Browse All Posted Events <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- popular category end -->

    <!-- How it Work start -->
    <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title title-line pb-5">How Jamboree Works</h4>
                            <p class="text-muted para-desc mx-auto mb-1">Post your desired event details, signup for an account and get your work done.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                            <div class="how-it-work-img position-relative rounded-pill mb-3">
                                <img src="/assets/images/how-it-work/img-1.png" alt="" class="mx-auto d-block" height="50">
                            </div>
                            <div>
                                <h5>Register an account</h5>
                                <p class="text-muted">Become a member, be a event worker or event seeker and get your work done.</p>
                                <a href="signup.php" class="text-primary">Signup Now <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                            <div class="how-it-work-img position-relative rounded-pill mb-3">
                                <img src="/assets/images/how-it-work/img-2.png" alt="" class="mx-auto d-block" height="50">
                            </div>
                            <div>
                                <h5>Post Event / Find Event</h5>
                                <p class="text-muted">Based on what you want, if you are event worker you can find events, work on them and get paid or if you are event seeker, you can post events.</p>
                                <a href="login.php" class="text-primary">Login <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                            <div class="how-it-work-img position-relative rounded-pill mb-3">
                                <img src="/assets/images/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                            </div>
                            <div>
                                <h5>Get Work Done</h5>
                                <p class="text-muted">Once you are a part of Jamboree, you can get your events done quickly.</p>
                                <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it Work end -->
    
        <!-- counter start -->
        <section class="section bg-counter position-relative" style="background: url('https://via.placeholder.com/200X700//88929f/5a6270C/O https://placeholder.com/') center center;">
            <div class="bg-overlay bg-overlay-gradient"></div>
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-bank h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="350">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Event Seekers</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-file-document-box h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="600">80</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Events Listed</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="750">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Event Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="1200">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Community Members</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        <!-- counter end -->
    

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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    
    <!-- selectize js -->
    <script src="/assets/js/selectize.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/counter.int.js"></script>
    
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/home.js"></script>
</body>
</html>

    