<!-- Header -->
<?php $this->view('admin/layouts/header'); ?>
<body>
  <!-- Left panel -->
<?php $this->view('admin/layouts/leftpanel'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php $this->view('admin/layouts/inner_header'); ?>

        <!-- Header-->

        
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                 
                  <div class="col-lg-12">
                    <div class="card ">
                        <form action="<?php echo site_url('customers/update')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="card-body card-block">
                     
                        
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_name" placeholder="Customer name" class="form-control" value="<?=@$customer_details[0]->first_name?>">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_phone" placeholder="Customer Phone" class="form-control" value="<?=@$customer_details[0]->phone_number ?>">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Secondary Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="secondary_phone" placeholder="Secondary Phone" class="form-control" value="<?=@$customer_details[0]->secondary_phone?>">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email id</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" value="<?=@$customer_details[0]->email_id?>">
                            </div>
                          </div>
                         
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="2" placeholder="Enter address..." class="form-control">
                              <?=$customer_details[0]->address?>
                                    </textarea></div>
                          </div>
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Customer Type</label></div>
                            <div class="col-12 col-md-9">
                              <select name="customer_type_id" id="select" class="form-control">
                                  <?php foreach ($customer_type as $row) { ?>
                                  <option value="<?=$row->customer_type_id ?>" 
                                    <?php if($customer_details[0]->customer_type_id == $row->customer_type_id){ ?> 
                                          selected="" 
                                     <?php } ?>
                                          >
                                            <?=$row->customer_types?></option>
                                  <?php } ?>
                              </select>
                            </div>
                          </div>
                          
                          
                          
                      
                      </div>
                            <input type="hidden" name="id" value="<?=$customer_details[0]->customer_id?>" >       
                      <div class="">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                        </form>
                    </div>
                
                
            

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script>
$(function(){
    var count = 0;
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>
</html>
