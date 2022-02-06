<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        //Вместо отображения гл страницы делаем:
        return redirect()->route('post.index');
    }
}
