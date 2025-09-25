<?php 
class About extends Controller{

    public function index() {
        $data['section'] = 'About';

        $this->views('tamplates/header.php', $data);
        $this->views('about/index.php');
        $this->views('tamplates/footer.php', );
    }

    public function page() {
        $data['section']= 'About Page';
        $data['name']= 'tito';
        $data['major']= 'CS';
        $data['age']= '21';

        $this->views('tamplates/header.php', $data);
        $this->views('about/page.php', $data);
        $this->views('tamplates/footer.php', );
    }
} 