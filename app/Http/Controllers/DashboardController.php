<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MadeITBelgium\Hosting\Models\Domainname;
use MadeITBelgium\Hosting\Models\Hosting;
use MadeITBelgium\Hosting\Models\Invoice;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $team = $user->currentTeam;
        
        $domainnames = Domainname::where('team_id', $team->id)->get();
        if (count($domainnames) > 5) {
            if (Domainname::where('team_id', $team->id)->where('end_at', '<', now()->addDays(60))->orderBy('end_at', 'ASC')->count() > 0) {
                $domainnames = Domainname::where('team_id', $team->id)->where('end_at', '<', now()->addDays(60))->limit(10)->orderBy('end_at', 'ASC')->get();
            } else {
                $domainnames = Domainname::where('team_id', $team->id)->limit(10)->get();
            }
        }

        $hostings = Hosting::where('team_id', $team->id)->get();
        if (count($hostings) > 5) {
            if (Hosting::where('team_id', $team->id)->where('end_at', '<', now()->addDays(60))->orderBy('end_at', 'ASC')->count() > 0) {
                $hostings = Hosting::where('team_id', $team->id)->where('end_at', '<', now()->addDays(60))->limit(10)->orderBy('end_at', 'ASC')->get();
            } else {
                $hostings = Hosting::where('team_id', $team->id)->limit(10)->get();
            }
        }

        $invoices = Invoice::where('team_id', $team->id)->limit(10)->orderBy('invoice_date', 'DESC')->get();

        return view('dashboard', [
            'domainnames' => $domainnames,
            'hostings' => $hostings,
            'invoices' => $invoices,
        ]);
    }
}
