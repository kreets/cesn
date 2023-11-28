<!-- Popup -->
<div id="popup_alert" >
    <div id="popup" class="animate__animated animate__zoomInDown">

        <h1>{{mb_strtoupper(getPage('nyeremenyjatek')->title)}}</h1>
        <h5>{{mb_strtoupper(getPage('nyeremenyjatek')->subtitle)}}</h5>
        <div>
            {{getPage('nyeremenyjatek')->excerpt}}
        </div>
        <div id="buttonsContainer">
            <a href="{{route('page', 'nyeremenyjatek')}}" class="lgx-btn">RÉSZLETEK</a>
            <div class="lgx-btn lgx-btn-red" id="closePopupBtn" onclick="closePopup()">X</div>
        </div>
    </div>
</div>