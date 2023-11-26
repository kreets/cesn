<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer lgx-footer-black"> <!--lgx-footer-white-->
        <div class="lgx-inner-footer">
            <div class="lgx-subscriber-area"> <!--lgx-subscriber-area-indiv-->
                <div class="container">
                    <div class="lgx-subscriber-inner">  <!--lgx-subscriber-inner-indiv-->
                        <h3 class="subscriber-title">Hírlevél</h3>
                        <form class="lgx-subscribe-form" >
                            <div class="form-group form-group-email">
                                <input type="email" id="subscribe" placeholder="írja be e-mail címét..." class="form-control lgx-input-form form-control"  />
                            </div>
                            <div class="form-group form-group-submit">
                                <button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-btn lgx-submit"><span>feliratkozás</span></button>
                            </div>
                        </form> <!--//.SUBSCRIBE-->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="lgx-footer-area lgx-footer-area-center">
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">közösségioldalaink</h3>
                        <p class="text">
                            Kövess be a<br> legfrissebb hírekért!
                        </p>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Helyszín </h3>
                        <h4 class="date">
                            {{getCurrentEvent()->getEventDateRangeAttribute()}}
                        </h4>
                        <address>
                            {{getCurrentEvent()->location->composedAddress()}} <br>
                            {{getCurrentEvent()->location->name}}
                        </address>
                        <a id="myModalLabel2" data-toggle="modal" data-target="#lgx-modal-map" class="map-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Térkép</a>
                    </div>
                    <div class="lgx-footer-single">
                        <h2 class="footer-title">Instagram Feed</h2>
                        <div id="instafeed">
                        </div>
                    </div>
                </div>
                <!-- Modal-->
                <div id="lgx-modal-map" class="modal fade lgx-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- //.Modal-->

                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> <span>©</span> 2024 <a href="http://www.hegeshow.com/">Hegeshow.</a> minden jog fentartva. <a href="{{route('page', 'gdpr')}}">GDPR.</a> <a href="{{route('page', 'aszf')}}">ÁFSZ.</a> </p>
                    </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->