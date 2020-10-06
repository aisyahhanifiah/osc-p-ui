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
                <a class="nav-link " href="maklumatprojek-sp-p6.php">Maklumat Am</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="lampiranccc.php">Lampiran Borang Perakuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="semak-p6.php">Semak & Hantar</a>
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
                <td class="text-center"><i class="fa fa-asterisk text-danger"></i></td>
                 <td>BORANG G8 SURAT PELEPASAN</td>
                 <td nowrap="">BRG_G8.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG G9 SURAT PELEPASAN</td>
                 <td nowrap="">BRG_G9.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                    <i class="fa fa-asterisk text-danger"></i>
                </td>
                <td>BORANG G11 SIJIL KELAYAKAN</td>
                <td nowrap="">BRG_G11.PDF</td>
                <td nowrap="">
                </td>
            </tr>
            <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG G13 SURAT PENGESAHAN</td>
                 <td nowrap="">BRG_G13.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG G14 SIJIL PENGESAHAN</td>
                 <td nowrap="">BRG_G14.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center"><i class="fa fa-asterisk text-danger"></i>
                 </td>
                 <td>BORANG G15 SURAT PENGESAHAN</td>
                 <td nowrap="">BRG_G15.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG G16 SURAT PENGESAHAN</td>
                 <td nowrap="">BRG_G16.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
             <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG G17 SURAT PENGESAHAN</td>
                 <td nowrap="">BRG_G17.PDF</td>
                 <td nowrap="">
                 </td>
             </tr>
            <tr>
                <td class="text-center">
                 <i class="fa fa-asterisk text-danger"></i>                                                                    </td>
                 <td>BORANG F/ F1</td>
                 <td nowrap="">BRG_F.PDF</td>
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