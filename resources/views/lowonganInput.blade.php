<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>E-Recruitment</title>
	<link rel="shortcut icon" href="{{asset('depan/assets/img/icon.png')}}">

	<meta name="description" content="FundMe - is a Premium HTML Responsive Templeate by HTMLmate Team. You can use this for anykind of Nonprofit website">

	<meta name="keywords" content="Premium HTML Template">

	<meta name="author" content="HTMLmate">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->

	<!-- boorstrap -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/bootstrap.min.css')}}">
	<!-- themify-icon.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/themify-icons.css')}}">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/owl.carousel.css')}}">
	<!-- Video-min -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/video.min.css')}}">
	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/animate.css')}}">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/settings.css')}}">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/layers.css')}}">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/navigation.css')}}">
	<!-- menu style -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/menu.css')}}">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/style.css')}}">
	<!-- responsive.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/responsive.css')}}">
</head>
<!-- /end of head -->

<body>
	<div id="preloader"></div>
	<!-- Start of Header 
	============================================= -->
	<header>
		<div class="header-top-bg">
			<div class="container">
				<div class="row">
					<div class="header-top">
						<div class="head-top-info pull-left">
							<ul class="top-info">
								<li><img src="{{asset('depan/assets/img/call.png')}}" alt="image">05. 256. 8942</li>
								<li><img src="{{asset('depan/assets/img/inbox.png')}}" alt="image">info@fundme.com</li>
							</ul>
						</div>
						<!-- /head-top-info -->
						<div class="header-social pull-right">
							<div class="social">
								<ul class="social-list">
									<li><a href="#"><span class="ti-facebook"></span></a></li>
									<li><a href="#"><span class="ti-twitter"></span></a></li>
									<li><a href="#"><span class="ti-google"></span></a></li>
									<li><a href="#"><span class="ti-instagram"></span></a></li>
								</ul>
							</div>
						</div>
						<!-- /header-social -->
					</div><!-- /header-top -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div>
		<div class="menu-bar">
			<div class="container">
				<div class="row">
					<nav class="navbar">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand" href="/"><img src="{{asset('depan/assets/img/logo.png')}}" alt="image" width="50%"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">rekrutmen</a>
									<ul class="menu-dropdown">
										<li><a href="contact.html">Contact</a></li>
										<li><a href="404.html">404</a></li>
										<li><a href="about-us.html">About-us</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<div class="home-donate donate-btn-1 text-uppercase">
							<a href="{{Route('login')}}">Login</a>
						</div>
						<div id="sb-search" class="sb-search " >
							    <form action="#" method="post">
								   <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Enter Your Search Word..." type="search" value="" name="search" id="search">
								 <input class="sb-search-submit" type="submit"  value="">
								 <span class="sb-icon-search"><i class="ti-search"></i></span>
							    </form>
						</div>
					</nav>
					<div class="wrap">
						<!--MENU-->
						<div id="main-menu">
							<div class="menu-btn">
								<div class="menu-btn-line menu-btn-line-1"></div>
								<div class="menu-btn-line menu-btn-line-2"></div>
								<div class="menu-btn-line menu-btn-line-3"></div>
							</div>
							<div class="moduletable_menu">

								<ul class="nav menu">
									<li><a href="home-1.html">Home</a></li>
									<li><a href="about-us.html">About</a></li>
									<li><a href="blog-archive.html">Blog</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
									<li><a href="cause.html">Cause</a></li>
									<li><a href="cause-single.html">Cause Details</a></li>
									<li><a href="event.html">Event</a></li>
									<li><a href="event-single.html">Event Single</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="contact.html">Contacts</a></li>
								</ul>
							</div>
						</div>
						<!-- END menu -->
					</div><!--/wrap  -->
				</div><!--/row  -->
			</div><!--/container  -->
		</div><!--/menu-bar  -->
	</header>
	<!-- End of Header 
	============================================= -->


	<!-- Start of Latest news
	============================================= -->
	<section id="latest-news" class="latest-news-section">
		<div class="container">
			<div class="row section-content">
				<div class="latest-news-content">
                <h2> Input Lamaran</h2>
                <hr>
					<div class="row">
                      <form action="">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="nik" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat_lahir" name="tempat_lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir" name="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Warga Negara</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                    <option value="Warga Negara Asing">Warga Negara Asing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Alamat Sekarang</label>
                                <textarea name="alamat_sekarang" id="alamat_sekarang" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Alamat KTP</label>
                                <textarea name="alamat_ktp" id="alamat_ktp" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Telepon Rumah</label>
                                        <input type="text" class="form-control" id="telepon_rumah" placeholder="telepon_rumah" name="telepon_rumah">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Nomor Hp</label>
                                        <input type="text" class="form-control" id="no_hp" placeholder="no_hp" name="telepon_rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Hobi</label>
                                <input type="text" class="form-control" id="hobi" placeholder="hobi" name="telepon_rumah">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Transportasi Sehari hari</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Roda 2">Roda 2</option>
                                    <option value="Roda 4">Roda 4</option>
                                    <option value="Angkutan Umum">Angkutan Umum</option>
                                    <option value="Sepeda">Sepeda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">E-mail</label>
                                <input type="text" class="form-control" id="email" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Pas Foto</label>
                                <input type="file" class="form-control" id="foto"  name="foto">
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Ijazah Terakhir</label>
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Scan Ijazah</label>
                                        <input type="file" class="form-control" id="ijazah"  name="ijazah">
                                    </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Tahun Lulus</label>
                                        <input type="number" class="form-control" id="tahun_lulus"  name="tahun_lulus">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Nama Sekolah / Universitas</label>
                                        <input type="text" class="form-control" id="ipk"  name="lembaga" placeholder="Nama Lembaga Pendidikan">
                                    </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan"  name="jurusan">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">IPK / Rata-Rata UN</label>
                                        <input type="text" class="form-control" id="ipk"  name="ipk">
                                    </div>
                               </div>
                           </div>
                           <br>
                           <div class="text-right">
                               <button type="submit" class="btn btn-danger "><i class="ti-location-arrow"></i> Kirim Lamaran</button>
                           </div>
                      </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Latest news
	============================================= -->


	<!-- Start of footer section
	============================================= -->
	<footer id="footer-section" class="footer-style">
		<div class="footer-overlay">
			<div class="footer-contact-content-1">
				<div class="container">
					<div class="row">
						<div class="footer-contact-content">
							<div class="row">
								<div class="col-sm-2 col-xs-5">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments-smiley"></span><span class="info-details text-uppercase">call us</span><p>560 265 1523</p></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-3 col-xs-5">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments"></span><span class="info-details text-uppercase">PLEASE</span><p>GET CALL BACK</p></li>
										</ul>
									</div>
								</div>
								<div class="footer-social pull-right mt10">
									<div class="social">
										<ul class="social-list">
											<li><a href="#"><span class="ti-facebook"></span></a></li>
											<li><a href="#"><span class="ti-twitter"></span></a></li>
											<li><a href="#"><span class="ti-google"></span></a></li>
											<li><a href="#"><span class="ti-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-contact-1 -->

			<div class="footer-main-content">
				<div class="container">
					<div class="row">
						<div class="footer-main-content-area pt75">
							<div class="row">
								<div class="col-sm-3">
									<div class="footer-logo pb20">
										<a  href="home-1.html"><img src="assets/img/f-logo.png" alt="image"></a>
									</div>
									<div class="footer-text">
										<p>Lorem ipsum dolor sit ametlyeolo consectetur adipisicing elit sed dong eiusmod tempor incididunt ut labore et incididunt.  </p>
									</div>
									<div class="footer-text">
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">RECENT TWEET</h2>
									</div>
									<!-- /title -->
									<div class="recent-tweet-list">
										<div class="tweet-icon pull-left mr20">
											<span class="red ti-twitter"></span>
										</div>
										<div class="tweet-text">
											<span class="name-tweet"><a class="" href="#">@tonmoymishal</a></span>
											<span class="tweet-content">Excepteur sint occ aecat cupidatat </span> 
											<span class="red tweet-link"><a href="#">goo.gl/GjFUTp</a></span>
											<span class="tweet-time">45 min ago</span>
										</div>
									</div>
									<!-- /list -->

									<div class="recent-tweet-list mt10">
										<div class="tweet-icon pull-left mr20">
											<span class="red ti-twitter"></span>
										</div>
										<div class="tweet-text">
											<span class="name-tweet"><a class="" href="#">@tonmoymishal</a></span>
											<span class="tweet-content">Excepteur sint occ aecat cupidatat </span> 
											<span class="red tweet-link"><a href="#">goo.gl/GjFUTp</a></span>
											<span class="tweet-time">45 min ago</span>
										</div>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">GET IN TOUCH</h2>
									</div>
									<!-- /title -->
									<div class="touch-content">
										<div class="tweet-text">
											<span class="name-tweet">Address: </span>
											<span class="tweet-content">315 Chat mohon Bazar New Yor, NY 4536 </span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">E-mail: </span>
											<span class="tweet-content">support@yourdomain.com </span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">Phone: </span>
											<span class="tweet-content">560 265 1523</span> 
										</div>
										<div class="newsletter-form">
											<form action="#" method="get" class="nwsltter">
												<div class="form-group">
													<input type="email" name="email" placeholder="Your Email" class="form-control">
												</div>
											</form>
											<div class="submit-btn">
												<button type="submit" value="Submit"><img src="assets/img/inbox.png" alt="image"></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">GALLERY</h2>
									</div>
									<div class="footer-gallery pb35">
										<ul class="footer-gallery">
											<li><a href="#"><img src="assets/img/g-1.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-2.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-3.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-4.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-5.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-6.png" alt="image"></a></li>
										</ul>
									</div>
								</div>
								<!-- /col-sm-3 -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-main-content -->
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="footer-menu-content">
							<div class="copy-right pull-left">
								<p>© 2016 <span class="red"><a href="https://www.htmlmate.com/">HTMLmate</a> </span>All right reserved. </p>
							</div>
							<div class="footer-menu-list pull-right mt25">
								<ul class="menu-list">
									<li><a href="#">Home</a><span>/</span></li>
									<li><a href="#">Event</a><span>/</span></li>
									<li><a href="#">Cause</a><span>/</span></li>
									<li><a href="#">FAQ</a><span>/</span></li>
									<li><a href="#">Support</a><span></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End of footer section
	============================================= -->


	<!-- js -->
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery.counterup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/countdown.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/circle-progress.js')}}"></script>


	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->

    <script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.actions.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('delpan/rev-slider/js/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.video.min.js')}}"></script>



    <script type="text/javascript" src="{{asset('depan/assets/js/function.js')}}"></script>

</body> 
</html>