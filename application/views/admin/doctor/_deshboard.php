

            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="pe-7s-world"></i>
                    </div>
                    <div class="header-title">
                        <h1><?php echo display('doctoress_dashboard');?></h1>
                        <small><?php echo display('doctoress_dashboard');?></small>
                        <ol class="breadcrumb">
                            
                            <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
                    </div>
                </section>

                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Patient_controller/patient_list">
                                <div class="panel-body" style="background-color: #a2e8c3">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$total_patient)?></span> </h2>
                                            <div class="small"> <?php echo display('total_patient');?> </div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/today_gate_appointment_list">
                                <div class="panel-body" style="background-color: #a2e8c3">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$to_day_get_appointment);?></span> </h2>
                                            <div class="small"> Today Get Appointment </div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                                <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/today_appointment_list">
                                    <div class="panel-body" style="background-color: #a2e8c3">
                                        <div class="statistic-box">
                                            <h2><span class="count-number"><?php echo count(@$today_appointment);?></span> </h2>
                                                <div class="small"> <?php echo display('today_appointment')?> </div>
                                            <div class="sparkline1 text-center"></div>
                                        </div>
                                        <div class="icon"><i class="ti-user"></i></div>
                                    </div>
                                </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/appointment_list">
                                <div class="panel-body" style="background-color: #a2e8c3">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count($total_appointment);?></span> </h2>
                                        <div class="small"><?php echo display('total_appointment')?></div>
                                        <div class="sparkline2 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>

                </section> <!-- /.content -->
            </div> <!-- /.content-wrapper -->
<script>




</script>            