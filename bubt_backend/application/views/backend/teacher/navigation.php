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
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/dashboard">
					<i class="entypo-gauge"></i>
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
           </li>
           
           <!-- STUDENT -->
			<li class="<?php if($page_name == 'student_add' || 
									$page_name == 'student_information' || 
										$page_name == 'student_marksheet')
											echo 'opened active has-sub';?> ">
				<a href="#">
					<i class="fa fa-group"></i>
					<span><?php echo get_phrase('student');?></span>
				</a>
				<ul>
                	<!-- STUDENT ADMISSION -->
					<li class="<?php if($page_name == 'student_add')echo 'active';?> ">
						<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/student_add">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('admit_student');?></span>
						</a>
					</li>
                  
                  <!-- STUDENT INFORMATION -->
					<li class="<?php if($page_name == 'student_information')echo 'opened active';?> ">
						<a href="#">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('student_information');?></span>
						</a>
                        <ul>
                        	<?php $classes	=	$this->db->get('class')->result_array();
							foreach ($classes as $row):?>
							<li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active';?>">
								<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/student_information/<?php echo $row['class_id'];?>">
									<span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
								</a>
							</li>
                            <?php endforeach;?>
                        </ul>
					</li>



                    
                  <!-- STUDENT MARKSHEET -->
					<li class="<?php if($page_name == 'student_marksheet')echo 'opened active';?> ">
						<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/student_marksheet/<?php echo $row['class_id'];?>">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('student_marksheet');?></span>
						</a>
                        <ul>
                        	<?php $classes	=	$this->db->get('class')->result_array();
							foreach ($classes as $row):?>
							<li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active';?>">
								<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/student_marksheet/<?php echo $row['class_id'];?>">
									<span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
								</a>
							</li>
                            <?php endforeach;?>
                        </ul>
					</li>
				</ul>
			</li>
            
           <!-- TEACHER -->
           <li class="<?php if($page_name == 'teacher' )echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/teacher_list">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('teacher');?></span>
				</a>
           </li>

             <!-- PARENT -->
           <li class="<?php if($page_name == 'parent')echo 'opened active';?> ">
				<a href="<?php echo base_url();?>index.php?teacher/parent">
					<i class="entypo-user"></i>
					<span><?php echo get_phrase('parent');?></span>
				</a>
                <ul>
					<?php $classes	=	$this->db->get('class')->result_array();
                    foreach ($classes as $row):?>
                    <li class="<?php if ($page_name == 'parent' && $class_id == $row['class_id']) echo 'active';?>">
                        <a href="<?php echo base_url();?>index.php?teacher/parent/<?php echo $row['class_id'];?>">
                            <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
           </li>


			<!-- it_officer -->
			<li class="<?php if($page_name == 'it_officer')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/it_officer">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('it_officer_list');?></span>
				</a>
			</li>
			
            
			<!-- stuff -->
			<li class="<?php if($page_name == 'stuff')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/stuff">
					<i class="entypo-users"></i>
					<span><?php echo get_phrase('stuff_list');?></span>
				</a>
			</li>
            
           <!-- SUBJECT -->
           <li class="<?php if($page_name == 'subject')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-docs"></i>
					<span><?php echo get_phrase('subject');?></span>
				</a>
              <ul>
                  <?php $classes	=	$this->db->get('class')->result_array();
                  foreach ($classes as $row):?>
                  <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active';?>">
                      <a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/subject/<?php echo $row['class_id'];?>">
                          <span><?php echo get_phrase('class');?> <?php echo $row['name'];?></span>
                      </a>
                  </li>
                  <?php endforeach;?>
              </ul>
           </li>
            
           <!-- CLASS ROUTINE -->
           <li class="<?php if($page_name == 'class_routine')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/class_routine">
					<i class="entypo-target"></i>
					<span><?php echo get_phrase('class_routine');?></span>
				</a>
           </li>



			<!-- ATTENDANCE -->
			<li class="<?php if($page_name == 'attendance_scale' ||
				$page_name == 'manage_attendance')echo 'opened active';?> ">
				<a href="#">
					<i class="entypo-chart-area"></i>
					<span><?php echo get_phrase('attendance');?></span>
				</a>
				<ul>
					<li class="<?php if($page_name == 'attendance')echo 'active';?> ">
						<a href="<?php echo base_url();?>index.php?teacher/scale">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('attendance_scale');?></span>
						</a>
					</li>
					<li class="<?php if($page_name == 'manage_attendance')echo 'active';?> ">
						<a href="<?php echo base_url();?>index.php?teacher/manage_attendance/<?php echo date("d/m/Y");?>">
							<i class="entypo-dot"></i>
							<span><?php echo get_phrase('daily_attendance');?></span>
						</a>

					</li>
				</ul>
			</li>


           <!-- DAILY ATTENDANCE -->
        <!--   <li class="<?php if($page_name == 'manage_attendance')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_attendance/<?php echo date("d/m/Y");?>">
					<i class="entypo-chart-area"></i>
					<span><?php echo get_phrase('daily_attendance');?></span>
				</a>
                
           </li> -->
            
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
						<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/marks">
							<span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks');?></span>
						</a>
					</li>
                </ul>
           </li>
            
            
           <!-- LIBRARY -->
           <li class="<?php if($page_name == 'book')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/book">
					<i class="entypo-book"></i>
					<span><?php echo get_phrase('library');?></span>
				</a>
           </li>
            
           
            
           <!-- NOTICEBOARD -->
           <li class="<?php if($page_name == 'noticeboard')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/noticeboard">
					<i class="entypo-doc-text-inv"></i>
					<span><?php echo get_phrase('noticeboard');?></span>
				</a>
           </li>
            
            
           <!-- ACCOUNT -->
           <li class="<?php if($page_name == 'manage_profile')echo 'active';?> ">
				<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_profile">
					<i class="entypo-lock"></i>
					<span><?php echo get_phrase('account');?></span>
				</a>
           </li>
                
           
           
		</ul>
        		
</div>