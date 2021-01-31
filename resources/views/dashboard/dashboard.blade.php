@extends('dashboard.index')
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Welcome to LCMS</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      LCMS is Laravel Content Management System, a CMS that developed based on laravel
    </div>
    <div class="card-footer">
      developed by esoftgreat
    </div>
  </div>
@endsection