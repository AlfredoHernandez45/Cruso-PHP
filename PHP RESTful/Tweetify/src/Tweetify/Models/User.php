<?php
	namespace Tweetify\Models;

	class User extends \Illuminate\Database\Eloquent\Model{
		public static function authenticate($apikey){
			$user = User::where('apikey', '=', $apikey)->take(1)->get();
			return ($user[0]->exists) ? true : false;
		}
	}
?>