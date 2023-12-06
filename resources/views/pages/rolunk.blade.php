@extends('cesn_page')

@section('content')
    @include('partials._banner_inner')
    <main>
        <div class="lgx-page-wrapper lgx-page-wrapper-none">
            <section>
                <div id="lgx-about" class="lgx-about">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="lgx-about-img">
                                        <img src="{{uploaded(getPage('rolunk')->image)}}" alt="about">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="lgx-about-content-area">
                                        <div class="lgx-heading">
                                            <h2 class="heading">{{getPage('rolunk')->title}}</h2>
                                            <h3 class="subheading">{{getPage('rolunk')->subtitle}}</h3>
                                        </div>
                                        <div class="lgx-about-content">
                                            {!! getPage('rolunk')->body !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
         </div>
    </main>
    @include('partials._program_list', ["limit" => 6])
@endsection
@include('pages._meta_tags')