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
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
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
                                    <a href="<?=site_url('customers/getadd')?>">
                                        <button type="button" class="btn btn-success" style="float: right">Create</button>
                                    </a>
                                
                            </div>
                           
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                      <?php  foreach ($customers as $row) { ?>
                      <tr>
                        <td><?=$row->customer_name?></td>
                        <td><?=$row->customer_phone?></td>
                        <td><?=$row->address?></td>
                        <td><a href="<?=site_url('customers/getedit/'.$row->customer_id)?>">
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </a></td>
                      </tr>
                      <?php } ?>
                      
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
