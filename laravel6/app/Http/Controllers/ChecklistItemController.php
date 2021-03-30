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

    public function edit(ChecklistItems $checklistItem)
    {
        return view("checklist-item.edit", compact("checklistItem"));
    }

    public function update(Request $request, ChecklistItems $checklistItem)
    {
      $request -> validate([
        'type' => 'required',
        'key' => 'required',
        'value' => 'required',
      ]);

      $checklistItem ->update($request->all());

      return redirect()->route('checklist-item.index')->with('success','Product updated successfully');
    }

    public function show(ChecklistItems $checklistItem)
    {
      return view("checklist-item.show", compact("checklistItem"));
    }
}
