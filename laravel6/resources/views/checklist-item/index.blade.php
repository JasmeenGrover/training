@extends('checklist-item.layout')

@section('content')

    <a type="button" class="btn btn-primary" href="{{route("checklist-item.create")}}">Create Checklist Item</a>

    <table class="table table-light table-bordered rounded rounded-circle text-center mt-5 mb-5 w-60 rounded-3 rounded-pill border border-2 border-primary shadow ss">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Key</th>
      <th scope="col">Value</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($checklistItems as $key => $item)
    <tr>
      <th scope="row">{{$item["id"]}}</th>
      <td>{{$item["type"]}}</td>
      <td>{{$item["key"]}}</td>
      <td>{{$item["value"]}}</td>
      <td>

          <a type="button" class="btn btn-primary" href="{{route("checklist-item.edit",$item)}}">Edit</a>

          <form class="" action="{{ route("checklist-item.destroy",$item) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" href="">Delete</button></td>
        </form>
    </tr>
    @endforeach
    {{ $checklistItems->links() }}
  </tbody>
</table>

@endsection
