@if(!is_null($page->meta_keywords))
@section('page_meta_keywords')
    {{ $page->meta_keywords }}
@endsection
@endif

@if(!is_null($page->meta_description))
@section('page_meta_description'){{ $page->meta_description }}@endsection
@endif

@if(!is_null($page->title))
@section('page_title')
    {{ $page->title }}
@endsection
@endif