<?php 

class Home extends Controller
{

    public function index()
    {
    	$mensaje ="";
    	$mensaje2 = "";
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>