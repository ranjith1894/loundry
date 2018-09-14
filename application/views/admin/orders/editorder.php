<!-- Header -->
<?php $this->view('admin/layouts/header'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                        <form action="<?php echo site_url('orders/update')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="card-body card-block">
                          <div id="test"></div>
                         <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Choose Customer</label></div>
                            <div class="col-12 col-md-9">
                              <select name="customer_id" id="selectcustomer" class="form-control">
                                  <option value="">---Select one---</option>
                                  <?php  foreach ($customer_details  as $row){?>
                                  <option value="<?=$row->customer_id?>"  data-packageid="<?=$row->price_package_id?>"
                                          <?php if($orders[0]->customer_id ==$row->customer_id ){ ?> selected=" <?php }?>"><?=$row->first_name?></option>
                                  <?php } ?>
                                
                              </select>
                            </div>
                          </div>
                          <span id="ajaxcustomer">
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="customer_name" name="customer_name" placeholder="Customer name" class="form-control" disabled="" value="<?=$selected_customer_details[0]->first_name ?>">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="customer_phone" name="customer_phone" placeholder="Customer Phone" class="form-control" disabled="" value="<?=$selected_customer_details[0]->phone_number ?>">
                            </div>
                          </div>
                          
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Customer Type</label></div>
                            <div class="col-12 col-md-9">
                              <select name="customer_type" id="customer_type" class="form-control" disabled="">
                                <option value="0">Regular</option>
                                
                              </select>
                            </div>
                          </div>
                          </span>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comments</label></div>
                            <div class="col-12 col-md-9"><textarea name="comments" id="textarea-input" rows="2" placeholder="Enter the comments..." class="form-control" required=""><?=$orders[0]->notes?></textarea></div>
                          </div>
                        
                          
                          
                          
                          
                          
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Laundry service</label></div>
                            <div class="col-12 col-md-9">
                              <select name="store_id" id="" class="form-control" >
                                 <?php foreach ($store as $row) { ?>
                                      <option value="<?=$row->store_id?>" ><?=$row->store_name?></option>
                                      <?php } ?>
                                
                              </select>
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Order date</label></div>  
                            
                            <div class="col-12 col-md-9"><input type="text" name="orderdate" placeholder="" class="form-control datepicker" value="<?=$orders[0]->order_date?>" required=""></div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Delivery date</label></div> 
                             
                            <div class="col-12 col-md-9"><input type="text" name="deliverydate" placeholder="" class="form-control datepicker" value="<?=$orders[0]->scheduled_date?>" required=""></div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Landmark</label></div>
                            <div class="col-12 col-md-9"><textarea name="pickup_address" id="textarea-input" rows="2" placeholder="Enter the comments..." class="form-control" required=""><?=$orders[0]->pickup_address?></textarea></div>
                          </div>
                          
                           <div class="row form-group col-md-12">
                          <table  class="table table-hover small-text" id="tb">
                              <tr class="tr-header">
                              <th>#</th>
                              <th>Laundry Type</th>
                              <th>Laundry Item</th>
                              <th>Gendertype</th>
                              <th>Addons</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Action</th>
                              <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><i class="fa fa-plus"></i></a></th>
                              <?php foreach ($order_details  as $orderrow) { ?>
                              <tr>
                                  <td id="count">#</td>
                              <td><select name="type_ids[]" class="form-control typechange"  >
                                      <?php foreach ($types as $row) { ?>
                                      <option value="<?=$row->types_id?>" <?php if($orderrow->type_id == $row->types_id) { ?> selected="" <?php } ?> ><?=$row->types_name?></option>
                                      <?php } ?>
                              </select>
                              </td>
                              
                              <td><select name="product_ids[]" class="form-control productchange" >
                                  <?php foreach ($products as $row) { ?>
                                      <option value="<?=$row->product_id?>" <?php if($orderrow->product_id == $row->product_id) { ?> selected="" <?php } ?> ><?=$row->product_name?></option>
                                      <?php } ?>
                              </select>
                              </td>
                              <td><select name="gender_ids[]" class="form-control genderchange" id="">
                                  <?php foreach ($gender as $row) { ?>
                                      <option value="<?=$row->gender_id?>"   ><?=$row->gender_name?></option>
                                      <?php } ?>
                              </select>
                              </td>
                              <td>
                                  <div class="form-check">
                                        <?php foreach ($addons as $row) {
                                          $arr = array($orderrow->addons_id);
                                          $myArray = explode(',', $orderrow->addons_id);
                                          
                                        
                                          ?>
                                <div class="checkbox">
                                  <label for="" class="form-check-label ">
                                    <input type="checkbox"  name="addon1[]" value="<?=$row->addons_id?>" data-addons_price="<?=$row->addons_price?>" class="form-check-input addon_checkbox" <?php if (in_array($row->addons_id, $myArray)){ ?> checked="" <?php } ?> ><?=$row->addons_name?>
                                  </label>
                                </div>
                                        <?php } ?>
                                
                              </div>      
                                  
                              </td>
                              <td><input type="number" name="quantity[]" class="form-control quantitychange" value="<?=$orderrow->quantity?>"></td>
                              <td><input type="number" name="price[]" class="form-control price" value="<?=$orderrow->total?>" ></td>
                             
                              <td><a href='javascript:void(0);'  class='remove'><i class="fa fa-minus"></i></a></td>
                              </tr>
                              <?php } ?>
                              </table>
                           </div>
                          
                         
                           <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Total</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="total" placeholder="Total" class="form-control" id="total" required="">
                            </div>
                          </div>
                          
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Discount</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="disount" placeholder="Discount" class="form-control" id="discount" value="0">
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Amount</label></div>
                            <div class="col-12 col-md-9"><input type="number"  name="amount" placeholder="Amount" class="form-control" id="amount" value="<?=$orders[0]->total_amount?>" required="">
                            </div>
                          </div>
                          
                          
                          <input type="hidden" name="id" placeholder="" class="form-control " value="<?=$orders[0]->order_id?>">
                          <div class="row form-group col-md-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                         </div>
                      
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
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
$(function(){
    var count = 0;
    $('#addMore').on('click', function() {
              var rowCount = $('#tb tr').length;
              var newrowobj = $("#tb tr:eq(1)").clone(true);
              var addon_html = '<div class="form-check">'+
                                        <?php foreach ($addons as $row) { ?>
                                '<div class="checkbox">'+
                                  '<label  class="form-check-label ">'+
                                    '<input type="checkbox"  name="addon'+rowCount+'[]" data-addons_price="<?=$row->addons_price?>" class="form-check-input addon_checkbox"  value="<?=$row->addons_id?>"/><?=$row->addons_name?></label>'+
                                '</div>'+
                                        <?php } ?>
                                
                              '</div> ';
              newrowobj.children('td:eq(4)').html(addon_html) 
              console.log(addon_html);
              var data = newrowobj.appendTo("#tb");
              //data.find("input").val('');
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

<script type="text/javascript">
        var global_package_id =1;
        $('#selectcustomer').change(function () {
          
            var selDpto = $(this).val(); // <-- change this line
            console.log(selDpto);
            global_package_id = $('select option[value="' + $(this).val() + '"]').data('packageid');
             console.log(global_package_id);
            $.ajax({
                url: "<?=site_url()?>/orders/ajaxselectcustomer",
                async: false,
                type: "POST",
                data: "id="+selDpto,
                dataType: "html",

                success: function(data) {
                    var js_array =JSON.stringify(data);
                    $('#ajaxcustomer').html(data);
                }
            })
        });
  
  
       var jqueryarray = <?php echo json_encode($product_types); ?>;
       var typeid ="";
       var productid ="";
       var genderid ="";
       var quantitychange ="";
       var final_price ="";
       var addon_checkbox ="";
       typeid = $('.typechange').val();
       productid = $('.productchange').val();
       genderid = $('.genderchange').val();
       quantitychange =$('.quantitychange').val();
       
       for (var i = 0; i < jqueryarray.length; i++) {
                final_price = 0;
                if(jqueryarray[i].price_package_id ==global_package_id  && jqueryarray[i].types_id ==typeid &&  jqueryarray[i].product_id ==productid &&  jqueryarray[i].gender_id ==genderid ){
                final_price = quantitychange*jqueryarray[i].product_price;
               $('.price').val(final_price);

       }
      else{
          $('.price').val(0);
      }
      }   
        $('.addon_checkbox ,.typechange, .productchange, .genderchange,.quantitychange').change(function () {
          var rowCount = $(this).closest("tr").index();
          console.log(rowCount)
          typeid = $(this).closest('tr').children('td:eq(1)').find("select").val();
          productid = $(this).closest('tr').children('td:eq(2)').find("select").val();
          genderid = $(this).closest('tr').children('td:eq(3)').find("select").val();
          quantitychange =$(this).closest('tr').children('td:eq(5)').find("input").val();
          var addons_price =0;
         
           $("input[name='addon"+rowCount+"[]']:checked").each( function () {
             var result = $('input[name="addon'+rowCount+'[]"]:checked');
            
             if (result.length > 0) {
                     var resultString = result.length + " checkboxe(s) checked <br/><br/>"
                     addons_price =0;
                     result.each(function () {
                         resultString+= $(this).val() + "<br/>";
                         addons_price =  addons_price+$(this).data('addons_price');
                     });
                     console.log('addons_price',addons_price)
                     console.log(resultString);

                 }
                else{
                  addons_price =0;
                }
            });
             for (var i = 0; i < jqueryarray.length; i++) {
                final_price = 0;
                 console.log('final_price',final_price);
                 console.log(jqueryarray[i])
                 console.log('typeid',typeid);
                 console.log('productid',productid);
                 console.log('genderid',genderid);
                 console.log('quantitychange',quantitychange);
                 console.log($(this).closest('tr').children('td:eq(6)').text())
                if( jqueryarray[i].types_id ==typeid &&  jqueryarray[i].product_id ==productid &&  jqueryarray[i].gender_id ==genderid ){
                final_price = quantitychange*jqueryarray[i].product_price+addons_price;
                $(this).closest('tr').children('td:eq(6)').html('<input type="number" name="price[]" class="form-control price" value='+final_price+'>');
                findtotal();

       }
      else{
         $(this).closest('tr').children('td:eq(6)').html('<input type="number" name="price[]" class="form-control price" value="0">');
              findtotal();
      }
             }
        });
        
        function findtotal(){
         var sum =0;
                  $('.price').each(function(){
                    sum += parseFloat($(this).val());  // Or this.innerHTML, this.innerText
                });
            
            $('#total').val(sum);
            $('#discount').val(0);
            $('#amount').val(sum);
              console.log('total is ' ,sum);
            
        }
         $('#discount').change(function () {
           var new_total = $('#total').val() - $('#discount').val();
           $('#amount').val(new_total);
         });
    </script>
    

</body>
</html>
