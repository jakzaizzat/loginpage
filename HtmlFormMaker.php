<?php
	class HtmlFormMaker{

		public function form_open($method){
			return '<form method=" '. $method .' " class="login">' ;
		}

		public function form_email($type,$placeholder){
			return '<input type="'. $type .'" class="login-input" placeholder="' .$placeholder. '" autofocus>';
		}

		public function form_password($type,$placeholder){
				return '<input type="'. $type .'" class="login-input" placeholder="'. $placeholder .'">';
		}

		public function form_submit($type,$value){
			return '<input type="'. $type .'" value="'. $value .'" class="login-button">';
		}

		public function form_close(){
			return "</form>";
		}
	}
?>
