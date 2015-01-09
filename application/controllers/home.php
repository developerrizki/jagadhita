<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Home extends CI_Controller {

  function __construct(){
     parent::__construct();
     $this->load->library('form_validation');
     $this->load->library('pagination');
  }
   public function index()
	{
    if($this->session->userdata("forum_log")){
        $this->load->view('forum/header_forum');
        $this->load->view('home');
        $this->load->view('footer');
    }else{
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

	}
  
  public function daftar(){
    $this->load->view('header');
    $this->load->view('daftar');
    $this->load->view('footer');
  }

  public function kontak(){
    $this->load->view('header');
    $this->load->view('kontak');
    $this->load->view('footer');
  }

  public function tentang_kami(){
    $this->load->view('header');
    $this->load->view('tentang_kami');
    $this->load->view('footer');
  }

  public function kegiatan(){
    
    $config['base_url']=base_url('home/kegiatan/').''; // url
    $config['total_rows']=$this->db->get('gsjkegiatan')->num_rows(); // menghitung jumlah data di tabel buku
    $config['per_page']=5; // limit perhalaman
    $config['num_links']=10;
    $config['full_tag_open']='<div id="pagination" class="col-md-9">'; // untuk menggunakan style pada link halaman
    $config['full_tag_close']='</div>';

    $this->pagination->initialize($config);
    
    $this->db->join('gsjadmin','gsjkegiatan.poster=gsjadmin.id_admin');
    $this->db->order_by('id_kegiatan','DESC');
    $data['kegiatan']=$this->db->get('gsjkegiatan',$config['per_page'],$this->uri->segment(3));
   
   

    $this->load->view('header');
    $this->load->view('kegiatan',$data);
    $this->load->view('footer');

  }

  public function kegiatan_lengkap(){
    
    $this->db->join('gsjadmin','gsjkegiatan.poster=gsjadmin.id_admin');
    $this->db->where('id_kegiatan',$this->uri->segment(3));
    $data['kegiatan']=$this->db->get('gsjkegiatan')->row();

    $this->load->view('header');
    $this->load->view('kegiatan_lengkap',$data);
    $this->load->view('footer');


  }

  public function komenkegiatan(){

    $this->form_validation->set_rules('norobot','captcha','trim|required');
    $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','trim|required');
    $this->form_validation->set_rules('email','Alamat E-mail','trim|required|valid_email');
    $this->form_validation->set_rules('komentar','Komentar','trim|required');
    $id=$this->input->post('id_kegiatan');

    if ($this->form_validation->run() == FALSE)
    {
     redirect('home/kegiatan_lengkap/'.$id);
     
    }
    else
    {
      session_start();
      if (md5($_POST['norobot']) == $_SESSION['randomnr2']){
        $komen=array(
          'id_kegiatan' => $id,
          'sender' => $this->input->post('nama_lengkap'),
          'email' => $this->input->post('email'),
          'komentar' => $this->input->post('komentar')
          );
        $this->db->insert('gsjkomenkegiatan',$komen);
        redirect('home/kegiatan_lengkap/'.$id);
      }//end if cek captcha
      else
        {
          
          redirect('home/kegiatan_lengkap/'.$id);
        }
    }

  }

  public function materikepramukaan(){
    
    $config['base_url']=base_url('home/materikepramukaan/').''; // url
    $this->db->join('gsjadmin','gsjmateri.poster=gsjadmin.id_admin');
    $this->db->order_by('judul','ASC');
    $config['total_rows']=$this->db->get('gsjmateri')->num_rows(); // menghitung jumlah data di tabel buku
    $config['per_page']=5; // limit perhalaman
    $config['num_links']=10;
    $config['full_tag_open']='<div id="pagination" class="col-md-9">'; // untuk menggunakan style pada link halaman
    $config['full_tag_close']='</div>';

    $this->pagination->initialize($config);    
    
    $this->db->join('gsjadmin','gsjmateri.poster=gsjadmin.id_admin');
    $this->db->order_by('judul','ASC');
    $data['materi']=$this->db->get('gsjmateri',$config['per_page'],$this->uri->segment(3));
   
    $data['pengumuman']=$this->db->get("gsjpengumuman")->row();

    $this->load->view('header');
    $this->load->view('materi',$data);
    $this->load->view('footer');

  }

  public function materi_lengkap(){
    
    $this->db->join('gsjadmin','gsjmateri.poster=gsjadmin.id_admin');
    $this->db->where('id_materi',$this->uri->segment(3));
    $data['materi']=$this->db->get('gsjmateri')->row();

    /*$this->db->select("gsjkomenkegiatan.tgl_post,sender,email,komentar");
    $this->db->join('gsjkegiatan','gsjkomenkegiatan.id_kegiatan=gsjkegiatan.id_kegiatan');
    $this->db->where('gsjkomenkegiatan.id_kegiatan',$this->uri->segment(3));
    $data['komentarkegiatan']= $this->db->get('gsjkomenkegiatan')->result();*/
    
    $this->load->view('header');
    $this->load->view('materi_lengkap',$data);
    $this->load->view('footer');


  }

  public function gallery(){
    $config['base_url']=base_url('home/gallery/').''; // url
    $config['total_rows']=$this->db->get('gsjalbum')->num_rows(); // menghitung jumlah data di tabel buku
    $config['per_page']=5; // limit perhalaman
    $config['num_links']=10;
    $config['full_tag_open']='<div id="pagination" class="col-md-9">'; // untuk menggunakan style pada link halaman
    $config['full_tag_close']='</div>';

    $this->pagination->initialize($config);
    
    $this->db->join('gsjadmin','gsjalbum.uploader=gsjadmin.id_admin');
    $this->db->order_by('id_album','DESC');
    $data['album']=$this->db->get('gsjalbum',$config['per_page'],$this->uri->segment(3));

    $this->load->view('header');
    $this->load->view('album',$data);
    $this->load->view('footer');
  }

  public function view_gallery(){
    
    $id=$this->uri->segment(3);
    $this->db->join('gsjalbum','gsjalbum.id_album=gsjfoto.id_album');
    $this->db->join('gsjadmin','gsjalbum.uploader=gsjadmin.id_admin');
    $this->db->where("gsjfoto.id_album",$id);
    $data['row_foto']=$this->db->get('gsjfoto');

    $this->load->view('header');
    $this->load->view('viewalbum',$data);
    $this->load->view('footer');
  }

}