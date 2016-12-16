@extends('layouts.admin')

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')

  <p>{{ $data->firstName }}</p>
  <p>{{ $data->lastName }}</p>
  <hr>

  <div class="right">
    <a href="{{ route('member.index') }}" class="btn btn-info">Back to all tasks</a>
    <a href="{{ route('member.edit', $data->id) }}" class="btn btn-primary">Edit Task</a>
    <a href="{{ route('member.destroy', $data->id) }}" class="btn btn-danger">Delete this task</a>
  </div>

@endsection
