<?php 

class Home extends Controller {
    public function index() {
        $data['section'] = 'Home';
        $data['user'] = $this->model('User_model')->getuser();  
        $this->views('tamplates/header.php', $data);
        $this->views('home/index.php', $data);
        $this->views('tamplates/footer.php');            
    }
}