@extends('checklist-item.layout')

@section('content')
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

@endsection
