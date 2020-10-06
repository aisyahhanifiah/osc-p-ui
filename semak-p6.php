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
                <a class="nav-link " href="lampiranccc.php">Lampiran Borang Perakuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="semak-p6.php">Semak & Hantar</a>
            </li>
        </ul>
        <div class="card">
            <div class="alert alert-secondary">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-default">
                            <div class="box-body">

                                <div class="callout callout-danger">
                                    <p><b>Borang Permohonan Tidak Lengkap</b></p>
                                </div>
                                


                                <form action="/sp/application/checklist-applicable" method="post">
                                    <input type="hidden" name="_token" value="TvRumklA16WrIKa14bP8BXY2EXRANkW0WGOl6Zxa">        <div class="callout callout-danger">
                                        <p><b>Senarai fail yang belum dimuatnaik : </b></p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="15px">#</th>
                                                    <th nowrap="" class="text-center" width="150px">Tidak Berkaitan</th>
                                                    <th>Keterangan Fail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="1"></td>
                                                    <td>BORANG G8 SURAT PELEPASAN</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="2"></td>
                                                    <td>BORANG G9 SURAT PELEPASAN</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="4"></td>
                                                    <td>BORANG G11 SIJIL KELAYAKAN</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="6"></td>
                                                    <td>BORANG G13 SURAT PENGESAHAN</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="7"></td>
                                                    <td>BORANG G14 SIJIL PENGESAHAN</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="9"></td>
                                                    <td>BORANG G15 SURAT PENGESAHAN</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="15"></td>
                                                    <td>BORANG G16 SURAT PENGESAHAN</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="16"></td>
                                                    <td>BORANG G17 SURAT PENGESAHAN</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td class="text-center"><input type="checkbox" name="not_applicable[]" style="height:15px; width:15px" value="18"></td>
                                                    <td>BORANG F/ F1</td>
                                                </tr>
                                                
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center">
                                                        <button type="submit" onclick="return confirm('Saya mengesahkan senarai lampiran yang ditandakan adalah tidak berkaitan.')" class="btn btn-default">Simpan</button>
                                                        <input type="hidden" name="submission_id" value="191">
                                                        <input type="hidden" name="type" value="1">
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
</div>



<?php include "footer.php" ?>