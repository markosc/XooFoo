<?php
/**
 * Extended User Profile
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
 * @package         profile
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */

include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'header.php';
$email = isset($_GET['email']) ? trim($_GET['email']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : $email;

xoops_loadLanguage('user');

if ($email == '') {
    redirect_header("user.php", 2, _US_SORRYNOTFOUND, false);
    exit();
}

$myts =& MyTextSanitizer::getInstance();
$member_handler =& xoops_gethandler('member');
list($user) = $member_handler->getUsers(new Criteria('email', $myts->addSlashes($email)));

if (empty($user)) {
    $msg = _US_SORRYNOTFOUND;
    redirect_header("user.php", 2, $msg, false);
    exit();
} else {
    $code = isset($_GET['code']) ? trim($_GET['code']) : '';
    $areyou = substr($user->getVar("pass"), 0, 5);
    if ($code != '' && $areyou == $code) {
        $newpass = xoops_makepass();
        $xoopsMailer =& xoops_getMailer();
        $xoopsMailer->useMail();
        $xoopsMailer->setTemplate("lostpass2.tpl");
        $xoopsMailer->assign("SITENAME", $GLOBALS['xoopsConfig']['sitename']);
        $xoopsMailer->assign("ADMINMAIL", $GLOBALS['xoopsConfig']['adminmail']);
        $xoopsMailer->assign("SITEURL", XOOPS_URL . "/");
        $xoopsMailer->assign("IP", $_SERVER['REMOTE_ADDR']);
        $xoopsMailer->assign("NEWPWD", $newpass);
        $xoopsMailer->setToUsers($user);
        $xoopsMailer->setFromEmail($GLOBALS['xoopsConfig']['adminmail']);
        $xoopsMailer->setFromName($GLOBALS['xoopsConfig']['sitename']);
        $xoopsMailer->setSubject(sprintf(_US_NEWPWDREQ, XOOPS_URL));
        if (!$xoopsMailer->send()) {
            echo $xoopsMailer->getErrors();
        }

        // Next step: add the new password to the database
        $sql = sprintf("UPDATE %s SET pass = '%s' WHERE uid = %u", $GLOBALS['xoopsDB']->prefix("users"), md5($newpass), $user->getVar('uid') );
        if (!$GLOBALS['xoopsDB']->queryF($sql)) {
            include $GLOBALS['xoops']->path('header.php');
            echo _US_MAILPWDNG;
            include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'footer.php';
            exit();
        }
        redirect_header("user.php", 3, sprintf(_US_PWDMAILED, $user->getVar("uname")), false);
        exit();
    // If no Code, send it
    } else {
        $xoopsMailer =& xoops_getMailer();
        $xoopsMailer->useMail();
        $xoopsMailer->setTemplate("lostpass1.tpl");
        $xoopsMailer->assign("SITENAME", $GLOBALS['xoopsConfig']['sitename']);
        $xoopsMailer->assign("ADMINMAIL", $GLOBALS['xoopsConfig']['adminmail']);
        $xoopsMailer->assign("SITEURL", XOOPS_URL."/");
        $xoopsMailer->assign("IP", $_SERVER['REMOTE_ADDR']);
        $xoopsMailer->assign("NEWPWD_LINK", XOOPS_URL . "/modules/profile/lostpass.php?email={$email}&code=" . $areyou);
        $xoopsMailer->setToUsers($user);
        $xoopsMailer->setFromEmail($GLOBALS['xoopsConfig']['adminmail']);
        $xoopsMailer->setFromName($GLOBALS['xoopsConfig']['sitename']);
        $xoopsMailer->setSubject(sprintf(_US_NEWPWDREQ,$GLOBALS['xoopsConfig']['sitename']));
        include $GLOBALS['xoops']->path('header.php');
        if (!$xoopsMailer->send()) {
            echo $xoopsMailer->getErrors();
        }
        echo "<h4>";
        printf(_US_CONFMAIL, $user->getVar('uname'));
        echo "</h4>";
        include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'footer.php';
    }
}
?>