<?php
class Controller {
	public static function StartSite() {
		$arr = News::getLast10News();
		include_once 'view/start.php';
	}
	public static function AllCategory(){
		$arr = Category::getAllCategory();
		include_once 'view/category.php';
	}
	public static function AllNews(){
		$arr = News::getAllNews();
		include_once 'view/allnews.php';
	}
	public static function NewsByCatID($id){ //waz mistake!!!
		$arr = News::getNewsByCategoryID($id);//was mistake!!!
		include_once 'view/catnews.php';
	}
	public static function NewsByID($id){ //was mistake!!!
		$n = News::getNewsByID($id);
		include_once 'view/readnews.php';
	}
		public static function error404(){	
		include_once 'view/error404.php';
	}//was mistake!!

}