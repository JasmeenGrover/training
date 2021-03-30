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

    // new item

    public function create()
    {
      return view("checklist-item.create");
    }

    public function store(Request $request)
    {
      $request->validate([
        'type' => 'required',
        'key' => 'required',
        'value' => 'required',
      ]);

      ChecklistItems::create($request->all());

      return redirect()->route('checklist-tem.index')->with('success','Checklist Item created');
    }

    public function show(ChecklistItems $checklistItem)
    {
      return view("checklist-item.show", compact("checklistItem"));
    }


    //edit

    public function edit(ChecklistItems $checklistItem)
    {
        return view("checklist-item.edit", compact("checklistItem"));
    }

    //update

    public function update(Request $request, ChecklistItems $checklistItem)
    {
      $request -> validate([
        'type' => 'required',
        'key' => 'required',
        'value' => 'required',
      ]);

      $checklistItem ->update($request->all());

      return redirect()->route('checklist-item.index')->with('success','ChecklistItem updated successfully');
    }

    //delete

    public function destroy(ChecklistItems $checklistItem)
    {
      $checklistItem -> delete();
      return redirect() -> route('checklist-item.index')->with('success','Checklist Item deleted');
    }


}
