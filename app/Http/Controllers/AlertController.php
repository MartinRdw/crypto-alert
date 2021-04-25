<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{

    public function index()
    {
        $alerts = Alert::all();

        return view('alerts.index', [
            'alerts' => $alerts
        ]);
    }

    public function create($coin)
    {
        return view('alerts.create', [
            'coin' => $coin
        ]);
    }

    public function store(Request $request)
    {
        $alert = Alert::create($request->only([
            'coin',
            'symbol',
            'price',
            'movement'
        ]));

        return redirect()->route('alerts.index');
    }

    public function delete(Alert $alert)
    {
        $alert->delete();

        return redirect()->back();
    }
}
