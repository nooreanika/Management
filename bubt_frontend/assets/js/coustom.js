 function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };

	
	
$(document).on("click",'.loadView',function(e){		
		
		var url =$(this).attr("href");		
		
		
		//$('.page-content').html('<center><img style="margin:200px;" src="'+base_url+'frontend/image/ajax-loader.gif" ></center>');				
		 $.ajax({ 
					type: 'POST', 
					url:url, 
					data: { ajax_post: 'ajax_post' },    
					dataType: 'html',
					success: function (data) {
						$(".page-content").html(data);
						 history.pushState({}, '', url); // Change url 
						$('.table-responsive table').paginate();
					},
					error: function (result) {
						//alert("Error");
					}
				});
		 return false;

 })
 
 
function formSubmit(form_id){
  
   $('font').html('');
   $('#'+form_id).ajaxForm({
	   dataType: 'json',
	   success: function(data){	  
alert(data);	   
		   if(data == "done"){
			   //alert(data.insert_id);
			   $('#'+form_id)[0].reset();
			   $('#success').show();
			    $("#success").delay(2500).fadeOut(300);
		   }else{
			   $.each(data,function( index,value ) {
				   $("#"+index).html(value);
				   console.log( index + ": " + value );
			   });
		   }
		   
	   }
   }).submit();
}







/* menu  js code */
function changedata(e){$('#root_menu_id').val(e);}
function menuSave()
{

var check=$('#root_menu_id').val();
var Nmenu=$('#new_menu').val();
	if(check=='f'){ $('.menulistall font').html("Must be menu Select..");}
	else
	{ $('.menulistall font').html(" "); 
		if(Nmenu==""||Nmenu==" "){ $('#Nmenu font').html(" Required menu ");}else
		{ $('#Nmenu font').html(" "); var menuEdit=$('#menuEdit').val();
			
			if(menuEdit=="u")
			{
		 
				   $.post('menu/menuEntry',{root:check,menu_name:Nmenu},function(view){ 
					var option='<option value="'+view+'">'+Nmenu+'</option>';
					$('.menulistall select').append(option);
					  var copydata=$('.menuviewlist table tbody tr:last').clone();
					  $('.menuviewlist table tbody').append(copydata);
					  var oldname=parseInt($('.menuviewlist table tbody tr:last td:first').text());
					 $('.menuviewlist table tbody tr:last td:first').text(oldname+1);
					 $('.menuviewlist table tbody tr:last td:last').html(' ');
					 var viewV='<button class="btn btn-xs btn-success" ><i class="icon-zoom-in bigger-120"></i></button>';
					 var editV='<button class="menuupdate btn btn-xs btn-info" onclick="menuEdit('+view+','+check+')"><i class="icon-edit bigger-120"></i></button>';
					 var deleteV='<button class="menudeleteclass btn btn-xs btn-danger" onclick="menuDelete('+view+','+check+')"><i class="icon-trash bigger-120"></i></button>';			 
					  var mdivF='<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">';
					  $('.menuviewlist table tbody tr:last td:last').append(mdivF+viewV+editV+deleteV+'</div>');		
					  $('.menuviewlist table tbody tr:last td:nth-child(2)').html(Nmenu);
						//$('#root_menu_id').val("f");
						//$('.menulistall select').prop('selectedIndex',0);
						$('#new_menu').val(" ");
					});
			}
			else
			{
			
				var whid=$('#menuEdit').val();
			
				$.post('menu/menuUpdate',{root:check,menu_name:Nmenu,menuid:whid},function(view){ 
				
					if(view==true)
					{ 
					
					  $('.menuviewlist table tbody #current td:nth-child(2)').html(Nmenu);
					  $('.menuviewlist table tbody #current td:last').find('.menuupdate').removeAttr('onclick');
					  $('.menuviewlist table tbody #current td:last').find('.menuupdate').attr('onclick','menuEdit('+whid+','+check+')');
					  $('#root_menu_id').val("f");
					  $('.menulistall select').prop('selectedIndex',0);
					  $('#new_menu').val(" ");
					  $('#menuEdit').val("u");
					   $('.menuviewlist table tbody tr').each(function(){$(this).removeAttr('id');});
					}
				
				})		
			
			}
		 }
	}
		
	
}


$(document).on('click','.menuupdate',function(){

var textdata=$(this).closest('tr').find('td:nth-child(2)').html();
$('#new_menu').val(textdata.trim());
$(this).closest('tr').attr('id','current');
})

function menuEdit(id,rootid)
{
$('.menulistall select option[value="' + rootid + '"]').prop('selected', true);
$('#menuEdit').val(id);
$('#root_menu_id').val(rootid);
}

$(document).on('click','.menudeleteclass',function(){

var textdata=$(this).closest('tr').find('td:nth-child(2)').html();
$(this).closest('tr').attr('id','currentD');
})
function menuDelete(id,rootid)
{
	var confirmation = confirm('Are you sure want to delete ? (OK / Cancel');
    if(confirmation)
    { 
		$.post('menu/menuDelete',{menuid:id},function(view){ 
		
			if(view==true)
			{ 
			var k=$('.menuviewlist table tbody #currentD td:nth-child(2)').text();
			 var textp=k.trim();
			  alert("Delete Successfully");
			 $(".menulistall select option").filter(function()
			 {return $.trim($(this).text()) == textp;
			 }).remove();
			 $('.menuviewlist table tbody #currentD').remove();
			
			}
		})
    }else{}
}

/* menu  js code  close*/
 

function onchangeRootMenu()
{
var menu_id= $('#menu_id').val();

    $.post('menu_content/onchangeSubMenu',{menu_id:menu_id },function(view)
	{ 	
		//alert(view);
		$('#sub_menu_id').html(view);
    });
		
   $.post('menu_content/getOnchangeMenuContent',{menu_id:menu_id },function(view)
	{  
	   $('#editor_content').html(view);
	    
	});
  


}
 
function onchangeSubMenu()
{
var menu_id= $('#sub_menu_id').val();

    $.post('menu_content/getOnchangeMenuContent',{menu_id:menu_id },function(view)
	{  
	   $('#editor_content').html(view);
	    
	});
  

}
 
$(document).on("click",'.menuLoadView',function(e){


    var selector = $(this);
$('.ajax-page').html('<center><img style="margin:200px;" src="'+base_url+'frontend/image/ajax-loader.gif" ></center>');			
			 
		var url =$(this).attr("href");					
		 $.ajax({ 
					type: 'POST', 
					url:url, 
					data: { ajax_post: 'ajax_post' },    
					dataType: 'html',
					success: function (data) {
					//alert(data);
					if((data != '')){
                        $('#megamenu li').removeClass('active');
                        selector.parents('li').addClass('active');
						$(".ajax-page").html(data);
						 history.pushState({}, '', url); // Change url 
						}
					},
					error: function (result) {
						//alert("Error");
					}
				});
		 return false;

 })

 
 $(document).on('click','.bannerdeleteclass',function(){
$(this).closest('tr').attr('id','currentRow');
})
 
 function BannerDelete(id)
{
   
	var confirmation = confirm('Are you sure want to delete ? (OK / Cancel');
    if(confirmation)
    { 
		$.post('banner/bannerDelete',{id:id},function(view){ 
			
			  alert("Delete Successfully");
			 $('.bannerviewlist table tbody #currentRow').remove();
			
		})
    }else{}
}
  
 
function bannerFormSubmit(form_id){
		
var filed=$('#id-input-file-3').val();
var up_img=$('#textImg #up_img').val();	
if(filed!="" || up_img!="")
{	$('#textImg #alert_message').html(" ");
   $('font').html('');
   $('#'+form_id).ajaxForm({
	   dataType: 'json',
	   success: function(data){	 
			     
		   if(data == "done")
		   {
			  bannerDataRefresh();				
			   $('#'+form_id)[0].reset();
			   $('#textImg #up_img').val("");	
			   $('#test').remove();
			   $('#textImg').next('div').show(); 
			   imgBox();
					   
		   }else{
			   $.each(data,function( index,value ) {
				   $("#"+index).html(value);
				   console.log( index + ": " + value );
			   });
		   }
		   
	   }
   }).submit();
 }
 else
 {
	$('#textImg #alert_message').html(" Image Upload must be.. ");
 }
}

 $(document).on('click','.bannerrefresh',function(){bannerDataRefresh();})
 function bannerDataRefresh()
 {
	$.post('banner/bannerRefresh',{id:'1'},function(view){ 
	//alert(view);return false;
				
	 $('.bannerviewlist table tbody').html(view);
	})
 
 }

function bannerEdit(id,textd,bimage,url)
{
 $('#banner_text').val(textd);
 $('#baner_id').val(id);
 $('#banner_text').focus();
  
 
var edit_image="<div id='test' class='ace-file-input ace-file-multiple'><label class='file-label hide-placeholder selected'><img style='width:50px; height:50px;float: left;' src='"+url+"assets/banner/"+bimage+"'/><span style='height:50px;padding-left: 13px;' data-title='"+bimage+"' class='file-name'></span></label><a style='cursor: pointer;'class='remove' onclick='removebox()'><i class='icon-remove'></i></a></div>";

$('#textImg').next('div').hide();
$('#textImg').after(edit_image);
$('#textImg #up_img').val(bimage);
}
function removebox()
{
$('#test').remove();
$('#textImg').next('div').show(); 
$('#textImg #up_img').val("");		 
}
 
 $(document).on('click','#test .file-label',function(){
  
 $(this).closest('div').remove();
 $('#textImg').next('div').show();
 $('#id-input-file-3').click();
 $('#textImg #up_img').val("");	
 })
 
function imgBox()
{
var before_change
var btn_choose
var no_icon
   if($("#id-file-format").is(':checked')==true)
   {
	btn_choose = "Drop images here or click to choose";
	no_icon = "icon-picture";
	before_change = function(files, dropped) {
		var allowed_files = [];
		for(var i = 0 ; i < files.length; i++) {
			var file = files[i];
			if(typeof file === "string") {
				//IE8 and browsers that don't support File Object
				if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
			}
			else {
				var type = $.trim(file.type);
				if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
						|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
					) continue;//not an image so don't keep this file
			}
			
			allowed_files.push(file);
		}
		if(allowed_files.length == 0) return false;

		return allowed_files;
	}
}
else {
	btn_choose = "Drop files here or click to choose";
	no_icon = "icon-cloud-upload";
	before_change = function(files, dropped) {
		return files;
	}
}
var file_input = $('#id-input-file-3');
file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
file_input.ace_file_input('reset_input');
}

// gallery data uplaod
 
function gellerFormSubmit(form_id){
		
var filed=$('#id-input-file-3').val();
var up_img=$('#textImg #up_img').val();	
if(filed!="" || up_img!="")
{	$('#textImg #alert_message').html(" ");
   $('font').html('');
   $('#'+form_id).ajaxForm({
	   dataType: 'json',
	   success: function(data){	 
			     
		   if(data == "done")
		   {
			  bannerDataRefresh();				
			   $('#'+form_id)[0].reset();
			   $('#textImg #up_img').val("");	
			   $('#test').remove();
			   $('#textImg').next('div').show(); 
			   imgBox();
					   
		   }else{
			   $.each(data,function( index,value ) {
				   $("#"+index).html(value);
				   console.log( index + ": " + value );
			   });
		   }
		   
	   }
   }).submit();
 }
 else
 {
	$('#textImg #alert_message').html(" Image Upload must be.. ");
 }
}


$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
});



// fontend Admin side bar control
$(document).on("click",'.adminload',function(e){
		var id_class=e.target.id;
		$('.panel').hide();
		$('.'+id_class).show();		
		window.location.hash="id"+id_class;
 

 })


 

/* message chat box start */
var instanse = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "admin/process",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instanse){
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "admin/process",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            $('#chat-area').append($("<p>"+ data.text[i] +"</p>"));
							
                        }								  
				   }
				   document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   instanse = false;
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "admin/process",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}

/* message chat box close */



