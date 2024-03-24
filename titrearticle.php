<?php
	defined('_JEXEC') or die('Access deny');

	class plgContentTitreArticle extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){				
			
			/*$re = '/{titre\s*?(.*) \s*?(.*)\s*}/m';
$subst = "<!-- Un matériel -->\r\n<div class=\"un-materiel\">\r\n\t<div class=\"titre\">\r\n\t\t<a href=\"index.php/?view=article&id=$2\">\r\n\t\t\t".$article->title."\r\n\t\t</a>\r\n\t</div>\r\n\t<div class=\"photo-materiel\">\r\n\t\t<!-- <img src=\"$2\"> -->\r\n\t</div>\r\n</div>";*/

echo "toto";
			//$article->text = preg_replace('{titrearticle}', $article->title, $article->text);
			
			$article->text = str_replace('{titrearticle}', $article->title, $article->text);
		}	
	}