<?php include "header-atd.php" ?>
<?php include "sidebar-atd.php" ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-9">
                <h3 class="big-word mb-3">Senarai Projek</h3>
            </div>
            <div class="col-md-3 text-right">
               
            </div>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-sp.php"><i class="fa fa-dashboard"></i>  Laman Utama</a></li>
            <li class="breadcrumb-item active">Senarai Projek</li>
        </ol>

        <div class="card">
            <div class="alert alert-secondary">
                <div id="projects_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="projects_length"><label>Papar <select name="projects_length" aria-controls="projects" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> rekod per halaman</label></div></div><div class="col-sm-3 text-center"></div><div class="col-sm-3"><div id="projects_filter" class="dataTables_filter"><label>Carian<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="projects"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="projects" class="table table-bordered table-striped dataTable no-footer" border="#fff" role="grid" aria-describedby="projects_info">
                    <thead style="background-color: #03A9F4">
                        <tr role="row">
                            <th class="text-center sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Kod Projek: activate to sort column ascending" style="width: 342px;">Kod Projek</th>
                            <th class="text-center sorting" width="20%" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Tajuk Projek: activate to sort column ascending" style="width: 150px;">Tajuk Projek</th>
                            <th class="text-center sorting" width="20%" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Pemaju: activate to sort column ascending" style="width: 150px;">Pemaju</th>
                            <th class="text-center sorting_disabled" width="10%" rowspan="1" colspan="1" aria-label="Info" style="width: 77px;">Info</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="odd">
                            <td valign="top" colspan="1" class="dataTables_empty">MPKJ-001</td>
                            <td valign="top" colspan="1" class="dataTables_empty">UBAHSUAI DAN TAMBAHAN RUANG LANTAI KILANG</td>
                            <td valign="top" colspan="1" class="dataTables_empty">ORION FOOD INDUSTRIES (M) SDN. BHD.</td>
                            <td valign="top" colspan="1" class="dataTables_empty"><a href="maklumatprojek-atd.php">Info</a></td>
                            
                        </tr>
                    </tbody>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="projects_info" role="status" aria-live="polite">Tiada rekod wujud</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="projects_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="projects_previous"><a href="#" aria-controls="projects" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li><li class="paginate_button page-item next disabled" id="projects_next"><a href="#" aria-controls="projects" data-dt-idx="1" tabindex="0" class="page-link">Seterusnya</a></li></ul></div></div></div></div>
                </div>
            </div>

        </div>


<?php include "footer.php" ?>