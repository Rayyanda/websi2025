<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Carbon\Carbon;
use App\Models\Visit;

class HomeController extends Controller
{
    //
    public function index()
    {
        $today = Carbon::today();
        $weekAgo = Carbon::now()->subWeek();
        $monthAgo = Carbon::now()->subMonth();

        // Total pengunjung
        $totalVisitors = Visit::count();
        $lastMonthVisitors = Visit::where('visited_at', '>=', $monthAgo)->count();
        $totalGrowth = $lastMonthVisitors ? (($totalVisitors - $lastMonthVisitors) / $lastMonthVisitors) * 100 : 0;

        // Hari ini
        $todayVisitors = Visit::whereDate('visited_at', $today)->count();
        $yesterdayVisitors = Visit::whereDate('visited_at', $today->copy()->subDay())->count();
        $todayGrowth = $yesterdayVisitors ? (($todayVisitors - $yesterdayVisitors) / $yesterdayVisitors) * 100 : 0;

        // Minggu ini
        $weekVisitors = Visit::where('visited_at', '>=', Carbon::now()->startOfWeek())->count();
        $lastWeekVisitors = Visit::whereBetween('visited_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->count();
        $weekGrowth = $lastWeekVisitors ? (($weekVisitors - $lastWeekVisitors) / $lastWeekVisitors) * 100 : 0;

        // Rata-rata waktu
        $avgDuration = Visit::avg('duration'); // seconds
        $avgDurationFormatted = gmdate("i\m s\s", $avgDuration);
        $lastMonthAvg = Visit::where('visited_at', '>=', $monthAgo)->avg('duration');
        $avgDurationGrowth = $lastMonthAvg ? (($avgDuration - $lastMonthAvg) / $lastMonthAvg) * 100 : 0;
        $visi = Content::where('id','=',2)->first(); // Assuming you want to fetch the first content as an example
        $misi = Content::where('id','=',1)->first(); // Assuming you want to fetch the first content as an example
        return view('home', compact(
        'totalVisitors', 'totalGrowth',
        'todayVisitors', 'todayGrowth',
        'weekVisitors', 'weekGrowth',
        'avgDurationFormatted', 'avgDurationGrowth',
        'visi', 'misi'
    ));
    }

}
