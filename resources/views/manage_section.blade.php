@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Sections</div>

                <div class="card-body">
                	<table class="table">
                		<thead>
                			<th>Section</th>
                			<th>Teacher</th>
                			<th>Number of Students</th>
                			<th>Action</th>
                		</thead>
                		<tbody>
                			@foreach($Sections as $section)
                			<tr>
                				<td>{{ $section->section }}</td>
                				<td>{{ $section->teacher }}</td>
                				<td>{{ $section->num_students }}</td>
                                <td><input type="button" value="Edit" class="btn-info text-white btn"/></td>
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