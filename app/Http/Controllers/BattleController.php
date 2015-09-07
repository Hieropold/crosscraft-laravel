<?php
namespace Crosscraft\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BattleController extends Controller {
    public function battle() {
        // Select random word
        $random_offset = (int) DB::select('SELECT FLOOR(RAND() * COUNT(*)) AS offset FROM words')[0]->offset;
        $random_word = DB::select('SELECT * FROM words LIMIT ' . $random_offset . ', 1')[0];

        // Get 1 correct clue
        $correct_clues = DB::select('SELECT * FROM clues WHERE wid = ' . (int) $random_word->wid);

        $random_clues = array();
        $correct_clue_index = mt_rand(0, count($correct_clues) - 1);
        $random_clues[$correct_clues[$correct_clue_index]->cid] = $correct_clues[$correct_clue_index]->clue;

        // Select 4 other random clues
        $clues_count = (int) DB::select('SELECT COUNT(*) AS total FROM clues')[0]->total;
        for ($i = 1; $i < 5; $i++) {
            $random_offset = mt_rand(0, $clues_count);
            $random_clue_row = DB::select('SELECT * FROM clues LIMIT ' . $random_offset . ', 1')[0];
            $random_clues[$random_clue_row->cid] = $random_clue_row->clue;
        }

        // Shuffle clues
        $clues_cids = array_keys($random_clues);
        shuffle($clues_cids);
        $shuffled_random_clues = array();
        foreach ($clues_cids as $cid) {
            $shuffled_random_clues[$cid] = $random_clues[$cid];
        }

        return view('battle', [
            'wid' => $random_word->wid,
            'word' => $random_word->word,
            'clues' => $shuffled_random_clues,
        ]);
    }

    public function guess($wid, $cid) {
        // Load word
        $words = DB::select('SELECT * FROM words WHERE wid = ' . $wid);
        if (!count($words)) {
            abort(404);
        }
        $word = $words[0];

        // Load clues
        $clues = DB::select('SELECT * FROM clues WHERE cid = ' . $cid);
        if (!count($clues)) {
            abort(404);
        }
        $clue = $clues[0];

        if ($clue->wid === $word->wid) {
            return view('success');
        }
        else {
            return view('fail');
        }
    }
}