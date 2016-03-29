<?php
	class URL {
		
		private $url;
		private $parts;
		
		public function __construct($url) {
			if(!Type::string($url)) {
				//error
			}
			if(!URL::valid($value)) {
				//error
			}
			$this->url = $url;
			$this->parts = parse_url($url);
		}
		
		public function __destruct() {
			unset($this->url);
			unset($this->parts);
		}
		
		public has($property) {
			return array_key_exists($property, $this->parts);
		}
	}
?>