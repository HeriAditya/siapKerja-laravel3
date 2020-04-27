<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Siap Kerja') }}</title>

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
     <!-- Bootstrap -->
    <link href="{{ asset('template/Gentella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template/Gentella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template/Gentella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('template/Gentella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('template/Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('template/Gentella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('template/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template/Gentella/build/css/custom.min.css') }}" rel="stylesheet">
    @if(Request::url() === route('get.pkwtJasa.daftar') or Request::url() === route('get.pkwtBorong.daftar') or Request::url() === route('get.kontrakJasa.daftar') or Request::url() === route('get.kontrakBorong.daftar') or isset($token)?Request::url() === route('get.pkwt.lacak.reUploadBerkas',['token' => $token]):false)
     <style>
        /*style untuk ajax pendaftaran pkwt*/
        .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; }

        .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }

        .percent { position:absolute; display:inline-block; top:3px; left:48%; color: #7F98B2;}

    </style>
    @endif
    @if(Request::url() === route('get.pkwt.lacak') or Request::url() === route('get.verifikasi.pkwt'))
    <!-- Datatables -->
    <link href="{{ asset('template/Gentella/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/Gentella/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/Gentella/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/Gentella/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/Gentella/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    @endif
    @if(Request::url() === route('get.bursa.lowongan.admin') )
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('template/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('template/Gentella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    @endif
  </head>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
       
        <!-- /top navigation -->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIAP KERJA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('template/Gentella/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Admin</h2>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              @if(Auth::user()->jenis==1 or Auth::user()->jenis==2)
              <div class="menu_section">
                <h3>Perusahaan</h3>
                <ul class="nav side-menu">
                   <li><a><i class="fa fa-file-pdf-o"></i> Kontrak <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.kontrakBorong.daftar')}}">Pendaftaran Pemborong</a></li>
                      <li><a href="{{ route('get.kontrakJasa.daftar')}}">Pendaftaran Jasa</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-pdf-o"></i> PKWT <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="{{ route('get.pkwtJasa.daftar')}}">Pendaftaran Jasa</a></li>
                      <li><a href="{{ route('get.pkwtBorong.daftar')}}">Pendaftaran Pemborong</a></li>
                      
                    </ul>
                  </li>
                 
                  <li><a><i class="fa fa-wrench"></i> Utility <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.pkwt.lacak')}}">Lacak Proses</a></li>
                    </ul>
                  </li>
                  
                  
                </ul>
              </div>
              @endif
              @if(Auth::user()->jenis==1 or Auth::user()->jenis==3)
              <div class="menu_section">
                <h3>Admin Sistem HI</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Verifikasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.verifikasi.kontrak')}}">Kontrak</a></li>
                      <li><a href="{{ route('get.verifikasi.pkwt')}}">PKWT</a></li>
                      
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-building-o"></i> Perusahaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.perusahaan.index')}}">List Perusahaan</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-print"></i> Cetak <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.cetak.kontrak')}}">Pendaftaran Kontrak</a></li>
                      <li><a href="{{ route('get.cetak.pkwt')}}">Pendaftaran PKWT</a></li>
                      
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-bar-chart"></i> Grafik <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>
              @endif
              @if(Auth::user()->jenis==1 or Auth::user()->jenis==4)
              <div class="menu_section">
                <h3>Admin Sistem Ketenagakerjaan</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Kartu Kuning <span class="label label-success pull-right">Coming Soon</span></a>
                    <ul class="nav child_menu">
                      <li><a href="javascript:void(0)">List Permintaan</a></li>
                      <li><a href="javascript:void(0)">Cetak</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Bursa Kerja <span class="label label-success pull-right">Coming Soon</span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('get.bursa.lowongan.admin')}}">Lowongan Pekerjaan</a></li>
                      <li><a href="javascript:void(0)">Informasi Pelatihan</a></li>
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>
              @endif
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>

            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('template/Gentella/production/images/img.jpg') }}" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ route('get.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>s
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        @yield('content')
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/Gentella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/Gentella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('template/Gentella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('template/Gentella/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('template/Gentella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('template/Gentella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('template/Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('template/Gentella/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('template/Gentella/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('template/Gentella/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('template/Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('template/Gentella/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('template/Gentella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('template/Gentella/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('template/Gentella/build/js/custom.min.js') }}"></script>
    <!-- jQuery Smart Wizard (untuk pendaftaran pkwt)-->
    <script src="{{ asset('template/Gentella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>

    

    <script src="{{ asset('template/fileUpload/jquery.form.js') }}"></script>
    @if(Request::url() === route('get.pkwtJasa.daftar') or Request::url() === route('get.pkwtBorong.daftar') or Request::url() === route('get.kontrakJasa.daftar') or Request::url() === route('get.kontrakBorong.daftar') or isset($token)?Request::url() === route('get.pkwt.lacak.reUploadBerkas',['token' => $token]):false)
    <script type="text/javascript">
        //script ini untuk upload ajax pendaftaran pkwt
        var bar;
        var percent;
        var jenis_doc;
        var isUpload = [null, null, null,null, null, null,null, null, null];
        var totalUpload = 9
        var index=1;
        function changeAllAlias() { 
            //alert(document.getElementById("alias").value);
            //document.getElementsByClassName("xAlias")[1].value =  
            var alias = document.getElementById("alias").value;
            var els = document.getElementsByClassName("xAlias");
            Array.prototype.forEach.call(els, function(el) {
                // Do stuff here
                //alert(alias);
                el.value=alias;
            });
        } 
        function validate(formData, jqForm, options) {
            var form = jqForm[0];
            if (!form.file.value) {
                alert('File not found');
                return false;
            }else{
              jenis_doc = form.jenis_doc.value;
              bar = $('#bar'+jenis_doc);
              percent = $('#percent'+jenis_doc);
            }
        }
        (function() {
        
          var status = $('#status');
          $('form').ajaxForm({
              beforeSubmit: validate,
              beforeSend: function() {
                  status.empty();
                  var percentVal = '0%';
                  var posterValue = $('input[name=file]').fieldValue();
                  bar.width(percentVal)
                  percent.html(percentVal);
              },
              uploadProgress: function(event, position, total, percentComplete) {
                  var percentVal = percentComplete + '%';
                  bar.width(percentVal)
                  percent.html(percentVal);
              },
              success: function() {
                  var percentVal = 'Wait, Saving';
                  bar.width(percentVal)
                  percent.html(percentVal);
              },
              complete: function(xhr) {
                  status.html(xhr.responseText);
                  isUpload[jenis_doc-1]=1;
                  
                  const add = (a, b) => a + b
                  const jumlahUpload = isUpload.reduce(add)
                  console.log(jumlahUpload);
                  alert(xhr.responseText);
                  if(jumlahUpload<totalUpload){
                    document.getElementById("pesan").innerHTML = "<h2 class=\"StepTitle\" style=\"color:red;\">Berkas Belum Terkirim Sepenuhnya... Tetap Melanjutkan?</h2>";
                    //document.getElementsByClassName("buttonNext")[0].style.visibility = "hidden";
                  }else{
                    document.getElementById("pesan").innerHTML = "<h2 class=\"StepTitle\">Berkas Terkirim Sepenuh nya.</h2>";
                    //document.getElementsByClassName("buttonNext")[0].style.visibility = "visible";
                  }
                  //window.location.href = "/file-upload";
              }
          });
        })();
        
    </script>
    @endif
    @if(Request::url() === route('get.pkwt.lacak') or Request::url() === route('get.verifikasi.pkwt'))
    <!-- Datatables -->
    <script src="{{ asset('template/Gentella/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('template/Gentella/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/Gentella/pdfmake/build/vfs_fonts.js') }}"></script>
    @endif
    @if(Request::url() === route('get.bursa.lowongan.admin'))
    <script src="{{ asset('template/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="{{ asset('template/Gentella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
      
      
      $('#myDatepicker2').datetimepicker({
          format: 'DD/MM/YYYY'
      });
      
      
    </script>
    @endif
</body>
</html>
