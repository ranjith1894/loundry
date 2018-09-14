
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?=site_url('login/home')?>">Admin</a>
                <a class="navbar-brand hidden" href="<?=site_url('login/home')?>"><img src="<?=base_url()?>/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?=site_url('login/home')?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                
                    <li class="menu-item-has-children dropdown">
                        <a href="<?=site_url('customers/get')?>"> <i class="menu-icon fa fa-laptop"></i>Customers</a>
                       
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?=site_url('product/get')?>">Products</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?=site_url('product/getproduct_types')?>">Product price</a></li>
                          
                        </ul>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="<?=site_url('orders/get')?>" > <i class="menu-icon fa fa-table"></i>Orders</a>
                        
                    </li>
                    
                     <li class="menu-item-has-children dropdown">
                        <a href="<?=site_url('store/get')?>" > <i class="menu-icon fa fa-table"></i>Stores</a>
                        
                    </li>
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->