

@extends('layouts.app')


@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <form action="{{route('save')}}" method="POST" onclick="showmessage()">
                    @csrf
                    <label for="itemgroupname">Write group name</label>
                    <input type="text" class="form-control from-control-sm" name="itemgroupname">
                    <div class="row">
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Group number</th>
                    <th>Group name</th>
                    <th colspan="2">Instruction</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->itemgroupname}}</td>
                    <td><a href="{{route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="{{route('edit', ['x'=>$row->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>

<script>
    function showmessage(){
        Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Your work has been saved",
  showConfirmButton: false,
  timer: 1500
});
    }
    
</script>
@endsection

