@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Tambah Informasi Lowongan</h2>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Tambah Informasi Lowongan</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Judul</label>
                                            <input type="text" class="form-control" id="nama" placeholder="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Isi </label>
                                            <textarea name="isi" id="isi" rows="10" class="tinymce" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Thumbnail</label>
                                            <input type="file" class="form-control" id="nama" placeholder="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Posisi</label>
                                            <select class=" form-control select2 select2-multiple" multiple="multiple" data-placeholder="Choose">
                                                    <option value="AK">Programmer</option>
                                                    <option value="HI">Tenaga Ahli Jaringan</option>
                                            </select>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Tanggal Pembukaan Pendaftaran</label>
                                                    <input type="date" class="form-control" id="nama" placeholder="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Tanggal Penutupan Pendaftaran</label>
                                                    <input type="date" class="form-control" id="nama" placeholder="nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Pendidikan Minimal</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value=""> SMP </option>
                                                <option value=""> SMA </option>
                                                <option value=""> D2 </option>
                                                <option value=""> D3 </option>
                                                <option value=""> S1 </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Status</label>
                                            <select name="" id="" class="form-control">
                                                <option value=""> Berlangsung </option>
                                                <option value=""> Sudah Terlaksana </option>
                                            </select>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Tambah Data</button>
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