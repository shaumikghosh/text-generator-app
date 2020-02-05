<?php

class TextGenerator
{
	// this constructor is getting validated values from input fields
	public function __construct($txt1, $txt2, $opt) {
		
		$this->txt1 = $txt1;
		$this->txt2 = $txt2;
		$this->opt = $opt;

	}

	// this function is assisting to generate result for display
	public function generate_result () {

		switch ( $this->opt) {

			case 'a':
				$str1 = explode("\n", $this->txt1);
				$str2 = explode("\n", $this->txt2);

				$str1 = str_replace(' ', '', $str1);
				$str1 = str_replace('-', '', $str1);
				$str1 = preg_replace('/\s+/', '', $str1);

				$str2 = str_replace(' ', '', $str2);
				$str2 = str_replace('-', '', $str2);
				$str2 = preg_replace('/\s+/', '', $str2);
				
				foreach($str1 as $e){
					foreach ($str2 as $e2){
						if(!empty($e) && !empty($e2)){
							if($e!=$e2 && $e2!=$e){
								$result_output[] = $e.$e2;
								$result_output[] = $e2.$e;
							}
						}
					}
				}

				$result = array_unique($result_output);
				$result = array_filter($result);
				return $result;

				break;

			case 'b':

				$str1 = explode("\n", $this->txt1);
				$str2 = explode("\n", $this->txt2);

				$str1 = str_replace(' ', ' ', $str1);
				$str1 = str_replace('-', ' ', $str1);
				$str1 = preg_replace('/\s+/', ' ', $str1);

				$str2 = str_replace('', ' ', $str2);
				$str2 = str_replace('-', ' ', $str2);
				$str2 = preg_replace('/\s+/', ' ', $str2);
				
				foreach($str1 as $e){
					foreach ($str2 as $e2){
						if(!empty($e) && !empty($e2)){
							if(trim($e) && trim($e2)){
								if($e!=$e2 && $e2!=$e){
									$result_output[] = $e." ".$e2;
									$result_output[] = $e2." ".$e;
								}
							}
						}
					}
				}
				
				$result = array_unique($result_output);
				$result = array_filter($result);
				return $result;

				break;
			
			case 'c':

				$str1 = explode("\n", $this->txt1);
				$str2 = explode("\n", $this->txt2);

				$str1 = str_replace('', '-', $str1);
				$str1 = str_replace(' ', '-', $str1);
				$str1 = preg_replace('/\s+/', '', $str1);

				$str2 = str_replace('', '-', $str2);
				$str2 = str_replace(' ', '-', $str1);
				$str2 = preg_replace('/\s+/', '', $str2);
				
				foreach($str1 as $e){
					foreach ($str2 as $e2){
						if(!empty($e) && !empty($e2)){
							if($e!=$e2 && $e2!=$e){
								$result_output[] = $e."-".$e2;
								$result_output[] = $e2."-".$e;
							}
						}
					}
				}
				
				$result = array_unique($result_output);
				$result = array_filter($result);
				return $result;

				break;
			
				
	

		}


	
	}

}