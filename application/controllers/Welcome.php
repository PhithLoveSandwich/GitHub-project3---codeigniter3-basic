<?php
class Welcome extends CI_Controller {
    public function hello() {
        $data["name"] = "Somchai";
        $data["email"] = "somchai@gmail.com";
        $data["books"] = array("Java", "PHP", "Python", "Kotlin");
		$data["query"] = "NPRU 664259020 Thanawat Srisaeng";
        $this->load->view('hello_view', $data);
    }
}

