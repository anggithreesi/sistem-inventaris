<?php


/*foreach ($results as $menulists) {


  @$menulistRow .= "<tr class='gradeA odd'>

								<td class='center'>" . $menulists->MENU_TEXT . "

								<td>" . $menulists->MENU_URL . "

								<td>" . $menulists->SORT_ORDER . "

								<td class=center>" . $menulists->PARENT_ID . "";


}*/
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                pegawai FORM
            </header>
            <?php
            if ($this->session->flashdata('msg')) ;
            echo $this->session->flashdata('msg');

            ?>
            <div class="panel-body">
                <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped', 'method' => 'post');
                echo form_open_multipart('Pegawai/update_pegawai', $attributes); ?>

                <div class="form-group">
                    <div class="col-sm-6"><label>Nama Pegawai</label><input class="form-control" name="emp_name"
                                                                        autofocus="" type="text"
                                                                        value="<?= $edit_pegawai->EMP_NAME; ?>">
                    <input type="hidden" name="emp_id" value="<?=$edit_pegawai->EMP_ID;?>">
                    </div>
                    <div class="col-sm-6"><label>email</label><input class="form-control" 
                                                                     value="<?= $edit_pegawai->EMP_EMAIL; ?>"
                                                                     name="emp_email" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6"><label>Alamat</label><input class="form-control"
                                                                               value="<?= $edit_pegawai->EMP_ADDRESS; ?>"
                                                                               name="address" type="text">
                    </div>
                    <div class="col-sm-6"><label>GENDER</label>
                        <select name="emp_gender" class='form-control' id='emp_gender'>
                            <option value="0">Select Gender</option>
                            <?php if($edit_pegawai->EMP_GENDER == 'Laki-laki'){?>
                            <option value="Laki-laki">Laku-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <?PHP }else{?>
                            <option value="Perempuan">MALE</option>
                            <option value="Perempuan" selected>Perempuan</option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6"><label>CONTACT NO</label><input class="form-control" name="emp_cell"
                                                                          type="text"
                                                                          value="<?= $edit_pegawai->EMP_CELL; ?>"></div>
                    
                </div>
                <hr>
                <div class="form-group" style="padding-left: 42%">
                    <div class="col-md-6">
                        <input type="submit" name="Update" class="btn btn-info">
                        <a href="<?= base_url(); ?>pegawai" class="btn btn-danger">Cancel</a>
                    </div>

                </div>

                <?php form_close(); ?>

            </div>
        </section>

    </div>
</div>
<!-- page end-->
<!--Table starts-->


<!--Table ends-->
