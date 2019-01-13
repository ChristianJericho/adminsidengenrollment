@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </br>
            </hr>    
                    <a href="{{ route('sections.create') }}">ADD Sections</a>
                </br>
            </hr>    
                    <a href="{{ route('subjects.create') }}">ADD Subjects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
