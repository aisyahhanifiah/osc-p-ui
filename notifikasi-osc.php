<?php include "header-osc.php" ?>
<?php include "sidebar-osc.php" ?>


Kebenaran Merancang


<div class="page-wrapper">
  <div class="container-fluid">
    <!-- check if page pointed from archive applications page -->

    <div class="row">
      <div class="col-md-8">
        <h3 class="big-word mb-3">Notifikasi Mula Kerja</h3>
      </div>
      <div class="col-md-4 big-word text-right">
      </div>

    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard-osc.php"><i class="uil uil-home"></i>Laman Utama</a></li>
      <li class="breadcrumb-item"><a href="senaraiprojek-osc.php">Senarai Projek</a></li>
      <li class="breadcrumb-item "><a href="maklumatprojek-osc.php">Maklumat Projek</a></li>
      <li class="breadcrumb-item active">Notifikasi</li>
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
          <div class="card">
            <div class="alert alert-secondary">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <span style="text-decoration: underline">Senarai Agensi Dalaman Terlibat</span>
                    </h4>
                  </div>
                  <div id="general" class="panel-collapse collapse show">
                    <div class="panel-body">
                      <table id="bills" class="table table-bordered table-striped">
                        <thead style="background-color: #03A9F4">
                          <tr><th width="3%" class="text-center">#</th>
                            <th class="text-center">Nama Agensi</th>
                            <th class="text-center">Nama Penerima</th>
                            <th width="15%" class="text-center">Tarikh Dihantar</th>
                            <th width="13%" class="text-center">Hantar Notifikasi</th>
                            <th width="5%" class="text-center">Fail</th>
                          </tr></thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-left">Jabatan Kawalan Bangunan</td>
                              <td class="text-center">IR. FADILAH BT RAZALI</td>
                              <td class="text-center">-</td>
                              <td class="text-center"><button class="btn btn-block btn-primary" href="#" data-toggle="modal" data-target="#spModal">Hantar</button></td>
                              <td class="text-center">-</td>

                              <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Jabatan Penilaian & Pengurusan Harta</td>
                                <td class="text-center">EN. ABDUL HAIZUL FAIZAL B. ABDUL HAMID</td>
                                <td class="text-center">14/09/2020</td>
                                <td class="text-center"><button class="btn btn-block btn-primary" disabled>Hantar</button></td>

                                <td class="text-center"><button title="Muat turun Bil"><a href="#" target="_blank"> <i class="uil uil-file-alt"></i></a></button></td>

                              </tr>
                            </tbody>
                          </table>
                          <div class="row">
                            <div class="col-sm-12 text-center">
                              <a href="" class="btn btn-primary">Daftar Agensi Baru</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <br> 
          <div class="card">
            <div class="alert alert-secondary">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <span style="text-decoration: underline">Senarai Agensi Luaran Terlibat</span>
                    </h4>
                  </div>
                  <div id="general" class="panel-collapse collapse show">
                    <div class="panel-body">
                      <table id="bills" class="table table-bordered table-striped">
                        <thead style="background-color: #03A9F4">
                          <tr><th width="3%" class="text-center">#</th>
                            <th class="text-center">Nama Agensi</th>
                            <th class="text-center">Nama Penerima</th>
                            <th width="15%" class="text-center">Tarikh Dihantar</th>
                            <th width="13%" class="text-center">Hantar Notifikasi</th>
                            <th width="5%" class="text-center">Fail</th>
                          </tr></thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-left">Indah Water Konsortium Sdn Bhd (IWK)</td>
                              <td class="text-center">NOR HUWAINA BINTI BORHAN</td>
                              <td class="text-center">-</td>
                              <td class="text-center"><button class="btn btn-block btn-primary" href="#" data-toggle="modal" data-target="#spModal">Hantar</button></td>
                              <td class="text-center">-</td>

                              <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Jabatan Pengairan Dan Saliran</td>
                                <td class="text-center">SITI HAJAR BINTI ISMAIL</td>
                                <td class="text-center">14/09/2020</td>
                                <td class="text-center"><button class="btn btn-block btn-primary" disabled>Hantar</button></td>

                                <td class="text-center"><button title="Muat turun Bil"><a href="#" target="_blank"> <i class="uil uil-file-alt"></i></a></button></td>

                              </tr>
                            </tbody>
                          </table>
                          <div class="row">
                            <div class="col-sm-12 text-center">
                              <a href="" class="btn btn-primary">Daftar Agensi Baru</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              <br> 
          <div class="card">
            <div class="alert alert-secondary">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <span style="text-decoration: underline">Senarai PSP Terlibat</span>
                    </h4>
                  </div>
                  <div id="general" class="panel-collapse collapse show">
                    <div class="panel-body">
                      <table id="members" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="members_info">
                                  <thead style="background-color: #03A9F4">
                                    <tr role="row"><th width="25%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 172px;">Nama</th><th width="15%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Profession: activate to sort column ascending" style="width: 94px;">Profession</th><th width="45%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama Syarikat: activate to sort column ascending" style="width: 340px;">Nama Syarikat</th><th width="5%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="PSP" style="width: 35px;">PSP</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 54px;">Info</th><th width="13%" class="text-center">Hantar Surat Iringan</th>
                            <th width="5%" class="text-center">Fail</th></tr>
                                  </thead>
                                  <tbody>



                                    <tr role="row" class="odd">
                                      <td class="text-center">SAW HAN WOEI</td>
                                      <td class="text-center">Jurutera Awam</td>
                                      <td class="text-center">JS WARISAN SDN BHD</td>
                                      <td class="text-center"> Ya </td>
                                      <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember1">Info</button></td>
                                      <td class="text-center"><button class="btn btn-block btn-primary" href="#" data-toggle="modal" data-target="#spModal">Hantar</button></td>
                              <td class="text-center">-</td>
                                      
                                    </tr><tr role="row" class="even">
                                      <td class="text-center">LEE YU KHEN</td>
                                      <td class="text-center">Perancang Bandar</td>
                                      <td class="text-center">JURURANCANG LYK</td>
                                      <td class="text-center"> Tidak</td>
                                      <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember2">Info</button></td>
                                      <td class="text-center"><button class="btn btn-block btn-primary" disabled>Hantar</button></td>

                                <td class="text-center"><button title="Muat turun Bil"><a href="#" target="_blank"> <i class="uil uil-file-alt"></i></a></button></td>
                                     
                                    </tr></tbody>
                                  </table>
                         
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
            <h4 class="modal-title">Surat Edaran Notifikasi</h4>
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
            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Hantar</button>
            <button type="button" class="btn btn-warning" aria-hidden="true" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
