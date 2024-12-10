<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

    public $app;
    public $title;
    public $description;
    function __construct(){
        parent::__construct();
        /*
        if(!$this->is_logged_in()){

            //Will Return to Last URL Where session is empty
            $this->session->set_userdata('url_before',base_url(uri_string()));
            redirect(base_url("login/return_url"));
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Controller_model');
        */
        $this->load->helper('url');

        $this->app = 'Wakafku';
        $this->description = 'Semua untuk kita bisa';        
    }
    function index(){
        $data['title'] = 'Controller';
        $data['_view'] = 'mobile/name';
        $this->load->view('mobile/index',$data);
        // $this->load->view('layouts/admin/menu/folder/name_js.php',$data);
    }
    function login(){
        $data['app']            = $this->app;          
        $data['title']          = 'Login';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/auth/login';
        $this->load->view('mobile/home',$data);
    }  
    function message(){
        $data['app']            = $this->app;          
        $data['title']          = 'Message';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/message';
        $this->load->view('mobile/home',$data);
    } 
    function chat(){
        $data['app']            = $this->app;          
        $data['title']          = 'Chat';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/chat';
        $this->load->view('mobile/home',$data);
    }     
    function notification(){
        $data['app']            = $this->app;          
        $data['title']          = 'Notification';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/notification';
        $this->load->view('mobile/home',$data);
    } 
    function service_location(){
        $data['app']            = $this->app;          
        $data['title']          = 'Service Location';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/service_location';
        $this->load->view('mobile/home',$data);
    }              
    function home(){
        $data['app']            = $this->app;          
        $data['title']          = 'Home';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/dashboard';
        $this->load->view('mobile/home',$data);
    }       
    function user_profile(){
        $data['app']            = $this->app;          
        $data['title']          = 'User Profile';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/profile/user_profile';
        $this->load->view('mobile/home',$data);
    }    

    function guide_profile(){
        $data['app']            = $this->app;          
        $data['title']          = 'Guide Profile';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/profile/guide_profile';
        $this->load->view('mobile/home',$data);
    }    

    function explore(){
        $data['app']            = $this->app;          
        $data['title']          = 'Explore';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/explore';
        $this->load->view('mobile/home',$data);
    }        
    function tour_guide(){
        $data['app']            = $this->app;          
        $data['title']          = 'Tour Guide';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/tour_guide';
        $this->load->view('mobile/home',$data);
    }    
    function ticket_booked(){
        $data['app']            = $this->app;          
        $data['title']          = 'Booked';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/ticket_booked';
        $this->load->view('mobile/home',$data);
    }  
    function ticket_detail(){
        $data['app']            = $this->app;          
        $data['title']          = 'Ticket Detail';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/ticket_detail';
        $this->load->view('mobile/home',$data);
    }            

    function hotel(){
        $data['app']            = $this->app;          
        $data['title']          = 'Hotel';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/hotel';
        $this->load->view('mobile/home',$data);
    }  
    function hotel_detail(){
        $data['app']            = $this->app;          
        $data['title']          = 'Hotel Detail';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/hotel_detail';
        $this->load->view('mobile/home',$data);
    }
    function hotel_book(){
        $data['app']            = $this->app;          
        $data['title']          = 'Hotel Book';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/hotel_book';
        $this->load->view('mobile/home',$data);
    }    
    function hotel_checkout(){
        $data['app']            = $this->app;          
        $data['title']          = 'Hotel Checkout';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/hotel_checkout';
        $this->load->view('mobile/home',$data);
    }        
    function hotel_review(){
        $data['app']            = $this->app;          
        $data['title']          = 'Hotel Review';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/hotel_review';
        $this->load->view('mobile/home',$data);
    }  

    function vacation_detail(){
        $data['app']            = $this->app;          
        $data['title']          = 'Vacation Detail';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/vacation_detail';
        $this->load->view('mobile/home',$data);
    }    

    function vacation_checkout(){
        $data['app']            = $this->app;          
        $data['title']          = 'Vacation Checkout';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/vacation_checkout';
        $this->load->view('mobile/home',$data);
    }        

    function search_result(){
        $data['app']            = $this->app;          
        $data['title']          = 'Search Result';
        $data['description']    = $this->description;        
        $data['_view'] = 'mobile/page/search_result';
        $this->load->view('mobile/home',$data);
    }        
}

?>