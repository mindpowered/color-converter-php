<?php
namespace mindpowered\colorconverter;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \colorconverter\ColorConverter as ColorConverter_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * An Library for Color Conversion
 */
class ColorConverter
{
	/**
	 * ColorConverter
	 */
	function __construct() {
		$bus = MagLev::getInstance('default');
		$lib = new ColorConverter_Library($bus);
	}

	/**
	 * Convert from RGB
	 * @param float $r 
	 * @param float $g 
	 * @param float $b 
	 * @return array 
	 */
	public function FromRGB($r, $g, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$r, $g, $b];
		$ret = null;
		$phpbus->call('ColorConverter.FromRGB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from CIELAB
	 * @param float $L 
	 * @param float $a 
	 * @param float $b 
	 * @return array 
	 */
	public function FromCIELAB($L, $a, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$L, $a, $b];
		$ret = null;
		$phpbus->call('ColorConverter.FromCIELAB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from CMYK
	 * @param float $c 
	 * @param float $m 
	 * @param float $y 
	 * @param float $k 
	 * @return array 
	 */
	public function FromCMYK($c, $m, $y, $k)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$c, $m, $y, $k];
		$ret = null;
		$phpbus->call('ColorConverter.FromCMYK', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from RGB using illumination and observer angles
	 * @param float $r 
	 * @param float $g 
	 * @param float $b 
	 * @param string $observer1 
	 * @param string $observer2 
	 * @return array 
	 */
	public function ConvertRGB($r, $g, $b, $observer1, $observer2)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$r, $g, $b, $observer1, $observer2];
		$ret = null;
		$phpbus->call('ColorConverter.ConvertRGB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from CIELAB using illumination and observer angles
	 * @param float $L 
	 * @param float $a 
	 * @param float $b 
	 * @param string $observer1 
	 * @param string $observer2 
	 * @return array 
	 */
	public function ConvertCIELAB($L, $a, $b, $observer1, $observer2)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$L, $a, $b, $observer1, $observer2];
		$ret = null;
		$phpbus->call('ColorConverter.ConvertCIELAB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from CMYK using illumination and observer angles
	 * @param float $c 
	 * @param float $m 
	 * @param float $y 
	 * @param float $k 
	 * @param string $observer1 
	 * @param string $observer2 
	 * @return array 
	 */
	public function ConvertCMYK($c, $m, $y, $k, $observer1, $observer2)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$c, $m, $y, $k, $observer1, $observer2];
		$ret = null;
		$phpbus->call('ColorConverter.ConvertCMYK', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Add a reference color
	 * @param string $system 
	 * @param string $name 
	 * @param string $description 
	 * @param float $r 
	 * @param float $g 
	 * @param float $b 
	 * @return void
	 */
	public function AddReferenceColorByRGB($system, $name, $description, $r, $g, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system, $name, $description, $r, $g, $b];
		$phpbus->call('ColorConverter.AddReferenceColorByRGB', $args, function($async_ret){});
	}

	/**
	 * Add a reference color
	 * @param string $system 
	 * @param string $name 
	 * @param string $description 
	 * @param float $L 
	 * @param float $a 
	 * @param float $b 
	 * @return void
	 */
	public function AddReferenceColorByCIELAB($system, $name, $description, $L, $a, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system, $name, $description, $L, $a, $b];
		$phpbus->call('ColorConverter.AddReferenceColorByCIELAB', $args, function($async_ret){});
	}

	/**
	 * Add a reference color
	 * @param string $system 
	 * @param string $name 
	 * @param string $description 
	 * @param float $c 
	 * @param float $m 
	 * @param float $y 
	 * @param float $k 
	 * @return void
	 */
	public function AddReferenceColorByCMYK($system, $name, $description, $c, $m, $y, $k)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system, $name, $description, $c, $m, $y, $k];
		$phpbus->call('ColorConverter.AddReferenceColorByCMYK', $args, function($async_ret){});
	}

	/**
	 * 
	 * @param float $r 
	 * @param float $g 
	 * @param float $b 
	 * @return array 
	 */
	public function FindReferenceColorByRGB($r, $g, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$r, $g, $b];
		$ret = null;
		$phpbus->call('ColorConverter.FindReferenceColorByRGB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param float $L 
	 * @param float $a 
	 * @param float $b 
	 * @return array 
	 */
	public function FindReferenceColorByCIELAB($L, $a, $b)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$L, $a, $b];
		$ret = null;
		$phpbus->call('ColorConverter.FindReferenceColorByCIELAB', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param float $c 
	 * @param float $m 
	 * @param float $y 
	 * @param float $k 
	 * @return array 
	 */
	public function FindReferenceColorByCMYK($c, $m, $y, $k)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$c, $m, $y, $k];
		$ret = null;
		$phpbus->call('ColorConverter.FindReferenceColorByCMYK', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param string $system 
	 * @param string $name 
	 * @return array 
	 */
	public function FindReferenceColor($system, $name)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system, $name];
		$ret = null;
		$phpbus->call('ColorConverter.FindReferenceColor', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Remove reference color system and all reference colors
	 * @param string $system 
	 * @return void
	 */
	public function RemoveReferenceColorSystem($system)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system];
		$phpbus->call('ColorConverter.RemoveReferenceColorSystem', $args, function($async_ret){});
	}

	/**
	 * Get all reference color systems
	 * @return array 
	 */
	public function GetReferenceColorSystems()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$ret = null;
		$phpbus->call('ColorConverter.GetReferenceColorSystems', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get all reference colors in a color reference system
	 * @param string $system 
	 * @return array 
	 */
	public function GetReferenceColors($system)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$system];
		$ret = null;
		$phpbus->call('ColorConverter.GetReferenceColors', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get supported illumination and observer angles
	 * @return array 
	 */
	public function GetIlluminationObserverAngles()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$ret = null;
		$phpbus->call('ColorConverter.GetIlluminationObserverAngles', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Save reference colors
	 * @param string $id 
	 * @return void
	 */
	public function SaveReferenceColors($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ColorConverter.SaveReferenceColors', $args, function($async_ret){});
	}

	/**
	 * Load reference colors
	 * @param string $id 
	 * @return void
	 */
	public function LoadReferenceColors($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ColorConverter.LoadReferenceColors', $args, function($async_ret){});
	}

}
