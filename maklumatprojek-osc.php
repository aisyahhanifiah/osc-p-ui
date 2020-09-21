<?php include "header-osc.php" ?>
<?php include "sidebar-osc.php" ?>


Kebenaran Merancang


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
      <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/home"><i class="uil uil-home"></i>Laman Utama</a></li>
      <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/submissions/km">Senarai Projek</a></li>
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

              <div class="card">
                <div class="alert alert-secondary">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="box box-default box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title">Maklumat Projek</h3>
                          <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 40px;">
                              <div class="input-group-btn">
                                <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box-body form-horizontal">
                          <div class="row">
                            <label class="control-label col-md-3">Kod Projek</label>
                            <div class="col-md-9">
                              <p class="form-control-static">MPKJ-001/20</p>
                            </div>
                          </div>

                          <div class="row">
                            <label class="control-label col-md-3">Tajuk Projek</label>
                            <div class="col-md-9">
                              <p class="form-control-static">PEMBINAAN PONDOK OE DI CYBERJAYA</p>
                            </div>
                          </div>

                          <div class="row">
                            <label class="control-label col-md-3">Nama Projek</label>
                            <div class="col-md-9">
                              <p class="form-control-static">PONDOK OE</p>
                            </div>
                          </div>

                            <!--<div class="form-group">
                                <div class="col-md-3">&nbsp;</div>
                                <div class="col-md-9 row">
                                    <div class="col-md-2">
                                        <input type="checkbox"   disabled/>
                                        <label for="" class="control-label">Dalaman PPj</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">JKR</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">RUMAWIP</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">PPA1M</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">PPR</label>
                                    </div>

                                    <div class="col-md-1">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">PR1MA</label>
                                    </div>

                                </div>
                              </div>-->

                              <div class="form-group row">
                                <label class="col-md-3 control-label">Kategori Projek</label>
                                <div class="col-md-9 row">
                                  <div class="col-md-4">
                                    <input type="radio" name="project_category_id" value="1" disabled="">
                                    <label for="" class="control-label">Tidak Berkaitan</label>
                                  </div>
                                  <div class="col-md-4">
                                    <input type="radio" name="project_category_id" value="1" checked="" disabled="">
                                    <label for="" class="control-label">Persendirian</label>
                                  </div>
                                  <div class="col-md-4">
                                    <input type="radio" name="project_category_id" value="1" disabled="">
                                    <label for="" class="control-label">Projek Kerajaan</label>
                                  </div>
                                  <div class="col-md-4">
                                    <input type="radio" name="project_category_id" value="1" disabled="">
                                    <label for="" class="control-label">Usahasama (Outright Sale)</label>
                                  </div>
                                </div>
                              </div>

     <!--                       <div class="row">
                                <label for="" class="control-label col-md-3">Pemaju</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Fail Rujukan</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>
                          -->
                          <div class="row">
                            <label for="" class="control-label col-md-3">Status Projek</label>
                            <div class="col-md-9">
                              <p class="form-control-static">Perancangan</p>
                            </div>
                          </div>

    <!--                        <div class="form-group">
                                <div class="col-md-3">&nbsp;</div>
                                <div class="col-md-9">
                                    <div class="col-md-2">
                                        <input type="radio" name="is_fasttrack" value="0"
                                                 checked    disabled/>
                                        <label for="" class="control-label">Projek Biasa</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="radio" name="is_fasttrack" value="1"
                                                 disabled/>
                                        <label for="" class="control-label">FastTrack</label>
                                    </div>
                                </div>
                              </div>-->

                              <div class="form-group">
                                <label for="" class="control-label col-md-3">Focal Point</label>
                                <div class="col-md-7">
                                  <table class="table table-bordered table-striped">
                                    <thead style="background-color: #03A9F4">
                                      <tr><th width="40%">
                                        Nama Pegawai
                                      </th>
                                      <th width="30%">
                                        Nombor Telefon
                                      </th>
                                      <th width="30%">
                                        Email
                                      </th>
                                    </tr></thead>
                                    <tbody>
                                      <tr>
                                        <td>ADILAH</td>
                                        <td>0123660949</td>
                                        <td>adilah@objectexpression.com</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
    <!--
                            <div class="row">
                                <label for="" class="control-label col-md-3">Koordinat</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Status Pemaju</label>
                                <div class="col-md-9">
                                    <div class="col-md-3">
                                        <input type="radio" name="is_developer_status" id="r2" value="1"
                                                 disabled/>
                                        <label for="" class="control-label">Bumiputera</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="is_developer_status" id="r3" value="2"
                                                 disabled/>
                                        <label for="" class="control-label">Bukan Bumiputera</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="is_developer_status" id="r1" value="3"
                                                 disabled/>
                                        <label for="" class="control-label">Lain-lain</label> 
                                        <div class="text">
                                            <p>
                                            <input class="control-label" name="others" type="text" id="text1" maxlength="30" value="" disabled>
                                            </p>
                                        </div>
                                    </div>
                                                                
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Nama Syarikat Pemaju</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Alamat Syarikat Pemaju</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">No. Telefon Syarikat Pemaju</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Nombor Lesen Pemaju</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Nombor Permit Iklan dan Jualan</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Pemilik Tanah</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Pegangan Hak Milik Tanah</label>
                                <div class="col-md-9">
                                    <div class="col-md-4">
                                        <input type="radio" name="is_leasehold" value="0"
                                                checked   disabled/>
                                        <label for="" class="control-label">Pegangan Pajak</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="is_leasehold" value="1"
                                                 disabled/>
                                        <label for="" class="control-label">Hak Milik Bebas</label>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Pembiayaan</label>
                                <div class="col-md-9">
                                    <div class="col-md-2">
                                        <input type="checkbox"   disabled/>
                                        <label for="" class="control-label">Kerajaan</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Swasta</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <label for="" class="control-label col-md-3">Luas Tapak (Ekar)</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Ketumpatan Tapak</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Tarikh Cadangan Konsep</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">1970-01-01</p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Jangka Bina (Tahun)</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Jangka Siap (Tahun)</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">EOT (Extension of Time)</label>
                                <div class="col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="control-label col-md-3">Imej Perspektif</label>
                                <div class="col-md-9">
                                    <img src="/staff/project/image/60/download" width="20%">
                                </div>
                              </div> -->
                              <!-- "image" => "projects/43/Minit Mesyuarat.jpg -->
    <!--
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Perumahan</label>
                                <div class="col-md-9 row">
                                    <div class="col-md-4">
                                        <input type="checkbox"   disabled/>
                                        <label for="" class="control-label">Rumah Pangsa</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Kondominium</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Rumah Teres</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Semi-D</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Banglo</label>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="checkbox"  disabled/>
                                        <label for="" class="control-label">Lain-lain</label>
                                    </div>

                                </div>
                              </div> -->

                            </div>
                            <div class="box-footer text-center">
                              <form method="GET" action="/staff/sub-groups/project/update/60">
                                <button type="submit" class="btn btn-primary">Kemaskini Projek</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="box box-default box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Senarai Permohonan Bawah Projek</h3>
                              <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 40px;">

                                </div>
                              </div>
                            </div>

                            <div class="box-body form-horizontal">
                              <div id="submissions_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="submissions_length"><label>Papar <select name="submissions_length" aria-controls="submissions" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> rekod per halaman</label></div></div><div class="col-sm-12 col-md-6"><div id="submissions_filter" class="dataTables_filter"><label>Carian<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="submissions"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="submissions" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="submissions_info">
                                <thead style="background-color: #03A9F4">
                                  <tr role="row"><th width="12%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Tarikh Diterima: activate to sort column ascending" style="width: 70px;">Tarikh Diterima</th><th width="28%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Jenis Permohonan: activate to sort column ascending" style="width: 216px;">Jenis Permohonan</th><th width="20%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="No Permohonan: activate to sort column ascending" style="width: 143px;">No Permohonan</th><th width="25%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Koordinator: activate to sort column ascending" style="width: 188px;">Koordinator</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Status" style="width: 54px;">Status</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 55px;">Info</th><th width="7%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Buang" style="width: 47px;">Buang</th></tr>
                                </thead>
                                <tbody>


                                  <tr role="row" class="odd">
                                    <td class="text-center">30-01-2020</td>
                                    <td>Permohonan Kebenaran Merancang</td>
                                    <td class="text-center"><span style="cursor:help; color: darkblue" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PERMOHONAN KEBENARAN MERANCANG PELAN SUSUNATUR BAGI CADANGAN TAMBAHAN SEBUAH GUDANG (WAREHOUSE) DENGAN SATU TINGKAT UNIT KAWALAN QUALITY (UNIT QC), NEW REST AREA, SCHEDULED WASTE STORAGE DAN DIESEL SKID TANK,DI ATAS LOT 1913 (PT 59), LOT 1915 (PT 80), LOT 1916 (PT 81) DAN PT 350, DAERAH ULU LANGAT,  MUKIM HULU SEMENYIH,  BERALAMAT DI LOT 1238, BATU 23, JALAN KACHAU, SUNGAI LALANG, SEMENYIH, SELANGOR DARUL EHSAN UNTUK TETUAN YOKOHAMA BATTERIES SDN. BHD.">MPKJ-KM20200129-001</span></td>
                                    <td class="text-center">Jabatan Perancangan Pembangunan</td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#spModal">Perbaharui</a></td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Info</button></td>
                                    <td class="text-center">
                                      <form class="submissiondelete" method="POST" action="/staff/sub-groups/project/submission/delete/4015"><input type="hidden" name="_token" value="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">                                                <input type="hidden" name="project_id" value="60">
                                        <button type="submit" class="btn btn-default" title="Buang Permohonan Dari Projek"><i class="uil uil-trash"></i>
                                        </button>
                                      </form>
                                    </td>
                                  </tr><tr role="row" class="even">
                                    <td class="text-center">11-02-2020</td>
                                    <td>Permohonan Permit Sementara</td>
                                    <td class="text-center"><span style="cursor:help; color: darkblue" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CADANGAN PERMIT BANGUNAN SEMENTARA BUMBUNG TERBUKA KEPADA KILANG PERUSAHAAN BERKEMBAR 3 TINGKAT SEDIADA DI ATAS LOT 5&amp;6 KILANG PERUSAHAAN SESEBUAH 3 TINGKAT SEDIADA DI ATAS LOT 7, JALAN CJ16/1A, KAWASAN PERINDUSTRIAN CHERAS JAYA, 43200 CHERAS MUKIM KAJANG, DAERAH HULU LANGAT, SELANGOR DARUL EHSAN UNTUK TETUAN AURAVILLA PROJECT SDN BHD">MPKJ-PS20200206-003</span></td>
                                    <td class="text-center">Jabatan Kawalan Bangunan</td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#spModal">Pindaan</a></td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="5124">Info</button></td>
                                    <td class="text-center">
                                      <form class="submissiondelete" method="POST" action="/staff/sub-groups/project/submission/delete/5124"><input type="hidden" name="_token" value="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">                                                <input type="hidden" name="project_id" value="60">
                                        <button type="submit" class="btn btn-default" title="Buang Permohonan Dari Projek"><i class="uil uil-trash"></i>
                                        </button>
                                      </form>
                                    </td>
                                  </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="submissions_info" role="status" aria-live="polite">Paparan halaman 1 dari 1 (2 jumlah rekod)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="submissions_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="submissions_previous"><a href="#" aria-controls="submissions" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="submissions" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="submissions_next"><a href="#" aria-controls="submissions" data-dt-idx="2" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>
                              </div>
                              <form method="GET" action="/staff/sub-groups/project/submission/add/60">
                                <div class="box-footer text-center">

                                  <button type="submit" class="btn btn-primary">Tambah Permohonan</button>

                                  &nbsp;
                                  <button type="submit" class="btn btn-primary" form="chartform">Carta Bar</button>
                                </div>
                              </form>
                              <form method="get" action="/staff/sub-groups/project/chart/60" id="chartform"></form>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12">
                            <div class="box box-default box-solid">
                              <div class="box-header with-border">
                                <h3 class="box-title">Ahli Projek</h3>
                                <div class="box-tools">
                                  <div class="input-group input-group-sm" style="width: 40px;">
                                    <div class="input-group-btn">

                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="box-body form-horizontal">
                                <div id="members_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="members_length"><label>Papar <select name="members_length" aria-controls="members" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> rekod per halaman</label></div></div><div class="col-sm-12 col-md-6"><div id="members_filter" class="dataTables_filter"><label>Carian<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="members"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="members" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="members_info">
                                  <thead style="background-color: #03A9F4">
                                    <tr role="row"><th width="25%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 172px;">Nama</th><th width="15%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Profession: activate to sort column ascending" style="width: 94px;">Profession</th><th width="45%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama Syarikat: activate to sort column ascending" style="width: 340px;">Nama Syarikat</th><th width="5%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="PSP" style="width: 35px;">PSP</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 54px;">Info</th><th width="7%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Buang" style="width: 46px;">Buang</th></tr>
                                  </thead>
                                  <tbody>



                                    <tr role="row" class="odd">
                                      <td class="text-center">SAW HAN WOEI</td>
                                      <td class="text-center">Jurutera Awam</td>
                                      <td class="text-center">JS WARISAN SDN BHD</td>
                                      <td class="text-center"> Ya </td>
                                      <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember1">Info</button></td>
                                      <td class="text-center"><form class="memberdelete" method="POST" action="/staff/sub-groups/project/member/delete/62"><input type="hidden" name="_token" value="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">                                            <input type="hidden" name="project_id" value="60">
                                        <button type="button" class="btn btn-default" title="Buang Ahli Dari Projek"><i class="uil uil-trash"></i>
                                        </button>
                                      </form></td>
                                    </tr><tr role="row" class="even">
                                      <td class="text-center">LEE YU KHEN</td>
                                      <td class="text-center">Perancang Bandar</td>
                                      <td class="text-center">JURURANCANG LYK</td>
                                      <td class="text-center"> Tidak</td>
                                      <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember2">Info</button></td>
                                      <td class="text-center"><form class="memberdelete" method="POST" action="/staff/sub-groups/project/member/delete/63"><input type="hidden" name="_token" value="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">                                            <input type="hidden" name="project_id" value="60">
                                        <button type="button" class="btn btn-default" title="Buang Ahli Dari Projek"><i class="uil uil-trash"></i>
                                        </button>
                                      </form></td>
                                    </tr></tbody>
                                  </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="members_info" role="status" aria-live="polite">Paparan halaman 1 dari 1 (2 jumlah rekod)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="members_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="members_previous"><a href="#" aria-controls="members" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="members" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="members_next"><a href="#" aria-controls="members" data-dt-idx="2" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>
                                </div>
                                <div class="panel-footer text-center">
                                  <div class="row">
                                    <div class="col-lg-1">&nbsp;</div>
                                    <div class="col-lg-3 text-center">
                                      <form method="GET" action="/staff/sub-groups/project/member/add/60">
                                        <button type="submit" class="btn btn-primary" disabled="">Tambah Ahli (SP)</button>
                                      </form>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                      <form method="GET" action="/staff/sub-groups/project/extmember/add/60">
                                        <button type="submit" class="btn btn-primary" disabled="">Tambah Ahli Luar</button>
                                      </form>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                      <form method="GET" action="/staff/sub-groups/project/member/psp/60">
                                        <button type="submit" class="btn btn-primary">Lantik PSP</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>


                          <!-- Modal Project Member-->
                          <div class="modal fade" id="submissionMember1" aria-hidden="true" aria-modal="true" role="dialog" aria-labelledby="submissionModalLabel1">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="submissionModalTitle1">Maklumat Ahli Projek</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body" id="#">

                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Nama</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">SAW HAN WOEI</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Profession</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">Jurutera Awam</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Nama Syarikat</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">JS WARISAN SDN BHD</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">No. Tel</label>
                                    <div class="col-md-8">
                                      <p class="form-control-static col-md-1" style="padding-left: 0px;"></p>
                                      <p class="form-control-static col-md-2" style="padding-left: 0px;"></p>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer">

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="submissionMember2" aria-hidden="true" aria-modal="true" role="dialog" aria-labelledby="submissionModalLabel2">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="submissionModalTitle2">Maklumat Ahli Projek</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body" id="#">

                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Nama</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">LEE YU KHEN</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Profession</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">Perancang Bandar</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">Nama Syarikat</label>
                                    <div class="col-md-9">
                                      <p class="form-control-static">JURURANCANG LYK</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="" class="control-label col-md-3">No. Tel</label>
                                    <div class="col-md-8">
                                      <p class="form-control-static col-md-1" style="padding-left: 0px;"></p>
                                      <p class="form-control-static col-md-2" style="padding-left: 0px;"></p>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer">

                                </div>
                              </div>
                            </div>
                          </div>
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





          <div class="card">
            <div class="alert alert-secondary">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title text-center">
                      <a data-toggle="collapse" href="#attachments"><span style="text-decoration: underline">Senarai lampiran yang dimuat naik</span></a>
                    </h4>
                  </div>
                  <div id="attachments" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th class="text-center">Mandatori</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Standard Nama Fail</th>
                            <th class="text-center">Dimuat Naik</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4" class="text-left" style="font-weight: bold; text-decoration: underline">SEMUA AGENSI</td>
                          </tr>
                          <tr>
                            <td class="text-center"></td>
                            <td>BORANG B</td>
                            <td nowrap="">BRG_B_*.PDF</td>
                            <td nowrap=""><a href="/staff/file/submission/MPKJ-KM20200701-003/S_RASMI_BRG_A_.pdf" target="_blank">
                              <b>BRG_B_*.PDF</b> - <small>143.93 KB</small><br>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>RESIT BAYARAN KUMPULAN WANG PERKHIDMATAN KEMAJUAN (ISF)</td>
                           <td nowrap="">RESIT_ISF_*.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                            <i class="fa fa-asterisk text-danger"></i>
                          </td>
                          <td>KELULUSAN KEBENARAN MERANCANG YANG MASIH SAH</td>
                          <td nowrap="">KEBENARAN_MERANCANG_*.PDF</td>
                          <td nowrap="">
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>KELULUSAN PELAN JALAN DAN PARIT YANG MASIH SAH</td>
                           <td nowrap="">PELAN_JALAN_DAN_PARIT_*.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>KELULUSAN PELAN KERJA TANAH YANG MASIH SAH</td>
                           <td nowrap="">PELAN_KERJA_TANAH_*.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                          </td>
                          <td>PELAN PANCANG TANDA (SETTING OUT)</td>
                          <td nowrap="">PELAN_PANCANG_TANDA_*.PDF</td>
                          <td nowrap="">
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>PELAN STRUKTUR TERPERINCI (RC) SERTA KIRAAN STRUKTUR</td>
                           <td nowrap="">PELAN_RC_*.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>SURAT KELULUSAN/ NO. RUJUKAN PERMIT SEMENTARA</td>
                           <td nowrap="">SURAT_PERMIT_*.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                           <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                           <td>BORANG PERAKUAN PELANTIKAN SYARIKAT PEMUNGUTAN SISA PEPEJAL PEMBINAAN BERLESEN</td>
                           <td nowrap="">BORANG_PERAKUAN_SYARIKAT_PEMUNGUTAN.PDF</td>
                           <td nowrap="">
                           </td>
                         </tr>
                         <tr>
                          <td class="text-center">
                            <i class="fa fa-asterisk text-danger"></i>
                          </td>
                          <td>JADUAL PELAKSAAN PROJEK (PROJECT SCHEDULE)</td>
                          <td nowrap="">JADUAL_PROJEK.PDF</td>
                          <td nowrap="">
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <i class="fa fa-asterisk text-danger"></i>
                          </td>
                          <td>SENARAI PERUNDING PROJEK</td>
                          <td nowrap="">SENARAI_PERUNDING.PDF</td>
                          <td nowrap="">
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="alert alert-secondary">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title text-center">
                    <a data-toggle="collapse" href="#no-attachments"><span style="text-decoration: underline">Senarai lampiran mandatori yang ditanda tidak berkaitan</span></a>
                  </h4>
                </div>
                <div id="no-attachments" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>Keterangan Fail</th>
                          <th>Standard Nama Fail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td>PELAN KUNCI/ PELAN LOKASI/ PELAN  KEBENARAN MERANCANG</td>
                          <td>PELAN_KUNCI_LOKASI_KM_*.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td>GERAN/ SURAT HAKMILIK/ SURAT PERSETUJUAN BANK/ PERJANJIAN JUAL BELI/ SIJIL CARIAN RASMI</td>
                          <td>GERAN_HAKMILIK_*.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td>PELAN UKUR TANAH/ PELAN KONTUR DAN PERINCIAN</td>
                          <td>PELAN_UKUR_KONTUR_*.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">4</td>
                          <td>LAPORAN CADANGAN PEMAJUAN (LCP)</td>
                          <td>CADANGAN_PEMAJUAN.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">5</td>
                          <td>RESIT CUKAI TAKSIRAN</td>
                          <td>RESIT_CUKAI_TAKSIRAN.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">6</td>
                          <td>DOKUMEN DAFTAR TUBUH SYARIKAT</td>
                          <td>DAFTAR_SYARIKAT_*.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">7</td>
                          <td>RESIT BAYARAN CUKAI TANAH/ CUKAI PETAK</td>
                          <td>PTG_RESIT_CUKAI_TANAH.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">8</td>
                          <td>BORANG ANNEX A</td>
                          <td>JPS_ANNEX_A_*.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">9</td>
                          <td>BORANG PENGESAHAN GEOLOGI TAPAK</td>
                          <td>JMG_GEOLOGI_TAPAK.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">10</td>
                          <td>PENGIRAAN ANGGARAN BEBAN ELEKTRIK MAKSIMA/ MAP ‘B’</td>
                          <td>TNB_KIRAAN_BEBAN.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">11</td>
                          <td>LAPORAN KEJURUTERAAN PEMBETUNGAN</td>
                          <td>IWK_LAPORAN_PEMBENTUNGAN.PDF</td>
                        </tr>
                        <tr>
                          <td class="text-center">12</td>
                          <td>BORANG TEKNIKAL BEKALAN AIR</td>
                          <td>AIR_BORANG_BEKALAN.PDF</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="alert alert-secondary">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title text-center">
                    <a data-toggle="collapse" href="#lawatan"><span style="text-decoration: underline">Laporan Lawatan Tapak</span></a>
                  </h4>
                </div>
                <div id="lawatan" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="modal-body text-center">
                                <div class="row">
                                  <label for="" class="control-label col-md-12">SHOW PDF FILE</label>
                                  
                                </div>
                                <div class="row">
                                  <label for="" class="control-label col-md-12">GAMBAR PDF</label>
                                  
                                  <!-- <img style="width:500px" src="https://images.unsplash.com/photo-1591588582259-e675bd2e6088?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="rounded float-left img-responsive" alt=""> -->
                                </div>
                                <button  ref="#" data-toggle="modal" data-target="#suratmaklum" type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Edar Surat Pemakluman Kepada Semua Agensi</button>
                              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="alert alert-secondary">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title text-center">
                    <a data-toggle="collapse" href="#perakuan"><span style="text-decoration: underline">Kertas Perakuan</span></a>
                  </h4>
                </div>
                <div id="perakuan" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="modal-body text-center">
                                <div class="row">
                                  <a href="#" class="control-label col-md-12">Download Kertas Perakuan Lengkap PDF FILE</a>
                                  
                                </div>
                                
                                <!-- <button  ref="#" data-toggle="modal" data-target="#suratmaklum" type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Edar Surat Pemakluman Kepada Semua Agensi</button> -->
                              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



</div>

<div class="col-lg-3">
  <div class="card">
    <div class="alert alert-secondary">

    </div>
  </div>


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
            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Approve</button>
            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Reject</button>
            <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
