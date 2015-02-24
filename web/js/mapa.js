function initialize() {
	
				var latlng = new google.maps.LatLng(0.345622, -78.119275);
				var settings = {
					zoom: 16,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading">Høgenhaug</h1>'+
					'<div id="bodyContent">'+
					'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('images/map.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
					new google.maps.Size(130,50),
					new google.maps.Point(0,0),
					new google.maps.Point(65, 50));

				var companyPos = new google.maps.LatLng(0.345622, -78.119275);
				var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					url:'https://maps.google.com/mapfiles/kml/shapes/',
					shadow: companyShadow,
					title:"CENTRO NATURISTA EL SILO",
					zIndex: 3});
				
				
			}