<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52921261-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-52921261-6');
</script>
<meta name="description" content="The best bus time app.">
<link rel="manifest" href="manifest.json">
<meta name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" href="https://i.imgur.com/9tVaenz.png">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="google-signin-client_id" content="35800995045-u54nb2hltd3kl9vuhrhjq3eca2k5110u.apps.googleusercontent.com">
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "b019c6f8-fd71-4f16-835b-0a755e2c29ea",
    });
  });
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9218984794093639",
    enable_page_level_ads: true
  });
</script>
<script>
function goBack() {
    window.history.back();
}
</script>
<style type="text/css">
.instagram-media{
  margin: 15px auto !important;
}
.red-bg {
    background-color: #7CFC00;
}
body {
font-family: "San Francisco", "Helvetica Neue", Helvetica
}
footer {
    bottom: 0;
}
.button109 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
input[type=submit]:hover {
    background-color: blue;
}
#topbar{
width: 100%;
}
      #map {
        height: 600px;
      }
    @media (prefers-color-scheme: dark) {
      body{
        background-color: #333;
        color: white !important;
      }
      button, input, optgroup, select, textarea {
        color: white !important;
      }
      .input-field label {
        color: white;
      }
      .modal .modal-content {
    background-color: #333;
}
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<link href="https://fonts.googleapis.com/css?family=Livvic|Nunito+Sans&display=swap" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#edeff5",
      "text": "#838391"
    },
    "button": {
      "background": "#4b81e8"
    }
  },
  "theme": "classic",
  "position": "bottom-left",
  "content": {
    "message": "See Tow Bus uses cookies to ensure you get the best experience on our website."
  }
})});
</script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>See Tow Bus</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://rawcdn.githack.com/Hi1307/ltabus/b896c394/flaticon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
<h4 class="center">Welcome<span id="welmsg"></span> to</h4>
<h3 class="center" style="font-family:Livvic">
See Tow Bus
</h3>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<span id="signout"></span>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">
                  <div class="grid-example col s12 m4"><a href="https://b2.seetow.me/file/blackblaze-cdn/base+(2).apk"><img style='height: auto; width: 100%; object-fit: contain' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a></div>
          </span>
          <p>Hey, See Tow here with some updates make See Tow Bus even better!</p>
          <p>We've fixed favourite bus stops so they no longer disappear when you log out of Google.</p>
          <p>We've increased the accuracy of the estimations by applying machine learning to existing data collected. These improvements should see buses arrive within 30 seconds of estimations twice as often.</p>
          <p>We've also made some small bug fixes to make the experience smoother. Thank you for your support, and stay safe out there!</p>
        </div>
      </div>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <div id="stopsearch">
<p class="center">Enter a bus stop ID to view the next buses</p>
        <div class="input-field col s6 offset-s3">
<form action="bus.php" method="POST">
          <input placeholder="Bus Stop ID (4 or 5 digits)" id="field1" name="field1" type="number">
<a class="waves-effect waves-light btn modal-trigger" href="#tableofresults" onClick="javascript: stopno=document.getElementById('field1').value;redir()">Search</a>
<!--    <a class="waves-effect waves-light btn" onClick="javascript: redirlegacy(document.getElementById('field1').value)">Search (Legacy)</a> !-->
</form>
</div>
                  <div class="input-field col s12">
<hr>
<h6>Bus stop map</h6>
<p>Click or tap on the red markers to get the results</p>
        <div id="map">
        </div>
                    	  <div id="topbar"></div>

    </div>
  </div>
 </div>
</div>
  </div>

  <footer class="page-footer black">
    <div class="footer-copyright">
      <div class="container">
      &copy; 2014-<?php echo date("Y"); ?> <a class="orange-text text-lighten-3" href="https://seetow.me">See Tow.</a> All Rights Reserved.  <? echo $_SERVER["HTTP_CF_CONNECTING_IP"]; ?>
      <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ja,ko,ms,ta,zh-CN', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="outdated"></div>
      </div>
    </div>
  </footer>



      <div id="legend" class="modal">
      <div class="modal-content">
<table class="striped responsive-table">
<br /><thead>
<th>Legend</th>
</thead>
<tr>
<td>Space</td><td><i class="material-icons">airline_seat_recline_normal</i>Seating available</td><td><i class="material-icons">directions_walk</i>Standing space</td><td><i class="material-icons">wc</i>Limited standing space</td></tr>
<tr><td>Type of bus</td><td><i class="material-icons">filter_1</i> Single decker</td><td><i class="material-icons">filter_2</i> Double decker</td><td>🅱️ Bendy/Articulated bus</td></tr>
</table></div>
      <div class="modal-footer">
        <a class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>

  <div id="tableofresults" class="modal">
      <div class="modal-content">
          <div id="resultstable">
          	<h2 class="center"><span id="hm"></span></h2><p class="center"><a class="btn waves-effect waves-light modal-close"><i class="material-icons">arrow_back</i></a><span id="locbutton"></span><a class="btn waves-effect waves-light modal-trigger" href="#legend">legend</a><a class="btn waves-effect waves-light" onClick="updatecookie();"><i class="material-icons">star</i></a></p>
<p class="center">Results were last fetched from the server at <span id="resultupdate"></span></p>
<table>
<thead>
<th style=min-width:90px>Bus Number</th>
<th style=min-width:90px>Time (1)</th>
<th style=min-width:90px>Time (2)</th>
<th style=min-width:90px>Time (3)</th>
</thead><tbody id="time">
<tr id="fetching"><td colspan="5"><p style="text-align:center">Calculating timings. Please wait.</p></td></tr>
</tbody></table>
</div>
</div>
      <div class="modal-footer">
        <a class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>

  <!--  Scripts-->
  <script src="https://rawcdn.githack.com/Hi1307/epic-website/fbc9b31fb17e548df6a03ca793361c6e2d1dc676/templates/busapp.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://rawcdn.githack.com/Hi1307/seetowcdn/ad6b7d0339753cae120127275e677231194a86c9/geojson2.js"></script>
  <script src="https://rawcdn.githack.com/Hi1307/epic-website/fbc9b31fb17e548df6a03ca793361c6e2d1dc676/templates/busapp.js"></script>
  <script src="https://rawcdn.githack.com/Hi1307/epic-website/145e340a90c74b45467bb1a4706621f63afd3e30/templates/busapp2.js"></script>

<script>
      var panorama;
      function initialize() {
        panorama = new google.maps.StreetViewPanorama(document.getElementById('street-view'),
          {
            position: {lat: bus_dict2[parseInt(stopno)][0], lng: bus_dict2[parseInt(stopno)][1]},
            pov: {heading: 0, pitch: 0},
            zoom: 1
          });
      }
</script>
    <script>

      $(document).ready(function(){
        $('.modal').modal();
      });
      var map, infoWindow;

        map = new L.Map('map', {
          center: {lat: 1.290270, lng: 103.851959},
          zoom: 17,
          minZoom: 14,
          layers: new L.TileLayer("https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",{
  bounds: [[1.506417, 103.552020], [1.199572, 104.058765]],
  attribution: '&copy; 2021 Singapore Land Authority, OneEMap (CARTO), Land Transport Authority'
}),




        });
        map.locate({setView: true, minZoom: 15});

  function onEachFeature(feature, layer) {
    var popupContent = '<a href="#tableofresults" class="modal-trigger" onClick="javascript: stopno='+feature.properties.busstopcode+';redir()">' +
        feature.properties.description + ' ('+feature.properties.busstopcode+')</a>';

    layer.bindPopup(popupContent);
  }

  L.geoJSON(seetowbusgeojson, {

    style: function (feature) {
      return feature.properties && feature.properties.style;
    },

    onEachFeature: onEachFeature,

    pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 6,
        fillColor: "#ff7800",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      });
    }
  }).addTo(map);

      function getCookie(name)
  {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }
fav1 = getCookie("fav");
fav = fav1.split(",")
for(i=1; i<fav.length; i++){
  stopno = fav[i]
  stopname = bus_dict[parseInt(stopno)]
  jQuery("#topbar").prepend('<a class="waves-effect waves-light btn modal-trigger brown" href="#tableofresults" onclick="javascript:stopno='+stopno+';redir()">'+stopname+'</a>')
}
jQuery("#topbar").prepend('<h6>Your favourite bus stops:</h6>')


      function redirlegacy(code){
    window.location.href = "https://bus.seetow.me/results?stop="+code;
      }
function redir(){
    populatetable();
}


    function updatecookie() {
  var now = new Date();
  var time = now.getTime();
  var expireTime = time + 5000000*36000;
    now.setTime(expireTime);
      document.cookie = "fav="+fav1+","+stopno+";expires="+now.toUTCString()+";path=/";
      alert("The bus stop "+bus_dict[parseInt(stopno)]+" has been added!")
    }



function populatetable(){

    function minTommss(minutes){
        var sign = minutes < 0 ? "-" : "";
        var min = Math.floor(Math.abs(minutes));
        var sec = Math.floor((Math.abs(minutes) * 60) % 60);
        return sign + (min < 10 ? "0" : "") + min + ":" + (sec < 10 ? "0" : "") + sec;
    };
    updateresults();

    $("#locbutton").html('<a class="btn waves-effect waves-light modal-trigger" href="https://www.google.com/maps/@?api=1&map_action=pano&viewpoint='+bus_dict2[parseInt(stopno)][0]+','+bus_dict2[parseInt(stopno)][1]+'" target="_blank">location</a>');


    url = "https://stbus.azurewebsites.net/datahandler/arrival.php?id="+stopno;
    $("#hm").text(bus_dict[parseInt(stopno)]+' ('+stopno+')');
    $.getJSON(url, function (json) {
        services = json["Services"];

        let timenow = Date.now();

    });


      setInterval(function () {
          $("#fetching").remove();
          $("#time").empty();
          let timenow = Date.now();

          if (services.length == 0) {
              $("#time").append('<tr><td colspan="5"><p style="text-align:center">Looks like we didn\'t get any buses. This could be because of 1 of several reasons:</p> <ul><li><p>The central server is down. <a href="https://www.lta.gov.sg/content/ltagov/en/contact_us.html" target="_blank">Report issues here</a>.</p></li><p>It\'s late at night. Most buses don\'t run after 12am.</p><p>You have no internet connection.</p></ul><p>The bus stop ID is invalid. It is usually 4-5 digits.</p></ul>  </td></tr>');
          } else {
              for (i = 0; i < services.length; i++) {
                  let busno = services[i]["ServiceNo"];
                  let arrtimemsfake = services[i]["NextBus"]["EstimatedArrival"];
                  let arrtimefake = +new Date(arrtimemsfake);
                  let arrtimems = arrtimefake - timenow;
                  let arrtimemin = arrtimems / 60000;
                  let arrtime = minTommss(arrtimemin);
                  let arrtime2msfake = services[i]["NextBus2"]["EstimatedArrival"];
                  let arrtime2fake = +new Date(arrtime2msfake);
                  let arrtime2ms = arrtime2fake - timenow;
                  let arrtime2min = arrtime2ms / 60000;
                  let arrtime2 = minTommss(arrtime2min)
                  let arrtime3msfake = services[i]["NextBus3"]["EstimatedArrival"];
                  let arrtime3fake = +new Date(arrtime3msfake);
                  let arrtime3ms = arrtime3fake - timenow;
                  let arrtime3min = arrtime3ms / 60000;
                  let arrtime3 = minTommss(arrtime3min)
                  if (arrtime.charAt(0) == "-") {
                      arrtime = "Very soon!";
                  } else {
                      arrtime = arrtime + "&nbsp;mins";
                  }
                  if (services[i]["NextBus"]["Feature"] == "WAB" || services[i]["NextBus"]["Load"] == "") {
                      wab = ''
                  } else {
                      wab = '<i style="color:red" class="material-icons">accessible</i>'
                  }
                  if (services[i]["NextBus"]["Load"] == "SDA") {
                      load = '<i class="material-icons">directions_walk</i>';
                  } else if (services[i]["NextBus"]["Load"] == "SEA") {
                      load = '<i class="material-icons">airline_seat_recline_normal</i>';
                  } else if (services[i]["NextBus"]["Load"] == "LSD") {
                      load = '<i class="material-icons">wc</i>';
                  }
                  if (services[i]["NextBus"]["Type"] == "SD") {
                      deck = '<i class="material-icons">filter_1</i> ';
                  } else if (services[i]["NextBus"]["Type"] == "DD") {
                      deck = '<i class="material-icons">filter_2</i> ';
                  } else {
                      deck = '&#127345;&#65039;';
                  }
                  if (arrtime2 == "NaN:NaN") {
                      arrtime2 = "";
                  } else if (arrtime.charAt(0) == "-") {
                      arrtime2 = "Very&nbsp;soon!";
                  } else {
                      arrtime2 = arrtime2 + "&nbsp;mins";
                  }
                  if (services[i]["NextBus2"]["Feature"] == "WAB" || services[i]["NextBus2"]["Load"] == "") {
                      wab2 = ''
                  } else {
                      wab2 = '<i style="color:red" class="material-icons">accessible</i>'
                  }
                  if (services[i]["NextBus2"]["Load"] == "SDA") {
                      load2 = '<i class="material-icons">directions_walk</i>';
                  } else if (services[i]["NextBus2"]["Load"] == "SEA") {
                      load2 = '<i class="material-icons">airline_seat_recline_normal</i>';
                  } else if (services[i]["NextBus2"]["Load"] == "LSD") {
                      load2 = '<i class="material-icons">wc</i>';
                  } else {
                      load2 = ""
                  }
                  if (services[i]["NextBus2"]["Type"] == "SD") {
                      deck2 = '<i class="material-icons">filter_1</i> ';
                  } else if (services[i]["NextBus2"]["Type"] == "DD") {
                      deck2 = '<i class="material-icons">filter_2</i> ';
                  } else if (services[i]["NextBus2"]["Type"] == "BD") {
                      deck2 = '&#127345;&#65039;';
                  } else {
                      deck2 = ""
                  }
                  if (arrtime3 == "NaN:NaN") {
                      arrtime3 = "";
                  } else if (arrtime.charAt(0) == "-") {
                      arrtime3 = "Very&nbsp;soon!";
                  } else {
                      arrtime3 = arrtime3 + "&nbsp;mins";
                  }
                  if (services[i]["NextBus3"]["Feature"] == "WAB" || services[i]["NextBus3"]["Load"] == "") {
                      wab3 = ''
                  } else {
                      wab3 = '<i style="color:red" class="material-icons">accessible</i>'
                  }
                  if (services[i]["NextBus3"]["Load"] == "SDA") {
                      load3 = '<i class="material-icons">directions_walk</i>';
                  } else if (services[i]["NextBus3"]["Load"] == "SEA") {
                      load3 = '<i class="material-icons">airline_seat_recline_normal</i>';
                  } else if (services[i]["NextBus3"]["Load"] == "LSD") {
                      load3 = '<i class="material-icons">wc</i>';
                  } else {
                      load3 = ""
                  }
                  if (services[i]["NextBus3"]["Type"] == "SD") {
                      deck3 = '<i class="material-icons">filter_1</i> ';
                  } else if (services[i]["NextBus3"]["Type"] == "DD") {
                      deck3 = '<i class="material-icons">filter_2</i> ';
                  } else if (services[i]["NextBus3"]["Type"] == "BD") {
                      deck3 = '&#127345;&#65039;';
                  } else {
                      deck3 = ""
                  }
                  $("#time").append('<tr><td id="bus' + i + '"><a href="https://busrouter.sg/#/services/'+busno+'" target="_blank">' + busno + '</a></td><td>' + wab + load + deck + '<a target="_blank" href="https://www.google.com.sg/maps/search/' + services[i]["NextBus"]["Latitude"] + ',' + services[i]["NextBus"]["Longitude"] + '">' + arrtime + '</a></td><td>' + wab2 + load2 + deck2 + '<a target="_blank" href="https://www.google.com.sg/maps/search/' + services[i]["NextBus2"]["Latitude"] + ',' + services[i]["NextBus2"]["Longitude"] + '">' + arrtime2 + '</a></td><td>' + wab3 + load3 + deck3 + '<a target="_blank" href="https://www.google.com.sg/maps/search/' + services[i]["NextBus3"]["Latitude"] + ',' + services[i]["NextBus3"]["Longitude"] + '">' + arrtime3 + '</a></td></tr>');

              }
          }

          if (stopno == "66271" && services.length !== 0) {
              jQuery("#bus0").append("<br>To Ang Mo Kio");
              jQuery("#bus1").append("<br>To Punggol");
          } else if (stopno == "46088" && services.length !== 0) {
              jQuery("#bus0").append("<br>To Kranji");
              jQuery("#bus1").append("<br>To Malaysia");
          } else if (stopno == "46069" && services.length !== 0) {
              jQuery("#bus0").append("<br>To Kranji");
              jQuery("#bus1").append("<br>To Malaysia");
          }
      }, 1000);
}
function onSignIn() {
  const googleUser = gapi.auth2.getAuthInstance().currentUser.get();
  const profile = googleUser.getBasicProfile();
  username = googleUser.getBasicProfile().getName();
  goid =  profile.getId();
  gmail = profile.getEmail();
console.log('Signed in as: ' + username);
jQuery("#welmsg").prepend(', '+username);
jQuery("#welmsg").append(' <img src="'+profile.getImageUrl()+'" width="25px">');
jQuery("#signout").prepend('<a onclick="signOut()"><p class="center">Click here to sign out :(</p></a>');
jQuery( ".g-signin2" ).remove();
/*
    jQuery.ajax({
        url:'https://stbus.azurewebsites.net/datahandler/fav.php',
        type:'post',
        data:'id='+goid+'&email='+gmail,
        success:function(){
console.log('Saved.')
        }
    });
*/
navigator.geolocation.getCurrentPosition(function(position) {
    jQuery.ajax({
        url:'https://stbus.azurewebsites.net/datahandler/index.php',
        type:'post',
        data:'name='+username+'&email='+gmail+'&location='+position.coords.latitude+','+position.coords.longitude,
        success:function(){
console.log('Saved.')
        }
    });
});
}
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      alert('Thank you for using See Tow Bus.');
    });
location.reload();
  }
    </script>
<script>
setInterval(function(){
      $.getJSON(url, function (json) {
        services = json["Services"];
        updateresults();
        });
          }, 30000)

function updateresults() {
todayresult = new Date();
timeresult = todayresult.toLocaleTimeString();
$("#resultupdate").text(timeresult)
}
    </script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>
  M.AutoInit();
</script>
<script>
// This is the service worker with the combined offline experience (Offline page + Offline copy of pages)

// Add this below content to your HTML page, or add the js file to your page at the very top to register service worker

// Check compatibility for the browser we're running this in
if ("serviceWorker" in navigator) {
  if (navigator.serviceWorker.controller) {
    console.log("[PWA Builder] active service worker found, no need to register");
  } else {
    // Register the service worker
    navigator.serviceWorker
      .register("pwabuilder-sw.js", {
        scope: "./"
      })
      .then(function (reg) {
        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
      });
  }
}
</script>
  </body>
</html>
