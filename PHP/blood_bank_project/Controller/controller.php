<?php


// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);
class Controller{
    public function __construct()
    {
        $baseURL = "http://localhost/29SEP_LARAVEL_ttS/php/project%20blood%20bank/";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    
                    break;
                case '/about':
                    include_once("View/header.php");
                    echo "<h1>About Us</h1>";
                    include_once("View/footer.php");
                    
                    break;
                case '/gallery':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    
                    break;
                case '/process':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    
                    break;
                case '/blog':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    
                    break;
                case '/contact':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    
                    break;
                    case '/login':
                        include_once("View/header.php");
                        include_once("View/loginpage.php");
                        include_once("View/footer.php");
                        
                        break;
                        case '/registration':
                            include_once("View/header.php");
                            include_once("View/registration.php");
                            include_once("View/footer.php");
                            
                            break;               
                default:
                
                    break;
            }
            
        }else {
            header("location:home");
        }
    }
            
        }
$Controller =  new Controller;



?>