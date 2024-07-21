
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_new_patient'); ?></h1>
            <small><?php echo display('add_new_patient'); ?></small>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
    <!--  form area -->
        <div class="col-sm-12">
            <div  class="panel panel-bd panel-form">
                 <div class="panel-heading ">
                    <div class="panel-title" style="max-width: calc(100% - 180px);">
                        <h4><?php echo display('add_new_patient'); ?></h4>
                    </div>
               </div>

                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                        
                            $msg = $this->session->flashdata('message');
                              if($msg !=''){
                                  echo $msg;
                              }
                              if($this->session->flashdata('exception')!=""){
                                 echo $this->session->flashdata('exception');
                            }
                            $attributes = array('role'=>'form','name'=>'ed_p');
                            echo form_open_multipart('admin/Patient_controller/edit_save_patient', $attributes);                
                        
                         ?>
                        
                        <div class="form-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class=" control-label"> Nama Lengkap </label>
                                    <div class="">
                                        <input type="text" name="title" class="form-control" value="<?php echo @$patient_info->title;?>"  placeholder="title" > 
                                    </div>
                                </div>
                                
                              

                            <div class="row">
                                <input type="hidden" name="patient_id" class="form-control" value="<?php echo @$patient_info->patient_id; ?>"> 
                                <input type="hidden" name="image" class="form-control" value="<?php echo @$patient_info->picture; ?>"> 
                        
                                <div class="form-group col-md-4">
                                    <label class=" control-label"> <?php echo display('sex');?></label>
                                    <div class="">
                                        <input type="radio" id="checkbox2_5" name="gender" <?php echo ($patient_info->sex=='Male')?'checked':'' ?> required value="Male">
                                        <label for="checkbox2_5"> <?php echo display('male');?></label>
                                        <input type="radio" id="checkbox2_10" name="gender" required <?php echo ($patient_info->sex=='Female')?'checked':'' ?> value="Female">
                                        <label for="checkbox2_10"> <?php echo display('female');?></label>

                                        <input type="radio" id="checkbox2_0" name="gender" required <?php echo ($patient_info->sex=='other')?'checked':'' ?> value="other">
                                        <label for="checkbox2_0"> <?php echo display('others');?></label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class=" control-label"><?php echo display('birth_date'); ?></label>
                                    <div class=" ">
                                       <input type="text" name="birth_date" value="<?php echo @$patient_info->birth_date;?>" class="form-control datepicker1 birth_date"  placeholder="<?php echo display('date_placeholder'); ?>">
                                    </div>
                                    <div class="">
                                       <input type="text" name="old" id="old" class="form-control" placeholder="<?php echo display('age'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class=" control-label"> <?php echo display('phone_number'); ?></label>
                                    <div class="">
                                        <input type="text" name="phone" value="<?php echo @$patient_info->patient_phone;?>" class="form-control" required placeholder="<?php echo display('phone_number'); ?>"> 
                                        <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class=" control-label"> Mobile</label>
                                    <div >
                                        <input type="text"  name="mobile_number" value="<?php echo @$patient_info->mobile_number;?>" class="form-control" required placeholder="Mobile Number"> 
                                    </div>
                                </div>
                           </div> 

                           <div class="row">
                               <div class="form-group col-md-8">
                                <label class="control-label"> Address</label>
                                    <div class="">
                                         <textarea name="address" id="editor1"  class="form-control" rows="3"><?php echo @$patient_info->address;?></textarea>
                                    </div>
                                </div>

                              
                           </div>


                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="" control-label">Post Code</label>
                                <div class="">
                                    <input type="text" value="<?php echo @$patient_info->post_code;?>" class="form-control" name="post_code">       
                                </div>
                            </div> 

                           <div class="form-group col-md-4">
                                    <label class="control-label"><?php echo display('blood_group'); ?> </label>
                                    <div class="">
                                        <select class="form-control" name="blood_group">
                                            <option value=''>--Pilih Golongan Darah--</option>
                                            <option value='A+'>A</option>
                                            <option value='B+'>B</option>
                                            <option value='O+'>O</option>
                                            <option value='AB+'>AB</option>
                                            <option value='Unknown'>-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="" control-label"><?php echo display('picture'); ?></label>
                                    <div class="">
                                        <input type="file" name="picture">       
                                    </div>
                                </div>    
                            </div>    

                            </div>

                            <fieldset>
                                <label> <h2>Medical Information</h2></label>

                                <div class="row">

<div class="form-group col-md-6">
    <label class="control-label">Apakah anda alergi terhadap obat atau makanan ?</label>
    <div class="">
        <input type="text" value="<?php echo @$old->food_allergies;?>" name="food_allergies" class="form-control"  placeholder="Apakah anda alergi terhadap obat atau makanan ?"> 
    </div>
</div>

<div class="form-group col-md-6">
    <label class="control-label"> Apakah memiliki Penyakit Keturunan ?</label>
    <div class="">
        <input type="text" name="bleed_tendency" class="form-control" value="<?php echo @$old->bleed_tendency;?>"  placeholder=" Apakah memiliki Penyakit Keturunan ?" > 
    </div>
</div>

<p>Berikan Informasi yang sesuai dengan keadaan pasien</p>
<div class="form-group col-md-4">
    <label class="control-label"> Penyakit Jantung </label>
    <div class="">
        <select class="form-control" name="heart_disease">
            <option value="Yes">Ya</option>
            <option value="No">Tidak</option>
        </select>
    </div>
</div>


<div class="form-group col-md-4">
    <label class=" control-label"> Penderita Diabetes</label>
    <div class="">
        <select class="form-control" name="diabetic">
            <option value="Yes">Ya</option>
            <option value="No">Tidak</option>
        </select>
    </div>
</div>

<div class="form-group col-md-4">
    <label class=" control-label"> Tekanan Darah Tinggi</label>
    <div >
        <select class="form-control" name="high_blood_pressure">
            <option value="Yes">Ya</option>
            <option value="No">Tidak</option>
        </select>
    </div>
</div>

<div class="form-group col-md-6">
    <label class="control-label">Informasi Tensi Darah</label>
    <div class="">
        <input type="text" value="<?php echo @$old->family_history;?>" name="family_history" class="form-control"  placeholder="Informasi Tensi Darah"> 
    </div>
</div>

<div class="form-group col-md-6">
    <label class="control-label">Informasi Gula Darah</label>
    <div class="">
        <input type="text" value="<?php echo @$old->curent_medication;?>" name="curent_medication" class="form-control"  placeholder="Informasi Gula Darah"> 
    </div>
</div>









</div> 
                            </fieldset>

                           



                            <div class="form-group row ">
                                <div class="col-offes-3 col-md-4" style="margin-right:15px;">
                                    <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                    <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
                                </div>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    </section>
</div>




<script type="text/javascript">

    document.forms['ed_p'].elements['blood_group'].value="<?php echo $patient_info->blood_group?>";
    
    $(document).ready(function(){
        $("#old").on('keyup',function(){
               var age = (this.value);
               if(age !==''){
              $.ajax({
                    'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/age_to_birthdate/'+age.trim(),
                    'type': 'GET', 
                    'data': {'age': age },
                    'success': function(data) { 
                        var container = $(".birth_date");
                        if(data==0){
                            container.val("0000-00-00");
                        }else{ 
                            container.val(data); 
                        }
                    }
                });
            }
        });
    })

    // load patient name
    function load_patient_id(){          
        var patient_id = document.getElementById('patient_id').value;
        if (patient_id!='') {
            
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_id/'+patient_id.trim(),
                'type': 'GET', //the way you want to send data to your URL
                'data': {'patient_id': patient_id },
                'success': function(data) { 
                    var container = $(".p_id");
                    if(data==0){
                        container.html("<div class='alert alert-success'><span class='glyphicon glyphicon-ok'></span><?php echo display('patient_id_msg')?></div>");
                        $('button[type=submit]').prop('disabled', false);
                    }else{ 
                        container.html(data);
                        $('button[type=submit]').prop('disabled', true);
                    }
                }
            });
        };
    }


$(document).ready(function(){

var che = "<?php echo $patient_info->sex;?>";

    if(che==="Female"){
        $("#female").show();
        $("#male").hide();
    } else {
        $("#male").show();
        $("#female").hide();
    }

   $("#checkbox2_5").click(function(){
        $("#male").show();
        $("#female").hide();
    });
    
    $("#checkbox2_10").click(function(){
        $("#female").show();
         $("#male").hide();
    });
    
    $("#checkbox2_0").click(function(){
        $("#male").show();
        $("#female").hide();
    });
    
});



</script>