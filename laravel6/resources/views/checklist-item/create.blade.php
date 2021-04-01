@extends('checklist-item.layout')

@section('content')

    <form action="{{ route('checklist-item.store')}}" method="post">

      @csrf

        <div class="mb-3">
          <label for="" class="form-label">Type</label>
          <select id="" class="form-select">
            <option name="txtType[]" value="InCabinChecks">InCabinChecks</option>
            <option name="txtType[]" value="DrivingInfoQuestions">DrivingInfoQuestions</option>
            <option name="txtType[]" value="ExternalChecks">ExternalChecks</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Key</label>
          <input type="text" class="form-control" id="" name="txtKey">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Value</label>
          <input type="text" class="form-control" id="" name="txtKey">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
@endsection
