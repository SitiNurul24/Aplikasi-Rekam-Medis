<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Informasi Pasien</h1>
            <small>Informasi Pasien</small>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $this->session->flashdata('message') ?? ''; ?>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3" style="text-align: center;">
                            <div style="border: 1px solid #ddd; padding: 2px;">
                                <?php if(!empty($patient_info->picture)) { ?>
                                    <img src="<?= $patient_info->picture ?>" class="img-responsive">
                                <?php } else { ?>
                                    <img src="<?= base_url('assets/images/user.png') ?>" class="img-responsive">
                                <?php } ?>
                            </div>
                            <div class="review-block-name">
                                <a href="#"><?= $patient_info->title ?></a>
                            </div>
                            <div class="review-block-date"><?= $patient_info->birth_date ?></div>
                        </div>

                        <div class="col-sm-9">
                            <div class="review-block-title"><?= $patient_info->title ?></div>
                            <p><strong><?= display('patient_id') ?> : </strong><?= $patient_info->patient_id ?></p>
                            <p><strong><?= display('patient_name') ?> : </strong><?= $patient_info->title ?></p>
                            <p><strong><?= display('phone_number') ?> : </strong><?= $patient_info->patient_phone ?></p>
                            <p><strong><?= display('blood_group') ?> : </strong><?= $patient_info->blood_group ?></p>
                            <p><strong><?= display('birth_date') ?> : </strong>
                                <?php
                                    $date1 = date_create($patient_info->birth_date ?? '');
                                    echo date_format($date1, "d-M-Y");
                                ?>
                            </p>
                            <p><strong><?= display('address') ?> : </strong><?= $patient_info->address ?></p>
                            <div>
                                <a href="<?= base_url('History_controller/patient_medical_info/'.$patient_info->patient_id) ?>" class="btn btn-success" target="_blank">
                                    <i class="ti-alert m-r-5"></i>Riwayat Penyakit
                                </a>
                            </div>
                            <br>
                            <div>
                                <a href="<?= base_url('History_controller/patient_history/'.$patient_info->patient_id) ?>" class="btn btn-success" target="_blank">
                                    <i class="ti-alert m-r-5"></i>Info Riwayat Janji Temu
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <!--  table area -->
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Diagnosa</th>
                                                <th>Pengobatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($prescription as $value) {
                                                $js_data = json_decode($value->data);
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $value->create_date_time ?></td>
                                                    <td><?= $js_data->treatment ?></td>
                                                    <td><?= $js_data->diagnostics ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
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

<?php
    $printTitle = "Patient List";
    $this->session->set_flashdata('pTitle', $printTitle);
?>
