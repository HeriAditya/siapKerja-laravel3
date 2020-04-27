@extends('layouts.template_heri_navbar_topbar')

@section('content')
		
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Lowongan Pekerjaan</h3>
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
                    <h2>List</h2>
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
                    <!--modalTambah-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah</button>

                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Tambah</h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Input Lowongan Pekerjaan <small></small></h2>
                                  
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <br />
                                  <form class="form-horizontal form-label-left">

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lowongan <span class="required">*</span></label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Nama Lowongan">
                                      </div>
                                    </div>
                                   <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kontak <span class="required">*</span></label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="No HP">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi <span class="required">*</span>
                                      </label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="5" placeholder="Contoh : Dibutuhkan sales marketing. Ditempatkan di ________"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kualifikasi <span class="required">*</span>
                                      </label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="5" placeholder="Contoh : Ijazah minimal SMA"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="select2_group form-control">
                                          <optgroup label="Lainnya">
                                            <option value="AZ">Non Kategori</option>
                                          </optgroup>
                                          <optgroup label="IT">
                                            <option value="AK">Programmer</option>
                                            <option value="HI">System Analis</option>
                                          </optgroup>
                                          <optgroup label="Perkantoran">
                                            <option value="CA">Administrasi</option>
                                            <option value="NV">Front Office</option>
                                          </optgroup>
                                          <optgroup label="Kesehatan">
                                            <option value="AZ">Asisten Apoteker</option>
                                            <option value="CO">Perawat</option>
                                          </optgroup>
                                          
                                          
                                        </select>
                                      </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Batas Akhir Lowongan <span class="required">*</span></label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                      </div>
                                      <div class="col-md-3 col-sm-3 col-xs-3">
                                      </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><!--endmodalbody-->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!--endModalTambah-->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Perusahaan</th>
                        </tr>
                      </thead>


                      <tbody>
                        @php
                        $i = 1
                        @endphp
                        @foreach($list_perusahaan as $lp)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$lp->namaPerusahaan}}</td>
                            <td></td>
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
