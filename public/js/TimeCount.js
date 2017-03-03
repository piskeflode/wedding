function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = '2017-06-03';
initializeClock('clockdiv', deadline);

function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(55.590297, 26.445595),
    zoom:6,
  };

  var map=new google.maps.Map(document.getElementById("map"),mapProp);
  var myLatLng = {lat: 55.590297, lng: 26.445595};

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map
  //  title: 'Hello World!'
  });

  var marker = new google.maps.Marker({
    position: {lat:54.689375, lng: 25.269406},
    map: map
    //  title: 'Hello World!'
  });

  var marker = new google.maps.Marker({
    position: {lat:55.296791, lng: 25.492139},
    map: map
    //  title: 'Hello World!'
  });

  var marker = new google.maps.Marker({
    position: {lat:54.896470, lng: 23.904492},
    map: map
    //  title: 'Hello World!'
  });


}

myMap();


