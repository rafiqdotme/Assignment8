<?php
class CsvFile {
	private $filename;
	
	public function __construct($filename) {
		$this->filename = $filename;
	}
	
	public function save(array $data) {
		$file = fopen($this->filename, "a");
		fputcsv($file, $data);
		fclose($file);
	}
	
	public function getUsers() {
		$users = array();
		if (($file = fopen($this->filename, "r")) !== FALSE) {
			while (($data = fgetcsv($file)) !== FALSE) {
				$users[] = new User($data[0], $data[1], $data[2], $data[3]);
			}
			fclose($file);
		}
		return $users;
	}
}
?>