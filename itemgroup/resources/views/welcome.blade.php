@extends('layouts.app')

@section('content')

<?php
$c=0;
?>
<div class="container">
  <h1 class="alert alert-success text-center">Car Mech</h1>
    @while($c<$count-1)
    <div class="row text-center d-flex align-items-center justify-content-center">
      <div class="col-sm-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
      <div class="card">
          <div class="card-body">
              <h4>{{$data[$c]->itemgroupname}}</h4>
              <h3><i class="bi bi-diagram-2" style="font-size: larger;"></i></h3>
          </div>
      </div>
    </div>
  </div>
</a>
  <?php $c++?>
  <div class="row text-center d-flex align-items-center justify-content-center">
    <div class="col-sm-4 text-center">
      <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
        <div class="card">
        <div class="card-body">
            <h4>{{$data[$c]->itemgroupname}}</h4>
            <h3><i class="bi bi-diagram-2" style="font-size: larger;"></i></h3>
        </div>
    </div>
  </div>
</div>
</a>

  @endwhile
   

</div>
@endsection