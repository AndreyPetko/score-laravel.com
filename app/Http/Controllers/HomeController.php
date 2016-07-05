<?php

namespace App\Http\Controllers;

use App\Game;

class HomeController extends Controller
{

	public function __construct() {
	}

	public function getIndex() {
		$games = Game::getGames();
		$games = json_decode($games);


		foreach ($games as $game) {
			$game->day = substr($game->day, 0, 10);
		}

		return view('gamesList', compact('games'));
	}

}