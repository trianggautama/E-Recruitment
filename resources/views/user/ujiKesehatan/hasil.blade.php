@extends('layouts.user')

@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header align-items-top">
            <div>
                <h2 class="hk-pg-title font-weight-600 mb-10">Halaman Uji Kesehatan</h2>
            </div>
            <div class="d-flex">
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
                                                    <th>Keterangan Lulus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nama Peserta</td>
                                                    <td><a href="#" class="btn btn-sm btn-warning  mb-1"><span
                                                                class="icon-label"><i class="fa fa-download"></i>
                                                            </span><span class="btn-text"> </span></a></td>
                                                    <td><a href="#" class="btn btn-sm btn-warning  mb-1"><span
                                                                class="icon-label"><i class="fa fa-download"></i>
                                                            </span><span class="btn-text"> </span></a></td>
                                                    <td>75 Bpm</td>
                                                    <td>20 km/jam</td>
                                                    <td>
                                                       lulus
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
                                                    <th>Keterangan Lulus</th>
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