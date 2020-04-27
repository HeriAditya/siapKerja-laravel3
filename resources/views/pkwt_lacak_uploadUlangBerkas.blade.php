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
                                              <small>Upload Ulang</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Langkah 2<br />
                                              <small>Selesai</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                    
                      <div id="step-1">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              
                              <div class="x_content">
                                
                                @foreach($daftarFile as $file)
                                <div class="card">
                                  <div class="card-header">
                                    <h2>{{$file->namaJenis}}</h2>
                                  </div>
                                  <div class="card-body">
                                    <form method="POST" action="{{ route('fileUploadPost') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
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
                      <div id="step-2">
                      
                        <div id="pesan1">
                          <h2 class="StepTitle" style="color:red;">Jika berkas sudah terupload silahkan tunggu untuk diverivikasi</h2>
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
