<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Member extends CI_Controller {

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
     $data['id_cic'] = $session_data['id_cic'];

     redirect('member/home', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('member/login', 'refresh');
   }

	}

   public function login()
   {
     if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['nama'] = $session_data['nama'];
       $data['id_cic'] = $session_data['id_cic'];
       redirect('member/home', $data);


     }
     else
     {
       //If no session, redirect to login page
       $this->load->view('member/login'); 
     }    
   }
   
  function logout()
    {
      $this->session->unset_userdata('logged_in');
      session_destroy();
      redirect('member/login', 'refresh');
    }

   public function home()
   {
      if($this->session->userdata('logged_in'))
      {
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama']; 
        $data['id_cic'] = $session_data['id_cic'];
        //print_r($session_data);
        $this->load->view('member/home', $data); 
        
      }
      else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
         
      }
   }
   
   function pelatihan()
   {
   		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nama'] = $session_data['nama']; 
			$data['id_cic'] = $session_data['id_cic'];

      $this->db->join('tab_pelatihan','tab_kelas.id_pelatihan=tab_pelatihan.id_pelatihan');
      $data['pelatihan']= $this->db->get('tab_kelas')->result();
			
      $this->load->view('member/template/header',$data);
			$this->load->view('member/pelatihan', $data);
			$this->load->view('member/template/footer',$data);
		
		}
		 else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }
   }
   
   function history()
   {
   		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nama'] = $session_data['nama']; 
			$data['id_cic'] = $session_data['id_cic'];
      $data['email'] = $session_data['email'];
      $email=$data['email'];

      $this->db->join('tab_pelatihan','tab_pelatihan.id_pelatihan=tab_peserta.id_pelatihan');
      $this->db->join('tab_kelas','tab_kelas.id_kelas=tab_peserta.id_kelas');
      $this->db->where('tab_peserta.email_peserta', $email);
      $data['histories'] = $this->db->get('tab_peserta')->result();

			$this->load->view('member/template/header',$data);
			$this->load->view('member/history', $data);
			$this->load->view('member/template/footer',$data);
		
		}
		 else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }
   }
   
   function datapembayaran()
   {
   		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nama'] = $session_data['nama']; 
			$data['id_cic'] = $session_data['id_cic'];
      $data['email'] = $session_data['email'];
      $email=$data['email'];
      $data['id']=$this->uri->segment(3);
      $id=$data['id'];
      //mysql_query("select * from tab_diskon_gol join tab_peserta on tab_diskon_gol.id_peserta=tab_peserta.id_peserta where tab_diskon_gol.id_peserta='$row[id_peserta]'");

      $data['biaya_pelatihan']=$this->db->select('biaya,kode_pelatihan,nama_pelatihan')->where('id_pelatihan',$id)->get('tab_pelatihan')->row();

      $this->db->select('total_disc');
      //$this->db->join('tab_peserta','tab_diskon_gol.id_peserta=tab_peserta.id_peserta');
      $this->db->join('tab_peserta','tab_bayar.id_peserta=tab_peserta.id_peserta');
      $this->db->where('tab_bayar.id_pelatihan',$id);
      $this->db->where('tab_peserta.email_peserta', $email);
      $this->db->where('tab_bayar.pay',0);
      $data['diskon'] = $this->db->get('tab_bayar')->row();

      $this->db->select_sum('pay');
      $this->db->join('tab_peserta','tab_peserta.id_peserta=tab_bayar.id_peserta');
      $this->db->where('tab_peserta.email_peserta', $email);
      $this->db->where('tab_bayar.id_pelatihan',$id);
      $data['total_bayar'] = $this->db->get('tab_bayar')->row();


      $this->db->join('tab_peserta','tab_peserta.id_peserta=tab_bayar.id_peserta');
      $this->db->where('tab_peserta.email_peserta', $email);
      $this->db->where('tab_bayar.id_pelatihan',$id);
      $this->db->where('tab_bayar.pay !=',0);
      $data['pembayaran'] = $this->db->get('tab_bayar')->result();
      

			$this->load->view('member/template/header',$data);
			$this->load->view('member/datapembayaran', $data);
			$this->load->view('member/template/footer',$data);
		
		}
		 else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }
   }

   function biodata()
   {
      if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama']; 
      $data['id_cic'] = $session_data['id_cic'];
      $id=$data['id_cic'];

      $this->db->where('id_cic', $id);
      $data['biodata'] = $this->db->get('tab_member_cic')->result();

      $this->load->view('member/template/header',$data);
      $this->load->view('member/biodata', $data);
      $this->load->view('member/template/footer',$data);
    
    }
     else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }
   }

   function edit_biodata()
   {
      if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama']; 
      $data['id_cic'] = $session_data['id_cic'];
      $id=$data['id_cic'];

      $this->db->where('id_cic', $id);
      $data['biodata'] = $this->db->get('tab_member_cic')->row();

      $this->load->view('member/template/header',$data);
      $this->load->view('member/edit_biodata', $data);
      $this->load->view('member/template/footer',$data);
    
    }
     else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }
   }

   function update_biodata(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama']; 
      $data['id_cic'] = $session_data['id_cic'];
      $id=$data['id_cic'];

    $config['upload_path'] = './uploads/member/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '10000';
    $config['max_width'] = '10240';
    $config['max_height'] = '7680';
    $this->load->library('upload', $config);

      $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
      $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required|xss_clean');
      if($this->form_validation->run() == FALSE)
      {
        $this->edit_biodata();
      }
      else
      {
        if($this->upload->do_upload()){

            $tGambar = $this->upload->data();
            $pic = $tGambar["file_name"];
            $data = array('upload_data' => $this->upload->data());

          }

          else{
            $pic =$this->input->post('nama_gambar');
          }
        $tabel="tab_member_cic";
        $primary="id_cic";
        $data=array(

          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'no_telp' => $this->input->post('no_telp'),
          'alamat' => $this->input->post('alamat'),
          'email' => $this->input->post('email'),
          'jk' => $this->input->post('jk'),
          'foto' => $pic
          //'pekerjaan' => $this->input->post('pekerjaan'),
          //'asal_institusi' => $this->input->post('asal_institusi')

          );
          $this->db->where($primary,$id);
          $this->db->update($tabel,$data);
          //echo $this->input->post('tanggal_lahir');
          redirect('member/biodata');
      }

      
    }
    else
    {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
    }

   }

   function studentfeedback(){

     if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama']; 
      $data['id_cic'] = $session_data['id_cic'];
      $id=$data['id_cic'];

      $data['email'] = $session_data['email'];
      $email=$data['email'];

      $this->db->join('tab_pelatihan','tab_pelatihan.id_pelatihan=tab_peserta.id_pelatihan');
      $this->db->join('tab_kelas','tab_kelas.id_kelas=tab_peserta.id_kelas');
      $this->db->where('tab_peserta.email_peserta', $email);
      $data['histories'] = $this->db->get('tab_peserta')->result();

      $this->load->view('member/template/header',$data);
      $this->load->view('member/studentfeedback', $data);
      $this->load->view('member/template/footer',$data);
    
    }
     else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }

   }

   function detail_studentfeedback(){
     if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['nama'] = $session_data['nama']; 
      $data['id_cic'] = $session_data['id_cic'];
      $id=$data['id_cic'];

      $data['email'] = $session_data['email'];
      $email=$data['email'];
    
      $id_pelatihan= $this->uri->segment(3);
      $id_kelas= $this->uri->segment(4);

      $this->db->where('id_kelas',$id_kelas);
      $data['count']= $this->db->get('tab_jadwal_perkelas')->num_rows();

      $this->db->select('jumlah_sesi');
      $this->db->join('tab_pelatihan','tab_pelatihan.id_pelatihan=tab_kelas.id_pelatihan');
      $this->db->join('tab_sesi','tab_sesi.id_sesi=tab_pelatihan.id_sesi');
      $this->db->where('tab_kelas.id_kelas',$id_kelas);
      $kelas= $this->db->get('tab_kelas')->row();
      $data['jumlah_sesi']= $kelas->jumlah_sesi;

      $this->db->where('id_kelas',$id_kelas);
      $data['data_jadwal']=$this->db->get('tab_jadwal_perkelas')->result();

       
      $this->db->join('tab_pelatihan','tab_kelas.id_pelatihan=tab_pelatihan.id_pelatihan');
      $this->db->where('tab_kelas.id_kelas',$id_kelas);
      $data['data_pelatihan'] = $this->db->get('tab_kelas')->row();

      $this->db->where('id_pelatihan',$id_pelatihan);
      $this->db->where('id_kelas',$id_kelas);
      $this->db->where('email_peserta',$email);
      $data['member'] = $this->db->get('tab_peserta')->row();

      $data['nilai_row']=$this->db->get('tab_nilai');

      $this->load->view('member/template/header',$data);
      $this->load->view('member/detailstudentfeedback', $data);
      $this->load->view('member/template/footer',$data);

     }
     else
      {
        //If no session, redirect to login page
        redirect('member/login', 'refresh');
      }


   }

   function form_absensi(){

       if($this->session->userdata('logged_in'))
      {
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama']; 
        $data['id_cic'] = $session_data['id_cic'];
        $id=$data['id_cic'];

        $data['email'] = $session_data['email'];
        $email=$data['email'];

        $data['id_peserta']=$this->uri->segment(4);
        $data['sesi_ke'] = $this->uri->segment(5);

        $data['nilai_row']=$this->db->get('tab_nilai');

        $this->load->view('member/template/header',$data);
        $this->load->view('member/form_absensi', $data);
        $this->load->view('member/template/footer',$data);

     }

       else
        {
          //If no session, redirect to login page
          redirect('member/login', 'refresh');
        }
  }

  function update_studentfeedback(){
    if($this->session->userdata('logged_in'))
      {
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama']; 
        $data['id_cic'] = $session_data['id_cic'];
        $id=$data['id_cic'];

        $data['email'] = $session_data['email'];
        $email=$data['email'];

        $id_peserta=$this->input->post('id_peserta');
        $sesi = $this->input->post('sesi');

        $data= array(
          'cek' => 1,
          'jam_masuk_trainer' => $this->input->post('jam_masuk_trainer'),
          'jam_selesai_kelas' => $this->input->post('jam_selesai_kelas'),
          'kesan' => $this->input->post('kesan'),
          'pesan' => $this->input->post('pesan')
          );
        $this->db->where('id_peserta',$id_peserta);
        $this->db->where('sesi',$sesi);
        $this->db->update('tab_absen',$data);

        $this->db->select('id_pelatihan');
        $this->db->where('id_peserta',$id_peserta);
        $datapeserta=$this->db->get('tab_peserta')->row();
        $idpelatihan= $datapeserta->id_pelatihan;
        $data_feedback= array(
          'id_pelatihan' => $idpelatihan,
          'penguasaan_materi' => $this->input->post('penguasaan_materi'),
          'cara_penyampaian' => $this->input->post('cara_penyampaian'),
          'interaksi' => $this->input->post('interaksi'),
          'tanggal' => date('Y-m-d')
          );

        $this->db->insert('tab_feedback',$data_feedback);

        redirect('member/studentfeedback');

      }
    else
      {
          //If no session, redirect to login page
          redirect('member/login', 'refresh');
      }
  }
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
