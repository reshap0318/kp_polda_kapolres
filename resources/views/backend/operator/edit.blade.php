@extends('layouts.frontend')

@section('title')
	Edit operator {{optional(Sentinel::getuser()->polres)->nama}}
@stop


@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Edit operator {{optional(Sentinel::getuser()->polres)->nama}}</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
{{ Form::model($operator, array('method' => 'PATCH', 'url' => route('operator.update', $operator->id), 'class' => 'form-horizontal form-label-left', 'files' => true,'data-parsley-validate','id'=>'demo-form2')) }}

          @include('backend.operator._form')

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text-center">
              <a class="btn btn-primary" href="{{route('operator.index')}}">Cancel</a>
			  			<button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
{{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@stop
