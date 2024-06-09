<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{
    /**
     * Display the registration view.
     */
    public function index(): Response
    {
        return Inertia::render('Dashboard', [
            'tasks' => auth()->user()->tasks()->get(),
        ]);
    }
}
