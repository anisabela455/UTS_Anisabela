@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Perkiraan</h1>
    <form action="{{ route('perkiraan.update', $perkiraan->PerkiraanID) }}" method="POST">
        @csrf @method('PUT')
        @include('perkiraan.form', ['perkiraan' => $perkiraan])
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
