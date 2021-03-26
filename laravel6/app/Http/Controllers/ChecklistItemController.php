<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ChecklistItems;

class ChecklistItemController extends Controller
{
    public function index()
    {
        $checklistItems = ChecklistItems::paginate();
        return view("checklist-item.index",compact("checklistItems"));
    }
}
