@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Edit User</h2>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit User</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                    <form>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Nama</label>
                                                <input type="text" class="form-control" id="nama" placeholder="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">username</label>
                                                <input type="text" class="form-control" id="username" placeholder="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormPassword1">Foto</label>
                                                <input type="file" class="form-control" id="foto">
                                                <p class="text-danger"> Isi Jika ingin merubah foto</p>
                                            </div>
                                            <div class="text-right">
                                                <a href="{{Route('userIndex')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Ubah Data</button>
                                            </div>
                                    </form>
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