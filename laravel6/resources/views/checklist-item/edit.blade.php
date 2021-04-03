@extends('checklist-item.layout')

@section('content')

<div class="text-center mb-3 mt-2 pt-2 pb-2 lh-1">
  <h2>Edit Checklist Item</h2>
</div>

<div class="border border-2 border-primary me-5 ms-5 mt-2 mb-2 p-2 lh-lg shadow p-3 mb-5 bg-body rounded">

    <form action="{{ route('checklist-item.update', $checklistItem->id) }}" method="Post">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label> //name
        <input type="" class="form-control" id="" name="txtId" value="{{$checklistItem->id}}" disabled>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Type</label>
        <select id="" class="form-select" name="txtTech">
          <option value="{{$checklistItem->type}}">InCabinChecks</option>
          <option value="{{$checklistItem->Type}}">DrivingInfoQuestions</option>
          <option value="{{$checklistItem->type}}">ExternalChecks</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Key</label>
        <input type="text" class="form-control" id="" value="{{$checklistItem->key}}" name="txtKey">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Value</label>
        <input type="text" class="form-control" id="" value="{{$checklistItem->value}}" name="txtValue">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection
