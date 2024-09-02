@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('days.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                    placeholder="" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

        </form>
    </div>
@endsection
