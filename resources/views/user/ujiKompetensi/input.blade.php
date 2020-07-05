@extends('layouts.user')

@section('content')
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Halaman Detail Soal</h2>
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
                                <h5 class="hk-sec-title">Detail Soal</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{Route('beritaIndex')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <br>
                            @foreach($soals as $soal)
                            <div class="row"> 
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="row">
                                            <div class="col-md-4">
                                            @if($soal->foto)
                                            <img src="{{asset('images/soal/'. $soal->foto)}}" alt="" width="100%">
                                            @endif    
                                        </div>
                                            <div class="col-md-8">
                                                <h4>Soal {{$loop->iteration}}</h4>
                                                <p class="text-justify">{!! $soal->soal !!}</p>
                                                <hr>
                                                <p><b>pilihan jawaban :</b></p><br>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        {{$soal->a}}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        {{$soal->b}}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios3" value="option3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        {{$soal->c}}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pilihan[{{$loop->iteration -1}}]" id="exampleRadios3" value="option3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        {{$soal->d}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @endforeach
                            <hr>
                            <div class="text-right">
								<button type="submit" class="btn btn-danger "><i class="ti-save"></i>  Simpan Jawaban 
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