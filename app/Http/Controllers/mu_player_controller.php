<?php

namespace App\Http\Controllers;
use App\Models\mu_player_model;
use Illuminate\Http\Request;

class mu_player_controller extends Controller
{
    //
    public function index(){
        $data_mu_player = mu_player_model::all();

        return view('mu_player.index', compact('data_mu_player'));
    }
}
