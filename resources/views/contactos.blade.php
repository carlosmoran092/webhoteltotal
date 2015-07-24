@extends('templates.estructura')
@section('contenido')

<!-- page-top start-->
			<!-- ================ -->
			<div class="page-top">
				<div class="container">
					<div class="row"><h1 class="text-center title-mor">Contáctenos</h1>
						<div class="col-md-7">


					</small><br>

				<?php // NOTE: INICIO FORM ?>

				<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h2>Contáctenos</h2></a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h2>Trabaje con Nosotros</h2></a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="home">
		<?php // NOTE: Formulario de Contacto ?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="//assets.emailmeform.com/styles/dynamic.php?t=post&enable_responsive_ui=1&RU1GLTAyLTI0" />
<link href='//fonts.googleapis.com/css?family=Lato|Lato|Lato|Lato|Lato|Lato' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Lato|Lato' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="http://app.emailmeform.com/builder/theme_css/51eyu5SkRiPA7ZnbW4H02wD3L" />
<style>
#emf-container, #emf-container-outer #emf-form-shadows{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;width:640px}
@media screen and (max-width: 656px) {#emf-container,#emf-container-outer #emf-form-shadows {width: 100%;} }
</style>
<div id="emf-container-outer">
<div id="emf-container" >
<div id="emf-logo"><a >EmailMeForm</a></div>
<div class="emf-error-message" style='display:none'></div>
<form id="emf-form" target="_self" class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/51eyu5SkRiPA7ZnbW4H02wD3L">
<ul>
<li id="emf-li-0" class="emf-li-field emf-field-text data_container   ">
<label class="emf-label-desc" for="element_0">Nombre <span>*</span></label>
<div class="emf-div-field">
	<input id="element_0" name="element_0" value="" size="30" type="text" class="validate[required] form-control form-contac"/></div>

<div class="emf-clear"></div>
</li><li id="emf-li-1" class="emf-li-field emf-field-email data_container">
<label class="emf-label-desc" for="element_1">Email <span>*</span></label>

<div class="emf-div-field">
<input id="element_1" name="element_1" class="validate[required,custom[email]] form-control form-contac" value="" size="30" type="text" /></div>
<div class="emf-clear"></div>

</li><li id="emf-li-2" class="emf-li-field emf-field-phone data_container ">
<label class="emf-label-desc" for="element_2">Teléfono</label>
<div class="emf-div-field">
<span>
<input maxlength="3" value="" id="element_2_1" name="element_2[]" type="text"
class="emf-input-w30 validate[optional,custom[onlyNumber],length[3,3]] form-control form-contac" />
<label for="element_2_1" class="emf-bottom-label">###</label>
</span><span class="emf-sep">-</span><span>
<input maxlength="3" value="" id="element_2_2" name="element_2[]" type="text"
class="emf-input-w30 validate[optional,custom[onlyNumber],length[3,3]] form-control form-contac" />
<label for="element_2_2" class="emf-bottom-label">###</label>
</span><span class="emf-sep">-</span><span>
<input maxlength="4" value="" id="element_2_3" name="element_2[]" type="text"
class="emf-input-w40 validate[optional,custom[onlyNumber],length[4,4]] form-control form-contac" />
<label for="element_2_3" class="emf-bottom-label">####</label>
</span></div>
<div class="emf-clear"></div>
</li><li id="emf-li-3" class="emf-li-field emf-field-text data_container   ">
<label class="emf-label-desc" for="element_3">Asunto <span>*</span></label>
<div class="emf-div-field"><input id="element_3" name="element_3" value="" size="30" type="text"
class="validate[required] form-control form-contac"/></div>
<div class="emf-clear"></div>
</li><li id="emf-li-4" class="emf-li-field emf-field-textarea data_container   ">
<label class="emf-label-desc" for="element_4">Mensaje <span>*</span></label>
<div class="emf-div-field"><textarea id="element_4" name="element_4" cols="45" rows="10"
class="validate[required] form-control form-contac"></textarea></div>
<div class="emf-clear"></div>
</li>
<li id="emf-li-recaptcha" >
<div>
<script type="text/javascript">
			var RecaptchaOptions = {
				theme: 'custom',
				custom_theme_widget: 'emf-recaptcha_widget'
	};
</script>
<div id='emf-recaptcha_widget' style='display:none'>
<div id='recaptcha_image'></div>
<div id='recaptcha_controls'>
<a title='Get a new challenge' href="javascript:Recaptcha.reload()"><img src='//assets.emailmeform.com/images/recaptcha_refresh.png?RU1GLTAyLTI0' alt='Get a new challenge'></a><!--
		--><a title='Get an audio challenge' href="javascript:Recaptcha.switch_type('audio')" class='recaptcha_only_if_image'><img src='//assets.emailmeform.com/images/recaptcha_audio.png?RU1GLTAyLTI0' alt='Get an audio challenge'></a><!--
		--><a title='Get a visual challenge' href="javascript:Recaptcha.switch_type('image')" class='recaptcha_only_if_audio'><img src='//assets.emailmeform.com/images/recaptcha_image.png?RU1GLTAyLTI0' alt='Get a visual challenge'></a><!--
		--><a title='Help' href="javascript:Recaptcha.showhelp()"><img alt='Help' src='//assets.emailmeform.com/images/recaptcha_help.png?RU1GLTAyLTI0'></a>
</div>
<img id='recaptcha_logo' style='' src='https://www.google.com/recaptcha/api/img/clean/logo.png'>
<input type='text' id='recaptcha_response_field' name='recaptcha_response_field'
		placeholder='Type the text'>
</div>
<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9"></script>
<noscript>
<iframe src="https://www.google.com/recaptcha/api/noscript?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9" height="300" width="500" frameborder="0"></iframe><br/>
<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
</noscript></div>
</li>
<li id="emf-li-post-button" class="left">
<input  src="//assets.emailmeform.com//builder/images/submit-orange.png" type="image" alt="Submit" onmouseover="return true;"/>
</li>
</ul>
<input name="element_counts" value="5" type="hidden" />
</form>
</div><img id="emf-form-shadows" src="//assets.emailmeform.com/images/themes/bottom.png?RU1GLTAyLTI0"></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
if (typeof jQuery == 'undefined'){
	document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-1.8.3.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
if (typeof $.ui == 'undefined'){
	document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="//assets.emailmeform.com/js/dynamic.php?t=post&t2=0&use_CDN=true&language=es&language_id=0&referer_domain=http%3A%2F%2Fwww.emailmeform.com%2F&RU1GLTAyLTI0"></script>
<script type="text/javascript">
EMF_jQuery(window).load(function(){
post_message_for_frame_height("51eyu5SkRiPA7ZnbW4H02wD3L");
});

EMF_jQuery(function(){
$(function(){
$('#recaptcha_response_field').addClass('validate[required]');
});
bind_auto_cursor(EMF_jQuery('#emf-li-2 input[type=text]'));
generate_css_for_emf_ad();
;

EMF_jQuery("#emf-form").validationEngine({
	validationEventTriggers:"blur",
	scroll:true
});
prevent_duplicate_submission(EMF_jQuery("#emf-form"));

$("input[emf_mask_input=true]").dPassword();

if(EMF_jQuery('#captcha_image').length>0){
	on_captcha_image_load();
}

EMF_jQuery('.emf-field-grid td').click(function(event){
	// 		if(!event.target.tagName || event.target.tagName.toLowerCase()!='td') return;

	EMF_jQuery(this).find('input[type=checkbox],input[type=radio]').click();
});

	EMF_jQuery('input[type=checkbox],input[type=radio]').click(function(event){
			event.stopPropagation();
	});


EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);
EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);

	var form_obj=EMF_jQuery("#emf-container form");
if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1 && window.location.hash){
	form_obj.attr('action', form_obj.attr('action')+window.location.hash);
}

init_rules();

enable_session_when_cookie_disabled();

detect_unsupported_browser();

randomize_field_content();



});

var emf_widgets={text :
		function(index){
			return $("#element_"+index).val();
		}
	,number :
		function(index){
			return $("#element_"+index).val();
		}
	,textarea :
		function(index){
			return $("#element_"+index).val();
		}
	,new_checkbox :
		function(index){
			var arr=new Array();
			$("input[name='element_"+index+"[]']:checked").each(function(){
				arr[arr.length]=this.value;
			});
			var result=arr.join(", ");
			return result;
		}
	,radio :
		function(index){
			var result="";
			$("input[name=element_"+index+"]:checked").each(function(){
				result=this.value;
			});
			return result;
		}
	,select :
		function(index){
			return $("#element_"+index).val();
		}
	,email :
		function(index){
			return $("#element_"+index).val();
		}
	,phone :
		function(index){
			var arr=new Array();
			$("input[id^=element_"+index+"_]").each(function(){
				arr[arr.length]=this.value;
			});

			var result="";
			if(arr.length>0){
				result=arr.join("-");
			}else{
				result=$("#element_"+index).val();
			}
			return result;
		}
	,datetime :
		function(index){
			var result="";

			var date_part="";
			if($("#element_"+index+"_year").length==1){
				date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();
			}

			var time_part="";
			if($("#element_"+index+"_hour").length==1){
				time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();
			}

			if(date_part && time_part){
				result=date_part+" "+time_part;
			}else{
				result=date_part ? date_part : time_part;
			}

			return result;
		}
	,url :
		function(index){
			return $("#element_"+index).val();
		}
	,file :
		function(index){
			return $("#element_"+index).val();
		}
	,Image :
		function(index){
			return $("#element_"+index).val();
		}
	,new_select_multiple :
		function(index){
			return $("#element_"+index).val();
		}
	,price :
		function(index){
			var result="";
			var arr=new Array();
			$("input[id^=element_"+index+"_]").each(function(){
				arr[arr.length]=this.value;
			});
			result=arr.join(".");
			return result;
		}
	,hidden :
		function(index){
			return $("#element_"+index).val();
		}
	,unique_id :
		function(index){
			return $("#element_"+index).val();
		}
	,section_break :
		function(index){
			return "";
		}
	,page_break :
		function(index){
			return "";
		}
	,signature :
		function(index){
			return $("#element_"+index).val();
		}
	,star_rating :
		function(index){
			var result="";
			$("input[name=element_"+index+"]:checked").each(function(){
				result=this.value;
			});
			return result;
		}
	,scale_rating :
		function(index){
			var result="";
			$("input[name=element_"+index+"]:checked").each(function(){
				result=this.value;
			});
			return result;
		}
	,deprecated :
		function(index){
			return $("#element_"+index).val();
		}
	,address :
		function(index){
			var result="";
			var element_arr=$("input,select").filter("[name='element_"+index+"[]']").toArray();
			result=element_arr[0].value+" "+element_arr[1].value+"\n"
				+element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\n"
				+element_arr[5].value;
			return result;
		}
	,name :
		function(index){
			var arr=new Array();
			$("input[id^=element_"+index+"_]").each(function(){
				arr[arr.length]=this.value;
			});
			var result=arr.join(" ");
			return result;
		}
	,checkbox :
		function(index){
			var arr=new Array();
			$("input[name='element_"+index+"[]']:checked").each(function(){
				arr[arr.length]=this.value;
			});
			var result=arr.join(", ");
			return result;
		}
	,select_multiple :
		function(index){
			return $("#element_"+index).val();
		}
	};

var emf_condition_id_to_js_map={5 :
		function(field_value, value){
			return field_value==value;
		}
	,6 :
		function(field_value, value){
			return field_value!=value;
		}
	,1 :
		function(field_value, value){
			return field_value.indexOf(value)>-1;
		}
	,2 :
		function(field_value, value){
			return field_value.indexOf(value)==-1;
		}
	,3 :
		function(field_value, value){
			return field_value.indexOf(value)==0;
		}
		,4 :
		function(field_value, value){
			return field_value.indexOf(value)==field_value.length-value.length;
		}
	,7 :
	function(field_value, value){
	return parseFloat(field_value)==parseFloat(value);
}
,8 :
		function(field_value, value){
			return parseFloat(field_value)>parseFloat(value);
		}
	,9 :
		function(field_value, value){
			return parseFloat(field_value) < parseFloat(value);
		}
	,10 :
		function(field_value, value){
			var date_for_field_value=Date.parse(field_value);
			var date_for_value=Date.parse(value);
			if(date_for_field_value && date_for_value){
				return date_for_field_value == date_for_value;
			}
			return false;
		}
	,11 :
		function(field_value, value){
			var date_for_field_value=Date.parse(field_value);
			var date_for_value=Date.parse(value);
			if(date_for_field_value && date_for_value){
				return date_for_field_value < date_for_value;
			}
			return false;
		}
	,12 :
		function(field_value, value){
			var date_for_field_value=Date.parse(field_value);
			var date_for_value=Date.parse(value);
			if(date_for_field_value && date_for_value){
				return date_for_field_value > date_for_value;
			}
			return false;
		}
	};
var emf_group_to_field_rules_map=[];
var emf_group_to_page_rules_for_confirmation_map=[];

var emf_cart=null;
var emf_page_info={current_page_index: 0, page_element_index_min: 0, page_element_index_max: 4};
var emf_index_to_value_map=null;
var emf_form_visit_id="51eyu5SkRiPA7ZnbW4H02wD3L";

var emf_index_to_option_map=[];
</script>

			<?php // NOTE: Fin formulario de contacto ?>
		</div>



    <div role="tabpanel" class="tab-pane" id="profile">
		<?php // NOTE: Inicio formulario de Contacto ?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//assets.emailmeform.com/styles/dynamic.php?t=post&enable_responsive_ui=1&RU1GLTAyLTI0" />
		<link href='//fonts.googleapis.com/css?family=Lato|Lato|Lato|Lato|Lato|Lato' rel='stylesheet' type='text/css'/>
		<link href='//fonts.googleapis.com/css?family=Lato|Lato' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" type="text/css" href="http://app.emailmeform.com/builder/theme_css/E5Tx7cK88NH1y004w0nY" />
		<style>
		#emf-container, #emf-container-outer #emf-form-shadows{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;width:640px}
		@media screen and (max-width: 656px) {#emf-container,#emf-container-outer #emf-form-shadows {width: 100%;} }
		</style>
		<div id="emf-container-outer">
		<div id="emf-container" >
		<div id="emf-logo"><a >EmailMeForm</a></div>
		<div class="emf-error-message" style='display:none'></div>
		<form id="emf-form" target="_self" class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/E5Tx7cK88NH1y004w0nY">
		<ul>
		<li id="emf-li-0" class="emf-li-field emf-field-text data_container   ">
		<label class="emf-label-desc" for="element_0">Nombre <span>*</span></label>
		<div class="emf-div-field">
			<input id="element_0" name="element_0" value="" size="30" type="text"	class="validate[required] form-control form-contac"/></div>
		<div class="emf-clear"></div>
		</li><li id="emf-li-1" class="emf-li-field emf-field-email data_container   ">
		<label class="emf-label-desc" for="element_1">Email <span>*</span></label>
		<div class="emf-div-field"><input id="element_1" name="element_1" class="validate[required,custom[email]] form-control form-contac" value="" size="30" type="text" /></div>
		<div class="emf-clear"></div>
		</li><li id="emf-li-2" class="emf-li-field emf-field-phone data_container   ">
		<label class="emf-label-desc" for="element_2">Teléfono</label>
		<div class="emf-div-field"><input id="element_2" name="element_2"	class="validate[optional,custom[telephone]] form-control form-contac"
					value="" size="30" type="text" /></div>
		<div class="emf-clear"></div>
		</li><li id="emf-li-3" class="emf-li-field emf-field-file data_container">
		<label class="emf-label-desc" for="element_3">Cargar archivo</label>
		<div class="emf-div-field">
			<input id="element_3" name="element_3" onchange="EMF_jQuery(this).blur()"
							class="validate[optional,funcCall[check_file_error[null,2M]]]" type="file" /></div>
		<div class="emf-clear"></div>
		</li><li id="emf-li-4" class="emf-li-field emf-field-text data_container">
		<label class="emf-label-desc" for="element_4">Asunto <span>*</span></label>
		<div class="emf-div-field"><input id="element_4" name="element_4" value="" size="30" type="text" class="validate[required] form-control form-contac"/></div>
		<div class="emf-clear"></div>
		</li><li id="emf-li-5" class="emf-li-field emf-field-textarea data_container   ">
		<label class="emf-label-desc" for="element_5">Mensaje</label>
		<div class="emf-div-field"><textarea id="element_5" name="element_5" cols="45" rows="10"	class="validate[optional] form-control form-contac"></textarea></div>
		<div class="emf-clear"></div>
		</li>
		<li id="emf-li-captcha" >
		<div id="emf-captcha-top-settings">Image Verification</div>
		<div id="emf-captcha-bottom-settings">
		<div id="emf-captcha-image-settings">
		<img id="captcha_image" src="http://www.emailmeform.com/builder/captcha/index/a5021fc3fd371da5401651228de16735" alt="captcha" onload="if(typeof on_captcha_image_load=='function') on_captcha_image_load();">
		</div>
		<div id="emf-captcha-input-settings">
		<div>Please enter the text from the image:</div>
		<input type="text" id="captcha_code" name="captcha_code" maxlength="10" size="10" class="validate[required,funcCall[valid_captcha]]"
								 />
								[<a id="captcha_code_refresh" href="javascript:void(0);"
								onclick="document.getElementById('captcha_image').src = 'http://www.emailmeform.com/builder/captcha/index/'+Math.random()+'?PHPSESSID='+get_g_emf_session_id();return false;">Refresh Image</a>]
								[<a id="captcha_code_about" href="javascript:void(0);" onclick="window.open('http://app.emailmeform.com/captcha-instruction.html','_blank','width=400, height=500, left=' + (screen.width-450) + ', top=100');return false;">What's This?</a>]
		</div>
		<div class="emf-clear"></div>
		</div>
		<div class="emf-clear"></div>
		</li>
		<li id="emf-li-post-button" class="left">
		<input  src="//assets.emailmeform.com//builder/images/submit-orange.png" type="image" alt="Submit" onmouseover="return true;"/>
		</li>
		</ul>
		<input name="element_counts" value="6" type="hidden" />
		<input name="embed" value="forms" type="hidden" /><div style="margin-top:18px;text-align:center"><div id='emf_advertisement'><font face="Verdana" size="2" color="#000000">Powered by</font><span style="position: relative; padding-left: 3px; bottom: -5px;"><img src="//assets.emailmeform.com/images/footer-logo.png?RU1GLTAyLTI0" /></span><font face="Verdana" size="2" color="#000000">EMF </font><a style="text-decoration:none;" href="http://www.emailmeform.com/" target="_blank"><font face="Verdana" size="2" color="#000000">Free Form Builder</font></a></div><div><font face="Verdana" size="2" color="#000000"><a style="line-height:20px;font-size:70%;text-decoration:none;" href="https://www.emailmeform.com/report-abuse.html?http://www.emailmeform.com/builder/form/E5Tx7cK88NH1y004w0nY" target="_blank">Report Abuse</a></font></div></div>
		</form>
		</div><img id="emf-form-shadows" src="//assets.emailmeform.com/images/themes/bottom.png?RU1GLTAyLTI0"></div>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
		if (typeof jQuery == 'undefined'){
		    document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-1.8.3.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
		</script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript">
		if (typeof $.ui == 'undefined'){
		    document.write(unescape("%3Cscript src='http://app.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
		</script>
		<script type="text/javascript" src="//assets.emailmeform.com/js/dynamic.php?t=post&t2=0&use_CDN=true&language=es&language_id=0&referer_domain=http%3A%2F%2Fwww.emailmeform.com%2F&RU1GLTAyLTI0"></script>
		<script type="text/javascript">
		EMF_jQuery(window).load(function(){
			post_message_for_frame_height("E5Tx7cK88NH1y004w0nY");
		});

		EMF_jQuery(function(){
			bind_auto_cursor(EMF_jQuery('#emf-li-2 input[type=text]'));
			generate_css_for_emf_ad();
		;

			EMF_jQuery("#emf-form").validationEngine({
				validationEventTriggers:"blur",
				scroll:true
			});
			prevent_duplicate_submission(EMF_jQuery("#emf-form"));

			$("input[emf_mask_input=true]").dPassword();

			if(EMF_jQuery('#captcha_image').length>0){
				on_captcha_image_load();
			}

			EMF_jQuery('.emf-field-grid td').click(function(event){
				// 		if(!event.target.tagName || event.target.tagName.toLowerCase()!='td') return;

				EMF_jQuery(this).find('input[type=checkbox],input[type=radio]').click();
			});

		    EMF_jQuery('input[type=checkbox],input[type=radio]').click(function(event){
		        event.stopPropagation();
		    });


			EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);
			EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);

				var form_obj=EMF_jQuery("#emf-container form");
			if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1 && window.location.hash){
				form_obj.attr('action', form_obj.attr('action')+window.location.hash);
			}

			init_rules();

			enable_session_when_cookie_disabled();

			detect_unsupported_browser();

			randomize_field_content();



			});

		var emf_widgets={text :
					function(index){
						return $("#element_"+index).val();
					}
				,number :
					function(index){
						return $("#element_"+index).val();
					}
				,textarea :
					function(index){
						return $("#element_"+index).val();
					}
				,new_checkbox :
					function(index){
						var arr=new Array();
						$("input[name='element_"+index+"[]']:checked").each(function(){
							arr[arr.length]=this.value;
						});
						var result=arr.join(", ");
						return result;
					}
				,radio :
					function(index){
						var result="";
						$("input[name=element_"+index+"]:checked").each(function(){
							result=this.value;
						});
						return result;
					}
				,select :
					function(index){
						return $("#element_"+index).val();
					}
				,email :
					function(index){
						return $("#element_"+index).val();
					}
				,phone :
					function(index){
						var arr=new Array();
						$("input[id^=element_"+index+"_]").each(function(){
							arr[arr.length]=this.value;
						});

						var result="";
						if(arr.length>0){
							result=arr.join("-");
						}else{
							result=$("#element_"+index).val();
						}
						return result;
					}
				,datetime :
					function(index){
						var result="";

						var date_part="";
						if($("#element_"+index+"_year").length==1){
							date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();
						}

						var time_part="";
						if($("#element_"+index+"_hour").length==1){
							time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();
						}

						if(date_part && time_part){
							result=date_part+" "+time_part;
						}else{
							result=date_part ? date_part : time_part;
						}

						return result;
					}
				,url :
					function(index){
						return $("#element_"+index).val();
					}
				,file :
					function(index){
						return $("#element_"+index).val();
					}
				,Image :
					function(index){
						return $("#element_"+index).val();
					}
				,new_select_multiple :
					function(index){
						return $("#element_"+index).val();
					}
				,price :
					function(index){
						var result="";
						var arr=new Array();
						$("input[id^=element_"+index+"_]").each(function(){
							arr[arr.length]=this.value;
						});
						result=arr.join(".");
						return result;
					}
				,hidden :
					function(index){
						return $("#element_"+index).val();
					}
				,unique_id :
					function(index){
						return $("#element_"+index).val();
					}
				,section_break :
					function(index){
						return "";
					}
				,page_break :
					function(index){
						return "";
					}
				,signature :
					function(index){
						return $("#element_"+index).val();
					}
				,star_rating :
					function(index){
						var result="";
						$("input[name=element_"+index+"]:checked").each(function(){
							result=this.value;
						});
						return result;
					}
				,scale_rating :
					function(index){
						var result="";
						$("input[name=element_"+index+"]:checked").each(function(){
							result=this.value;
						});
						return result;
					}
				,deprecated :
					function(index){
						return $("#element_"+index).val();
					}
				,address :
					function(index){
						var result="";
						var element_arr=$("input,select").filter("[name='element_"+index+"[]']").toArray();
						result=element_arr[0].value+" "+element_arr[1].value+"\n"
							+element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\n"
							+element_arr[5].value;
						return result;
					}
				,name :
					function(index){
						var arr=new Array();
						$("input[id^=element_"+index+"_]").each(function(){
							arr[arr.length]=this.value;
						});
						var result=arr.join(" ");
						return result;
					}
				,checkbox :
					function(index){
						var arr=new Array();
						$("input[name='element_"+index+"[]']:checked").each(function(){
							arr[arr.length]=this.value;
						});
						var result=arr.join(", ");
						return result;
					}
				,select_multiple :
					function(index){
						return $("#element_"+index).val();
					}
				};

		var emf_condition_id_to_js_map={5 :
					function(field_value, value){
						return field_value==value;
					}
				,6 :
					function(field_value, value){
						return field_value!=value;
					}
				,1 :
					function(field_value, value){
						return field_value.indexOf(value)>-1;
					}
				,2 :
					function(field_value, value){
						return field_value.indexOf(value)==-1;
					}
				,3 :
					function(field_value, value){
						return field_value.indexOf(value)==0;
					}
					,4 :
					function(field_value, value){
						return field_value.indexOf(value)==field_value.length-value.length;
					}
				,7 :
				function(field_value, value){
				return parseFloat(field_value)==parseFloat(value);
			}
			,8 :
					function(field_value, value){
						return parseFloat(field_value)>parseFloat(value);
					}
				,9 :
					function(field_value, value){
						return parseFloat(field_value) < parseFloat(value);
					}
				,10 :
					function(field_value, value){
						var date_for_field_value=Date.parse(field_value);
						var date_for_value=Date.parse(value);
						if(date_for_field_value && date_for_value){
							return date_for_field_value == date_for_value;
						}
						return false;
					}
				,11 :
					function(field_value, value){
						var date_for_field_value=Date.parse(field_value);
						var date_for_value=Date.parse(value);
						if(date_for_field_value && date_for_value){
							return date_for_field_value < date_for_value;
						}
						return false;
					}
				,12 :
					function(field_value, value){
						var date_for_field_value=Date.parse(field_value);
						var date_for_value=Date.parse(value);
						if(date_for_field_value && date_for_value){
							return date_for_field_value > date_for_value;
						}
						return false;
					}
				};
		var emf_group_to_field_rules_map=[];
		var emf_group_to_page_rules_for_confirmation_map=[];

		var emf_cart=null;
		var emf_page_info={current_page_index: 0, page_element_index_min: 0, page_element_index_max: 5};
		var emf_index_to_value_map=null;
		var emf_form_visit_id="E5Tx7cK88NH1y004w0nY";

		var emf_index_to_option_map=[];
		</script>

		<?php // NOTE: Fin formulario de Contacto ?>


		</div>


  </div>

</div>

				<?php // NOTE: FIN FORM| ?>


							</div>


<p><p>
						<div class="col-md-5">



							<center><img src="images/nuestrarazon.jpg" width="280" class="img-responsive img-thumbnail"></center>
<br><hr>
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Patricia Mariño</h3>
		</div>
		<div class="panel-body">
			<i class="icon-phone-2"></i> +57 314 4720657<br>

				<i class="icon-mail-2"></i> pmarino@hoteltotal.co<br>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Hernando Gómez</h3>
		</div>
		<div class="panel-body">
			<i class="icon-phone-2"></i> +57 317 501 5180<br>

				<i class="icon-mail-2"></i> hgomez@hoteltotal.co<br>
		</div>
	</div>

</div>

<?php // NOTE:  ?>




						</div>
						</div>





								</div>
							</div>
							</div>
<script type="text/javascript">
$('#myTabs a').click(function (e) {
e.preventDefault()
$(this).tab('show')
})
</script>
			<!-- page-top end -->

@stop
