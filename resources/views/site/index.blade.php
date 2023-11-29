@extends('cesn_page')
@section('content')
    @include('partials._banner')
    @include('partials._countdown')
    @include('partials._rolunk_short')
    @include('partials._nyeremenyjatek')
    @include('partials._program_list', ["limit" => 6])
    @include('partials._idorend')
    @include('partials._galeria')
    @include('partials._blog', ["limit" => 2])
    @include('partials._google_maps')

@endsection
@section('extrajs')
    <script type="text/javascript">
        window.onload = showPopup;
    </script>
@endsection