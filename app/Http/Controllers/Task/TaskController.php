<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function folder()
    {
        

        return view('main.home', [
            'folders' => $folders,
        ]);
    }
}
