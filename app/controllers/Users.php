<?php 
class Users extends Controller {
  public function __construct() {
    
  }

  public function index() {
    $data = [
      'title' => 'Trade-it'
    ];

    $this->view('pages/index', $data);
  }

  public function signup() {
    $data = [
      'title' => 'Sign Up'
    ];

    $this->view('users/signup', $data);
  }

  public function signin() {
    $data = [
      'title' => 'Sign In'
    ];

    $this->view('users/signin', $data);
  }
}