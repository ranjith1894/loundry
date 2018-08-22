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
                        <form action="<?php echo site_url('customers/add')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="card-body card-block">
                      
                        
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_name" placeholder="Customer name" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_phone" placeholder="Customer Phone" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Secondary Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="seconary_phone" placeholder="Secondary Phone" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email id</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                            </div>
                          </div>
                         
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="2" placeholder="Enter address..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Customer Type</label></div>
                            <div class="col-12 col-md-9">
                              <select name="customer_type" id="select" class="form-control">
                                <option value="0">Regular</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comments</label></div>
                            <div class="col-12 col-md-9"><textarea name="comments" id="textarea-input" rows="2" placeholder="Enter the comments..." class="form-control"></textarea></div>
                          </div>
                        
                           <div class="row form-group col-md-12">
                          <table  class="table table-hover small-text" id="tb">
                              <tr class="tr-header">
                              <th>#</th>
                              <th>Laundry Type</th>
                              <th>Laundry Item</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Action</th>
                              <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><i class="fa fa-plus"></i></a></th>
                              <tr>
                                  <td id="count">#</td>
                              <td><select name="laundrytype[]" class="form-control">
                                <option value="iron" selected>iron</option>
                               
                              </select>
                              </td>
                              
                              <td><select name="laundryitem[]" class="form-control">
                                <option value="" selected>Choose</option>
                              </select>
                              </td>
                              <td><input type="number" name="quantity[]" class="form-control"></td>
                              <td><input type="number" name="price[]" class="form-control"></td>
                             
                              <td><a href='javascript:void(0);'  class='remove'><i class="fa fa-minus"></i></a></td>
                              </tr>
                              </table>
                           </div>
                          
                         
                           <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Total</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="total" placeholder="Total" class="form-control">
                            </div>
                          </div>
                          
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Discount</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="disount" placeholder="Discount" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Amount</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="amount" placeholder="Amount" class="form-control">
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
