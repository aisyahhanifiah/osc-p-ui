<?php include "header-osc.php" ?>
<?php include "sidebar-osc.php" ?>

<div class="page-wrapper">
        <div class="container-fluid">
            
<div class="row">
    <div class="col-md-9">
        <h3 class="big-word mb-3">Daftar Permohonan Serentak</h3>
    </div>
    <div class="col-md-3 text-right">

    </div>
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://128.199.195.92:8090/staff/home"><i class="fa fa-dashboard"></i>Laman Utama</a></li>
    <li class="breadcrumb-item"><a href="http://128.199.195.92:8090/staff/sub-groups/concurrent/list">Senarai Permohonan Serentak</a></li>
    <li class="breadcrumb-item active">Daftar Permohonan Serentak</li>
</ol>

<div class="card">
    <div class="alert alert-secondary">
        <form action="http://128.199.195.92:8090/staff/sub-groups/concurrent/add" class="form-horizontal" method="post">
            <input type="hidden" name="_token" value="auMINvtjxhYZGVYCfHyVFoMxcNcvTDbF0BcoTUoN">            <dl class="row form-group">
                <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Tajuk<span style="color: red">*</span></dt>
                <dd class="col-sm-6">
                    <textarea name="title" style="height:100px;text-transform: uppercase" class="form-control" required=""></textarea>
                                    </dd>
            </dl>
            <dl class="row form-group">
                <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Fail Rujukan</dt>
                <dd class="col-sm-6">
                    <input type="text" class="form-control" name="osc_file_reference" value="" maxlength="50">
                                    </dd>
            </dl>

            <dl class="row form-group">
                <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Jenis Permohonan Serentak<span style="color: red">*</span></dt>
                <dd class="col-sm-6">
                    <select name="kpi_id" id="kpi_id" class="form-control" required="">
                        <option value="">Sila Pilih</option>
                                                    <option value="13">Permohonan Serentak Kebenaran Merancang (Kecil)</option>
                                                    <option value="14">Permohonan Serentak Kebenaran Merancang (Sederhana)</option>
                                                    <option value="15">Permohonan Serentak Kebenaran Merancang (Besar A)</option>
                                                    <option value="16">Permohonan Serentak Kebenaran Merancang (Besar B)</option>
                                                    <option value="17">Permohonan Serentak Pelan Bangunan &amp; Infra</option>
                                            </select>
                                    </dd>
            </dl>

            <dl class="row form-group">
                <dt class="col-sm-3 text-md-right control-label col-form-label mb-0">Kod KPKT<span style="color: red">*</span></dt>
                <dd class="col-sm-6">
                    <select name="kpkt_code_id" id="kpkt_code_id" class="form-control" required="">
                        <option value="">Sila Pilih</option>
                                                    <option value="1">A01 - Serentak : PU + KM + PB + PJ</option>
                                                    <option value="2">A02 - Serentak : PP + KM + PB + PJ</option>
                                                    <option value="3">A03 - Serentak : PU + PB + PJ</option>
                                                    <option value="4">A04 - Serentak : PP + KM + PB</option>
                                                    <option value="5">A05 - Serentak : PU + KM + PJ</option>
                                                    <option value="6">A06 - Serentak : PP + KM + PJ</option>
                                                    <option value="7">A07 - Serentak : KM + PB + PJ</option>
                                                    <option value="8">A08 - Serentak : PU + KM</option>
                                                    <option value="9">A09 - Serentak : PP + KM</option>
                                                    <option value="10">A10 - Serentak : KM + PB</option>
                                                    <option value="11">A11 - Serentak : KM +PJ</option>
                                                    <option value="12">A12 - Serentak : PB + PJ</option>
                                                    <option value="13">A22 - Serentak : PU</option>
                                                    <option value="14">A23 - Serentak : PP</option>
                                            </select>
                                    </dd>
            </dl>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Daftar">
            </div>
        </form>
    </div>
</div>

        </div>
        <footer class="footer text-center" style="display:none">
    Dibangunkan bersama oleh Perbadanan Putrajaya dan <a href="https://basicinception.com" style="color:#fff">Basic Inception</a>.
</footer>    </div>