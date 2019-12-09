@extends('layout.tovue')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <sidebar-component></sidebar-component>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <principal-component></principal-component>
    </div>
</div>
@endsection