<?php

defined('_JEXEC') or die;



// echo '<pre>' . print_r($articles,true) . '</pre>';
// Include the popular functions only once
JLoader::register('ModArticlesRandomHelper', __DIR__ . '/helper.php');

$articles = ModArticlesRandomHelper::getArticles($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');


require JModuleHelper::getLayoutPath('mod_articles_random', $params->get('layout', 'default'));
