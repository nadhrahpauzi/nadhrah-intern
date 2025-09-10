<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class PageController extends Controller
{
    public function hello($name) {
        echo "<h1>Hello $name</h1>";
    }


    public function index(Request $request, $page) {
        $page_view = "pages.$page";
        if (View::exists($page_view)) {
            return view($page_view);
        }
        abort(404);
    }
}
