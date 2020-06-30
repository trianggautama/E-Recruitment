@extends('layouts.main')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Soal</h2>
					</div>
					<div class="d-flex">
						<button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print </span></button>
						<button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" id="tambah"><span class="icon-label"><i class="fa fa-plus" ></i> </span><span class="btn-text">Tambah Data </span></button>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
                            <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Data Tabel</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Uraian Soal</th>
                                                    <th>gambar</th>
                                                    <th>Kunci Jawaban</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit modi omnis necessitatibus voluptas maiores voluptatibus quo tempora! Eum</td>
                                                    <td><img src="{{asset('admin/dist/img/avatar1.jpg')}}" class="avatar-img rounded-circle" width="45"></td>
                                                    <td>A</td>
                                                    <td>				
                                                        <a href="{{Route('soalShow','hdiahdiah')}}" class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-info-circle"></i> </span><span class="btn-text"> </span></a>		
                                                        <a href="{{Route('soalEdit','hdiahdiah')}}" class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-edit"></i> </span><span class="btn-text"> </span></a>
                                                        <button class="btn btn-sm btn-outline-light  mb-1"><span class="icon-label"><i class="fa fa-trash"></i> </span><span class="btn-text"> </span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Uraian Soal</th>
                                                    <th>gambar</th>
                                                    <th>Kunci Jawaban</th>
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

    <!-- Modal forms-->
        <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="status">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Isi </label>
                                <textarea name="isi" id="isi" class="tinymce"  rows="1" cols="1"></textarea>
                            </div>
                            Pilihan Jawaban 
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">A</label>
                                        <input type="text" class="form-control " id="a" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">C</label>
                                        <input type="text" class="form-control " id="c" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">B</label>
                                        <input type="text" class="form-control " id="b" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">D</label>
                                        <input type="text" class="form-control " id="d" >
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Kunci Jawaban</label>
                                <select name="" id="" class="form-control">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Gambar</label>
                                <input type="file" class="form-control " id="gambar" name="gambar">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Tambah Data</button>
                            </div>
                    </form>
                </div>
             </div>
        </div>
        </div>

@endsection
@section('scripts')
    <script>
       $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#exampleModalForms').modal('show');
        });
    </script>
@endsection