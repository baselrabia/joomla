<?php


defined('_JEXEC') or die;

JLoader::register('ContentHelperRoute', JPATH_SITE . '/components/com_content/helpers/route.php');

JModelLegacy::addIncludePath(JPATH_SITE . '/components/com_content/models', 'ContentModel');


abstract class ModArticlesRandomHelper
{

		public static function getArticles(&$params){

			$categories =$params->get('catid');

			$count = $params->get('count',5);

			$db = JFactory::getDbo();
			$quary =$db->getQuery(true);

			$query->select('*');
			$query->from("#__content");

			if (is_array($categories) && count($categories)){
				
				$query->where('catid IN (' .implode(',',$categories).')');
			}

			$query->where('state = 1');

			$query->order('RAND()');

			$db->setQuery($query, 0, $count);

			$articles = loadObjectList();

			foreach ($articles as $article) {
				$article->slug = $article->id .":" .$article->alias;
				$article->link = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug,$article->catid,$article->language))
			}

			return $articles;
		}

	
}
