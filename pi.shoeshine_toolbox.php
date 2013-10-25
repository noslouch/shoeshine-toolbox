<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 1.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Shoeshine Toolbox Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Shoe Shine Design & Development
 * @link		http://www.shoeshinedesign.com
 */

$plugin_info = array(
	'pi_name'		=> 'ShoeShine Toolbox',
	'pi_version'	=> '1.1',
	'pi_author'		=> 'Shoe Shine Design & Development',
	'pi_author_url'	=> 'http://www.shoeshinedesign.com',
	'pi_description'=> 'Miscellaneous Tools',
	'pi_usage'		=> Shoeshine_toolbox::usage()
);


class Shoeshine_toolbox {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
	}
	
	/**
	 * Odd or Even
	 */
	public function even_or_odd()
	{
	
		$number_tag = $this->EE->TMPL->tagdata;
		$number_param = $this->EE->TMPL->fetch_param('number', 0);
		
		$number = ($number_tag ? $number_tag : $number_param);
		
		if(!is_numeric($number)) {
			return 'nan';
		}
		
		if ($number % 2 == 0) {
		  return 'even';
		} else {
			return 'odd';
		}
		
	}

	/**
	 * Total Segments
	 */
	public function total_segments()
	{
	
		$segments = explode("/",$_SERVER['REQUEST_URI']);
		$count = count($segments)-2;

		return $count;
		
	}

	/**
	 * Random Numer
	 */
	public function random_number()
	{
	
		$from_param = (($this->EE->TMPL->fetch_param('from', 0)) ? ($this->EE->TMPL->fetch_param('from', 0)) : "0");
		$to_param = (($this->EE->TMPL->fetch_param('to', 0)) ? ($this->EE->TMPL->fetch_param('to', 0)) : "100");
		
		if((!is_numeric($from_param)) || (!is_numeric($to_param)) || ($from_param >= $to_param)) {
			return false;
		}
		
		return rand($from_param, $to_param);
		
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

TOOLS :

Even or Odd
Description: Outputs 'even' or 'odd' based on a number it receives as a parameter or as tag data. Outputs 'nan' if value is not a number.
Example 1: {exp:shoeshine_toolbox:odd_or_even number='4'} Outputs the string 'even'
Example 2: {exp:shoeshine_toolbox:odd_or_even}5{/exp:shoeshine_toolbox:odd_or_even} Outputs the string 'odd'

Total Segments
Description: Outputs the number of segments in the current URI.
Example: {exp:shoeshine_toolbox:total_segments} Outputs '2' for http://devot-ee.com/add-ons/shoeshine-toolbox
Note: Does not work if you are using Freebie segments in the URI.

Random Number
Description: Outputs a random number in a set range. The "from" parameter (default "0") must be lower than "to" parameter (default "100").
Example 1: {exp:shoeshine_toolbox:random_number} Outputs a number from 0 to 100.
Example 2: {exp:shoeshine_toolbox:random_number from="1" to="10"} Outputs a number from 1 to 10.

<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.shoeshine_toolbox.php */
/* Location: /system/expressionengine/third_party/shoeshine_toolbox/pi.shoeshine_toolbox.php */