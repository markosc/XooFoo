<?
/*
####################################################################
# Name: The Uniform Server Language System Array 1.1
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
# French translation : Kris - http://www.xoofoo.org
####################################################################
*/
/**
 * @translation     kris_fr (http://www.xoofoo.org)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @version         $Id$
**/

# Beta Feature, Currently For Debugging Only
#require_once 'array.php';

$US = array(
    'title' => 'Uniform Server',
	'apanel' => 'Interface d&#39;administration',
	'dev-team' => 'Equipe de d&eacute;veloppement d&#39;Uniform Server',

	//--------------------------------------------------------------------------------------------
	// Source Code
	//--------------------------------------------------------------------------------------------

	'code-show' => 'Voir le code source',
	'code-source' => 'Visualisation du code source',
	'code-back' => 'Fermer la fen&ecirc;tre',
	
	//--------------------------------------------------------------------------------------------
	// Navigation
	//--------------------------------------------------------------------------------------------
	
	// Basic
	'nav-home' => 'Accueil',
	'nav-web' => 'Site Officiel d&#39;Uniform Server',
	'nav-secure' => 'S&eacute;curit&eacute; Serveur',
	'nav-phpinfo' => 'phpinfo()',
	'nav-cgienv' => 'Environnement &#34;Perl&#34;',
	'nav-status' => 'Status &#34;Apache&#34;',
	'nav-info' => 'Infos &#34;Apache&#34;',
	'nav-update' => 'Rechercher une mise &agrave; jour',
	// Start
	'nav-start' => 'Contr&ocirc;le Serveur',
	'nav-sserver' => 'Fermer le serveur',
	'nav-rmysql' => 'D&eacute;marrer &#34;MySQL&#34;',
	'nav-smysql' => 'Stopper &#34;MySQL&#34;',
	'nav-rserver' => 'Red&eacute;marrer les Services',
	// Configurations
	'nav-config' => 'Configuration',
	'nav-aconfig' => 'Apache',
	'nav-pconfig' => 'PHP',
	'nav-vhost' => 'Gestion &#34;H&ocirc;te Virtuel&#34;',
	'nav-apsetup' => 'Panneau d&#39;Administration',
	'nav-psetup' => 'Serveur &#34;Priv&eacute;&#34;',
	'nav-sslpsetup' => 'S&eacute;curit&eacute; Serveur &#34;Priv&eacute;&#34;',
	'nav-mqsetup' => 'Serveur &#34;MySQL&#34;',
	// Tools Navigation
	'nav-tools' => 'Outils',
	'nav-pma' => 'Gestion phpMyAdmin',
	'nav-pmbp' => 'Gestion phpMyBackupPro',
	'nav-elog' => 'Voir les logs d&#39;erreurs',
	'nav-u2w' => 'Convertisseur Win - Unix',
	'nav-del' => 'Purge du serveur',
	'nav-down' => 'Gestion T&eacute;l&eacute;versement',
	'nav-smig' => 'Migration de serveur',
	// Plugins Navigation
	'nav-plugins' => 'Gestionnaire de Plugins',
	'nav-pear' => 'Installation de &#34;Pear&#34;',
	'nav-eaccelerator' => 'cPanel &#34;eAccelerator&#34;',
	'nav-key' => 'Cl&eacute; Serveur et Certificat',
	'nav-mysqlrestore' => 'Restaurer le mot de passe MySQL',
	// Misc Navigation
	'nav-misc' => 'Divers',
	'nav-sup' => 'Support en ligne',
	// Documentation
	'nav-docs' => 'Documentation',
	'nav-udoc' => 'Manuel de l&#39;utilisateur',
	'nav-ucen' => 'Centre Uniform Server',
	'nav-sdoc' => 'Documentation &#34;Serveur&#34;',
	'nav-phdoc' => 'Documentation &#34;PHP&#34;',
	'nav-mydoc' => 'Documentation &#34;MySQL&#34;',
	'nav-pedoc' => 'Documentation &#34;Perl&#34;',
	// Languages
	'nav-langs' => 'Langues',

	//--------------------------------------------------------------------------------------------
	// Home
	//--------------------------------------------------------------------------------------------
	
	'main-head' => 'Panneau d&#39;Administration '. $version .'',
	'main-text' => 'Bienvenue dans Uniform Server '. $uniserver .' !. Ceci est la section de gestion du serveur, vous pouvez le contr&ocirc;ler et/ou le param&eacute;trer &agrave; partir cette interface d&#39;administration.<br />Actuellement ce gestionnaire est en version ALPHA, toutefois il est complet et fonctionnel. Nous l&#39;avons voulu facile d&#39;utilisation et convivial.<br />Vous pouvez &eacute;galement traduire cette interface d&#39;administration dans votre langue. Si vous le r&eacute;alisez, nous vous demandons de faire partager ce travail, en nous d&eacute;posant une copie sur notre <a href="http://sourceforge.net/tracker/?atid=799696&group_id=53691&func=browse" target="_sf" title="SourceForge Translation Tracking">SourceForge Translation Tracking System</a> pour de prochains t&eacute;l&eacute;chargements.<br />Les traductions des pr&eacute;c&eacute;dentes versions ne sont plus fonctionnelles ! Cliquez sur le lien ci-dessus pour t&eacute;l&eacute;charger les mises &agrave; jour de celles-ci.<br />En outre, de nouvelles fonctions ont &eacute;t&eacute; ajout&eacute;es et certaines am&eacute;lior&eacute;es. Certaines peuvent ne pas fonctionner sous certains environnements ou n&eacute;cessiter l&#39;installation de plugins.<br />S&#39;il vous pla&icirc;t, reporter tout bug et erreur sur notre <a href="http://forum.uniformserver.com/" target="_forum" title="Forum Uniform Server">forum</a>.<br /><br />Merci d&#39;avance<br /><a href="http://www.uniformserver.com/" target="_home">L&#39;&eacute;quipe de d&eacute;veloppement d\'Uniform Server</a>',
	'main-secure' => 'V&eacute;rification &#34;S&eacute;curit&eacute;&#34;',
	'main-text-0' => 'Changer le pseudo/mot de passe pour le panneau d&#39;administration <a href="apsetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-1' => 'Changer le pseudo/mot de passe pour le serveur <a href="psetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-2' => 'Changer le mot de passe &#34;root&#34; pour mysql en l&#39;&eacute;ditant <a href="mqsetup.php" title="Modifier le mot de passe du root">ICI</a>',
	'main-text-3' => 'D&eacute;marrer la <a href="security.php" title="Ouvrir la console de s&eacute;curit&eacute;">Console de S&eacute;curit&eacute;</a> et v&eacute;rifier si tout est OK.',
	'main-text-4' => 'Changer le nom d&#34;utilisateur / mot de passe pour le serveur SSL <a href="sslpsetup.php">ICI</a>',
	
	//--------------------------------------------------------------------------------------------
	// Update
	//--------------------------------------------------------------------------------------------
	
	'update-head' => 'Chercher une mise &agrave; jour d&#39;Uniform Server',
	'update-check' => 'V&eacute;rification de la Version...',
	'update-true' => 'La version install&eacute;e d&#39;Uniform Server est la derni&egrave;re.<br />Vous n&#39;avez pas besoin de mise &agrave; jour.<br />',
	'update-false' => 'Une nouvelle version d&#39;Uniform Server a &eacute;t&eacute; publi&eacute;e !',
	'update-new' => 'Nouvelle version',
	'update-yours' => 'Version install&eacute;e',
	'update-get' => 'Vous pouvez t&eacute;l&eacute;charger la nouvelle version depuis notre site en suivant ce lien.',
	
	//--------------------------------------------------------------------------------------------
	// Server Shutdown
	//--------------------------------------------------------------------------------------------
	
	'stop-head' => 'Fermeture du Serveur',
	'stop-shut' => 'V&eacute;rification de la fermeture',
	'stop-killing' => 'Cliquez sur &#34;Fermez !&#34; et le serveur sera automatiquement arr&ecirc;t&eacute;.',
	'stop-stop' => 'Fermez !',
	
	//--------------------------------------------------------------------------------------------
	// Downlaod Manager
	//--------------------------------------------------------------------------------------------
	
	'down-head' => 'Gestionnaire de t&eacute;l&eacute;versement',
	'down-aval' => 'T&eacute;l&eacute;versement de mises &agrave; jour, plugins, et addons.',
	'down-text' => 'Cette fonctionnalit&eacute; est toujours &agrave; l&#39;&eacute;tude. Quand elle sera ajout&eacute;e, vous serez en mesure de t&eacute;l&eacute;verser des plugins, addons, et/ou patches pour votre serveur. Certains de ceux-ci auront &eacute;galement un &#34;installateur&#34; qui vous permettra de les monter automatiquement ou manuellement.',
	
	//--------------------------------------------------------------------------------------------
	// Apache Configuration
	//--------------------------------------------------------------------------------------------
	
	'aconfig-head' => 'Configuration Apache',
	'aconfig-conf' => 'Param&eacute;tres Apache',
	'aconfig-sname' => 'Nom du serveur ',
	'aconfig-wemail' => 'Email de l&#39;Administrateur ',
	'aconfig-difiles' => 'Dossier des fichiers index ',
	'aconfig-ssi' => 'Inclusion c&ocirc;t&eacute; serveur ',
	'aconfig-ssig' => 'Etat du Serveur ',
    'aconfig-listen' => 'Port ',
	'aconfig-text-0' => 'Autre',
	'aconfig-text-1' => 'Les changements ont &eacute;t&eacute; sauvegard&eacute;s avec succ&egrave;s. <br />Ils seront pris en compte apr&egrave;s red&eacute;marrage du serveur !',
	'aconfig-save' => 'Sauvegarder',
	'aconfig-module' => 'Actuellement PHP est charg&eacute; comme module d&#39;Apache.',
	'aconfig-cgi' => 'Actuellement les scripts PHP sont ex&eacute;cut&eacute;s en compl&eacute;ment de l&#39;interface CGI d&#39;Apache.',
	'aconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// PHP Configuration
	//--------------------------------------------------------------------------------------------
	
	'pconfig-head' => 'Configuration PHP',
	'pconfig-conf' => 'Param&eacute;tres PHP',
	'pconfig-smode' => 'Safe Mode',
	'pconfig-rg' => 'Register Globals',
	'pconfig-mtexec' => 'Temps (s.) maximum d&#39;ex&eacute;cution d&#39;un script',
	'pconfig-mmexec' => 'Taille (MB) maximum de la m&eacute;moire',
	'pconfig-ssig' => 'Afficher PHP dans l&#39;&eacute;tat du serveur',
	'pconfig-perror' => 'Erreurs d&#39;impression',
	'pconfig-mpsize' => 'Taille Maximum des Posts',
	'pconfig-musize' => 'Taille Maximum de t&eacute;l&eacute;versement',
	'pconfig-text-0' => 'Autre',
	'pconfig-text-1' => 'Les changements ont &eacute;t&eacute; sauvegard&eacute;s avec succ&egrave;s.<br />Ils seront pris en compte apr&egrave;s red&eacute;marrage du serveur !',
	'pconfig-save' => 'Sauvegarder',
	'pconfig-module' => 'En ce moment PHP est charg&eacute; comme module d&#39;Apache.',
	'pconfig-cgi' => 'Actuellement les scripts PHP sont ex&eacute;cut&eacute;s en compl&eacute;ment de l&#39;interface CGI d&#39;Apache.',
	'pconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// VHost Manager
	//--------------------------------------------------------------------------------------------

	'vhost-head' => 'H&ocirc;te virtuel',
	'vhost-setup' => 'Gestion des H&ocirc;tes virtuels',
	'vhost-settings' => 'Pr&eacute;f&eacute;rences des h&ocirc;tes virtuels',
	'vhost-text-0' => 'Vous avez',
	'vhost-text-1' => 'h&ocirc;te(s) dans votre fichier httpd.conf :',
	'vhost-text-2' => 'Erreur dans le dossier &#34;h&ocirc;te&#34; :',
	'vhost-text-3' => 'Tous les noms sont pr&eacute;sent dans votre fichier de configuration httpd.conf !',
	'vhost-new' => 'Utilisez cet outil pour ajouter des h&ocirc;tes virtuels sans avoir &agrave; &eacute;diter vous-m&ecirc;me le fichier httpd.conf.',
	'vhost-new-ex' => '(ex. newhost.localhost)',
	'vhost-name' => 'Nom :',
	'vhost-path' => 'Chemin physique vers le dossier de l&#39;h&ocirc;te :',
	'vhost-path-ex' => '(ex. c:/www/newhost)',
	'vhost-opt' => 'Options additionnelles :',
	'vhost-opt-ex' => '(ex. error_log etc.)',
	'vhost-dne' => 'n&#39;existe pas',
	'vhost-make' => 'Cr&eacute;er',
	'vhost-error-1' => 'Erreur dans la description du chemin de votre h&ocirc;te virtuel!',
	'vhost-error-2' => 'Erreur dans le chemin de votre httpd.conf!',
	'vhost-text-4' => 'Safe_mode est sur &#34;On&#34;, il faut red&eacute;marrer Apache manuellement !',
	'vhost-credit' => 'Script par Sukos',

	//--------------------------------------------------------------------------------------------
	// Server Migration
	//--------------------------------------------------------------------------------------------

	'smig-head' => 'Migration Serveur ',
	'smig-sub' => 'Outils de Migration [BETA FEATURE]',
	'smig-text-0' => 'Cet outil de migration vous aide &agrave; migrer d&#39;un serveur &agrave; un autre. Il vous permet de migrer d&#39;un autre serveur (ou d&#39;une pr&eacute;c&eacute;dente installation d&#39;Uniform Server) vers celui-ci.<br /><strong>Ce script peut &ecirc;tre d&eacute;marr&eacute; via &#34;localhost&#34; pour un meilleur r&eacute;sultat</strong>',
	'smig-text-1' => 'La suite est pour indiquer la localisation WWW [htdocs] du serveur que vous d&eacute;sirez migrer. Vous ne pouvez choisir de migrer que seulement un fichier ou un dossier.',
	'smig-text-2' => 'Ceci migrera votre base de donn&eacute;es mysql de l&#39;ancien serveur vers le nouveau. Avant d&#39;utiliser cette &eacute;tape, veuillez noter que des probl&egrave;mes <strong>peuvent se poser si vous avez le m&ecirc;me nom de base de donn&eacute;es entre l&#39;ancien et le nouveau serveur</strong>.',
	'smig-success' => 'La migration a eu lieu avec succ&egrave;s ! Allez v&eacute;rifier maintenant pour &ecirc;tre s&ucirc;r, s&#39;il vous pla&icirc;t.',
	'smig-www' => 'Localisation WWW [htdocs]',
	'smig-mysql' => 'Dossier des bases de donn&eacute;es MySQL',

	//--------------------------------------------------------------------------------------------
	// Server Key & Cert Gen
	//--------------------------------------------------------------------------------------------
	
	'cert-head' => 'Certificat Serveur et g&eacute;n&eacute;ration de cl&eacute;',
	'cert-verify1' => 'V&eacute;rifier la G&eacute;n&eacute;ration',
	'cert-verify2' => 'Cliquez sur G&eacute;n&eacute;rez ! et suivez les instructions.',
	'cert-verify3' => 'G&eacute;n&eacute;rez !',
	
	//--------------------------------------------------------------------------------------------
	// Server Key & Cert Gen
	//--------------------------------------------------------------------------------------------
	
	'mysql-head' => 'Restaurez le mot de passe MySQL',
	'mysql-verify1' => 'V&eacute;rifiez la g&eacute;n&eacute;ration',
	'mysql-verify2' => 'Cliquez sur &#34;Restaurez !&#34; et suivez les instructions.',
	'mysql-verify3' => 'Restaurez !',

	//--------------------------------------------------------------------------------------------
	// Server Security Console
	//--------------------------------------------------------------------------------------------

	'secure1-head' => 'Alerte de S&eacute;curit&eacute; !',
	'secure1-sub' => 'Attaque possible',
	'secure1-text-0' => 'L&#39;adresse IP n&#39;est pas 127.0.0.1, mais',
	'secure1-text-1' => 'Note : HTTP_REFERER est',
	'secure1-text-2' => 'Pour d&eacute;sactiver ce message d&#39;alerte, mettre $unisecure sur &#34;0&#34; dans : /home/admin/www/includes/config.inc.php',

	//--------------------------------------------------------------------------------------------
	// Admin Panel Setup
	//--------------------------------------------------------------------------------------------

	'apsetup-head' => 'Panneau de Configuration',
	'apsetup-sub-0' => 'Gestion des utilisateurs',
	'apsetup-text-0' => 'Param&eacute;trez ici, le pseudo et le mot de passe pour l&#39;interface d&#39;administration. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'apsetup-user' => 'Pseudo',
	'apsetup-pass' => 'Mot de passe',
	'apsetup-change' => 'Modifier',
	'apsetup-success' => 'Le pseudo/mot de passe du panneau d&#39;administration ont &eacute;t&eacute; modifi&eacute;s avec ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// Private Server Setup
	//--------------------------------------------------------------------------------------------

	'psetup-head' => 'Configuration du Serveur Priv&eacute;',
	'psetup-sub-0' => 'Gestion des utilisateurs',
	'psetup-text-0' => 'Param&eacute;trez ici, le pseudo et le mot de passe pour le serveur priv&eacute;. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'psetup-user' => 'Pseudo',
	'psetup-pass' => 'Mot de passe',
	'psetup-change' => 'Modifier',
	'psetup-success' => 'Le pseudo/mot de passe du serveur priv&eacute; ont &eacute;t&eacute; modifi&eacute;s avec ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// Private Secure Server Setup (SSL)
	//--------------------------------------------------------------------------------------------

	'sslpsetup-head' => 'Configuration Serveur Priv&eacute; S&eacute;curis&eacute; (SSL)',
	'sslpsetup-sub-0' => 'Gestion utilisateur',
	'sslpsetup-text-0' => 'Installation de l&#39;identifiant et mot de passe pour votre serveur s&eacute;curis&eacute; priv&eacute;. S&#39;il vous pla&icirc;t noter que vous devrez peut-&ecirc;tre activer cette fonction dans le fichier /wwws/.htaccess',
	'sslpsetup-user' => 'Identifiant',
	'sslpsetup-pass' => 'Mot de passe',
	'sslpsetup-change' => 'Modifier',
	'sslpsetup-success' => 'Votre identifiant et mot de passe pour le serveur s&eacute;curis&eacute; ont &eacute;t&eacute; chang&eacute; par ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// MySQL Setup
	//--------------------------------------------------------------------------------------------

	'mqsetup-head' => 'Configuration du serveur MySQL',
	'mqsetup-sub-0' => 'Gestion des utilisateurs',
	'mqsetup-text-0' => 'Param&eacute;trez ici le mot de passe &#34;MySQL&#34;. Apr&egrave;s changement de celui-ci, veuillez noter que <strong> vous devez stopper le serveur en utilisant le fichier &#34;Stop.bat&#34;</strong> et le red&eacute;marrer ensuite.',
	'mqsetup-pass' => 'Mot de passe &#34;MySQL&#34;',
	'mqsetup-change' => 'Modifier',
	'mqsetup-success' => 'Votre mot de passe &#34;MySQL&#34; a &eacute;t&eacute; chang&eacute; par cette nouvelle valeur :',

	//--------------------------------------------------------------------------------------------
	// Server Security Center
	//--------------------------------------------------------------------------------------------

	'secure-head' => 'Centre de S&eacute;curit&eacute;',
	'secure-sub-0' => 'Gestion S&eacute;curit&eacute; Utilisateur',
	'secure-sub-1' => 'S&eacute;curit&eacute; du serveur',
	'secure-text-0' => 'Cette section du centre de s&eacute;curit&eacute; v&eacute;rifiera tous les r&eacute;glages de gestion des utilisateurs, pour s&#39;assurer que tout est r&eacute;gl&eacute;. Elle vous indiquera si quelque chose doit &ecirc;tre modifi&eacute;e.',
	'secure-text-1' => 'MSG SECURITE',
	'secure-text-2' => 'STATUS',
	'secure-text-3' => 'Panneau d&#39;administration',
	'secure-text-X' => 'Si le pseudo/mot de passe n&#39;est encore param&eacute;tr&eacute;, vous devriez certainement changer ceci en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-secure' => 'SECURISE',
	'secure-unsecure' => 'NON-SECURISE',
	'secure-text-7' => 'Si le mot de passe n&#39;est encore param&eacute;tr&eacute;, vous devriez certainement changer ceci en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-text-8' => 'Cette section du centre de s&eacute;curit&eacute; v&eacute;rifiera si les pr&eacute;f&eacute;rences et param&eacute;tres du serveur sont corrects et appropri&eacute;s.',
	'secure-text-9' => 'Safe Mode PHP',
	'secure-text-10' => 'Cette v&eacute;rification regarde si PHP d&eacute;marre en &#34;SAFE MODE&#34;. Maintenant, PHP ne doit pas fonctionner en SAFE MODE, mais si vous voulez une s&eacute;curit&eacute; suppl&eacute;mentaire, vous pouvez la r&eacute;gler en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-text-p' => 'Serveur personnel',
	'secure-text-sslp' => 'Serveur S&eacute;curis&eacute; Personnel (SSL)',
	'secure-text-sslcertp' => 'Certificat Serveur et cl&eacute; (SSL)',
	'secure-text-s' => 'Serveur MySQL',
	'secure-text-11' => 'Acc&egrave;s au Panneau d&#39;administration',
	'secure-text-12' => 'Acc&egrave;s au serveur',
	'secure-text-12ssl' => 'Acc&egrave;s Serveur (SSL)',
	'secure-text-13' => 'Bien que ce param&eacute;tre ne soit pas plus important que les autres en place contre l&#39;acc&egrave;s &agrave; l&#39;interface d\'administration depuis l&#39;ext&eacute;rieur, ceci v&eacute;rifiera si cette derni&egrave;re est prot&eacute;g&eacute;e par une m&eacute;thode d&#39;Authentification. Veuillez modifier ceci en &eacute;ditant le fichier --> '.$apanel_path.'/.htaccess',
	'secure-text-14' => 'Si vous utilisez votre serveur en production, sauter ceci. Sinon, si vous voulez ajouter plus de s&eacute;curit&eacute; au serveur en le bloquant par une m&eacute;thode d&#39;Authentification, alors &eacute;diter le fichier --> '.$server_path.'/.htaccess',
'secure-text-14ssl' => 'Si vous utilisez votre serveur en mode &#34;production&#34;, passez ceci. Si non, vous pouvez ajouter plus de s&eacute;curit&eacute; &agrave; votre serveur en utilisant une m&eacute;thode d&#39;authentification, vous pouvez &eacute;diter et modifier le fichier .htaccess &#34;.$server_path_ssl.&#34;.',	
'secure-view' => 'Vue locale',
	'secure-look' => '&eacute;tant donn&eacute; que certains PC ont un nom d\'h&ocirc;te par d&eacute;faut diff&eacute;rent de &#34;localhost&#34;, nous pouvons employer ici la m&eacute;thode par adresse IP. Ceci v&eacute;rifiera que nous sommes s&ucirc;r d&#39;acc&eacute;der &agrave; l&#39;interface d&#39;administration en local.',
);  

# Beta Feature, Currently For Debugging Only
#array2table($US, true);
?>