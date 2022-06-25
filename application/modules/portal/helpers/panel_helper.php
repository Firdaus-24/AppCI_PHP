<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function open_panel($title,$color)
{
    echo '
            <div class="panel panel-'.$color.'">
              <div class="panel-heading">'.$title.'</div>
              <div class="panel-body">
        ';
}

function close_panel()
{
    echo '
              </div>
            </div>    
    ';
}

function open_panel_nobody($title,$color)
{
    echo '
            <div class="panel panel-'.$color.'">
              <div class="panel-heading">'.$title.'</div>
        ';
}

function close_panel_nobody()
{
    echo '</div>';
}

function open_panel2($title,$color)
{
    echo '
            <div class="panel panel-'.$color.'">
              <div class="panel-heading">'.$title.'</div>
              
        ';
}

function close_panel2()
{
    echo '
              </div>
              
    ';
}


function login(){
 // echo open_panel('<span class="glyphicon glyphicon-lock"></span> LOGIN USER',"primary");
?>
                     <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> LOGIN
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="student/login">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
               <div class="panel-footer">
              
                    Not Registred? 
                              <div class="btn-group">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >Register here</a>
                  
                  <span class="sr-only">Toggle navigation</span>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="student/registrasi">Registasi Student</a></li>
                
                  <li><a href="#">Registrasi Teacher</a></li>
                  </ul>
                </div> 
                </div>
            </div>
<?php
 // echo close_panel();
}
function panel_useronline(){
      $ci =& get_instance();
      $ci->load->model('mcontent');
    
      $data['dataonline']=$ci->mcontent->getSelect_session();
      
      //  echo open_panel('<span class="glyphicon glyphicon-lock"></span> ONLINE',"primary");

?>
 <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-user"></span> ONLINE</div>


                

                            <ul class="list-group">
                            <?php 
                            //print_r($dataonline);
                            if($data['dataonline']){
                            foreach ($data['dataonline'] as $value) {
                                /*$this->load->model('mcontent');
                                $data['siswa']=$this->mcontent->getSiswa($value->id_user);
                                foreach ($data['siswa'] as $key) {
                                    # code...
                                
                            */
                            ?>
                            <li class="list-group-item"><i class="icon-user"></i><?php echo " ".$value->nama; ?></li>
                            <?php
                           }
                           }else{
                            ?>
                            <li class="list-group-item"></i> User Offline</li>
                            <?php
                           }

                            ?>
                            </ul>
</div>
                
            

<?php
//echo close_panel();
}

function matakuliah(){
      $ci =& get_instance();
      $ci->load->database();
                        
                          $query=$ci->db->query("SELECT*from tbl_mtk order by nm_mtk asc");
                        
                            echo open_panel2('<span class="glyphicon glyphicon-book"></span> MATAKULIAH DARING',"primary");

                          ?>
        
                <ul class="list-group">
                <?php
                if($query->num_rows()>0)
                 {
                 foreach($query->result() as $data)
                {
                ?>
                <li class="list-group-item"><i class="icon-book"></i>
                <a href="<?php echo base_url(); ?>portal/matakuliah/<?php echo $data->kd_mtk; ?>"><?php echo $data->nm_mtk; ?></a></li>
                <?php }} ?>
                </ul>
       
<?php
echo close_panel2();
}
function pengumuman(){
    $ci =& get_instance();
    $ci->load->database();
    echo open_panel2('<span class="glyphicon icon-folder-open"></span> PENGUMUMAN',"primary");

   
                          $query=$ci->db->query("SELECT*from tbl_berita order by id_berita desc");
                         
                          ?>
                        <ul class="list-group">
                          <?php
                          if($query->num_rows()>0)
                            {
                            foreach($query->result() as $data)
                            {
                            ?>
                                <li class="list-group-item"><i class="icon-folder-open"></i>
                                <a href="<?php echo base_url(); ?>portal/pengumuman/<?php echo $data->id_berita; ?>"><?php echo $data->judul; ?></a></li>
                            <?php }} ?>
                            </ul>
            
<?php
echo close_panel2();
}

?>