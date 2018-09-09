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
      'title' => 'About Us',
      'description' => 'App to track your trades and improve your trading.'
    ];

    $this->view('pages/about', $data);
  }
}