@extends('layouts.frontend')

@section('meta-title','List')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1 class="display-5"><i class="fal fa-calendar-check"></i> Todo App!</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div class="bd-example">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Pick John from School" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deadline</label>
                        <input type="datetime-local" class="form-control" id="deadline" name="deadline" required>
                        <input type="hidden" name="timezone" id="timezone" value="">
                    </div>
                    <div class="mb-3 pull-right">
                        <button type="submit" class="btn btn-primary float-right">Save!</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="row">
                @forelse($todos as $todo)
                    <div class="col-md-4">
                        <div class="card text-black border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-default"><small><i class="fa-brands fa-accessible-icon"></i> {{ $todo->deadlineLocal }}</small></div>
                            <div class="card-body bg-warning">
                                {{--                        <h5 class="card-title">--</h5>--}}
                                <p class="card-text"><i class="fad fa-calendar-check"></i> {{ $todo->title }} </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-3">
                        <p>No Record Found!</p>
                    </div>
                @endforelse()
            </div>
        </div>

    </div>

    @endsection()

@push('custom-js')

@endpush
