<div class="sidebar-menu">
		<header class="logo-env" >
			
            <!-- logo -->
			<div class="logo" style="">
				<a href="<?php echo base_url();?>">
					<img src="uploads/logo.png"  style="max-height:60px;"/>
				</a>
			</div>
            
			<!-- logo collapse icon -->
			<div class="sidebar-collapse" style="">
				<a href="#" class="sidebar-collapse-icon with-animation">
                
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<i class="entypo-menu"></i>
				</a>
			</div>
		</header>
		
		<div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>	
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            
           
           <!-- DASHBOARD -->
           <li class="<?php if($page_name == 'dashboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/dashboard">
					<i class="entypo-gauge"></i>
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
           </li>
           
           
            
           <!-- TEACHER -->
           <li class="<?php if($page_name == 'teacher' )echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/teacher_list">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('teacher');?></span>
				</a>
           </li>

			<!-- STUFF -->
			<li class="<?php if($page_name == 'stuff')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/stuff">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('stuff');?></span>
				</a>
			</li>

            
            			<!-- it_officer -->
			<li class="<?php if($page_name == 'it_officer')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/it_officer">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('it_officer');?></span>
				</a>
			</li>


           <!-- CLASS ROUTINE -->
           <li class="<?php if($page_name == 'class_routine')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/class_routine">
					<i class="entypo-target"></i>
					<span><?php echo get_phrase('class_routine');?></span>
				</a>
           </li>
            
           <!-- EXAMS -->
           <li class="<?php if($page_name == 'exam' ||
		   								$page_name == 'grade' ||
												$page_name == 'marks')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-graduation-cap"></i>
					<span><?php echo get_phrase('exam');?></span>
				</a>
                <ul>
					
					<li class="<?php if($page_name == 'marks')echo 'active';?> ">
						<a href="<?php echo base_url();?>index.php?parents/marks">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks');?></span>
						</a>
					</li>
                </ul>
           </li>
           
           <!-- PAYMENT -->
           <li class="<?php if($page_name == 'invoice')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/invoice">
					<i class="entypo-credit-card"></i>
					<span><?php echo get_phrase('payment');?></span>
				</a>
           </li>
            
            
           <!-- LIBRARY -->
           <li class="<?php if($page_name == 'book')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/book">
					<i class="entypo-book"></i>
					<span><?php echo get_phrase('library');?></span>
				</a>
           </li>


            
           <!-- NOTICEBOARD -->
           <li class="<?php if($page_name == 'noticeboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/noticeboard">
					<i class="entypo-doc-text-inv"></i>
					<span><?php echo get_phrase('noticeboard');?></span>
				</a>
           </li>
            
            
           <!-- ACCOUNT -->
           <li class="<?php if($page_name == 'manage_profile')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?parents/manage_profile">
					<i class="entypo-lock"></i>
					<span><?php echo get_phrase('account');?></span>
				</a>
           </li>
                
           
           
		</ul>
        		
</div>