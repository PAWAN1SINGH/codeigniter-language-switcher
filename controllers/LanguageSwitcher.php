<?php

class LanguageSwitcher extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function switcher($langauge='') {
		$langauge = ($langauge!='') ? $langauge : "english";
		$this->session->set_userdata('site_lang',$langauge);

		redirect(base_url());
		
	}
}

?>
