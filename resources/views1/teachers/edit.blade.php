@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Edit Teacher</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $teacher->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Subject</label>
            <input type="text" name="subject" value="{{ $teacher->subject }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $teacher->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
