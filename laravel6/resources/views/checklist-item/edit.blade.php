<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{ route('checklist-item.update', $checklistItem->id) }}" method="GET">
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input type="" class="form-control" id="" disabled>
      </div>
<div class="mb-3">
<label for="" class="form-label">Type</label>
  <select id="" class="form-select">
    <option value="{{$checklistItem->type}}">InCabinChecks</option>
    <option value="{{$checklistItem->Type}}">DrivingInfoQuestions</option>
    <option value="{{$checklistItem->type}}">ExternalChecks</option>
  </select>
</div>
<div class="mb-3">
<label for="" class="form-label">Key</label>
<input type="" class="form-control" id="" value="{{$checklistItem->key}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Value</label>
<input type="" class="form-control" id="" value="{{$checklistItem->value}}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>
