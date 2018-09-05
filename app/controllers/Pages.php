<?php
class Pages extends Controller {
  public function __construct() {

  }

  public function index() {
    $data = [
      'title' => 'Trade-it'
    ];

    $this->view('pages/index', $data);
  }

  public function about() {
    $data = [
      'title' => 'About Trade-it'
    ];

    $this->view('pages/about', $data);
  }
}