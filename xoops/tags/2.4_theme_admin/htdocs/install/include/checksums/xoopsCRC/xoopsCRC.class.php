<?php
/**
 * Xoops checksum plugin class file
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         upgrader
 * @since           2.4.0
 * @author          Simon Roberts <simon@xoops.org>
 **/

if (!class_exists('xoopsCRC'))
{

	
	
	class xoopsCRC
	{
		var $base;
		var $enum;
		var $seed;
		var $crc;
			
		function __construct($data, $seed, $len=29)
		{
			$this->seed = $seed;
			$this->length = $len;
			$this->base = new xoopsCRC_base((int)$seed);
			$this->enum = new xoopsCRC_enumerator($this->base);
			
			if (!empty($data))
			{
				for ($i=1; $i<strlen($data); $i++)
				{
					$enum_calc = $this->enum->enum_calc(substr($data,$i,1),$enum_calc);
				}		
				$xoopsCRC_crc = new xoopsCRC_leaver($enum_calc, $this->base, $this->length);	
				$this->crc = $xoopsCRC_crc->crc;			
			}
			
		}
			
		function calc($data)
		{
			for ($i=1; $i<strlen($data); $i++)
			{
				$enum_calc = $this->enum->enum_calc(substr($data,$i,1),$enum_calc);
			}		
			$xoopsCRC_crc = new xoopsCRC_leaver($enum_calc, $this->base, $this->length);	
			return $xoopsCRC_crc->crc;
		}
	}
}				

require_once ('xoopsCRC.base.php');
require_once ('xoopsCRC.enumerator.php');
require_once ('xoopsCRC.leaver.php');		
		
		
