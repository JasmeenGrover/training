@extends('checklist-item.layout')

@section('content')
    <form>
        <div class="mb-3">
          <label for="" class="form-label">Type</label>
          <select id="" class="form-select">
            <option>InCabinChecks</option>
            <option>DrivingInfoQuestions</option>
            <option>ExternalChecks</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Key</label>
          <input type="" class="form-control" id="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Value</label>
          <input type="" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
