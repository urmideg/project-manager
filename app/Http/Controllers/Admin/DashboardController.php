<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Панель администратора
 */
class DashboardController extends Controller
{
    /**
     * Выдача главной станицы панели администратора
     * @return представление admin.index
     */
    public function index()
    {
        return view('admin.index');
    }
}
