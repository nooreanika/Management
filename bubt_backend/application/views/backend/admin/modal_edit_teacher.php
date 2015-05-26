<div class="tab-pane box active" id="edit" style="padding: 5px">
                <div class="box-content">
                	<?php foreach($edit_data as $row):?>
                    <?php echo form_open('admin/teacher/do_update/'.$row['teacher_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="validate[required]" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('teacher_code');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="validate[required]" name="teacher_code" value="<?php echo $row['teacher_code'];?>"/>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('designation');?></label>
                                <div class="col-sm-5">
                                    <select name="designation" class="form-control">
                                        <option value="" <?php if($row['designation'] == '')echo 'selected';?>><?php echo get_phrase('select');?></option>
                                    	<option value="professor" <?php if($row['designation'] == 'professor')echo 'selected';?>><?php echo get_phrase('professor');?></option>
                                    	<option value="associate_professor" <?php if($row['designation'] == 'associate_professor')echo 'selected';?>><?php echo get_phrase('associate_professor');?></option>
                                        <option value="assistant_professor" <?php if($row['designation'] == 'assistant_professor')echo 'selected';?>><?php echo get_phrase('assistant_professor');?></option>
                                    	<option value="lecturer" <?php if($row['designation'] == 'lecturer')echo 'selected';?>><?php echo get_phrase('lecturer');?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="" name="password" value="<?php echo $row['password'];?>"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                <div class="controls" style="width:210px;">
                                    <input type="file" class="" name="userfile" id="imgInp" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="<?php echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" alt="your image" height="100" />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('edit_teacher');?></button>
                        </div>
                    </form>
                    <?php endforeach;?>
                </div>
			</div>