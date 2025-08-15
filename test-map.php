<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet.js Map Test - SingBD</title>
    
    <!-- Leaflet.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        
        #map {
            height: 500px;
            width: 100%;
            border-radius: 12px;
            border: 2px solid #409ABF;
        }
        
        .test-info {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
        }
        
        .test-info h1 {
            color: #409ABF;
            margin-top: 0;
        }
        
        .status {
            padding: 10px;
            border-radius: 4px;
            margin: 10px 0;
        }
        
        .status.success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #10b981;
        }
        
        .status.error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }
    </style>
</head>
<body>
    <div class="test-info">
        <h1>🌍 Leaflet.js Map Test</h1>
        <p>This page tests if Leaflet.js is working properly in your PHP environment.</p>
        <div id="status"></div>
    </div>
    
    <div id="map"></div>
    
    <!-- Leaflet.js JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
    <script>
        // Test if Leaflet is loaded
        const statusDiv = document.getElementById('status');
        
        if (typeof L === 'undefined') {
            statusDiv.innerHTML = '<div class="status error">❌ Leaflet.js failed to load</div>';
        } else {
            statusDiv.innerHTML = '<div class="status success">✅ Leaflet.js loaded successfully</div>';
            
            try {
                // Initialize the map
                var map = L.map('map').setView([1.3521, 103.8198], 3);
                
                // Add OpenStreetMap tiles
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
                
                // Add Singapore marker
                L.marker([1.3521, 103.8198]).addTo(map)
                    .bindPopup('<strong>Singapore</strong><br>Our Global Hub')
                    .openPopup();
                
                // Add some test markers
                const testLocations = [
                    { name: 'Tokyo', lat: 35.6895, lng: 139.6917 },
                    { name: 'London', lat: 51.5074, lng: -0.1276 },
                    { name: 'New York', lat: 40.7128, lng: -74.006 }
                ];
                
                testLocations.forEach(function(location) {
                    L.marker([location.lat, location.lng]).addTo(map)
                        .bindPopup(location.name);
                });
                
                statusDiv.innerHTML += '<div class="status success">✅ Map initialized successfully</div>';
                
            } catch (error) {
                statusDiv.innerHTML += '<div class="status error">❌ Map initialization failed: ' + error.message + '</div>';
            }
        }
    </script>
</body>
</html>

