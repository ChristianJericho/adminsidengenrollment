@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADD Sections</div>

                <div class="card-body">
                    {{ Form::open(['route' => ['sections.store'],'method'=>'POST']) }}
                    {{ csrf_field() }}

                    <div class="form-groups ">
                        <label>Section name</label>
                        {{ Form::text('section',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-group">
                        <label>Teacher</label>
                        {{ Form::text('teacher',null,['class'=>'form-controller']) }}
                    </div>

                    <div class="form-group">
                        <label>Number of Students</label>
                        {{ Form::text('num_students',null,['class'=>'form-controller']) }}
                    </div>


                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
