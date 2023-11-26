<!--countdown-->
<section>
    <div class="lgx-countdown">
        <div class="lgx-inner-countdown">
            <div class="countdown-left-info">
                <h2 class="title">Ne maradj le!</h2>
                <h3 class="subtitle"></h3>
                <p class="date">{{getCurrentEvent()->getEventDateRangeAttribute()}}</p>
            </div>
            <div class="countdown-right">
                <div class="lgx-countdown-area lgx-countdown-simple">
                    <!-- Date Format :"Y/m/d" || For Example: 1017/10/5  -->
                    <div id="lgx-countdown" data-date="{{getCurrentEvent()->getDate()->format('Y/m/d')}}"></div>
                </div>
            </div>
        </div><!-- //.INNER -->
    </div>
</section>
<!--countdown END-->