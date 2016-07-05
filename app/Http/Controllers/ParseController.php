<?php

namespace App\Http\Controllers;

use App\FantasyDataMLB;
use App\Game;

class ParseController extends Controller
{

	public function __construct() {
	}


	public function getIndex() {
		$fantasyDataMLB = new FantasyDataMLB('efd5969309e6424186fb55c1733e1342');

		$items = $fantasyDataMLB->games_by_season(2016);

		$items = json_decode($items);

		foreach ($items as $item) {
			Game::create([
				'day' => $item->Day,
				'home' => $item->HomeTeam,
				'away' => $item->AwayTeam,
				'stadium_id' => (int)$item->StadiumID,
				]);
		}

	}
}