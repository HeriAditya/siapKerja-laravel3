@extends('layouts.template_heri_navbar_topbar')

@section('content')
		
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Verifikasi PKWT</h3>
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
                    <h2>List<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Program ini masih dalam tahap pengembangan. Silahkan hubungi Dinas Komunikasi dan Informatika ketika terjadi Kesalahan.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Token</th>
                          <th>Alias</th>
                          <th>Perusahaan</th>
                          <th>Tgl Daftar</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach($daftarPKWT as $pkwt)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$pkwt->tokenPKWT}}</td>
                            <td>{{$pkwt->aliasPKWT}}</td>
                            <td>{{$pkwt->namaPerusahaan}}</td>
                            <td>{{$pkwt->created_at}}</td>
                            <td>{{$pkwt->namaStatus}}</td>
                            <td>{{$pkwt->keterangan}}</td>
                            <td><a href="{{ route('get.verifikasi.pkwt').'/'.$pkwt->tokenPKWT}}"><button class="fa fa-plus"></button></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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
