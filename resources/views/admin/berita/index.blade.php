@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Informasi Lowongan</h2>
					</div>
					<div class="d-flex">
						<button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print </span></button>
						<a href="{{Route('beritaAdd')}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" ><span class="icon-label"><i class="fa fa-plus" ></i> </span><span class="btn-text">Tambah Data </span></a>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Data Table</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>tanggal Pendaftaran</th>
                                                    <th>posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pembukaan Lowongan Pegawai</td>
                                                    <td>12 juli 2020 - 25 Juli 2020</td>
                                                    <td>Jaringan, Staff</td>
                                                    <td><p class="text-success">Sedang Berlangsung</p></td>
                                                    <td>						
                                                        <a href="{{Route('beritaShow','xalsialn')}}" class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-eye"></i> </span><span class="btn-text"> </span></a>
                                                        <a href="{{Route('beritaEdit','gdjkagu')}}" class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-edit"></i> </span><span class="btn-text"> </span></a>
                                                        <button class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-trash"></i> </span><span class="btn-text"> </span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>tanggal Pendaftaran</th>
                                                    <th>posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
    </script>
@endsection