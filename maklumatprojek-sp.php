<?php include "header-sp.php" ?>
<?php include "sidebar-sp.php" ?>

<div class="page-wrapper">


    <div class="container-fluid">
        <h3 class="big-word mb-3">Maklumat Projek</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-sp.php">Laman Utama</a></li>
            <!-- <li class="breadcrumb-item"><a href="https://oscstaging.kpkt.gov.my/staff/sub-groups/project">Projek</a></li> -->
            <li class="breadcrumb-item"><a href="senaraiprojek-sp.php">Senarai Projek</a></li>
            <li class="breadcrumb-item active">Maklumat Projek</li>
        </ol>
        <?php include "progressbar.php" ?>
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link active" href="maklumatprojek-sp.php">Maklumat Am</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="lampirankerjatanah.php">Lampiran Kerja Tanah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="lampirankerjabangunan.php">Lampiran Kerja Bangunan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="semak.php">Semak &amp; Hantar</a>
            </li>
        </ul>
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
                                <tr role="row"><th width="12%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Tarikh Diterima: activate to sort column ascending" style="width: 70px;">Tarikh Diterima</th><th width="28%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Jenis Permohonan: activate to sort column ascending" style="width: 216px;">Jenis Permohonan</th><th width="20%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="No Permohonan: activate to sort column ascending" style="width: 143px;">No Permohonan</th><th width="25%" class="text-center sorting" tabindex="0" aria-controls="submissions" rowspan="1" colspan="1" aria-label="Koordinator: activate to sort column ascending" style="width: 188px;">Koordinator</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Lanjutan" style="width: 54px;">Lanjutan</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 55px;">Info</th></tr>
                            </thead>
                            <tbody>


                                <tr role="row" class="odd">
                                    <td class="text-center">30-01-2020</td>
                                    <td>Permohonan Kebenaran Merancang</td>
                                    <td class="text-center"><span style="cursor:help; color: darkblue" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PERMOHONAN KEBENARAN MERANCANG PELAN SUSUNATUR BAGI CADANGAN TAMBAHAN SEBUAH GUDANG (WAREHOUSE) DENGAN SATU TINGKAT UNIT KAWALAN QUALITY (UNIT QC), NEW REST AREA, SCHEDULED WASTE STORAGE DAN DIESEL SKID TANK,DI ATAS LOT 1913 (PT 59), LOT 1915 (PT 80), LOT 1916 (PT 81) DAN PT 350, DAERAH ULU LANGAT,  MUKIM HULU SEMENYIH,  BERALAMAT DI LOT 1238, BATU 23, JALAN KACHAU, SUNGAI LALANG, SEMENYIH, SELANGOR DARUL EHSAN UNTUK TETUAN YOKOHAMA BATTERIES SDN. BHD.">MPKJ-KM20200129-001</span></td>
                                    <td class="text-center">Jabatan Perancangan Pembangunan</td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Perbaharui</button><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Pindaan</button></td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Info</button></td>

                                </tr><tr role="row" class="even">
                                    <td class="text-center">11-02-2020</td>
                                    <td>Permohonan Permit Sementara</td>
                                    <td class="text-center"><span style="cursor:help; color: darkblue" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CADANGAN PERMIT BANGUNAN SEMENTARA BUMBUNG TERBUKA KEPADA KILANG PERUSAHAAN BERKEMBAR 3 TINGKAT SEDIADA DI ATAS LOT 5&amp;6 KILANG PERUSAHAAN SESEBUAH 3 TINGKAT SEDIADA DI ATAS LOT 7, JALAN CJ16/1A, KAWASAN PERINDUSTRIAN CHERAS JAYA, 43200 CHERAS MUKIM KAJANG, DAERAH HULU LANGAT, SELANGOR DARUL EHSAN UNTUK TETUAN AURAVILLA PROJECT SDN BHD">MPKJ-PS20200206-003</span></td>
                                    <td class="text-center">Jabatan Kawalan Bangunan</td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Perbaharui</button><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="4015">Pindaan</button></td>
                                    <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionModal" value="5124">Info</button></td>

                                </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="submissions_info" role="status" aria-live="polite">Paparan halaman 1 dari 1 (2 jumlah rekod)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="submissions_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="submissions_previous"><a href="#" aria-controls="submissions" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="submissions" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="submissions_next"><a href="#" aria-controls="submissions" data-dt-idx="2" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>
                        </div>

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
                                    <tr role="row"><th width="25%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 172px;">Nama</th><th width="15%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Profession: activate to sort column ascending" style="width: 94px;">Profession</th><th width="45%" class="text-center sorting" tabindex="0" aria-controls="members" rowspan="1" colspan="1" aria-label="Nama Syarikat: activate to sort column ascending" style="width: 340px;">Nama Syarikat</th><th width="5%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="PSP" style="width: 35px;">PSP</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 54px;">Info</th></tr>
                                </thead>
                                <tbody>



                                    <tr role="row" class="odd">
                                        <td class="text-center">SAW HAN WOEI</td>
                                        <td class="text-center">Jurutera Awam</td>
                                        <td class="text-center">JS WARISAN SDN BHD</td>
                                        <td class="text-center"> Ya </td>
                                        <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember1">Info</button></td>
                                    </tr><tr role="row" class="even">
                                        <td class="text-center">LEE YU KHEN</td>
                                        <td class="text-center">Perancang Bandar</td>
                                        <td class="text-center">JURURANCANG LYK</td>
                                        <td class="text-center"> Tidak</td>
                                        <td class="text-center"><button id="moveleft" type="button" data-toggle="modal" data-target="#submissionMember2">Info</button></td>

                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="members_info" role="status" aria-live="polite">Paparan halaman 1 dari 1 (2 jumlah rekod)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="members_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="members_previous"><a href="#" aria-controls="members" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="members" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="members_next"><a href="#" aria-controls="members" data-dt-idx="2" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal Submission-->
                <div class="modal fade" id="submissionModal" role="dialog" aria-hidden="true" aria-modal="true" aria-labelledby="submissionModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="submissionModalTitle">Maklumat Permohonan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="submissioninfo">

                            </div>
                            <div class="modal-footer">

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
    </div>
    


    <?php include "footer.php" ?>

