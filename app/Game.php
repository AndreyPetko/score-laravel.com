<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	protected $table = 'games';
	protected $fillable = ['stadium_id', 'home', 'away', 'day'];


	public static function getGames() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, url('/games'));
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			$error = curl_error($ch);
			curl_close($ch);
			
			throw new Exception("Failed retrieving  '" . $this->send_url . "' because of ' " . $error . "'.");
		}
		return $result;
	}

}