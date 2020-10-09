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
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link " href="maklumatprojek-sp.php">Maklumat Am</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="lampirankerjatanah.php">Senarai Semak Dokumen Kerja Tanah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="lampirankerjabangunan.php">Senarai Semak Dokumen Kerja Bangunan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="semak.php">Semak &amp; Hantar</a>
            </li>
        </ul>
        <div class="card">
            <div class="alert alert-secondary">

                <style type="text/css">
                  .row-eq-height {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                }
            </style>

            <div class="box box-default">
              <div class="box-body">
                <div class="row">

                  <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        
                        <div id="add-file-drop" style="border: 2px dashed #eee;text-align: center;margin-bottom: 20px;background-color: #fff;padding: 10px">
                          <h4>Pindahkan fail di sini untuk mula memuat naik</h4>
                          <h4>Atau</h4>
                          <button type="button" class="btn btn-success add-file-btn" aria-label="Add file" id="add-file-btn">Pilih Fail<input type="file" multiple="multiple" style="display: none;"></button>
                      </div>
                      <div class="progress hide" id="upload-progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width: 0">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                    <div class="row equal">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-12">
          <table class="table table-striped">
            <thead>
                <tr>
                  <th class="text-center">Mandatori</th>
                  <th>Keterangan</th>
                  <th>Standard Nama Fail</th>
                  <th class="text-center" nowrap="">Dimuat naik</th>
              </tr>
          </thead>
          <tbody>
            <tr>
                <td colspan="4" class="text-left" style="font-weight: bold; text-decoration: underline">SEMUA AGENSI</td>
            </tr>
            <tr>
                <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                 <td>BORANG B</td>
                 <td nowrap="">BRG_B</td>
                 <td nowrap="">
                 </td>
             </tr>
              <tr>
                 <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                  <td>RESIT BAYARAN PREMIUM TANAH</td>
                  <td nowrap="">RESIT_PREMIUM_TANAH</td>
                  <td nowrap="">
                  </td>
              </tr>
              <tr>
                 <td class="text-center">
                     <i class="fa fa-asterisk text-danger"></i>
                 </td>
                 <td>RESIT BAYARAN CAJ PEMAJUAN</td>
                 <td nowrap="">RESIT_CAJ_PEMAJUAN</td>
                 <td nowrap="">
                 </td>
             </tr>
             
             <tr>
                <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                <td>KELULUSAN KEBENARAN MERANCANG YANG MASIH SAH</td>
                <td nowrap="">KEBENARAN_MERANCANG</td>
                <td nowrap="">
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                 <td>KELULUSAN PELAN JALAN DAN PARIT YANG MASIH SAH</td>
                 <td nowrap="">PELAN_JALAN_DAN_PARIT</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                 <td>PELAN BANGUNAN YANG MASIH SAH</td>
                 <td nowrap="">PELAN_BANGUNAN</td>
                 <td nowrap="">
                 </td>
             </tr>
           
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>PELAN STRUKTUR TERPERINCI (RC) SERTA KIRAAN STRUKTUR</td>
                 <td nowrap="">PELAN_RC</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>SURAT KELULUSAN/ NO. RUJUKAN PERMIT SEMENTARA</td>
                 <td nowrap="">SURAT_PERMIT</td>
                 <td nowrap="">
                 </td>
             </tr>
            <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG PERAKUAN PELANTIKAN SYARIKAT PEMUNGUTAN SISA PEPEJAL PEMBINAAN BERLESEN</td>
                 <td nowrap="">BORANG_PERAKUAN_SYARIKAT_PEMUNGUTAN</td>
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
</div>



<?php include "footer.php" ?>