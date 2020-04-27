@extends('layouts.template_heri_navbar_topbar')

@section('content')
		
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Pendaftaran PKWT</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <!-- Smart Wizard -->
                   
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Langkah 1<br />
                                              <small>Petunjuk</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Langkah 2<br />
                                              <small>Upload Berkas</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Langkah 3<br />
                                              <small>Finish</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                      <div id="step-1">
                        <h2 class="StepTitle">Petunjuk</h2>
                        <p>
                          1. Siapkan Jaringan yang memadai untuk digunakan mengunggah berkas
                        </p>
                        <p>
                          2. Disarankan untuk menggunakan Browser versi terbaru untuk meminimalisir adanya crash dalam pengunggahan berkas
                        </p>
                        <p>
                          3. Pastikan semua berkas terunggah sebelum melanjutkan ke tahap selanjutnya.
                        </p>
                      </div>
                      <div id="step-2">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              
                              <div class="x_content">
                                <form class="form-horizontal form-label-left">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perihal / Alias <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <input type="text" id="alias" name="alias" required="required" class="form-control col-md-7 col-xs-12" onchange="changeAllAlias()">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pekerjaan</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="form-control">
                                        <option>Choose option</option>
                                        <option>Option one</option>
                                        <option>Option two</option>
                                        <option>Option three</option>
                                        <option>Option four</option>
                                      </select>
                                    </div>
                                  </div>
                                </form>

                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              
                              <div class="x_content">
                                 
                                @foreach($filePKWT as $file)
                                <div class="card">
                                  <div class="card-header">
                                    <h2>{{$file->namaJenis}}</h2>
                                  </div>
                                  <div class="card-body">
                                    <form method="POST" action="{{ route('fileUploadPost') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                          <input type="hidden" name="xAlias" id="xAlias" class="xAlias">
                                          
                                            <input name="file" id="poster" type="file" ><br/>
                                            <input name="jenis_doc" type="hidden" value="{{$file->jenisDoc}}">
                                            <input name="token" type="hidden" value="{{$token}}">
                                            <div class="progress">
                                                <div class="bar" id="bar{{$file->jenisDoc}}"></div >
                                                <div class="percent" id="percent{{$file->jenisDoc}}">0%</div >
                                            </div>
                                            <input type="submit"  value="Kirim" class="btn btn-success">
                                        </div>
                                    </form>    
                                  </div>
                                </div>
                                <hr style="border-top:1px solid #3d5786">
                                @endforeach
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                        <div id="step-3">
                          <div id="pesan">
                            <h2 class="StepTitle" style="color:red;">Berkas Belum Terkirim Sepenuhnya...</h2>
                          </div>
                          
                          <div id="pesanToken">
                            <h1>Token anda : {{$token}}</h1><br>
                            <p style="color:red;">Simpan baik-baik token anda untuk pengambilan bukti pendaftaran di Dinas TRANSNAKERIN</p>
                          </div>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                          <br><br>
                      </div>
                      </div>


                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
@endsection
