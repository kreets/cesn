<!--SCHEDULE-->
<section>
    <div id="idorend" class="lgx-schedule lgx-schedule-white">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading">{{getPage("idorend")->title}}</h2>
                            <h3 class="subheading">{{getPage("idorend")->subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                        <div class="lgx-tab lgx-tab-vertical">
                            <ul class="nav nav-pills lgx-nav lgx-nav-nogap lgx-nav-colorful">
                                @foreach(getCurrentEvent()->eventDays as $day)
                                    <li @if($loop->first) class="active" @endif style="background: {{$day->color}} !important;"><a data-toggle="pill"  href="#day{{$day->id}}"><h3>{{$day->name}}</h3> <p>{{$day->getDate('Y M d')}}</p></a></li>
                                @endforeach
                            </ul>
                            <div class="tab-content lgx-tab-content">

                                @foreach(getCurrentEvent()->eventDays as $day)
                                    <div id="day{{$day->id}}" class="tab-pane fade in @if($loop->first) active @endif">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach($day->eventPrograms()->get() as $program)
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingProg{{$program->id}}">
                                                        <div class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProg{{$program->id}}" aria-expanded="true" aria-controls="collapseProg{{$program->id}}">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="{{uploaded($program->getImage())}}" alt="{{$program->performer}}"/>
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">{{$program->start_time}} - {{$program->end_time}}</h4>
                                                                        <h3 class="title">{{$program->title}}</h3>
                                                                        <h4 class="author-info">{{$program->performer}}</h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseProg{{$program->id}}" class="panel-collapse collapse @if($loop->first) in @endif" role="tabpanel" aria-labelledby="headingProg{{$program->id}}">
                                                        <div class="panel-body">
                                                            {!! $program->description !!}
                                                            <h4 class="location"><strong>Helyszín:</strong>  {{$program->location->composedAddress()}} - <span>{{$program->location->name}}</span> </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="section-btn-area schedule-btn-area">
                    <a class="lgx-btn lgx-btn-big" href="{{getCurrentEvent()->facebook_event_url}}"><span>Facebook esemény</span></a>

                </div>
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--SCHEDULE END-->