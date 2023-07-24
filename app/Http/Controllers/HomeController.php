<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo 'главная страница';
    }

    public function showViewHomePage() {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }

    public function data() {
        echo '
        <form action="/form-submit" method="POST">
        <input name="mail" placeholder="почта">
        <input type="hidden" name="_token" value="'.csrf_token().'">
        <button type="submit">
        Данные отправлено
        </button>
        </form>';
    }

    
}
