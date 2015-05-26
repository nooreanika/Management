<?php
$edit_data		=	$this->db->get_where('scale' , array('scale_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('edit_student');?>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open('admin/scale/do_update/'.$row['scale_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="padded">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('scale_from');?></label>
                        <div class="col-sm-5 controls">
                            <input type="text" class="form-control" name="scale_from" value="<?php echo $row['scale_from'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('scale_upto');?></label>
                        <div class="col-sm-5 controls">
                            <input type="text" class="form-control" name="scale_upto" value="<?php echo $row['scale_upto'];?>"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('scale');?></label>
                        <div class="col-sm-5 controls">
                            <input type="text" class="form-control" name="scale" value="<?php echo $row['scale'];?>"/>
                        </div>
                    </div>

                </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_scale');?></button>
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



