<?php 

class Login extends Controller {
    public function index()
    {
         $data['judul'] = 'Login';
         // $data['login'] = $this->Model('Login_model')->getAllLogin();
         $this->view('templates/header', $data);
         $this->view('login/login');
         $this->view('templates/footer');
    }

    public function input()
    {
        $data['judul'] = 'Login';
        $data['login'] = $this->Model('Login_model')->getAllLogin();
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function submit()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model('Login_model')->getAllUser($username, $password);
        
        if(!empty($user)){
        	$_SESSION['user'] = $user;
        	$_SESSION['is_login'] = true;
            $_SESSION['status'] = 'admin'; 
            $_SESSION['username'] = $username;
            header('Location: ' . BASEURL . '/home');
            exit();
        } else{
            header('Location: ' . BASEURL . '/login');
            exit();
        }
    }

    public function logout()
    {
    	session_destroy();
    	$_SESSION = array();
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}