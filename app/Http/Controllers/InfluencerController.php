<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Influencer;
use Illuminate\Support\Str;

class InfluencerController extends Controller
{
    public function index()
    {
        $influencers = Influencer::all();

        return view('influencers_index', ['influencers' => $influencers]);
    }

    public function indexExport()
    {
        $influencers = Influencer::all();
        $pdf         = PDF::loadView('components.influencers_export', [
            'influencers' => $influencers,
            'export'      => 1,
        ]);

        return $pdf->download('influencers_list_' . Str::slug(now(), '_') . '.pdf');
    }
}
