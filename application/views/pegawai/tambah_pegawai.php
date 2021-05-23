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
                EMPLOYEE FORM
            </header>
            <?php
            if ($this->session->flashdata('msg')) ;
            echo $this->session->flashdata('msg');

            ?>
            <div class="panel-body">
                    <?php $attributes = array('class' => 'form-horizontal group-border hover-stripped','method'=>'post');
                    echo form_open_multipart('Pegawai/insert_pegawai', $attributes);?>

                    <div class="form-group">
                        <div class="col-sm-6"><label>Nama Pegawai</label><input class="form-control" name="emp_name"
                                                                            autofocus="" type="text"   required></div>
                        <div class="col-sm-6"><label>Email</label><input class="form-control" name="emp_email" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"><label>Alamat</label><input class="form-control"name="address" type="text">
                        </div>
                        <div class="col-sm-6"><label>Gender</label>
                            <select class="form-control input-lg m-bot15" name="emp_gender" id="">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laku-laki</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"><label>No Handphone</label><input class="form-control" name="emp_cell" type="text"></div>
                    </div>
                    
                    <hr>
                    <div class="form-group" style="padding-left: 42%">
                        <div class="col-md-6">
                            <input type="submit" name="Save" class="btn btn-info">
                            <a href="<?= base_url(); ?>employees/add_employee" class="btn btn-danger">Cancel</a>
                        </div>

                    </div>

                <?php form_close();?>

            </div>
        </section>

    </div>
</div>
<!-- page end-->
<!--Table starts-->


<!--Table ends-->


