@extends('layouts.main')

@section('content')

 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Beranda Admin</h2>
						<p>Aplikasi Rekrutmen Pegawai PT.Telkom Akses<a href="#"> Learn more.</a></p>
					</div>
					<div class="d-flex">
						<a href="{{Route('depan')}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-home"></i> </span><span class="btn-text">Halaman Depan </span></a>
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
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(admin/dist/img/slide1.jpg);">
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
							</div>
							<div class="col-lg-8">
								<div class="row">
								<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Posisi</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">12</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-home"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Lowongan</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">8</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-file-text"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pelamar</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">55</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-users"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Soal</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">38</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-question-circle"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Uji Kompetensi</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">8</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-check-circle"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Peserta Lusus</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">40</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-check-user"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
									<div class="card">
										<div class="card-header">
											<p>Lowongan yang sedang berjalan</p>
										</div>
										<div class="card-body">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-bordered table-hover mb-0">
													<thead>
														<tr>
															<th>No</th>
															<th>Pendaftaran</th>
															<th>Tanggal</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>$2000</td>
															<td>
																American Express
															</td>
															<td>
																22/10/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>$1600</td>
															<td>
																Exxon Mobil
															</td>
															<td>
																15/09/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>$1265</td>
															<td>
																Big Blackship
															</td>
															<td>
																30/08/2018
															</td>
															<td><span class="badge badge-soft-danger">Behind</span></td>
														</tr>
													</tbody>
												</table>
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
@endsection
