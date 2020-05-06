<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Scrooge I CRM Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand text-red" href="dashboard1.html">
                scrooge
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show-on-hover active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item" href="dashboard1.html">CRM</a>
							<a class="dropdown-item" href="dashboard2.html">Project</a>
							<a class="dropdown-item" href="dashboard3.html">Statistics</a>
							<a class="dropdown-item active" href="dashboard4.html">classic</a>
							<a class="dropdown-item" href="dashboard5.html">Analytics</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Application</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="chats.html">Chat</a>
                                    <a class="dropdown-item" href="calendar.html">Calendar</a>
                                    <a class="dropdown-item" href="email.html">Email</a>
                                    <a class="dropdown-item" href="file-manager.html">File Manager</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Authentication</a>
                                <div class="dropdown-menu open-right-side">
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Sign Up</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="signup.html">Cover</a>
                                            <a class="dropdown-item" href="signup-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Login</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="login.html">Cover</a>
                                            <a class="dropdown-item" href="login-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Recover Pwd</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="lock-screen.html">Lock Screen</a>
                                    <a class="dropdown-item" href="404.html">Error 404</a>
                                    <a class="dropdown-item" href="maintenance.html">Maintenance</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="activity.html">Activity</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								User interface
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Components</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="alerts.html">Alerts</a>
                                    <a class="dropdown-item" href="avatar.html">Avatar</a>
                                    <a class="dropdown-item" href="badge.html">Badge</a>
                                    <a class="dropdown-item" href="buttons.html">Buttons</a>
                                    <a class="dropdown-item" href="cards.html">Cards</a>
                                    <a class="dropdown-item" href="carousel.html">Carousel</a>
                                    <a class="dropdown-item" href="collapse.html">Collapse</a>
                                    <a class="dropdown-item" href="dropdowns.html">Dropdown</a>
                                    <a class="dropdown-item" href="list-group.html">List Group</a>
                                    <a class="dropdown-item" href="modal.html">Modal</a>
                                    <a class="dropdown-item" href="nav.html">Nav</a>
                                    <a class="dropdown-item" href="navbar.html">Navbar</a>
                                    <a class="dropdown-item" href="nestable.html">Nestable</a>
                                    <a class="dropdown-item" href="pagination.html">Pagination</a>
                                    <a class="dropdown-item" href="popovers.html">Popovers</a>
                                    <a class="dropdown-item" href="progress.html">Progress</a>
                                    <a class="dropdown-item" href="tooltip.html">Tooltip</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Content</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="typography.html">Typography</a>
                                    <a class="dropdown-item" href="images.html">Images</a>
                                    <a class="dropdown-item" href="media-object.html">Media Object</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Utilities</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="background.html">Background</a>
                                    <a class="dropdown-item" href="border.html">Border</a>
                                    <a class="dropdown-item" href="colors.html">Colors</a>
                                    <a class="dropdown-item" href="embeds.html">Embeds</a>
                                    <a class="dropdown-item" href="icons.html">Icons</a>
                                    <a class="dropdown-item" href="shadow.html">Shadow</a>
                                    <a class="dropdown-item" href="sizing.html">Sizing</a>
                                    <a class="dropdown-item" href="spacing.html">Spacing</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Forms</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="form-element.html">Form Elements</a>
                                    <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                                    <a class="dropdown-item" href="form-layout.html">Form Layout</a>
                                    <a class="dropdown-item" href="form-mask.html">Form Mask</a>
                                    <a class="dropdown-item" href="form-validation.html">Form Validation</a>
                                    <a class="dropdown-item" href="form-wizard.html">Form Wizard</a>
                                    <a class="dropdown-item" href="file-upload.html">File Upload</a>
                                    <a class="dropdown-item" href="editor.html">Editor</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Tables</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="basic-table.html">Basic Table</a>
                                    <a class="dropdown-item" href="data-table.html">Data Table</a>
                                    <a class="dropdown-item" href="responsive-table.html">Responsive Table</a>
                                    <a class="dropdown-item" href="editable-table.html">Editable Table</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Charts</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="line-charts.html">Line Chart</a>
                                    <a class="dropdown-item" href="area-charts.html">Area Chart</a>
                                    <a class="dropdown-item" href="bar-charts.html">Bar Chart</a>
                                    <a class="dropdown-item" href="pie-charts.html">Pie Chart</a>
                                    <a class="dropdown-item" href="realtime-charts.html">Realtime Chart</a>
                                    <a class="dropdown-item" href="mini-charts.html">Mini Chart</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Maps</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="google-map.html">Google Map</a>
                                    <a class="dropdown-item" href="vector-map.html">Vector Map</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="documentation.html" >Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log<span class="badge badge-green badge-sm badge-pill ml-10">v 1.0</span></a>
                    </li>
                </ul>
                <form class="navbar-search-alt">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="feather-icon"><i data-feather="search"></i></span></span>
                        </div>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-success badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Scrooge head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Aash Bill<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->

        

        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Classic Dashboard</h2>
						<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
					</div>
					<div class="d-flex">
						<button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-envelope-o"></i> </span><span class="btn-text">Email </span></button>
						<button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print </span></button>
						<button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text">Report </span></button>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-4">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/slide1.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Zuck Chan</span>
																<span class="d-block font-12">Design Lead, Hencework</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/slide2.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-primary rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Normand T.</span>
																<span class="d-block font-12">Sales Executive, Media</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
										</div>
									</div>
								</div>
									<div class="card">
									<div class="card-header card-header-action">
										<h6>Ratings & Reviews</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<button class="btn btn-outline-light btn-sm">Rate now</button>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-5">
												<div class="d-flex align-items-center h-100 justify-content-center text-center">
													<div>
														<div class="d-flex align-items-center  justify-content-center text-dark">
															<span class="counter-anim display-3">3.4</span>
															<span class="review-star starred ml-10">
																<span class="feather-icon"><i data-feather="star"></i></span>
															</span>
														</div>
														<span class="font-14">949 ratings & 18 reviews</span>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="progress-wrap lb-side-left mt-5">
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">5.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-green w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">4.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-blue w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">3.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-yellow w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">2.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-pumpkin w-55" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">1.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-red w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Budget</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="hk-legend-wrap mb-20">
											<div class="hk-legend">
												<span class="d-10 bg-red rounded-circle d-inline-block"></span><span>A1</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-red-light-1 rounded-circle d-inline-block"></span><span>A2</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-red-light-2 rounded-circle d-inline-block"></span><span>A3</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-red-light-3 rounded-circle d-inline-block"></span><span>A4</span>
											</div>
										</div>
										<div id="e_chart_9" class="echart" style="height: 200px;"></div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-8">
								<div class="card card-refresh">
									<div class="refresh-container">
										<div class="loader-pendulums"></div>
									</div>
									<div class="card-header card-header-action">
										<h6>Yearly Revenue</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="mb-20">
                                        <div class="display-6 text-dark">$40,630.59</div>
											<div class="font-16 text-green font-weight-500">
											    <i class="ion ion-md-arrow-up mr-5"></i>
										        <span>5.12%</span>
                                            </div>
                                            <div id="e_chart_2" class="echart" style="height:190px;"></div>
                                            <div class="hk-legend-wrap mt-10">
													<div class="hk-legend">
														<span class="d-10 bg-red rounded-circle d-inline-block"></span><span>Today</span>
													</div>
													<div class="hk-legend">
														<span class="d-10 bg-red-light-4 rounded-circle d-inline-block"></span><span>Yesterday</span>
													</div>
												</div>
										</div>
									</div>
								</div>
								
								<div class="card">
									<div class="card-body pa-0">
										<div class="table-wrap">
											<div class="table-responsive">
												<div id="support_table_wrapper" class="dataTables_wrapper"><table class="table display product-overview border-none dataTable  mb-0" id="support_table" role="grid">
													<thead>
														<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 164px;" aria-sort="ascending" aria-label="ticket ID: activate to sort column descending">ticket ID</th><th class="sorting" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 203px;" aria-label="Customer: activate to sort column ascending">Customer</th><th class="sorting" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 213px;" aria-label="issue: activate to sort column ascending">issue</th><th class="sorting" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 104px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 125px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="support_table" rowspan="1" colspan="1" style="width: 114px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
													</thead>
													<tbody>
													<tr role="row" class="odd">
															<td class="sorting_1">#85457891</td>
															<td>Sue Woodger</td>
															<td>Pogody header</td>
															<td>Oct 17</td>
															<td>
																<span class="badge badge-soft-danger">pending</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="even">
															<td class="sorting_1">#85457892</td>
															<td>Mark Hay</td>
															<td>Beavis sidebar</td>
															<td>Oct 18</td>
															<td>
																<span class="badge badge-soft-success ">done</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="odd">
															<td class="sorting_1">#85457893</td>
															<td>Alan Gilchrist</td>
															<td>Pogody button</td>
															<td>Oct 22</td>
															<td>
																<span class="badge badge-soft-warning ">Pending</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="even">
															<td class="sorting_1">#85457894</td>
															<td>Anthony Davie</td>
															<td>Beryl iphone</td>
															<td>Oct 25</td>
															<td>
																<span class="badge badge-soft-success ">done</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="odd">
															<td class="sorting_1">#85457895</td>
															<td>David Perry</td>
															<td>Felix PSD</td>
															<td>Oct 25</td>
															<td>
																<span class="badge badge-soft-danger">pending</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="even">
															<td class="sorting_1">#85457896</td>
															<td>Anthony Davie</td>
															<td>Cinnabar</td>
															<td>Oct 25</td>
															<td>
																<span class="badge badge-soft-success ">done</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="odd">
															<td class="sorting_1">#85457897</td>
															<td>Mark Hay</td>
															<td>PSD resolution</td>
															<td>Oct 26</td>
															<td>
																<span class="badge badge-soft-warning ">Pending</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr><tr role="row" class="even">
															<td class="sorting_1">#85457898</td>
															<td>Jens Brincker</td>
															<td>Philbert chart</td>
															<td>Oct 27</td>
															<td>
																<span class="badge badge-soft-success">done</span>
															</td>
															<td><a href="javascript:void(0)" class="pr-10 text-blue" data-toggle="tooltip" title="" data-original-title="completed"><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a></td>
														</tr></tbody>
												</table></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('admin/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/toggle-data.js')}}"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="{{asset('admin/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('admin/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Easy pie chart JS -->
    <script src="{{asset('admin/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

	<!-- Morris Charts JavaScript -->
    <script src="{{asset('admin/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/vendors/morris.js/morris.min.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="{{asset('admin/vendors/echarts/dist/echarts-en.min.js')}}"></script>

	<!-- Owl JavaScript -->
    <script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Toastr JS -->
    <script src="{{asset('admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{asset('admin/dist/js/init.js')}}"></script>
	<script src="{{asset('admin/dist/js/dashboard4-data.js')}}"></script>
	
</body>

</html>