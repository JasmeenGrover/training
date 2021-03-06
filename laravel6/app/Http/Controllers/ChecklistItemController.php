<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ChecklistItems;

class ChecklistItemController extends Controller
{

    public function index()
    {
        $checklistItems = ChecklistItems::paginate();//ChecklistItems is class
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

      ChecklistItems::create($request->all()); //doubt

      return redirect()->route('checklist-item.index')->with('success','Checklist Item created');
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
      // dd(123);
      // return $request->all();
      $request->validate([
        'type' => 'required',
        'key' => 'required',
        'value' => 'required',
      ]);
      // dd(123);

      $checklistItem ->update($request->all());
      // return $checklistItem;
     return redirect()->route('checklist-item.index')->with('success','ChecklistItem updated successfully');
    }

    //delete

    public function destroy(ChecklistItems $checklistItem)
    {
      $checklistItem->delete();
      return redirect()->route('checklist-item.index')->with('success','Checklist Item deleted');
    }


}
