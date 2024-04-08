@extends('layouts.main')

@push('styles')

@endpush

@section('content')
<section class="section">
    <h1>{{ $room->name }}</h1>
</section>
@endsection

@push('scripts')

@endpush
