<?php
class Validasi_admin extends CI_Model {

 function login($username, $password )
 {
   $this -> db -> select('*');
   $this -> db -> from('gsjadmin');
   $this -> db -> where('gsjadmin.username = ' . "'" . $username . "'");
   $this -> db -> where('gsjadmin.password = ' . "'" . MD5($password) . "'");
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}

}

?>