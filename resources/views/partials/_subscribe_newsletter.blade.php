<div class="container">
    <div class="lgx-subscriber-inner">  <!--lgx-subscriber-inner-indiv-->
        <h3 class="subscriber-title">Hírlevél</h3>
        <form class="lgx-subscribe-form" method="post" action="{{route('subscribe')}}" data-racaptchasitekey="{{env('RECAPTCHA_SITE_KEY')}}">
            @csrf
            <input type="hidden" name="recaptcha" class="recaptcha">
            <div class="form-group form-group-email">
                <input type="email" id="subscribe" name="email" placeholder="írja be e-mail címét..." class="form-control lgx-input-form form-control"  />
            </div>
            <div class="form-group form-group-submit">
                <button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-btn lgx-submit"><span>feliratkozás</span></button>
            </div>
        </form> <!--//.SUBSCRIBE-->
    </div>
</div>