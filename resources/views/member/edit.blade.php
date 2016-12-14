@extends('layouts.admin')

@section('styles')
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
  <script src="/assets/js/pages/form_elements.js"></script>
@endsection

@section('content')
      <form action = "member/{{$data->id}}" method="post">
          <input value="{{$data->firstName}}" type="text" />
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="put"/>
          <button type="submit"> submit </button>
      </form>
@endsection
