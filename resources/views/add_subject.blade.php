@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Subjects</div>

                <div class="card-body">
                    @if(!empty($Subjects))
                        {{ Form::model($Subjects, array('route' => array('subjects.update', $Subjects->id),'method'=>'PATCH')) }}
                    @else
                        {{ Form::open(['route' => ['subjects.store'],'method'=>'POST']) }}
                    @endif
                    {{ csrf_field() }}

                    <div class="form-groups ">
                        <label>Subject code</label>
                        {{ Form::text('subject_code',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Subject name</label>
                        {{ Form::text('subject_name',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Subject description</label>
                        {{ Form::text('subject_desc',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Section id</label>
                        {{ Form::text('section_id',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Grade level</label>
                        {{ Form::text('grade_level',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Room</label>
                        {{ Form::text('room',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Day</label>
                        {{ Form::text('day',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>Start time</label>
                        {{ Form::text('start_time',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-groups ">
                        <label>End time</label>
                        {{ Form::text('end_time',null,['class'=>'form-controler']) }}
                    </div>

                    <div class="form-group">
                        <label>Prerequisite</label>
                        {{ Form::text('prereq',null,['class'=>'form-controller']) }}
                    </div>

                    <div class="form-group">
                        <label>Corequisite</label>
                        {{ Form::text('coreq',null,['class'=>'form-controller']) }}
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