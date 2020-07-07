@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Uji Kesehatan Lowngan A</h2>
            </div>
            <div class="d-flex">
                <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15" id="tambah"><span
                        class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">Tambah Data
                    </span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-row">
                    <div class="col-lg-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Tabel Data</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Surat Keterangan Sehat </th>
                                                    <th>Surat Bebas Narkoba </th>
                                                    <th>Detak Jantung</th>
                                                    <th>Tes Lari</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Peserta 1</td>
                                                    <td><a href="#" class="btn btn-sm btn-warning  mb-1"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"> </span></a></td>
                                                    <td><a href="#" class="btn btn-sm btn-warning  mb-1"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"> </span></a></td>
                                                    <td>70 Bpm</td>
                                                    <td>20km/jam</td>
                                                    <td>
                                                        <a href="{{Route('ujiKesehatanRincianEdit','vsbdvhdb')}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-edit"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                        <button class="btn btn-sm btn-outline-light"
                                                            onclick="Hapus('')"> <i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Surat Keterangan Sehat </th>
                                                    <th>Surat Bebas Narkoba </th>
                                                    <th>Detak Jantung</th>
                                                    <th>Tes Lari</th>
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
<div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('soalStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1"> Peserta</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- pilih peserta --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Surat Kesahatan dan Tidak Buta Warna</label>
                        <input type="file" class="form-control " id="Surat_kesehatan" name="Surat_kesehatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Surat Bebas Narkoba</label>
                        <input type="file" class="form-control " id="Surat_Narkoba" name="Surat_Narkoba">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Detak Jantung (Bpm)</label>
                        <input type="text" class="form-control " id="detak_jantung" name="detak_jantung">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Hasil Tes Lari</label>
                        <input type="text" class="form-control " id="tes_lari" name="tes_lari">
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