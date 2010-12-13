<?php
/**
 * Ghost module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Ghost
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

$module_dirname = basename( dirname( __FILE__ ) ) ;

$modversion["name"] 	=  _MI_GHOST_NAME;
$modversion["version"] 	= 1.2;
$modversion["description"] 	= _MI_GHOST_DESC;
$modversion["author"] 	= "Kris - http://www.xoofoo.org";
$modversion["credits"]	= "Xoops Community";
$modversion["help"] 		= "";
$modversion["dirname"] 	= $module_dirname;
$modversion["image"] 	= "images/" . $module_dirname . "_slogo.png";
$modversion["license"] 	= "GNU General Public License";
$modversion["license_url"]	= "http://www.gnu.org/licenses/gpl.html";
$modversion["official"] 	= 0;
$modversion["author_website_url"]	= "http://labs.xoofoo.org";
$modversion["author_website_name"]	= "Laboratoire XooFoo";

//about
$modversion["demo_site_url"]			= "";
$modversion["demo_site_name"]			= "";
$modversion["module_website_url"]		= "http://labs.xoofoo.org";
$modversion["module_website_name"]	= "Labs XooFoo";
$modversion["module_release"]			= "0";
$modversion["module_status"]			= "Final";

// All tables should not have any prefix!
//$modversion["sqlfile"]["mysql"]	= "sql/mysql-" . $xoopsConfig["language"] . ".sql";
//$modversion["tables"][0]        	= $module_dirname . "_firsttable";
//$modversion["tables"][1]       	= $module_dirname . "_secondtable";

// Admin Menu
 $modversion["system_menu"] = 1 ; // Set to 1 if you want to display menu tabs generated by system module
$modversion["hasAdmin"] 	= 1; // active = 1
$modversion["adminindex"] = "admin/index.php";
$modversion["adminmenu"] = "admin/menu.php";

// Menu
$modversion["hasMain"] 		= 1; // active = 1

$i = 1;
$modversion["sub"][$i]["name"] 	= _MI_GHOST_SMNAME1;
$modversion["sub"][$i]["url"] 	= "index.php";
$i++;
$modversion["sub"][$i]["name"] 	= _MI_GHOST_SMNAME2;
$modversion["sub"][$i]["url"] 	= "page2.php";

// Config
/*
$i = 1;
$modversion["config"][$i]["name"]		= "ghostconf1";
$modversion["config"][$i]["title"] 			= "_MI_GHOST_CONF1";
$modversion["config"][$i]["description"]	= "_MI_GHOST_CONF1_DESC";
$modversion["config"][$i]["formtype"]		= "text";
$modversion["config"][$i]["valuetype"]		= "text";
$modversion["config"][$i]["default"]		= _MI_GHOST_CONF1_DEFAULT;
$i++;
$modversion["config"][$i]["name"]		= "ghostconf2";
$modversion["config"][$i]["title"]			= "_MI_GHOST_CONF2";
$modversion["config"][$i]["description"]	= "_MI_GHOST_CONF2_DESC";
$modversion["config"][$i]["formtype"]		= "text";
$modversion["config"][$i]["valuetype"]		= "text";
$modversion["config"][$i]["default"]		= _MI_GHOST_CONF2_DEFAULT;
*/

// Templates
$i = 1;
$modversion["templates"][$i]["file"] 		= $module_dirname . "_index.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_DSCTPL1;
$i++;
$modversion["templates"][$i]["file"] 		= $module_dirname . "_page2.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_DSCTPL2;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_index.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_MANAGER_INDEX_DESC;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_example.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_MANAGER_EXAMPLE_DESC;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_about.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_MANAGER_ABOUT_DESC;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_help.html";
$modversion["templates"][$i]["description"] 	= _MI_GHOST_MANAGER_HELP_DESC;

//Blocks
$i = 1;
$modversion["blocks"][$i]["file"]           = "blocks_mytype1.php";
$modversion["blocks"][$i]["name"]           = _MI_GHOST_BLOCK_NAME1;
$modversion["blocks"][$i]["description"]    = _MI_GHOST_BLOCK_NAME1_DESC;
$modversion["blocks"][$i]["show_func"]      = "b_". $module_dirname . "_myfunction1_show";
//$modversion["blocks"][$i]["edit_func"]      = "b_". $module_dirname . "_myfunction1_edit";
//$modversion["blocks"][$i]["options"]        = "";
$modversion["blocks"][$i]["template"]       = $module_dirname . "_block1.html";

/*$i++;
$modversion["blocks"][$i]["file"]           = "blocks_mytype2.php";
$modversion["blocks"][$i]["name"]           = _MI_GHOST_BLOCK_NAME2;
$modversion["blocks"][$i]["description"]    = _MI_GHOST_BLOCK_NAME2_DESC;
$modversion["blocks"][$i]["show_func"]      = "b_". $module_dirname . "_myfunction2_show";
$modversion["blocks"][$i]["edit_func"]      = "b_". $module_dirname . "_myfunction2_edit";
$modversion["blocks"][$i]["options"]        = "";
$modversion["blocks"][$i]["template"]       = $module_dirname . "_block2.html";*/
?>