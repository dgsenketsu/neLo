function initialize() {
   var mapOptions = {
           zoom: 10,
           center: new google.maps.LatLng(46.997980, 25.925604),  
           mapTypeId: google.maps.MapTypeId.ROADMAP
       };
 
   var map = new google.maps.Map(document.getElementById('map-canvas'),
                                   mapOptions);
                              
   var marker = new google.maps.Marker({
                   map: map,
                   draggable: false,
                   position: new google.maps.LatLng(46.997980, 25.925604)
       });
}
                        
google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize);