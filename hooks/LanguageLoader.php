<?php

class LanguageLoader {

	function initialize (){
      $CI = &get_instance();
      $CI->load->helper('language');
		  $sitelanguage = $CI->session->userdata('site_lang');

	  	if($sitelanguage){
        $CI->lang->load('content',$sitelanguage);
		}else	{
			$CI->lang->load('content','english');
		}
	}


}
?>
