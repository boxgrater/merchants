@inject('merchants', 'BoxGrater\Merchants\Models\Merchant')

<div class="page-header">
  <h1>Add Rep</h1>
</div>

{!! Form::open(['route' => 'merchantreps.store', 'class'=>'form-horizontal']) !!}

<div class="form-group">
  {!! Form::label('first', 'First Name:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::text('first', old('first'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('last', 'Last Name:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::text('last', old('last'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('phone', 'Phone:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::tel('phone', old('phone'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('cell', 'Cell:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::tel('cell', old('cell'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::email('email', old('email'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('merchant_id', 'Merchant:', ['class'=>'control-label col-sm-2']) !!}
  <div class="col-sm-10">
    {!! Form::select('merchant_id', $merchants->list(), $merchant_id, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-10 col-sm-offset-2">
    {{ Form::submit('Submit', ['class'=>'btn btn-success pull=right']) }}
  </div>
</div>

{!! Form::close() !!}