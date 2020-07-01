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
                                    <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" id="tambah"><span class="icon-label"><i class="fa fa-check-circle"></i> </span><span class="btn-text">Verifikasi</span></button>
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-sm btn-secondary mb-15"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                                                    <td width="50%">Nama</td>
                                                    <td>: Pelamar 1</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Nik</td>
                                                    <td>: 1212138780</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Jenis Kelamin</td>
                                                    <td>: Laki - Laki</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Tempat, Tanggal lahir</td>
                                                    <td>: Banjarbaru 12 Desember 1998</td>
                                                </tr>
                                            </table>
                                           </div>
                                           <div class="col-md">
                                           <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Agama</td>
                                                    <td>: Islam</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Warga Negara</td>
                                                    <td>: WNI</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Alamat KTP</td>
                                                    <td>: JL,aYANI KM 30 </td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Alamat Sekarang</td>
                                                    <td>: JL,aYANI KM 30</td>
                                                </tr>
                                            </table>
                                           </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                           <div class="col-md">
                                           <h5 class="hk-sec-title">Kontak</h5>
                                           <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Nomor Tlp Rumah</td>
                                                    <td>: 0511212112</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Nomor hp</td>
                                                    <td>: 086754644867</td>
                                                </tr>
                                            </table>
                                           </div>
                                           <div class="col-md">
                                           <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">email</td>
                                                    <td>: pelamar@gmail.com</td>
                                                </tr>
                                            </table>
                                           </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                           <div class="col-md">
                                           <h5 class="hk-sec-title">Pendidikan</h5>
                                           <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Ijazah Terakhir</td>
                                                    <td>: S1</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>Nama Sekolah / Universitas</td>
                                                    <td>: Uniska</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td>jurusan / Prodi</td>
                                                    <td>: Teknik Informatika</td>
                                                </tr>
                                            </table>
                                           </div>
                                           <div class="col-md">
                                           <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Tahun lulus</td>
                                                    <td>: 2020</td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td width="40%">IPK / Rata-rata UN</td>
                                                    <td>: 3.38</td>
                                                </tr>
                                            </table>
                                           </div>
                                       </div> 
                                       <hr>
                                       <div class="row">
                                            <div class="col-md">
                                                <h5 class="hk-sec-title">file Lampiran</h5>
                                                <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Pas Foto</td>
                                                    <td>:   
                                                        <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15"><span  class="icon-label"><i class="fa fa-paperclip"></i> </span><span class="btn-text">Foto</span></button> 
                                                    </td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td width="40%">Scan Ijazah terakhir</td>
                                                    <td>:
                                                    <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mr-15 mb-15"><span  class="icon-label"><i class="fa fa-paperclip"></i> </span><span class="btn-text">Scan Ijazah</span></button> 
                                                    </td>
                                                </tr>
                                            </table>
                                            </div>
                                            <div class="col-md">
                                            <h5 class="hk-sec-title">Status Lamaran</h5>
                                                <table width="100%">
                                                <tr height="30px !important;">
                                                    <td width="40%">Tanggal Upload</td>
                                                    <td>:   
                                                        1 Juli 2020
                                                    </td>
                                                </tr>
                                                <tr height="30px !important;">
                                                    <td width="40%">Status Lamaran</td>
                                                    <td>:
                                                        <span class="text-warning">PENDING</span>
                                                    </td>
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


<!-- Modal forms-->
<div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status">Modal Verifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('userCreate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Status</label>
                        <select name="" id="" class="form-control">
                            <option value="0">Pending</option>
                            <option value="0">Diterima</option>
                            <option value="0">Ditolak</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Simpan Verifikasi</button>
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