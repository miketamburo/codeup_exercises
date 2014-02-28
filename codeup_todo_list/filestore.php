<?php

class Filestore {
	public $filename = '';
	public $items = []:
	public $contents = [];

	public function __construct($filename = ''){
		$this->filename = $filename;
	}

	// returns array of lines in $this->filename
	public function read_lines(){
		$handle = fopen($this->filename, "r");
		$contents = fread($handle, filesize($this->filename));
		fclose($handle);
		if (is_string($contents)){
			$contents = explode("\n", $contents);	
		} 	
		$items = array_merge($this->items, $contents);
		return array_values($this->items);
	}
	// writes each element in $array to a new line in $this-> filename
	public function write_lines(){
		$handle = fopen($this->filename, "w");
        $item = implode("\n", $this->items);
        fwrite($handle, $item);
        fclose($handle);
        return $items;
    }

	// Reads contents of csv $this->filename, returns an array
	public function read_csv(){
		$contents = [];
		$handle = fopen($this->filename, 'r');
		while(($data = fgetcsv($handle)) !== FALSE) {
	  		$contents[] = $data;
		}
		fclose($handle);
		return $contents;
	}

	public function write_csv(){
		$handle = fopen($this->filename, 'w');
			foreach ($addresses_array as $fields) {
				fputcsv($handle, $fields);
			}
		fclose($handle);
	}
}