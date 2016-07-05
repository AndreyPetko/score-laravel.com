<?php

namespace App\Http\Controllers;
use App\Game;

class GameController extends Controller
{

	public function __construct() {
	}


	public function getIndex() {
		$games = Game::all();

		return $games;
	}
}