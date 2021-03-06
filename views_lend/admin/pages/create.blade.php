
@extends('layouts.app')

    @extends('admin.header')
    @extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors    $page_*/  ?>
@section('panel')
    <div class="panel-heading container-fluid">
    
        <div class="form-group">
        <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Page</b></div>
        <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('pages.index', compact('page')) }}{{-- url('/admin'),'Back' --}}{{-- link_to_route('admin.index', compact('data')) --}}">
                <i class="fa fa-backward" aria-hidden="true"></i> back
            </a>
        <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="pull-right">
                    {{--Form::open(['class' => 'confirm-delete', 'route' => ['pages.destroy', $page->id], 'method' => 'DELETE'])}--}

                    {{-- link_to_route('pages.edit', 'edit', [$page->id], ['class' => 'btn btn-primary btn-xs']) --}} 

                    
                    {{--Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                    {{Form::close()--}}
                </div>
            </div>    
        </div>
    </div>
    <div class="panel-body">
        {!! Form::open(['route' => 'pages.store','file'=>true]) !!}
                               

                                
        @include('admin.pages._form')
        <input type="hidden" name="created_by" value="{{Auth::id()}}">

        <div class="form-group">
            {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    

@endsection
