<?php if (!defined('BASEPATH')) die();

class Adminlogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('validasi_admin','',TRUE);
   $this->load->model('query','',TRUE);
 }

 public function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('admin/login');
   }
   else
   {
     //Go to private area
     redirect('admin/home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.&nbsp; Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->validasi_admin->login($username, $password);
   if($result)
   {
     $sess_array = array();     
     foreach($result as $row)
     {
        $id = $row->username;
        $tabel = 'gsjadmin';
        $idprimary = 'username';
        $data['get'] = $this->query->get_id($tabel,$idprimary,$id);

     // if ($row->status == 1) {
       $sess_array = array(
         'id_admin' => $row->id_admin,
         'username' => $row->username,
         'email' => $row->email,
         'nama' => $row->nama
       );

       $this->session->set_userdata('logged_in', $sess_array);
     //}
   }
     //print_r($result);
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}