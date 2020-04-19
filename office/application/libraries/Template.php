<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
    var $ci;
    var $js = array();
    var $css = array();
	var $template_data = array();

    function __construct(){
        $this->ci =& get_instance();

		$this->init_config();
        $this->init_css();
        $this->init_js();
    }

    private function init_css(){
        // Add base scripts
		
		$this->add_css(assets_css_url('bootstrap.min.css'));
		$this->add_css(assets_css_url('jquery.dataTables.min.css'));
		$this->add_css(assets_css_url('font-awesome.min.css'));
		$this->add_css(assets_css_url('owl.carousel.css'));
		$this->add_css(assets_css_url('owl.theme.css'));
		$this->add_css(assets_css_url('meanmenu/meanmenu.min.css'));
		$this->add_css(assets_css_url('animate.css'));
		$this->add_css(assets_css_url('normalize.css'));
		$this->add_css(assets_css_url('scrollbar/jquery.mCustomScrollbar.min.css'));
		$this->add_css(assets_css_url('jvectormap/jquery-jvectormap-2.0.3.css'));

		$this->add_css(assets_css_url('notika-custom-icon.css'));
		$this->add_css(assets_css_url('wave/waves.min.css'));
		$this->add_css(assets_css_url('main.css'));
		$this->add_css(assets_css_url('style.css'));
		$this->add_css(assets_css_url('responsive.css'));
		$this->add_css('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css');
		//$this->add_css(assets_css_url('bootstrap.min.css'));
		//$this->add_css(assets_css_url('default.css'));
      //  $this->add_css(assets_css_url('style.css'));
        
	//	$this->add_css(assets_css_url('responsive.css'));
       // $this->add_css("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css");

    }

    private function init_js(){
        // Add base scripts

        $this->add_js(assets_libs_url('vendor/modernizr-2.8.3.min.js'));
		$this->add_js(assets_libs_url('vendor/jquery-1.12.4.min.js'));
		$this->add_js(assets_libs_url('bootstrap.min.js'));
		$this->add_js(assets_libs_url('wow.min.js'));
		$this->add_js(assets_libs_url('jquery-price-slider.js'));
		$this->add_js(assets_libs_url('owl.carousel.min.js'));
		$this->add_js(assets_libs_url('jquery.scrollUp.min.js'));
		$this->add_js(assets_libs_url('meanmenu/jquery.meanmenu.js'));
		$this->add_js(assets_libs_url('counterup/jquery.counterup.min.js'));
        $this->add_js(assets_libs_url('counterup/waypoints.min.js'));
		$this->add_js(assets_libs_url('counterup/counterup-active.js'));


		$this->add_js(assets_libs_url('scrollbar/jquery.mCustomScrollbar.concat.min.js'));
		$this->add_js(assets_libs_url('jvectormap/jquery-jvectormap-2.0.2.min.js'));
		$this->add_js(assets_libs_url('jvectormap/jquery-jvectormap-world-mill-en.js'));
		$this->add_js(assets_libs_url('jvectormap/jvectormap-active.js'));
		$this->add_js(assets_libs_url('sparkline/jquery.sparkline.min.js'));
        $this->add_js(assets_libs_url('sparkline/sparkline-active.js'));
		$this->add_js(assets_libs_url('flot/jquery.flot.js'));		
$this->add_js(assets_libs_url('flot/curvedLines.js'));
		$this->add_js(assets_libs_url('flot/flot-active.js'));
		$this->add_js(assets_libs_url('knob/jquery.knob.js'));
		$this->add_js(assets_libs_url('knob/jquery.appear.js'));
		$this->add_js(assets_libs_url('knob/knob-active.js'));
        $this->add_js(assets_libs_url('wave/waves.min.js'));
		$this->add_js(assets_libs_url('wave/wave-active.js'));
		$this->add_js(assets_libs_url('todo/jquery.todo.js'));
		$this->add_js(assets_libs_url('plugins.js'));
		$this->add_js(assets_libs_url('chat/moment.min.js'));
		$this->add_js(assets_libs_url('chat/jquery.chat.js'));
		$this->add_js(assets_libs_url('main.js'));
       // $this->add_js(assets_libs_url('tawk-chat.js'));
		$this->add_js(assets_libs_url('data-table/jquery.dataTables.min.js'));
		
		$this->add_js(assets_libs_url('data-table/data-table-act.js'));
		$this->add_js(assets_scripts_url('js/app.js?' . time()));
		//$this->add_js(assets_libs_url('bootstrap.min.js'));
		//$this->add_js(assets_libs_url('plugins.js'));
        //$this->add_js(assets_libs_url('main.js'));
        
        
        //$this->add_js('http://malsup.github.com/jquery.form.js');
        //$this->add_js('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js');

      //  $this->js[] = '<script type="text/javascript">var APP_NAME = "' . APP_NAME . '";</script>';
      //  $this->js[] = "<script type='text/javascript'>var app_url = '" . APPPATH . "';</script>";
        $this->js[] = "<script type='text/javascript'>var base_url = '" . base_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var site_url = '" . site_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var css_url = '" . assets_css_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var images_url = '" . assets_images_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var libs_url = '" . assets_libs_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var scripts_url = '" . assets_scripts_url() . "';</script>";
        $this->js[] = "<script type='text/javascript'>var uploads_url = '" . uploads_url() . "';</script>";

      //  $this->add_js(assets_scripts_url('js/app.js?' . time()));
    }

	function init_config() {
		$firebase_key = $this->ci->config->item("firebase_key");
		$firebase_project_key = $this->ci->config->item("firebase_project_key");
		$firebase_database_name = $this->ci->config->item("firebase_database_name");
		$firebase_bucket_name = $this->ci->config->item("firebase_bucket_name");
		$firebase_sender_id = $this->ci->config->item("firebase_sender_id");

		$this->template_data = array(
			"firebase_key" => $firebase_key,
			"firebase_project_key" => $firebase_project_key,
			"firebase_database_name" => $firebase_database_name,
			"firebase_bucket_name" => $firebase_bucket_name,
			"firebase_sender_id" => $firebase_sender_id
		);
	}

    function load($body_view = null, $data = null){
		if ( is_null($data) )
		{
			$data = $this->template_data;
		}
		else if ( is_array($data) )
		{
			$data = array_merge($data, $this->template_data);
		}
		else if ( is_object($data) )
		{
			$data = (object) array_merge((array) $data, (array) $this->template_data);
		}

        if ( !is_null( $body_view ) )
        {
            $body_view_fullpath = APPPATH . 'views/' . $body_view;

            if ( file_exists( $body_view_fullpath ) )
            {
                $body_view_path = '/' . $body_view;
            }
            else if ( file_exists( $body_view_fullpath . '.php' ) )
            {
                $body_view_path = '/' . $body_view . '.php';
            }
            else
            {
                show_error('Unable to load the requested file: /' . $body_view . '.php');
            }

			$elapsed_time = $this->ci->benchmark->elapsed_time('code_start', 'code_end');
			if ( is_null($data) )
			{
				$data = array('elapsed_time' => $elapsed_time);
			}
			else if ( is_array($data) )
			{
				$data['elapsed_time'] = $elapsed_time;
			}
			else if ( is_object($data) )
			{
				$data->elapsed_time = $elapsed_time;
			}

            $body = $this->ci->load->view($body_view_path, $data, TRUE);

            if ( is_null($data) )
            {
                $data = array('body' => $body);
            }
            else if ( is_array($data) )
            {
                $data['body'] = $body;
            }
            else if ( is_object($data) )
            {
                $data->body = $body;
            }
        }

        // Get Header
        $header_path = '/share/header.php';
        $header = $this->ci->load->view($header_path, null, TRUE);

        if ( is_null($data) )
        {
            $data = array('header' => $header);
        }
        else if ( is_array($data) )
        {
            $data['header'] = $header;
        }
        else if ( is_object($data) )
        {
            $data->header = $header;
        }

//        // Get Side Menu
//        $side_menu_path = '/shared/side_menu.php';
//        $side_menu = $this->ci->load->view($side_menu_path, null, TRUE);
//
//        if ( is_null($data) )
//        {
//            $data = array('side_menu' => $side_menu);
//        }
//        else if ( is_array($data) )
//        {
//            $data['side_menu'] = $side_menu;
//        }
//        else if ( is_object($data) )
//        {
//            $data->side_menu = $side_menu;
//        }

        // Get Footer
        $footer_path = '/share/footer.php';
        $footer = $this->ci->load->view($footer_path, null, TRUE);

        if ( is_null($data) )
        {
            $data = array('footer' => $footer);
        }
        else if ( is_array($data) )
        {
            $data['footer'] = $footer;
        }
        else if ( is_object($data) )
        {
            $data->footer = $footer;
        }

        // Get CSSs
        if ( is_null($data) )
        {
            $data = array('css' => $this->css);
        }
        else if ( is_array($data) )
        {
            $data['css'] = $this->css;
        }
        else if ( is_object($data) )
        {
            $data->css = $this->css;
        }

        // Get Script
        if ( is_null($data) )
        {
            $data = array('js' => $this->js);
        }
        else if ( is_array($data) )
        {
            $data['js'] = $this->js;
        }
        else if ( is_object($data) )
        {
            $data->js = $this->js;
        }

        // Display View
        $layout_path = '/layout.php';
        $this->ci->load->view($layout_path, $data);
    }

    function add_css($filepath){
        $css = NULL;
        $css = '<link rel="stylesheet" href="'. $filepath .'">';

        // Add to js array if it doesn't already exist
        if ($css != NULL && !in_array($css, $this->css)){
            $this->css[] = $css;
        }
    }

    function add_js($filepath){
        $js = NULL;
        $js = '<script type="text/javascript" src="'. $filepath .'"></script>';

        // Add to js array if it doesn't already exist
        if ($js != NULL && !in_array($js, $this->js))
        {
            $this->js[] = $js;
        }
    }
}

/* End of file template.php */
/* Location: ./application/libraries/template.php */
