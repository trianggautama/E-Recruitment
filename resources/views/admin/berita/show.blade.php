@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Detail Berita</h2>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Detail Berita</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <img src="{{asset('admin/dist/img/landing-pg/calenderapp.png')}}" alt="" width="100%">
                                        <hr>
                                        <br>
                                        <h2>Judul Berita</h2>
                                        <small>1 Juli 2020</small>
                                        <br>
                                        <br>
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam suscipit tempora est eligendi, quisquam maiores libero adipisci mollitia, enim sed itaque quos deleniti eaque ipsum cum! Illum cupiditate nam natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptates a obcaecati labore quasi ducimus itaque sed illum corrupti dolorum neque amet expedita eos, modi impedit fuga facere perferendis atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dignissimos eligendi esse unde sit hic libero ratione, natus voluptatibus quas facere non est ex iusto nihil, autem vero sint ipsa?</p>
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam suscipit tempora est eligendi, quisquam maiores libero adipisci mollitia,</p>
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