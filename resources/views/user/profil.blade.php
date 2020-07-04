@extends('layouts.user')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Profil User</h2>
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
                                <h5 class="hk-sec-title">Profil User</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{Route('pelamarIndex')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            <div class="row"> 
                                <div class="col-sm">
                                <div class="form-group">
								<label for="exampleDropdownFormEmail1">NIK</label>
								<input type="number" class="form-control" id="NIK" placeholder="NIK" name="NIK"
									required>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="nama" name="name"
									required>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-radio">
										<input type="radio" value="1" id="customRadio1" name="jk"
											class="custom-control-input" required>
										<label class="custom-control-label" for="customRadio1">Laki-laki</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-radio">
										<input type="radio" value="2" id="customRadio1" name="jk"
											class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Perempuan</label>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Tempat Lahir</label>
										<input type="text" class="form-control" id="tempat_lahir"
											placeholder="tempat_lahir" name="tempat_lahir" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tanggal_lahir"
											placeholder="tanggal_lahir" name="tgl_lahir" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Agama</label>
								<select name="agama" id="agama" class="form-control" required>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Konghuchu">Konghuchu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Warga Negara</label>
								<select name="warga_negara" id="agama" class="form-control" required>
									<option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
									<option value="Warga Negara Asing">Warga Negara Asing</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Alamat Sekarang</label>
								<textarea name="alamat_sekarang" id="alamat_sekarang" class="form-control"
									required></textarea>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Alamat KTP</label>
								<textarea name="alamat_ktp" id="alamat_ktp" class="form-control" required></textarea>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Telepon Rumah</label>
										<input type="text" class="form-control" id="telepon_rumah"
											placeholder="telepon_rumah" name="tlp_rumah" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Nomor Hp</label>
										<input type="text" class="form-control" id="no_hp" placeholder="no_hp"
											name="tlp_hp" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Hobi</label>
								<input type="text" class="form-control" id="hobi" placeholder="hobi" name="hobi"
									required>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Transportasi Sehari hari</label>
								<select name="transportasi" id="agama" class="form-control " required>
									<option value="Roda 2">Roda 2</option>
									<option value="Roda 4">Roda 4</option>
									<option value="Angkutan Umum">Angkutan Umum</option>
									<option value="Sepeda">Sepeda</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">E-mail</label>
								<input type="text" class="form-control" id="email" placeholder="email" name="email"
									required>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Pas Foto</label>
								<input type="file" class="form-control" id="foto" name="foto" required>
							</div>
                                </div>
                            </div>
                            <div class="text-right">
								<button type="submit" class="btn btn-danger "><i class="ti-save"></i> Ubah Data 
									</button>
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
            $('#status').text('Tambah soal');
            $('#exampleModalForms').modal('show');
        });
    </script>
@endsection