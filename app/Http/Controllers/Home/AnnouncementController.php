<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
class AnnouncementController extends Controller
{
    public function show($id)
    {
    	$announcement = Announcement::find($id);
    	// $announcement = Announcement::get();
    	return view('home.announcement.create',['announcement'=>$announcement]);
    }
     public function index($id)
    {
    	$announcement = Announcement::find($id);
    	// $announcement = Announcement::get();
    	return view('home.announcement.index',['announcement'=>$announcement]);
    }
}
