<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use App\Order;
use App\User;

class CmsController extends MainController
{
    public function dashboard()
    {

        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(7))->count();
        $usersChart = new UserChart;
        $usersChart->labels(['7 days ago', 'Yesterday', 'Today']);
        $usersChart->dataset('Users', 'line', [$users_2_days_ago, $yesterday_users, $today_users])
            ->color("#fbb710")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(false)
            ->linetension(0.1)
            ->dashed([0]);
        return view('cms.dashboard', ['usersChart' => $usersChart]);

    }

    public function orders()
    {

        self::$viewData['orders'] = Order::getOrders();
        self::$viewData['orders_sum'] = Order::getSum();
        return view('cms.orders', self::$viewData);
    }

}
