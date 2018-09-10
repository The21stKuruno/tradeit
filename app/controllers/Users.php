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
    // Check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process Form
      // Sanitize Post Data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // Init data
      $data = [
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),        
        'username_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Validate Username
      if(empty($data['username'])) {
        $data['username_err'] = 'Please enter username.';
      }
      // Validate Email
      if(empty($data['email'])) {
        $data['email_err'] = 'Please enter email.';
      }
      // Validate Password
      if(empty($data['password'])) {
        $data['password_err'] = 'Please enter pasword.';
      }
      // Validate Confirm Password
      if(empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password.';
      }

      
      $this->view('users/signup', $data);

    } else {
      // Init data
      $data = [
        'username' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'username_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load View
    $this->view('users/signup', $data);
    }
  }

  public function signin() {
    $data = [
      'title' => 'Sign In'
    ];

    $this->view('users/signin', $data);
  }
}