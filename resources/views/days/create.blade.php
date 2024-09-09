@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('days.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="days_number" class="form-label">Days number</label>
                <input type="text" class="form-control" name="days_number" id="days_number" aria-describedby="helpId"
                    placeholder="" />
                <small id="helpId" class="form-text text-muted">Insert the days number</small>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" id="location" aria-describedby="locationHelpId"
                    placeholder="" />
                <small id="helpId" class="form-text text-muted">Type the location</small>
            </div>
            <button type="submit">Confirm</button>
        </form>
    </div>
@endsection
