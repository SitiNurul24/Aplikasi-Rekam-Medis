<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> informasi </title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>extra/prescription/css/bootstrap.min.css" rel="stylesheet">
        <!-- flaticon -->
        <link href="<?php echo base_url();?>extra/prescription/css/flaticon.css" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?php echo base_url();?>extra/prescription/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- style -->
        <link href="<?php echo base_url();?>extra/prescription/css/style.css" rel="stylesheet">
        <!--gogole fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,800italic,600,400italic,300italic,600italic,700italic,300|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Raleway:400,100,100italic,200,300,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    



    </head>
    <body>

    <?php 
         @$js_data = json_decode($prescription->data);
         @$medicine_data =  (array) $js_data->medicine_data;
        
    ?>

<div id="PrintMe">
        <div class="container">
            <div class="row top-bar" style="border-bottom: 7px double #EAEAEA;">
                 
                <div class="social-icons pull-right">
                    <ul>
                        <li><a href="" onclick="printContent('PrintMe')" title="Print"><i class="fa fa-print"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div>
        
        <section>
            <div class="container">
                <div class="row details-content">
                    <div class="patient-details text-center">
                        <h3>Nama: <?php echo @$info->family_name .' '. @$info->given_name ;?>
                        &nbsp;Umur: <?php echo @$info->birth_date;?>
                        &nbsp;Jenis Kelamin: <?php echo @$info->sex ;?> 
                        &nbsp;No.Pasien: <?php echo @$info->patient_id;?>
                        </h3>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="table-responsive marg">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Informasi Pasien</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td>Apakah anda alergi obat atau makanan ?</td>
                                        <td><?php echo @$info->food_allergies;?></td>
                                    </tr>

                                     <tr>
                                        <td> Apakah memiliki Penyakit Keturunan ?</td>
                                        <td><?php echo @$info->bleed_tendency;?></td>
                                    </tr>
                                     <tr>
                                        <td>Penyakit Jantung</td>
                                        <td><?php echo @$info->heart_disease;?></td>
                                    </tr>

                                    <tr>
                                        <td>Penderita Diabetes</td>
                                        <td><?php echo @$info->diabetic;?></td>
                                    </tr>

                                     <tr>
                                        <td>Tekanan Darah Tinggi</td>
                                        <td><?php echo @$info->high_blood_pressure;?></td>
                                    </tr>
                                     

                                    
                                    <tr>
                                        <td>Informasi Tensi Darah</td>
                                        <td><?php echo @$info->family_history;?></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi Gula Darah</td>
                                        <td><?php echo @$info->current_medication;?></td>
                                    </tr>
                                    

                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    


        
        <div class="container">
            <div class="row footer" style="border-top: 7px double #EAEAEA;">
               
            </div>
        </div>

    </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>extra/prescription/js/bootstrap.min.js"></script>


<script type="text/javascript">
    
    //print a div
    function printContent(el){
        var restorepage  = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        location.reload();
    }

</script>


    </body>
</html>