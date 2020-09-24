<?php include "header-atd.php" ?>
<?php include "sidebar-atd.php" ?>

<div class="page-wrapper">
  <div class="container-fluid">
    <!-- check if page pointed from archive applications page -->

    <div class="row">
      <div class="col-md-8">
        <h3 class="big-word mb-3">Maklumat Projek</h3>
      </div>
      <div class="col-md-4 big-word text-right">
      </div>

    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard-atd.php"><i class="uil uil-home"></i>Laman Utama</a></li>
      <li class="breadcrumb-item"><a href="senaraiprojek-atd.php">Senarai Projek</a></li>
      <li class="breadcrumb-item active">Maklumat Projek</li>
    </ol>

    <section class="content">
      <style>
        .arrow-steps .step {
         font-size: 14px;
         text-align: center;
         color: #666;
         cursor: default;
         margin: 0 3px;
         padding: 10px 10px 10px 30px;
         min-width: 180px;
         float: left;
         position: relative;
         background-color: #d9e3f7;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         transition: background-color 0.2s ease;
       }

       .arrow-steps .step:after,
       .arrow-steps .step:before {
         content: " ";
         position: absolute;
         top: 0;
         right: -17px;
         width: 0;
         height: 0;
         border-top: 19px solid transparent;
         border-bottom: 17px solid transparent;
         border-left: 17px solid #d9e3f7;
         z-index: 2;
         transition: border-color 0.2s ease;
       }

       .arrow-steps .step:before {
         right: auto;
         left: 0;
         border-left: 17px solid #fff;
         z-index: 0;
       }

       .arrow-steps .step:first-child:before {
         border: none;
       }

       .arrow-steps .step:first-child {
         border-top-left-radius: 4px;
         border-bottom-left-radius: 4px;
       }

       .arrow-steps .step span {
         position: relative;
       }

       .arrow-steps .step span:before {
         opacity: 0;
         content: "✔";
         position: absolute;
         top: -2px;
         left: -20px;
       }

       .arrow-steps .step.done span:before {
         opacity: 1;
         -webkit-transition: opacity 0.3s ease 0.5s;
         -moz-transition: opacity 0.3s ease 0.5s;
         -ms-transition: opacity 0.3s ease 0.5s;
         transition: opacity 0.3s ease 0.5s;
       }

       .arrow-steps .step.current {
         color: #fff;
         background-color: #23468c;
       }

       .arrow-steps .step.current a{
         color: #fff;
       }

       .arrow-steps .step.current:after {
         border-left: 17px solid #23468c;
       }

       .clearfix:after {
        clear: both;
        content: "";
        display: block;
        height: 0;
      }
    </style>
        <!-- <div class="arrow-steps clearfix">
            <div class="step  current "> <span> 1. Pendaftaran <br></span> </div>
            <div class="step "> <a href="https://oscstaging.kpkt.gov.my/staff/submissions/detail/6467"><span> 2. Kelulusan<br></span> </a></div>
          </div> -->
          <br>                        
          <div class="row">
            <div class="col-lg-9">
              <ul class="nav nav-tabs">
                <li class="nav-item ">
                  <a class="nav-link " href="maklumatprojek-atd.php">Maklumat Am</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="lawatantapak.php">Lawatan Tapak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="kertasperakuan.php">Kertas Perakuan</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link " href="semak.php">Semak &amp; Hantar</a>
                </li> -->
              </ul>
              <div class="card">
                <div class="alert alert-secondary">
                  <form action="#" method="post">
                    <input type="hidden" name="_token" value="KS3PHaUkT2QsvdLi4hMlDQEZ6bwzd0Fpq0RuQBjq">    <dl class="row">
                      <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Kertas Perakuan (PDF)</dt>
                      <dd class="col-sm-6  col-form-label">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                      </dd>
                    </dl>
                   
                    
                    
                    <dl class="row">
                      <dt class="col-sm-3 text-md-right control-label col-form-label mb-0"></dt>
                      <dd class="col-sm-6  col-form-label">
                        <button type="submit" class="btn btn-primary new-submit">Simpan</button>
                      </dd>
                    </dl>
                    
                  </form>
                </div>
              </div>
              <!-- team member's modal -->
              <div id="memberModal" class="modal fade" role="dialog"  aria-hidden="true"  aria-modal="true" aria-labelledby="mynoteModalLabel">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Ahli Kumpulan Koordinator</h4>
                    </div>
                    <div class="modal-body">
                      <or>
                      </or>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- status's modal -->
              <div id="statusModal" class="modal fade" role="dialog"  aria-hidden="true"  aria-modal="true" aria-labelledby="mynoteModalLabel">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Status Permohonan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <label for="" class="control-label col-md-4">Lengkap Diterima</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="full_name">OSC terima permohonan lengkap</p>
                        </div>
                      </div>
                      <div class="row">
                        <label for="" class="control-label col-md-4">Mula Diproses</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="identification">OSC lantik Jabatan Memperaku (Koordinator)</p>
                        </div>
                      </div>
                      <div class="row">
                        <label for="" class="control-label col-md-4">Sedang Diproses</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="phone">Jabatan Memperaku (Koordinator) mula memproses permohonan</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
              <div id="spModal-x" class="modal fade" role="dialog"  aria-hidden="true"  aria-modal="true" aria-labelledby="mynoteModalLabel">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Maklumat Pemohon (SP)</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <label for="" class="control-label col-md-4">Nama</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="full_name">HAILZAM ANUAR BIN SHAHROM</p>
                        </div>
                      </div>
                      <div class="row">
                        <label for="" class="control-label col-md-4">Kad Pengenalan (MyKad) / Pasport</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="identification">771114715107</p>
                        </div>
                      </div>
                      <div class="row">
                        <label for="" class="control-label col-md-4">No Tel</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="phone">019 6663654</p>
                        </div>
                      </div>
                      <div class="row">
                        <label for="" class="control-label col-md-4">Nama Syarikat</label>
                        <div class="col-md-8">
                          <p class="form-control-static" id="company_name">BASIC INCEPTION SDN BHD</p>
                        </div>
                      </div>
                <!-- <div class="row">
                    <label for="" class="control-label col-md-4">Agensi JKR</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_name">Tidak</p>
                    </div>
                  </div> -->
                  <div class="row">
                    <label for="" class="control-label col-md-4">Alamat Syarikat</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_address_1">COPLACE 1</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">&nbsp;</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_address_4">CYBERJAYA</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Poskod</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="postcode">63000</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Negeri</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_address_4">SELANGOR</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">No Tel Syarikat</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_phone">03 88981111</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Sambungan</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_phone_ext"></p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">No Faks Syarikat</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_fax_part_1">03 03</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Pegawai Yang Boleh Dihubungi</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_fax_part_1">ANUAR SHAHROM</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Nombor Keahlian Profesion</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="profession_membership">BEM3544</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Tarikh Pendaftaran Profesion</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="profession_reg_date">01-02-2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Tarikh Tamat Keahlian</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="profession_expiry_date">29-02-2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Sijil Professional Individu</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="profession_cert"><a href="https://oscstaging.kpkt.gov.my/staff/download/professional/1491" target="_blank">Muat Turun</a></p>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="control-label col-md-4">Sijil Professional Syarikat</label>
                    <div class="col-md-8">
                      <p class="form-control-static" id="company_fax_part_1"> <a href="https://oscstaging.kpkt.gov.my/staff/download/company/1491" target="_blank">Muat Turun</a></p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>








        </div>

        <div class="col-lg-3">
  <!-- <div class="card">
    <div class="alert alert-secondary">

    </div>
  </div> -->


  <div class="card">
    <div class="alert alert-secondary">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title text-center"><span style="text-decoration: underline">Tindakan Lanjut</span></h4>
          </div>
          <div class="panel-body">
            <form action="/staff/submissions/activity/6467" method="get">
              <div class="box-body">
                <div class="box-footer text-center col-md-10 offset-md-1">
                  <button class="btn btn-block btn-primary">Notifikasi</button>
                </div>
              </div>
            </form>
            <br>
            <form action="/staff/submissions/activity/6467" method="get">
              <div class="box-body">
                <div class="box-footer text-center col-md-10 offset-md-1">
                  <button class="btn btn-block btn-primary">Notis</button>
                </div>
              </div>
            </form>
            <br>
            <form action="/staff/submissions/bills/6467" method="get">
              <div class="box-body">
                <div class="box-footer text-center col-md-10 offset-md-1">
                  <button class="btn btn-block btn-primary">Arahan</button>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="card">
          <div class="alert alert-secondary">
            <div class="form-group text-center">
              <label for="" class="control-label">Cetak Maklumat Projek</label>
              <div class="col-md-11">
                <a href="/staff/submissions/print/6467" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                <!--<button class="btn btn-default" disabled  style="cursor: not-allowed" title="Fungsi Dalam Pembinaan"><i class="fa fa-print"></i> Cetak</button>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</section>

</div>
<footer class="footer text-center" style="display:none">
  Dibangunkan bersama oleh Perbadanan Putrajaya dan <a href="https://basicinception.com" style="color:#fff">Basic Inception</a>.
</footer>    </div>

</div>


<script src="js/app.js?id=6d4f7650cf88c1a97d34"></script>
<script src="js/theme.js"></script>
<script src="js/resumable.js"></script>
<script src="js/form-manipulation.js"></script>
<script src="js/calculate-field.js?v=1.1"></script>
<script src="js/bootbox.min.js"></script>
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script>
    // Configure/customize these variables.
    var showChar = 180; // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Info penuh >";
    var lesstext = "Info kurang";

    $('.more').each(function () {
      var content = $(this).html();

      if (content.length > showChar) {

        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);

        var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink no-loading">' + moretext + '</a></span>';

        $(this).html(html);
      }
    });

    $(".morelink").click(function () {
      if ($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
      } else {
        $(this).addClass("less");
        $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
    });

    // Configure/customize these variables.
    var showChar2 = 200; // How many characters are shown by default
    var ellipsestext2 = "...";
    var moretext2 = "Info penuh >";
    var lesstext2 = "Info kurang";

    $('.more2').each(function () {
      var content = $(this).html();

      if (content.length > showChar2) {

        var c = content.substr(0, showChar2);
        var h = content.substr(showChar2, content.length - showChar2);

        var html = c + '<span class="moreellipses">' + ellipsestext2 + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink2 no-loading">' + moretext2 + '</a></span>';

        $(this).html(html);
      }
    });

    $(".morelink2").click(function () {
      if ($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext2);
      } else {
        $(this).addClass("less");
        $(this).html(lesstext2);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var inputs = document.getElementsByTagName("INPUT");
      var selects = document.getElementsByTagName("SELECT");
      for (var i = 0; i < inputs.length; i++) {
        inputs[i].oninvalid = function(e) {
          e.target.setCustomValidity("");
          if (!e.target.validity.valid) {
            e.target.setCustomValidity("Isi maklumat yang betul di kotak ini.");
          }
        };
        inputs[i].oninput = function(e) {
          e.target.setCustomValidity("");
        };
      }

      for (var i = 0; i < selects.length; i++) {
        selects[i].oninvalid = function(e) {
          e.target.setCustomValidity("");
          if (!e.target.validity.valid) {
            e.target.setCustomValidity("Sila buat pilihan dari senarai ini.");
          }
        };
        selects[i].oninput = function(e) {
          e.target.setCustomValidity("");
        };
      }
    })
    $('#datatable').dataTable({
      "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
      "pageLength": 50,
      "aaSorting": []
    });
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $(".select2").select2();
    $("#fontplus").click(function () {
      var fontSize = parseInt($('body').css("font-size"));
      fontSize = fontSize + 1 + "px";
      $('body').css({
        'font-size': fontSize
      });
    });
    $("#fontminus").click(function () {
      var fontSize = parseInt($('body').css("font-size"));
      fontSize = fontSize - 1 + "px";
      $('body').css({
        'font-size': fontSize
      });
    });
    $("#fontdefault").click(function () {
      var fontSize = parseInt($('body').css("font-size"));
      fontSize = fontSize - 1 + "px";
      $('body').css({
        'font-size': ''
      });
    });

    $('.datetimepicker').datetimepicker({
      stepping:1,
      format: 'DD-MM-YYYY HH:mm',
      maxDate: new Date(),
      defaultDate: new Date(),
    });

    $('.datepicker').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: 'dd-mm-yyyy'
    });
    $('.monthpicker').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: 'mm-yyyy',
      viewMode: "months",
      minViewMode: "months"
    });

    $('input.date-range').daterangepicker({
        //autoUpdateInput: false,
        locale: {
          cancelLabel: 'Clear',
          format: 'DD-MM-YYYY',
          separator: ' : '
        }
      });

    var msg = '';
    var color = '';

    toastr.options = {
        // "closeButton": true,
        "positionClass": "toast-bottom-right",
        "timeOut": "3000",
        "extendedTimeOut": "3000",
      };

      if (msg) {
        switch (color) {
          case 'success':
          toastr.success(msg);
          break;
          case 'info':
          toastr.info(msg);
          break;
          case 'warning':
          toastr.warning(msg);
          break;
          case 'error':
          toastr.error(msg);
          break;
        }
      }

    </script>

    <script>

    </script>

    <script type="text/javascript">

      $(document).ready(function(){
        var aa = '';
        if(aa) alert('Sila cetak Surat Akuan Penerimaan Permohonan');

        $("#kpi-reminder").fadeIn("slow");
      });


      $('.coordinator_id').change(
        function() {
                    //Get the teamManagement member
                    var that = $(this);
                    $.getJSON( "member/" + $(this).val(), that, function( data ) {
                      var members = "Ahli Kumpulan:";
                      $.each( data, function( key, val ) {
                        members = members + "\n" + key + ". " + val;
                      });

                        // Change tooltip
                        that.siblings('.member').prop('title', members);
                        that.siblings('.member').prop('style', 'white-space: pre-line');
                      });
                  }
                  );
      $('#acceptance_status').change(
        function() {
          if($('#acceptance_status').val() == '90')
          {
            $('#notes').show();
            $('#note').prop('disabled', false);
          }
          else
          {
            $('#notes').hide();
            $('#note').prop('disabled', true);
          }
        }
        );

      $('#btn_edit').click(
        function()
        {
          if($('#btn_edit').val() == "Kemaskini")
          {
            $('#btn_edit').val("Batal");
            $('#file_ref').prop( "disabled", false );
            $('#btn_submit').prop( "disabled", false );
          }
          else
          {
            $('#btn_edit').val("Kemaskini");
            $('#file_ref').prop( "disabled", true );
            $('#btn_submit').prop( "disabled", true );
          }
        }
        );

      $('#submission_status').change(
        function() {
          if($('#submission_status').val() == '2')
          {
            $('#notes').prop( "disabled", true );
            $('#status_notes').hide();
          }
          else
          {
            $('#status_notes').show();
            $('#notes').prop( "disabled", false );
          }
        }
        );

      $('#change_required').change(
        function(){
          if(this.checked)
          {
            $('#submission_status').prop( "disabled", false );
            $('#notes').prop( "disabled", false );
          }
          else
          {
            $('#submission_status').prop( "disabled", true );
            $('#notes').prop( "disabled", true );
          }
        }
        );

      $('#complete_submission_status_id').on('change', function()
      {
        var status = $('#complete_submission_status_id option:selected').val();
        if(status == "4")
        {
          $('.complete').show();
          $('.complete-input').prop('disabled', false);

          $('.incomplete').hide();
          $('.incomplete-input').prop('disabled', true);

                //$('#status-update').prop('disabled', false);
              }
              else if (status == "3")
              {
                $('.complete').hide();
                $('.complete-input').prop('disabled', true);

                $('.incomplete').show();
                $('.incomplete-input').prop('disabled', false);

                $('#status-update').prop('disabled', false);
              }
              else
              {
                $('.complete').hide();
                $('.complete-input').prop('disabled', true);

                $('.incomplete').hide();
                $('.incomplete-input').prop('disabled', true);

                $('#hardcopy_received').prop('checked', false);
                $('#status-update').prop('disabled', true);
              }
            });

      $('#hardcopy_received').on('change', function()
      {
        if(this.checked)
        {
          $('#status-update').prop( "disabled", false );
        }
        else
        {
          $('#status-update').prop( "disabled", true );
        }

      });
    </script>

    <script href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/bm.js"></script>
    <script>

      function getDob(nric) {
        var nricYear = nric.substr(0, 2);
        var nricMonth = nric.substr(2, 2);
        var nricDay = nric.substr(4, 2);
        var tahun = nricYear < 50 ? '20'+nricYear : '19'+nricYear;
        return nricDay+'-'+nricMonth+'-'+tahun;
      }

      function calcAge(nric) {
        var nricYear = nric.substr(0, 2);
        var tahun = nricYear < 50 ? '20'+nricYear : '19'+nricYear;
        var age = moment().format('YYYY') - tahun;
        return age <= 0 ? 'Kurang 1 Tahun' : age;
      }

      Number.prototype.formatNumber = function (c, d, t) {
        var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
      };

      function progressBarShow() {
        $('#progressBar').show();
      }

      function progressBarHide() {
        $('#progressBar').hide();
      }

      function preloaderShow() {
        $('.preloader').show();
      }

      function preloaderHide() {
        $('.preloader').fadeOut();
      }

    </script>
    <div id="suratmaklum" class="modal fade" role="dialog"  aria-hidden="true"  aria-modal="true" aria-labelledby="mynoteModalLabel">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Surat Lampiran Perbaharui/Pindaan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <label for="" class="control-label col-md-4">UPLOAD SURAT PEMAKLUMAN PDF FILE</label>
              <div class="col-md-8">
                <p class="form-control-static" id="full_name"></p>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>

    <div id="spModal" class="modal fade" role="dialog"  aria-hidden="true"  aria-modal="true" aria-labelledby="mynoteModalLabel">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Surat Lampiran Perbaharui/Pindaan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <label for="" class="control-label col-md-4">SHOW PDF FILE</label>
              <div class="col-md-8">
                <p class="form-control-static" id="full_name"></p>
              </div>
            </div>

          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
