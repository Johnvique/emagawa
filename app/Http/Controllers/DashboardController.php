<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Guest;
use App\Room;
use App\Reservation;
use App\Chef;
use App\Employee;
use App\Notice;

class DashboardController extends Controller
{
    public function index(){
        
        $services_count=Service::count();
        $guests_count=Guest::count();
        $rooms_count=Room::count();
        $reservations_count=Reservation::count();
        $chefs_count=Chef::count();
        $employees_count=Employee::count();
        $notices_count=Notice::count();
        return view('dashboard/index',compact('services_count','guests_count','rooms_count','reservations_count',
        'chefs_count','employees_count','notices_count'));
    }
}
