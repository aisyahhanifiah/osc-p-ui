<?php include "header-sp.php" ?>
<?php include "sidebar-sp.php" ?>

<div class="page-wrapper">


    <div class="container-fluid">
        <h3 class="big-word mb-3">Maklumat Projek</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/home">Laman Utama</a></li>
            <!-- <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/sub-groups/project">Projek</a></li> -->
            <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/sub-groups/project/list">Senarai Projek</a></li>
            <li class="breadcrumb-item active">Maklumat Projek</li>
        </ol>
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

        <div class="arrow-steps clearfix">
            <div class="step "> <span> 1. Pendaftaran <br></span> </div>
            <div class="step "> <span> 2. Kelulusan<br></span> </div>
            <div class="step "> <span> 3. Pemberitahuan Mula Kerja<br></span></div>
            <div class="step "> <a href=""><span> 4. Pemeriksaan Interim<br></span></a> </div>
            <div class="step "> <a href=""><span> 5. Pemeriksaan Akhir CCC</span></a> </div>
            <div class="step "> <a href=""><span> 6. Pendepositan CCC</span></a> </div>
        </div>
        <br>
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link " href="maklumatprojek-sp-p4.php">Maklumat Am</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="notisbertulis.php">Notis/Arahan Bertulis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="maklumatfi.php">Maklumat Fi & Bil</a>
            </li>
        </ul>
        <div class="card">
            <div class="alert alert-secondary">
              <div class="panel-heading">
               <h4 class="medium-word mb-3" style="text-decoration: underline;">Hantar Notis Pemeriksaan</h4>

               <form action="http://128.199.195.92:8090/sp/draft/update-general" method="post">
                  <input type="hidden" name="_token" value="KS3PHaUkT2QsvdLi4hMlDQEZ6bwzd0Fpq0RuQBjq">    
                  
                  <dl class="row">
                    <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Nama Penerima (ATD)</dt>
                    <dd class="col-sm-3  col-form-label">
                      <input type="text" class="form-control" placeholder="" value="PN. NORLAILY BT RAHMAN" disabled="">
                  </dd>
              </dl>   
              <dl class="row">
                <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Tarikh Dihantar</dt>
                <dd class="col-sm-3  col-form-label">
                  <!-- <input type="text" class="form-control" placeholder="" value="MPKJ-KM20200921-001" disabled=""> -->
                  <input type="text" name="submission_accept_datetime" class="form-control complete-input datepicker" value="22-09-2020" required="" disabled="">
              </dd>
          </dl> 
          <dl class="row">
            <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Jenis Pemeriksaan</dt>
            <dd class="col-sm-3  col-form-label">
              <select id="acceptance_status" class="form-control" name="acceptance_status" required="">
                <option value="90">Pemeriksaan Interim</option>
                <option value="80" >Pemeriksaan Akhir 1</option>
                <option value="80" >Pemeriksaan Akhir 2</option>
                </select>
          </dd>
      </dl>

      <dl class="row">
        <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Cadangan Pemajuan</dt>
        <dd class="col-md-8">
          <textarea id="review" class="form-control" name="review" rows="10" cols="80" placeholder="Untuk Pemeriksaan Akhir 1 dan 2 sahaja."></textarea>
      </dd>
  </dl>


  <dl class="row">
    <dt class="col-sm-3 text-md-right control-label col-form-label mb-0"></dt>

    <dt class="col-md-3">
      <button class="btn btn-primary confirmPublish" type="button" style="width: 200px">Hantar</button>
  </dt>
</dl>

</form>
<br>
</div>

<br>
<h4 class="panel-title ml-3">
    <span style="text-decoration: underline">Senarai Notis</span>
</h4>

<div id="bills_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bills_length"><label>Papar <select name="bills_length" aria-controls="bills" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> rekod per halaman</label></div></div><div class="col-sm-12 col-md-6"><div id="bills_filter" class="dataTables_filter"><label>Carian<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bills"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="bills" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="bills_info">
    <thead style="background-color: #03A9F4">
        <tr role="row"><th width="3%" class="text-center sorting_disabled" rowspan="1" colspan="1">#</th><th width="9%" class="text-center sorting_disabled" rowspan="1" colspan="1">Tarikh Notis</th><th class="text-center sorting_disabled" rowspan="1" colspan="1">Jenis Notis</th><th width="13%" class="text-center sorting_disabled" rowspan="1" colspan="1">Nombor Notis</th><th width="10%" class="text-center sorting_disabled" rowspan="1" colspan="1">Nama Penerima (SP)</th><th width="10%" class="text-center sorting_disabled" rowspan="1" colspan="1">Dihantar Oleh</th><th width="15%" class="text-center sorting_disabled" rowspan="1" colspan="1">Kumpulan Teknikal</th><th width="5%" class="text-center sorting_disabled" rowspan="1" colspan="1">Fail Notis</th><th width="10%" class="text-center sorting_disabled" rowspan="1" colspan="1">Pemakluman Pematuhan</th></tr></thead>
        <tbody>

            <tr role="row" class="odd">
                <td class="text-center">1</td>
                <td class="text-center">25-07-2019</td>
                <td class="text-left"> Ketidakpatuhan</td>
                <td class="text-center">MPKj20190724001-002 </td><td class="text-center">ABDUL HAMID BIN AKUB</td>
                <td class="text-center">PN. NORLAILY BT RAHMAN</td>
                <td class="text-center">Jabatan Kejuruteraan</td>
                <td class="text-center"><button title="Muat turun notis"><a href="/sp/bill/29/print" target="_blank"> <i class="uil uil-file-download-alt"></i></a></button></td>
                <td width="7%" class="text-center"><button class="btn btn-primary" id="draft" type="submit" name="draft" value="1" >Hantar Notifikasi Pemeriksaan</button></td>
            </tr>
            <tr role="row" class="odd">
                <td class="text-center">1</td>
                <td class="text-center"><div style="display:none">20190724</div>24-07-2019</td>
                <td class="text-left"> Ketidakpatuhan</td>
                <td class="text-center">MPKj20190724001-001 </td><td class="text-center">ABDUL HAMID BIN AKUB</td>
                <td class="text-center">PN. NORLAILY BT RAHMAN</td>
                <td class="text-center">Jabatan Kejuruteraan</td>
                <td class="text-center"><button title="Muat turun notis"><a href="/sp/bill/29/print" target="_blank"> <i class="uil uil-file-download-alt"></i></a></button></td>
                <td width="7%" class="text-center"><button class="btn btn-primary" id="draft" type="submit" name="draft" value="1" disabled="">Hantar Notifikasi Pemeriksaan</button></td>
            </tr>
        </tbody>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="bills_info" role="status" aria-live="polite">Paparan halaman 1 dari 1 (1 jumlah rekod)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="bills_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="bills_previous"><a href="#" aria-controls="bills" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="bills" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="bills_next"><a href="#" aria-controls="bills" data-dt-idx="2" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>

    <br>

    <div id="methodModal" class="modal fade" role="dialog" aria-hidden="true" aria-modal="true" aria-labelledby="myScaleModalLabel">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sila Pilih Kaedah Pembayaran</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form method="post" action="http://127.0.0.1:8000/sp/payment/mpgs/confirm"><input type="hidden" name="_token" value="DrbpwDyhKA9aNxLXvwUL7j9L9mLeZhJ6qUQsZo2n"><button class="btn btn-primary">Kad Kredit/Debit (Merchant RHB)</button><input type="hidden" name="bill_id" id="bill_id_1" value=""></form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form method="post" action="http://127.0.0.1:8000/sp/payment/fpx/migs/confirm"><input type="hidden" name="_token" value="DrbpwDyhKA9aNxLXvwUL7j9L9mLeZhJ6qUQsZo2n"><button class="btn btn-primary">Kad Kredit/Debit (MIGS)</button><input type="hidden" id="bill_id_3" name="bill_id" value="29"></form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form method="post" action="http://127.0.0.1:8000/sp/payment/fpx/snap/confirm"><input type="hidden" name="_token" value="DrbpwDyhKA9aNxLXvwUL7j9L9mLeZhJ6qUQsZo2n"><button class="btn btn-primary">Pemindahan Antara Bank (FPX)</button><input type="hidden" id="bill_id_5" name="bill_id" value="29"></form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form method="post" action="http://127.0.0.1:8000/sp/payment/epbtpay/confirm"><input type="hidden" name="_token" value="DrbpwDyhKA9aNxLXvwUL7j9L9mLeZhJ6qUQsZo2n"><button class="btn btn-primary">EPBTPay Gateway</button><input type="hidden" id="bill_id_6" name="bill_id" value="29"></form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>



<?php include "footer.php" ?>

