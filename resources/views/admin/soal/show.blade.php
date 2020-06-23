@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Detail Soal</h2>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                <h5 class="hk-sec-title">Detail Soal</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            <div class="row"> 
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <img src="{{asset('admin/dist/img/landing-pg/calenderapp.png')}}" alt="" width="100%">
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit ipsam iure voluptatibus vel? Magnam delectus eligendi fugit ducimus quae, error sit eum minima temporibus, architecto non minus animi? Quisquam, doloribus?</p>
                                                <hr>
                                                <p><b>pilihan jawaban :</b></p><br>
                                                <p> A. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <p> B. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <p> C. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <p> D. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <br>
                                                <p><b>Kunci Jawaban :</b></p>
                                                <p>B</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
        </div>
        <!-- /Main Content -->


@endsection
@section('scripts')
    <script>
       $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
    </script>
@endsection