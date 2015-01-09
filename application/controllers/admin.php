<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Admin extends CI_Controller {

    function __construct(){
       parent::__construct();
       $this->load->library('form_validation');
    }
     public function index()
  	{

     if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['nama'] = $session_data['nama'];
       $data['id_admin'] = $session_data['id_admin'];


       redirect('admin/home', $data);
     }
     else
     {
       //If no session, redirect to login page
       redirect('admin/login', 'refresh');
     }

  	}

     public function login()
     {
       if($this->session->userdata('logged_in'))
       {
         $session_data      = $this->session->userdata('logged_in');
         $data['nama']      = $session_data['nama'];
         $data['id_admin']  = $session_data['id_admin'];
         
         redirect('admin/home', $data);
       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }    
     }
     
    function logout()
      {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('admin/login', 'refresh');
      }

    function pengumuman(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

         $data['pengumuman']=$this->db->get("gsjpengumuman")->row();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/pengumuman',$data);
         $this->load->view('admin/footer',$data);

       }
       else
       {
         //If no session, redirect to login page
        redirect('admin/login', 'refresh');
       }

    }

    function actpengumuman(){

      $data = array(
        "hal" => $this->input->post("hal"),
        "pengumuman" => $this->input->post("pengumuman"), 
        );

      $this->db->where("id_pengumuman",$this->input->post("id"));
      $this->db->update("gsjpengumuman",$data);
      redirect("admin/pengumuman");

    } 

     function home(){

       if($this->session->userdata('logged_in'))
       {
         $session_data      = $this->session->userdata('logged_in');
         $data['nama']      = $session_data['nama'];
         $data['id_admin']  = $session_data['id_admin'];

         //========= Summary =========================
         $data['jumlah_dataanggota']    = $this->db->get('gsjanggota'   )->num_rows();
         $data['jumlah_datamateri']     = $this->db->get('gsjmateri'    )->num_rows();
         $data['jumlah_datakegiatan']   = $this->db->get('gsjkegiatan'  )->num_rows();
         $data['jumlah_dataalbum']      = $this->db->get('gsjalbum'     )->num_rows();

         

         $this->load->view('admin/header',$data);
         $this->load->view('admin/home',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
        redirect('admin/login', 'refresh');
       }

    }

    #=============================================
    # Kegiatan
    #=============================================

    function tambahkegiatan(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $this->load->view('admin/header',$data);
         $this->load->view('admin/tambahkegiatan',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function kegiatan(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $this->db->join('gsjadmin','gsjkegiatan.poster=gsjadmin.id_admin');
         $this->db->order_by('id_kegiatan','DESC');
         $data['kegiatan']=$this->db->get('gsjkegiatan')->result();


         $this->load->view('admin/header',$data);
         $this->load->view('admin/datakegiatan',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function inputkegiatan(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
          
          $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');
          $this->form_validation->set_rules('waktu', 'Waktu ', 'required');
          $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {
           $datakegiatan=array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'waktu' => $this->input->post('waktu'),
            'deskripsi' => $this->input->post('deskripsi'),
            'poster' => $data['id_admin']
            );
           $this->db->insert('gsjkegiatan',$datakegiatan);
           redirect('admin/kegiatan');
            }

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function editkegiatan(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id= $this->uri->segment(3);
         $this->db->where("id_kegiatan",$id);
         $data['edit']=$this->db->get("gsjkegiatan")->row();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/editkegiatan',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function updatekegiatan(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
          
          $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');
          $this->form_validation->set_rules('waktu', 'Waktu ', 'required');
          $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {

              $id=$this->input->post("id_kegiatan");
           $datakegiatan=array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'waktu' => $this->input->post('waktu'),
            'deskripsi' => $this->input->post('deskripsi'),
            'poster' => $data['id_admin']
            );
           $this->db->where("id_kegiatan",$id);
           $this->db->update('gsjkegiatan',$datakegiatan);
           redirect('admin/kegiatan');
            }

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

     function hapuskegiatan(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id=$this->uri->segment(3);
         $this->db->where('id_kegiatan',$id);
         $this->db->delete('gsjkegiatan');
         redirect('admin/kegiatan');

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    #=============================================
    # PROGRAM
    #=============================================
    function program(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $this->db->join('gsjadmin','gsjprogram.poster=gsjadmin.id_admin');
         $this->db->order_by('id_program','DESC');
         $data['program']=$this->db->get('gsjprogram')->result();


         $this->load->view('admin/header',$data);
         $this->load->view('admin/dataprogram',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function tambahprogram(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         


         $this->load->view('admin/header',$data);
         $this->load->view('admin/tambahprogram',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function inputprogram(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
          
          $this->form_validation->set_rules('nama_program', 'Nama Program', 'required');
          $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {
           $data=array(
            'nama_program' => $this->input->post('nama_program'),
            'deskripsi' => $this->input->post('deskripsi'),
            'poster' => $data['id_admin']
            );
           $this->db->insert('gsjprogram',$data);
           redirect('admin/program');
            }

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function editprogram(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id= $this->uri->segment(3);
         $this->db->where("id_program",$id);
         $data['edit']=$this->db->get("gsjprogram")->row();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/editprogram',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function updateprogram(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
          
          $this->form_validation->set_rules('nama_program', 'Nama Program', 'required');
          $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {
              $id=$this->input->post("id_program");
           $data=array(
            'nama_program' => $this->input->post('nama_program'),
            'deskripsi' => $this->input->post('deskripsi'),
            'poster' => $data['id_admin']
            );
           $this->db->where("id_program",$id);
           $this->db->update('gsjprogram',$data);
           redirect('admin/program');
            }

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function hapusprogram(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id=$this->uri->segment(3);
         $this->db->where('id_program',$id);
         $this->db->delete('gsjprogram');
         redirect('admin/program');

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }


    #=============================================
    # ANGGOTA
    #=============================================
    function anggota(){
      if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

        $data['anggota'] = $this->db->get('gsjanggota');

        $this->load->view('admin/header',$data);
         $this->load->view('admin/dataanggota',$data);
         $this->load->view('admin/footer',$data);
      }else{
        $this->load->view('admin/login');
      }
    }

    function tambahanggota(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         


         $this->load->view('admin/header',$data);
         $this->load->view('admin/tambahanggota',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function inputanggota(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

         $config['upload_path'] = './uploads/anggota';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '1000';
         $config['max_width'] = '10240';
         $config['max_height'] = '7680';
         $this->load->library('upload');
         $this->upload->initialize($config);
          
          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
          $this->form_validation->set_rules('angkatan', 'Angkatan ', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
          $this->form_validation->set_rules('telepon','Telepon','required');
          $this->form_validation->set_rules('alamat','Alamat','required');

         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {

                if($this->upload->do_upload()){

                $tGambar = $this->upload->data();
                $pic = $tGambar["file_name"];
                $data = array('upload_data' => $this->upload->data());

                }

                else{
                  $pic ="";
                }

           $dataanggota=array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'angkatan' => $this->input->post('angkatan'),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon'),
            'alamat' => $this->input->post('alamat'),
            'foto' => $pic
            );
           $this->db->insert('gsjanggota',$dataanggota);
           redirect('admin/anggota');
            }

       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }

    }

    function editanggota(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id= $this->uri->segment(3);
         $this->db->where("id_anggota",$id);
         $data['edit']=$this->db->get("gsjanggota")->row();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/editanggota',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function updateanggota(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

         $config['upload_path'] = './uploads/anggota';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '1000';
         $config['max_width'] = '10240';
         $config['max_height'] = '7680';
         $this->load->library('upload');
         $this->upload->initialize($config);
          
          $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
          $this->form_validation->set_rules('angkatan', 'Angkatan ', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
          $this->form_validation->set_rules('telepon','Telepon','required');
          $this->form_validation->set_rules('alamat','Alamat','required');

         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {
              $id=$this->input->post("id_anggota");
              $this->db->where("id_anggota",$id);
              $row=$this->db->get("gsjanggota")->row();
                if($this->upload->do_upload()){
                  $foto = $row->foto;
                  if ($foto != '') {
                  unlink(realpath('uploads/anggota/'.$foto));
                  }

                $tGambar = $this->upload->data();
                $pic = $tGambar["file_name"];
                $data = array('upload_data' => $this->upload->data());

                }

                else{
                  $pic =$this->input->post("foto");
                }

           $dataanggota=array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'angkatan' => $this->input->post('angkatan'),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon'),
            'alamat' => $this->input->post('alamat'),
            'foto' => $pic
            );
           $this->db->where("id_anggota",$id);
           $this->db->update('gsjanggota',$dataanggota);
           redirect('admin/anggota');
            }

       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }

    }

     function hapusanggota(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id=$this->uri->segment(3);
         $this->db->where("id_anggota",$id);
         $row=$this->db->get("gsjanggota")->row();
         $foto = $row->foto;
         if ($foto != '') {
          unlink(realpath('uploads/anggota/'.$foto));
          }

         $this->db->where('id_anggota',$id);
         $this->db->delete('gsjanggota');
         redirect('admin/anggota');

       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }

    }

    #=============================================
    # MATERI
    #=============================================

    function materikepramukaan(){
      if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

        $this->db->join('gsjadmin','gsjmateri.poster=gsjadmin.id_admin');
        $data['materikepramukaan'] = $this->db->get('gsjmateri');

        $this->load->view('admin/header',$data);
         $this->load->view('admin/materikepramukaan',$data);
         $this->load->view('admin/footer',$data);
      }else{
        $this->load->view('admin/login');
      }
    }

    function tambahmateri(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         


         $this->load->view('admin/header',$data);
         $this->load->view('admin/tambahmateri',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }


    function inputmaterikepramukaan(){

      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

          
          $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
          $this->form_validation->set_rules('isi', 'Isi ', 'required');
    
          
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {

           $materi=array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'poster' => $data['id_admin']
            );
           $this->db->insert('gsjmateri',$materi);
           redirect('admin/materikepramukaan');
            }

       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }

    }

    function editmateri(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id= $this->uri->segment(3);
         $this->db->where("id_materi",$id);
         $data['edit']=$this->db->get("gsjmateri")->row();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/editmateri',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function updatemateri(){

      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];

          
          $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
          $this->form_validation->set_rules('isi', 'Isi ', 'required');
    
          
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {

            $id=$this->input->post('id_materi');
           $materi=array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'poster' => $data['id_admin']
            );
           $this->db->where("id_materi",$id);
           $this->db->update('gsjmateri',$materi);
           redirect('admin/materikepramukaan');
            }

       }
       else
       {
         //If no session, redirect to login page
         $this->load->view('admin/login'); 
       }

    }

    function hapusmateri(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $id=$this->uri->segment(3);
         $this->db->where('id_materi',$id);
         $this->db->delete('gsjmateri');
         redirect('admin/materikepramukaan');

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    #=============================================
    # GALLERY
    #=============================================

    function gallery(){

      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $data['album'] = $this->db->get("gsjalbum")->result();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/dataalbum',$data);
         $this->load->view('admin/footer',$data);

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function tambahalbum(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         


         $this->load->view('admin/header',$data);
         $this->load->view('admin/tambahalbum',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

     function inputalbum(){
      if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
          
          $this->form_validation->set_rules('nama_album', 'Nama Album', 'required');
          $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
         if ($this->form_validation->run() == FALSE)
            {
              //$this->kegiatan();
              echo "salah";
            }
          else
            {
           $data=array(
            'nama_album' => $this->input->post('nama_album'),
            'keterangan' => $this->input->post('keterangan'),
            'uploader' => $data['id_admin']
            );
           $this->db->insert('gsjalbum',$data);
           redirect('admin/gallery');
            }

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function uploadfoto(){

       if($this->session->userdata('logged_in'))
       {
         $session_data = $this->session->userdata('logged_in');
         $data['nama'] = $session_data['nama'];
         $data['id_admin'] = $session_data['id_admin'];
         
         $data['album'] = $this->db->get("gsjalbum")->result();

         $this->load->view('admin/header',$data);
         $this->load->view('admin/uploadfoto',$data);
         $this->load->view('admin/footer',$data);
        // echo "halaman admin cuy";

       }
       else
       {
         //If no session, redirect to login page
         redirect('admin/login', 'refresh');
       }

    }

    function inputfoto()
   {
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama'];
        $data['id_admin'] = $session_data['id_admin'];
        $data['album'] = $this->db->get('gsjalbum');

      $this->load->library('form_validation');
      $config['upload_path'] = './uploads/gallery';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '10000';
      $config['max_width'] = '10240';
      $config['max_height'] = '7680';
      $this->load->library('upload', $config);

      // modifikasi disini
      // looping $_FILES dan buat array baru
      foreach($_FILES['userfile'] as $key=>$val)
      {
         $i = 1;
         foreach($val as $v)
         {
            $field_name = "file_".$i;
            $_FILES[$field_name][$key] = $v;
            $i++;
         }
      }
      // hapus array awal, karena kita sudah memiliki array baru
      unset($_FILES['userfile']);

      $error = array();
      $success = array();

      $this->form_validation->set_rules('id_album', 'id_album', 'trim|required');

      $this->upload->initialize($config);

      if ($this->form_validation->run() == FALSE)
      {
        
        $this->load->view('admin/uploadfoto', $data); 
      }

      else {
          foreach($_FILES as $field_name => $file)
            {
               if ( ! $this->upload->do_upload($field_name))
               {
                  redirect('admin/uploadfoto');
               }
               else
               {
                  $success[] = $this->upload->data();
                  $tabel = 'gsjfoto';
                  $tGambar = $this->upload->data();
                  $pic = $tGambar["file_name"];
           //==================================
                    $source_url=$tGambar['full_path'] ;//path to the uploaded image
                    $info = getimagesize($source_url);
         
                    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
                    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
                    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
                   
                    imagejpeg($image, $source_url, 50);
                  //=================================
                  $field = array(
                  'id_album' => $this->input->post('id_album'),
                  'uploader' => $data['id_admin'] ,
                  'foto'  => $pic
                );
                $this->db->insert($tabel,$field);
               }
            }
            redirect('admin/uploadfoto'); 
      }
   }

}