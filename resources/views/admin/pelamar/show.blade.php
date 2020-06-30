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
                                <div class="row">
                                    <div class="col-md-6">
                                    <h5 class="hk-sec-title">Detail Peserta</h5>
                                    </div>
                                    <div class="col-md-6 text-right">
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>
                                </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                       <div class="row">
                                           <div class="col-md">
                                           <table>
                                                <tr height="30px !important;">
                                                    <td width="50%">Posisi</td>
                                                    <td>: Jaringan, Programmer</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Tanggal Pendaftaran</td>
                                                    <td>: 1 Juli 2020 - 25 Juli 2020</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Pendidikan Minimal</td>
                                                    <td>: SMA</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Status</td>
                                                    <td>: <i class="text-success"> Sedang Berlangsung</i></td>
                                                </tr>
                                            </table>
                                           </div>
                                           <div class="col-md">
                                           <table>
                                                <tr height="30px !important;">
                                                    <td width="50%">Posisi</td>
                                                    <td>: Jaringan, Programmer</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Tanggal Pendaftaran</td>
                                                    <td>: 1 Juli 2020 - 25 Juli 2020</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Pendidikan Minimal</td>
                                                    <td>: SMA</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Status</td>
                                                    <td>: <i class="text-success"> Sedang Berlangsung</i></td>
                                                </tr>
                                            </table>
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