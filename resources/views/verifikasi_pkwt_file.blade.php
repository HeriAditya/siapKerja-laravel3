@extends('layouts.template_heri_navbar_topbar')

@section('content')
		
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
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
                  <div class="x_title">
                    <a href="{{ route('get.verifikasi.pkwt')}}"><button class="btn btn-primary btn-sm" style="float: left;"><i class="fa fa-reply-all"></i></button><h2>Verifikasi PKWT FILE</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <form action="{{route('post.verifikasi.pkwt')}}" method="POST">
                      @csrf
                      <table id="datatable-buttons" class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Token</th>
                            <th>Nama File</th>
                            <th>Jenis Dokumen</th>                          
                            <th>Verifikasi</th>
                          </tr>
                        </thead>


                        <tbody>
                          @php
                            $i = 1;
                          @endphp
                          @foreach($file_pkwt as $pkwt)
                          <tr>
                              <td>{{$i++}}</td>
                              <td>{{$pkwt->tokenPKWT}}</td>
                              <td><a href="{{route('downloadFile',$pkwt->idFile)}}" class="btn btn-sm">{{$pkwt->originalFileName}}</td>
                              <td>{{$pkwt->namaJenis}}</td>
                              <td><input type="checkbox" name="idFile{{$pkwt->idFile}}" value="3" @if($pkwt->verifikasi==3) checked @endif></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @foreach($PKWT as $value)
                      <input type="hidden" name="tokenPKWT" value="{{$tokenPKWT}}">
                      <div class="col-sm-1">
                        <label for="verifikasi">Verifikasi</label>
                      
                        <select name="verifikasi" id="verifikasi" class="form-control" required > 
                            <option value="">-</option>
                            <option value="1" @if($value->kodeStatus==1) selected @endif>Belum</option> 
                            <option value="2" @if($value->kodeStatus==2) selected @endif>Perbaikan</option>            
                            <option value="3" @if($value->kodeStatus==3) selected @endif>Sudah</option>                   
                        </select>
                      </div>
                      <div class="col-sm-5">
                        <label class="">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="4" cols="5" >{{$value->keterangan}}</textarea>
                      </div>

                      <div class="col-sm-1">
                        <label class="">Action</label><br>
                        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                      @endforeach
                      </div>
                      
                    </form>
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
