@extends('checklist-item.layout')

@section('content')

<div class="text-center mb-3 mt-2 pt-2 pb-2 lh-1">
  <h2>Create Checklist Item</h2>
</div>

<div class="border border-2 border-primary mr-2 ms-5 mt-2 mb-2 me-5 p-2 lh-lg shadow p-3 mb-5 bg-body rounded">

    <form action="{{ route('checklist-item.store')}}" method="post">

      @csrf

        <div class="mb-3">
          <label for="" class="form-label">Type</label>
          <select id="" class="form-select" name="type">
            <option name="txtType[]" value="InCabinChecks">InCabinChecks</option>
            <option name="txtType[]" value="DrivingInfoQuestions">DrivingInfoQuestions</option>
            <option name="txtType[]" value="ExternalChecks">ExternalChecks</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Key</label>
          <input type="text" class="form-control" id="" name="key">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Value</label>
          <input type="text" class="form-control" id="" name="value">
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-2">Submit</button>
      </form>

    </div>

@endsection
