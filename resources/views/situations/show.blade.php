@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h2>{{ $situation->title }}</h2>
                	@role('admin')
                	<a href="{{ url( ($situation->roles ? 'situations/' : 'express/') . $situation->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Редактировать</button>
                    </a>
                     {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['situations', $situation->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger btn-xs']) !!}
                     {!! Form::close() !!}
                     @endrole
                </div>
                <div class="panel-body">
                    <p>{!! $situation->body !!}</p>
                    @if($situation->roles)
                    	<h3>Роли и интересы:</h3>
                    	{!! $situation->roles !!}
                    @endif
                    <a href="{{ $situation->link }}">{{ $situation->link }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection