<?php

namespace App\Http\Controllers;
use Paginate;
use Illuminate\Http\Request;
use App\Guest;
class ReportController extends Controller
{
    public function index()
    {
      $data = Guest::paginate(6);

      return view('report', ['data' => $data]);
    }
}
