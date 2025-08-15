<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3.js World Map Test - SingBD</title>
    
    <!-- D3.js and TopoJSON -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://unpkg.com/topojson-client@3"></script>
    
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
            background: #f8fafc;
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
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .singapore-marker {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="test-info">
        <h1>🌍 D3.js World Map Test</h1>
        <p>This page tests if D3.js is working properly with the same GeoJSON approach as your Next.js site.</p>
        <div id="status"></div>
    </div>
    
    <div id="map"></div>
    
    <script>
        // Test if D3 is loaded
        const statusDiv = document.getElementById('status');
        
        if (typeof d3 === 'undefined') {
            statusDiv.innerHTML = '<div class="status error">❌ D3.js failed to load</div>';
        } else {
            statusDiv.innerHTML = '<div class="status success">✅ D3.js loaded successfully</div>';
            
            try {
                // Set dimensions
                const width = document.getElementById('map').offsetWidth;
                const height = 500;
                
                // Create SVG
                const svg = d3.select('#map')
                    .append('svg')
                    .attr('width', width)
                    .attr('height', height);
                
                // Create projection (Mercator like Next.js)
                const projection = d3.geoMercator()
                    .scale(width / 6.5)
                    .translate([width / 2, height / 1.8])
                    .center([0, 20]);
                
                const path = d3.geoPath().projection(projection);
                
                // Load the same GeoJSON file as Next.js site
                d3.json('https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json')
                    .then(function(worldData) {
                        statusDiv.innerHTML += '<div class="status success">✅ GeoJSON loaded successfully</div>';
                        
                        // Convert TopoJSON to GeoJSON and filter out Antarctica
                        const countries = topojson.feature(worldData, worldData.objects.countries).features
                            .filter(country => country.properties.name !== 'Antarctica');
                        
                        // Draw countries with primary color fill
                        svg.selectAll('path')
                            .data(countries)
                            .enter().append('path')
                            .attr('d', path)
                            .attr('fill', '#409ABF')
                            .attr('stroke', '#ffffff')
                            .attr('stroke-width', 1)
                            .attr('class', 'country');
                        
                        // Add Singapore marker
                        const singapore = [103.8198, 1.3521]; // [lng, lat]
                        const singaporeProjected = projection(singapore);
                        
                        if (singaporeProjected) {
                            svg.append('circle')
                                .attr('cx', singaporeProjected[0])
                                .attr('cy', singaporeProjected[1])
                                .attr('r', 8)
                                .attr('fill', '#ef4444')
                                .attr('stroke', '#ffffff')
                                .attr('stroke-width', 3)
                                .attr('class', 'singapore-marker');
                            
                            statusDiv.innerHTML += '<div class="status success">✅ Singapore marker added</div>';
                        }
                        
                        // Add some test markers
                        const testLocations = [
                            { name: 'Tokyo', coordinates: [139.6917, 35.6895] },
                            { name: 'London', coordinates: [-0.1276, 51.5074] },
                            { name: 'New York', coordinates: [-74.006, 40.7128] }
                        ];
                        
                        testLocations.forEach(function(location) {
                            const projected = projection(location.coordinates);
                            if (projected) {
                                svg.append('circle')
                                    .attr('cx', projected[0])
                                    .attr('cy', projected[1])
                                    .attr('r', 6)
                                    .attr('fill', '#3b82f6')
                                    .attr('stroke', '#ffffff')
                                    .attr('stroke-width', 2);
                            }
                        });
                        
                        statusDiv.innerHTML += '<div class="status success">✅ Map initialized successfully</div>';
                        
                    })
                    .catch(function(error) {
                        statusDiv.innerHTML += '<div class="status error">❌ GeoJSON loading failed: ' + error.message + '</div>';
                    });
                
            } catch (error) {
                statusDiv.innerHTML += '<div class="status error">❌ Map initialization failed: ' + error.message + '</div>';
            }
        }
    </script>
</body>
</html>
