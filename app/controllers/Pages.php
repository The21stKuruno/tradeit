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
      'description' => 'App to log your stock trades in the cloud, track your mistakes, test new strategies, and <strong>improve your trading</strong>.'
    ];

    $this->view('pages/about', $data);
  }
}