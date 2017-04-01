    @extends('layout.header_footer')
    @section('content')
      <hr />
      <div class="container-fluid">
        <div class="row">
            <div id="photo1" class="col-xs-5 col-xs-offset-1"></div>
            <div id="text1" class="col-xs-4 col-xs-offset-1">
                <h2>OZYORNOE</h2>
                <p class="text">Ozyornoe - это необычное место в большом городе, в котором современная архитектура соединяется с природной красотой озера.
                 Это идеальное место, чтобы оторваться от шума каждодневности и отдохнуть в SPA.
                  С тирасы можно восхищаться панорамой Октябрського парка и озера, а богатый выбор ассортимента наверняка сделает Ваше пребывание приятным.</p>
                <a href="#"><div class="bg dark"><p>Узнать больше ›</p></div></a>
            </div>
        </div>
      </div>
        <hr />
     <div class="container-fluid">
        <div id="plus" class="row dark">
           <div class="col-xs-12"><h3>Наши преимущества:</h3></div>

           <div class="col-xs-11 col-sm-3 col-md-offset-3 rotate-container" style="padding: 20px 0 30px 0;">
                <div id="photo2" class="rotate">
                   <p style="font-size: 18px; margin-top: 20px; transform: rotateY(180deg);">Комплекс Ozyornoe расположен на полуострове в окружении парка Октябрський. С тирасы открывается живописный вид на озеро!</p>
                    <div class="line-opacity"><h4>Размещение</h4></div>

                </div>
           </div>
           <div class="col-xs-11 col-sm-3 col-md-offset-1 rotate-container" style="padding: 20px 0 30px 0;">
                <div id="photo3" class="rotate">
                    <p style="font-size: 18px; margin-top: 20px; transform: rotateY(180deg);">Развитая зона в стиле Wellness, а также широкий выбор процедур и массажа гарантируют приятный отдых нашим Гостям!</p>
                    <div class="line-opacity"><h4>Spa & Wellness</h4></div>
                </div>
           </div>
           <div class="col-xs-11 col-sm-3 col-md-offset-3 rotate-container" style="padding: 20px 0 30px 0;">
                <div id="photo4" class="rotate">
                    <p style="font-size: 17px; margin-top: 20px; transform: rotateY(180deg);">Гостеприимство и незабываемая атмосфера создана профессионалами, приведет к тому, что Вы захотите приходить к нам постоянно.</p>
                    <div class="line-opacity"><h4>Атмосфера</h4></div>
                </div>
           </div>
           <div class="col-xs-11 col-sm-3  col-md-offset-1 rotate-container" style="padding: 20px 0 30px 0;">
                <div id="photo5" class="rotate">
                    <p style="font-size: 17px; margin-top: 20px; transform: rotateY(180deg);">В каждое блюдо вкладываеться частичка души, что бы Вы могли ощутить непередаваемый вкус и надолго запомнили свое кулинарное путешествие!</p>
                    <div class="line-opacity"><h4>Кухня</h4></div>
                </div>
           </div>
        </div>
      </div>
      </div>

    <div class="container-fluid">
        <div class="row">
         <hr />
            <div class="col-xs-10 col-xs-offset-2" id="distance">
                <h4>РАССТОЯНИЯ: Сторожинец - 31 min / 23 km, Глыбокая - 37 min / 29.6 km, Новоселица - 42 min / 38.8 km</h4>

            </div>
         <hr />

<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>

<script>
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(48.262627,25.933373),
            zoom: 17,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [

        ];
        for (i = 0; i < locations.length; i++) {
      if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
      if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
      if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }
}
</script>
<style>
    #map {
        height:700px;
        width:1345px;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>
            <div class="col-xs-12" id="map"></div>
         <hr />
      @endsection
