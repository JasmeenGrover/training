
    <form action="{{ route('checklist-item.update', $checklistItem->id) }}" method="Post">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label> //name
        <input type="" class="form-control" id="" name="txtId" value="{{$checklistItem->id}}" disabled>
      </div>
<div class="mb-3">
<label for="" class="form-label">Type</label>
  <select id="" class="form-select">
    <option value="{{$checklistItem->type}}" name="txtType[]">InCabinChecks</option>
    <option value="{{$checklistItem->Type}}" name="txtType[]">DrivingInfoQuestions</option>
    <option value="{{$checklistItem->type}}" name="txtType[]">ExternalChecks</option>
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
