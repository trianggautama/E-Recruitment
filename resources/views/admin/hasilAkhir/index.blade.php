@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Hasil Akhir Lowongan</h2>
            </div>
            <div class="d-flex">
            <a href="" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15 mr-5"> <i class="fa fa-print"></i> analisis Lowongan</a>
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
                                                    <th>Lowongan</th>
                                                    <th>jumlah pelamar yang lulus</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($lowongan as $d)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$d->berita->judul}}</td>
                                                    </td>
                                                    <td>-</td>
                                                    <td>
                                                        <a href="{{Route('hasilAkhirShow',['uuid' => $d->uuid])}}"
                                                            class="btn btn-sm btn-outline-light  mb-1"><span
                                                                class="icon-label"><i class="fa fa-info-circle"></i>
                                                            </span><span class="btn-text"> </span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Lowongan</th>
                                                    <th>jumlah pelamar yang lulus</th>
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