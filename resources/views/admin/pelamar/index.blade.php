@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Pelamar Pada Lwongan {{$lowongan->berita->judul}}</h2>
            </div>
            <div class="d-flex text-right">
                <button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span
                        class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print
                    </span></button>
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
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                   <td>1</td>
                                                   <td>1213141515141</td>
                                                   <td>Pelamar 1</td>
                                                   <td>Banjarbaru , 02 Februari 1999</td>
                                                   <td>08591321341</td>
                                                   <td>Pelamar@gmail.com</td>
                                                   <td>Belum di verifikasi</td>
                                                   <td>
                                                   <a href="{{Route('pelamarShow','xaxa')}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                               class="icon-label"><i class="fa fa-info-circle"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                   <a href="{{Route('pelamarEdit','xaxa')}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-edit"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                    <a href="{{Route('pelamarDestroy','xaxa')}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-trash"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                   </td>
                                               </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Posisi</th>
                                                    <th>IPK minimal</th>
                                                    <th>Pendidikan Terakhir</th>
                                                    <th>Tanggal Pendaftaran</th>
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