<?php
class HelloWorldController extends AppController {
    function index(){
		$this->set("cakecms", "Hello World!");
    } 
}
?>