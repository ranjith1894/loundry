<!-- Header -->
<?php $this->view('admin/layouts/header'); ?>
<body>
  <!-- Left panel -->
<?php $this->view('admin/layouts/leftpanel'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->
        <?php $this->view('admin/layouts/inner_header'); ?>

        <!-- Header-->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Orders</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            
            <div class="animated fadeIn">
                 
                <div class="row">
                 
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                            <div class="card-header">
                                    <a href="<?=site_url('orders/getadd')?>">
                                        <div class="icon-container" style="float: right">
                                                <span class="ti-plus"></span><span class="icon-name">Create new</span>
                                            </div>
                                    </a>
                                
                            </div>
                           
                        <div class="card-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Order Number</th>
                        <th>Customer Name</th>
                        <th>Amount</th>
                       
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                      <?php $i=0; if(@$orders) {   foreach ($orders as $row) { $i++ ;?>
                      <tr>
                          <td><?=$i?></td>  
                        <td><?=$row->order_no?></td>
                        <td><?=$row->first_name?></td>
                        
                        <td><?=$row->total_amount?></td>
                        <td><?=$row->order_date?></td>
                        <td><a href="<?=site_url('orders/getedit/'.$row->order_id)?>">
                                <div class="icon-container">
                                                <span class="ti-pencil-alt"></span><span class="icon-name">Edit</span>
                                            </div>
                                 
                                    </a></td>
                      </tr>
                      <?php } }?>
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                   
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <?php $this->view('admin/layouts/footer'); ?>
   

    <script src="<?=base_url()?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
