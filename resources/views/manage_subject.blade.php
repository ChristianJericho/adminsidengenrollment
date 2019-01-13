@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Manage Subjects</div>

                <div class="card-body">
                	<table class="table">
                		<thead>
                			<th>Subject code</th>
                			<th>Subject name</th>
                			<th>Subject description</th>
                			<th>Section id</th>
                			<th>Grade level</th>
                			<th>Room</th>
                			<th>Day</th>
                			<th>Start time</th>
                			<th>End time</th>
                			<th>Prerequisite</th>
                			<th>Corequisite</th>
                			<th>Action</th>
                		</thead>
                		<tbody>
                			@foreach($Subjects as $subject)
                			<tr>
                				<td>{{ $subject->subject_code }}</td>
                				<td>{{ $subject->subject_name }}</td>
                				<td>{{ $subject->subject_desc }}</td>
                				<td>{{ $subject->section_id }}</td>
                				<td>{{ $subject->grade_level }}</td>
                				<td>{{ $subject->room }}</td>
                				<td>{{ $subject->day }}</td>
                				<td>{{ $subject->start_time }}</td>
                				<td>{{ $subject->end_time }}</td>
                				<td>{{ $subject->prereq }}</td>
                				<td>{{ $subject->coreq }}</td>
                				<td>
                					<a href="{{ route('subjects.edit',$subject->id) }}">
                					<button class="btn btn-success">Edit</button>
                					</a>
                				</td>
                				<td>
                					<form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">
                						@csrf
                						<input name="_method" type="hidden" value="DELETE">
                						<button type="submit" class="btn btn-danger">Delete</button>
                					</form>
                					
                				</td>
                  			</tr>
                			@endforeach
                		</tbody>
                	</table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection