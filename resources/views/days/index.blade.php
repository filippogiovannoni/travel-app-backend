@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary text-center">
                <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($days as $day)
                        <tr>
                            <td>
                                {{ $day->id }}
                            </td>
                            <td>
                                {{ $day->location }}
                            </td>
                        </tr>
                    @empty
                        <tr class="">
                            <td> No days available!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
