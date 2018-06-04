@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task one</div>

                <div class="card-body" id="taskapp">
                    <task-one></task-one>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
