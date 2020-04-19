<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Asset URL (./assets/)
 *
 * Create a local URL of asset path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_url'))
{
	function assets_url($uri = '')
	{
		$CI =& get_instance();
		return base_url() . $CI->config->item('assets_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Theme Asset URL (./assets/front/themes/)
 *
 * Create a local URL of themes path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_themes_url'))
{
	function assets_themes_url($uri = 'default')
	{
		$CI =& get_instance();
		return assets_url();
	}
}

// ------------------------------------------------------------------------

/**
 * Image Asset URL (./assets/themes/<theme_name>/images/)
 *
 * Create a local URL of images path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_images_url'))
{
	function assets_images_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_themes_url($theme_uri) . $CI->config->item('images_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * CSS Asset URL (./assets/themes/<theme_name>/css/)
 *
 * Create a local URL of css path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_css_url'))
{
	function assets_css_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_themes_url($theme_uri) . $CI->config->item('css_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Font Asset URL (./assets/themes/<theme_name>/css/)
 *
 * Create a local URL of fonts path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_fonts_url'))
{
	function assets_fonts_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_themes_url($theme_uri) . $CI->config->item('fonts_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Library Asset URL (./assets/themes/<theme_name>/libs/)
 *
 * Create a local URL of libraries path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_libs_url'))
{
	function assets_libs_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_themes_url($theme_uri) . $CI->config->item('libs_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Scripts Asset URL (./assets/themes/<theme_name>/scripts/)
 *
 * Create a local URL of scripts path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_scripts_url'))
{
	function assets_scripts_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_themes_url($theme_uri) . $CI->config->item('scripts_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Uploads Asset URL (./uploads/)
 *
 * Create a local URL based on uploaded image path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('uploads_url'))
{
	function uploads_url($uri = '')
	{
		$CI =& get_instance();
		return base_url() . $CI->config->item('uploads_dir') . $uri;
	}
}

// ------------------------------------------------------------------------


/**
 * Get Moodle Holder
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('moodle_folder_url'))
{
	function moodle_folder_url($uri = '')
	{
		return base_url() . "moodle/" . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Theme Asset URL (./assets/mobile/themes/)
 *
 * Create a local URL of mobile themes path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_themes_url'))
{
	function assets_mobile_themes_url($uri = 'default')
	{
		$CI =& get_instance();
		return assets_url() . $CI->config->item('mobile_themes_dir') . $uri . '/';
	}
}

// ------------------------------------------------------------------------

/**
 * Mobile Images Asset URL (./assets/mobile/themes/<theme_name>/images/)
 *
 * Create a local URL of mobile images path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_images_url'))
{
	function assets_mobile_images_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_mobile_themes_url($theme_uri) . $CI->config->item('mobile_images_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Mobile CSS Asset URL (./assets/mobile/themes/<theme_name>/css/)
 *
 * Create a local URL of mobile css path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_css_url'))
{
	function assets_mobile_css_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_mobile_themes_url($theme_uri) . $CI->config->item('mobile_css_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Mobile Library Asset URL (./assets/mobile/themes/<theme_name>/libs/)
 *
 * Create a local URL of mobile libraries path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_libs_url'))
{
	function assets_mobile_libs_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_mobile_themes_url($theme_uri) . $CI->config->item('mobile_libs_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Mobile Font Asset URL (./assets/mobile/themes/<theme_name>/fonts/)
 *
 * Create a local URL of mobile fonts path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_fonts_url'))
{
	function assets_mobile_fonts_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_mobile_themes_url($theme_uri) . $CI->config->item('mobile_fonts_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/**
 * Mobile Script Asset URL (./assets/mobile/themes/<theme_name>/scripts/)
 *
 * Create a local URL of mobile scripts path.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('assets_mobile_scripts_url'))
{
	function assets_mobile_scripts_url($uri = '', $theme_uri = 'default')
	{
		$CI =& get_instance();
		return assets_mobile_themes_url($theme_uri) . $CI->config->item('mobile_scripts_dir') . $uri;
	}
}

// ------------------------------------------------------------------------

/* End of file App_url_helper.php */
/* Location: ./application/helpers/App_url_helper.php */
