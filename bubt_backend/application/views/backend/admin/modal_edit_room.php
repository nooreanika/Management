<?php 
$edit_data		=	$this->db->get_where('room' , array('room_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_room');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('admin/room/do_update/'.$row['room_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('room_no');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="room_no" value="<?php echo $row['room_no'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('room_type');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="room_type" value="<?php echo $row['room_type'];?>"/>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('teacher');?></label>
                        <div class="col-sm-5">
                            <select name="teacher_id" class="form-control">
                                <option value=""></option>
                                <?php 
                                $teachers = $this->db->get('teacher')->result_array();
                                foreach($teachers as $row2):
                                ?>
                                    <option value="<?php echo $row2['teacher_id'];?>"
                                        <?php if($row['teacher_id'] == $row2['teacher_id'])echo 'selected';?>>
                                            <?php echo $row2['name'];?>
                                                </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>-->
            		<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_room');?></button>
						</div>
					</div>
        		</form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>


