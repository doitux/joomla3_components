<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_pthranking
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
// $document->addScript(JUri::root() . 'media/com_pthranking/js/pthleader.js?tx=20161203_1841');
// $document->addStyleSheet(JUri::root() . 'media/com_pthranking/css/pthranking.css');
// $uri = JUri::getInstance();
// $base = $uri->toString(array('scheme', 'user', 'pass', 'host', 'port'));
// $url = $base . JRoute::_('index.php?option=com_pthranking&view=activategame', false);
?>

<?php if($this->userexists): ?>

<h1><?php echo $this->username?> - Profile</h1>

<h3>Ranking information about this season</h3>
<?php echo $this->basicinfo_html; ?>

<?php else: ?>
<p>Player not found</p>

<?php endif; ?>


