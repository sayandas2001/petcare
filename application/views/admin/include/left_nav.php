<div class="sidebar-menu">
	<div class="sidebar-header">
		<div class="logo">
			<a href="<?php echo admin_url(); ?>dashboard"><img src="<?php echo assets_url(); ?>user/images/logo.png" alt="logo"></a>
		</div>
	</div>
	<div class="main-menu">
		<div class="menu-inner">
			<nav>
				<ul class="metismenu" id="menu">
					<?php $nav_controller_name=$this->router->fetch_class(); ?>
					
					<li <?php if($nav_controller_name=="dashboard"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>dashboard"><i class="ti-dashboard"></i> <span>dashboard</span></a>
					</li>

					<li <?php if($nav_controller_name=="banner"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>banner"><i class="ti-receipt"></i> <span>Home Banner</span></a>
					</li>

					<li <?php if($nav_controller_name=="blog"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>blog"><i class="ti-receipt"></i> <span>Blog</span></a>
					</li>
					 <li <?php if($nav_controller_name=="service"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>service"><i class="ti-receipt"></i> <span>Service</span></a>
					</li>
					<li <?php if($nav_controller_name=="about"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>about/fixed_content/1"><i class="ti-receipt"></i> <span>About us</span></a>
					</li>
					<li <?php if($nav_controller_name=="contact"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>contact/fixed_contact/1"><i class="ti-receipt"></i> <span>Contact us</span></a>
					</li>
					<li <?php if($nav_controller_name=="assistance"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>assistance"><i class="ti-receipt"></i> <span>assistance </span></a>
					</li>
					<li <?php if($nav_controller_name=="connection"){ ?>class="active"<?php } ?>>
						<a href="<?php echo admin_url(); ?>connection/fixed_connection/1"><i class="ti-receipt"></i> <span>connection </span></a>
					</li>
	
				</ul>
			</nav>
		</div>
	</div>
</div>
