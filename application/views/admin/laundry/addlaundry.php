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
                        <form action="<?php echo site_url('laundry/add')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="card-body card-block">
                      
                        <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">laundry Type</label></div>
                            <div class="col-12 col-md-9">
                              <select name="laundry_type_id" id="select" class="form-control">
                                  <?php foreach ($laundry_type as $row) { ?>
                                  <option value="<?=$row->laundry_type_id ?>"><?=$row->type?></option>
                                  <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Laundry name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="laundry_name" placeholder="laundry name" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Item cost</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="item_cost" placeholder="Cost" class="form-control">
                            </div>
                          </div>
                       
                          
                          
                          
                          
                      
                      </div>
                             
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
