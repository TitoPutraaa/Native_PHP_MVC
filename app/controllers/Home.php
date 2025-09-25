<?php 

class Home extends Controller {
    public function index() {
        $data['section'] = 'Home';
        $this->views('tamplates/header.php', $data);
        $this->views('home/index.php');
        $this->views('tamplates/footer.php');
            
    }

}