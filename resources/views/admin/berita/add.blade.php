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
                                        <form action="{{Route('beritaStore')}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{Auth::id()}}" id="">
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Judul</label>
                                                <input type="text" class="form-control" name="judul" id="judul"
                                                    placeholder="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Isi </label>
                                                <textarea name="isi" id="isi" rows="10" class="tinymce"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Thumbnail</label>
                                                <input type="file" class="form-control" name="foto" id="nama"
                                                    placeholder="Foto">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Posisi</label>
                                                <select name="posisi[]" class=" form-control select2 select2-multiple"
                                                    multiple="multiple" data-placeholder="Choose">
                                                    @foreach($posisi as $d)
                                                    <option value="{{$d->nama}}">{{$d->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Keterangan Lowongan </label>
                                                <textarea name="keterangan" id="keterangan" rows="10"
                                                    class="tinymce"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tanggal Pembukaan
                                                            Pendaftaran</label>
                                                        <input type="date" class="form-control" name="tgl_mulai"
                                                            id="nama" placeholder="nama">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tanggal Penutupan
                                                            Pendaftaran</label>
                                                        <input type="date" name="tgl_selesai" class="form-control"
                                                            id="nama" placeholder="nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Pendidikan Minimal</label>
                                                <select name="pendidikan_terakhir" id="" class="form-control">
                                                    <option value="">-- Pilih Pendidikan --</option>
                                                    <option value="SMP"> SMP </option>
                                                    <option value="SMA"> SMA </option>
                                                    <option value="D2"> D2 </option>
                                                    <option value="D3"> D3 </option>
                                                    <option value="S1"> S1 </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="1"> Berlangsung </option>
                                                    <option value="2"> Sudah Terlaksana </option>
                                                </select>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>
                                                    Tambah Data</button>
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