<?php 
$edit_data		=	$this->db->get_where('class_routine' , array('class_routine_id' => $param2) )->result_array();
?>
<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open('admin/class_routine/do_update/'.$row['class_routine_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                    <div class="col-sm-5">
                        <select name="class_id" class="form-control">
                            <?php 
                            $classes = $this->db->get('class')->result_array();
                            foreach($classes as $row2):
                            ?>
                                <option value="<?php echo $row2['class_id'];?>" <?php if($row['class_id']==$row2['class_id'])echo 'selected';?>>
                                    <?php echo $row2['name'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('subject');?></label>
                    <div class="col-sm-5">
                        <select name="subject_id" class="form-control">
                            <?php 
                            $subjects = $this->db->get('subject')->result_array();
                            foreach($subjects as $row2):
                            ?>
                                <option value="<?php echo $row2['subject_id'];?>" <?php if($row['subject_id']==$row2['subject_id'])echo 'selected';?>>
                                    <?php echo $row2['course_no'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                                    </div>
        
        
        
        
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('teacher');?></label>
                    <div class="col-sm-5">
                        <select name="teacher_id" class="form-control">
                            <?php 
                            $teachers = $this->db->get('teacher')->result_array();
                            foreach($teachers as $row2):
                            ?>
                                <option value="<?php echo $row2['teacher_id'];?>" <?php if($row['teacher_id']==$row2['teacher_id'])echo 'selected';?>>
                                    <?php echo $row2['teacher_code'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
        	
        
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('room');?></label>
                    <div class="col-sm-5">
                        <select name="room_id" class="form-control">
                            <?php 
                            $room = $this->db->get('room')->result_array();
                            foreach($room as $row2):
                            ?>
                                <option value="<?php echo $row2['room_id'];?>" <?php if($row['room_id']==$row2['room_id'])echo 'selected';?>>
                                    <?php echo $row2['room_no'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('day');?></label>
                    <div class="col-sm-5">
                        <select name="day" class="form-control">
                            <option value="saturday" 	<?php if($row['day']=='saturday')echo 'selected="selected"';?>>saturday</option>
                            <option value="sunday" 		<?php if($row['day']=='sunday')echo 'selected="selected"';?>>sunday</option>
                            <option value="monday" 		<?php if($row['day']=='monday')echo 'selected="selected"';?>>monday</option>
                            <option value="tuesday" 	<?php if($row['day']=='tuesday')echo 'selected="selected"';?>>tuesday</option>
                            <option value="wednesday" 	<?php if($row['day']=='wednesday')echo 'selected="selected"';?>>wednesday</option>
                            <option value="thursday" 	<?php if($row['day']=='thursday')echo 'selected="selected"';?>>thursday</option>
                            <option value="friday" 		<?php if($row['day']=='friday')echo 'selected="selected"';?>>friday</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('time_start');?></label>
                    <div class="col-sm-5">

                                    <input type="text" class="form-control" name="time_start" value="<?php echo $row['time_start'];?>"/>
                                                         
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('time_end');?></label>
                    <div class="col-sm-5">
                        
                        
                        <input type="text" class="form-control" name="time_end" value="<?php echo $row['time_end'];?>"/>
                        
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-5">
                      <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_class_routine');?></button>
                  </div>
                </div>
        </form>
        <?php endforeach;?>
    </div>
</div>