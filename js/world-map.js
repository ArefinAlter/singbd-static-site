/**
 * Interactive World Map Component using D3.js and GeoJSON
 * Replicating the Next.js site's approach with white map and filtered Antarctica
 */

(function() {
    // Prevent multiple initializations
    if (window.worldMapInitialized) {
        console.log('WorldMap: Already initialized, skipping...');
        return;
    }

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        console.log('WorldMap: DOM loaded, checking for container...');
        
        const mapContainer = document.getElementById('hero-world-map');
        if (!mapContainer) {
            console.error('WorldMap: Container #hero-world-map not found');
            return;
        }
        
        console.log('WorldMap: Container found, checking D3 availability...');
        
        // Check if D3 is available
        if (typeof d3 === 'undefined') {
            console.error('WorldMap: D3.js library not available');
            showFallback(mapContainer);
            return;
        }
        
        console.log('WorldMap: D3 available, initializing map...');
        
        // Wait a bit for the page to fully render, then load the full map
        setTimeout(() => {
            try {
                initializeWorldMap(mapContainer);
            } catch (error) {
                console.error('WorldMap: Failed to initialize:', error);
                showFallback(mapContainer);
            }
        }, 500);
    });

    // Debug rectangle function removed - no longer needed

    function showFallback(container) {
        container.innerHTML = `
            <div style="
                text-align: center; 
                padding: 40px; 
                color: #666;
                background: #ffffff; /* Changed from #f8fafc to pure white */
                border-radius: 12px;
                border: 1px solid #e2e8f0;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            ">
                <h3 style="color: #409ABF; margin-bottom: 10px;">Interactive World Map</h3>
                <p>Our global network spans across 22 major cities worldwide.</p>
                <p style="font-size: 0.875rem; margin-top: 10px; opacity: 0.7;">
                    Map loading failed. Please refresh the page.
                </p>
            </div>
        `;
    }

    function initializeWorldMap(container) {
        console.log('WorldMap: Starting initialization...');
        
        // Clear container and create SVG
        container.innerHTML = '<svg id="world-map-svg" style="width: 100%; height: 100%; border-radius: 12px;"></svg>';
        
        const svg = d3.select('#world-map-svg');
        
        // Set dimensions - use fixed dimensions if container is not sized
        let width = container.offsetWidth;
        let height = container.offsetHeight;
        
                 // Fallback dimensions if container is not properly sized
         if (width === 0 || height === 0) {
             width = 1000;   // Reasonable width
             height = 600;   // Reasonable height
             console.log('WorldMap: Using fallback dimensions:', width, 'x', height);
         }
         
         // Ensure minimum dimensions with better aspect ratio
         width = Math.max(width, 1200);   // Increased minimum width for better map display
         height = Math.max(height, 600); // Increased minimum height
        
        console.log('WorldMap: Container dimensions:', width, 'x', height);
        
        // Use viewBox instead of fixed width/height for scalable SVG
        svg.attr('viewBox', `0 0 ${width} ${height}`)
           .attr('preserveAspectRatio', 'xMidYMid meet');
        
        // Singapore coordinates (center point)
        const SINGAPORE = [103.8198, 1.3521]; // [lng, lat] for D3
        
        // Network locations with coordinates
        const NETWORK_LOCATIONS = [
            // Asia Pacific
            { name: 'Tokyo', coordinates: [139.6917, 35.6895] },
            { name: 'Shanghai', coordinates: [121.4737, 31.2304] },
            { name: 'Hong Kong', coordinates: [114.1694, 22.3193] },
            { name: 'Seoul', coordinates: [126.978, 37.5665] },
            { name: 'Bangkok', coordinates: [100.5018, 13.7563] },
            { name: 'Jakarta', coordinates: [106.8456, -6.2088] },
            { name: 'Manila', coordinates: [120.9842, 14.5995] },
            { name: 'Kuala Lumpur', coordinates: [101.6869, 3.139] },
            { name: 'Ho Chi Minh City', coordinates: [106.6297, 10.8231] },
            { name: 'Mumbai', coordinates: [72.8777, 19.076] },
            { name: 'New Delhi', coordinates: [77.209, 28.6139] },
            
            // Europe
            { name: 'London', coordinates: [-0.1276, 51.5074] },
            { name: 'Paris', coordinates: [2.3522, 48.8566] },
            { name: 'Berlin', coordinates: [13.405, 52.52] },
            { name: 'Amsterdam', coordinates: [4.9041, 52.3676] },
            { name: 'Madrid', coordinates: [-3.7492, 40.4168] },
            { name: 'Rome', coordinates: [12.4964, 41.9028] },
            { name: 'Moscow', coordinates: [37.6173, 55.7558] },
            { name: 'Istanbul', coordinates: [28.9784, 41.0082] },
            
            // United States
            { name: 'New York', coordinates: [-74.006, 40.7128] },
            { name: 'Los Angeles', coordinates: [-118.2437, 34.0522] },
            { name: 'Chicago', coordinates: [-87.6298, 41.8781] },
        ];
        
        console.log('WorldMap: Creating D3 projection...');
        
                 // Create projection (Mercator like Next.js)
         const projection = d3.geoMercator()
             .scale(Math.min(width / 5, height / 3.5)) // Slightly bigger scale
             .translate([width / 3, height / 2]) // Move map more to the right
             .center([0, 0]); // Center at origin for complete world view
        
        const path = d3.geoPath().projection(projection);
        
        console.log('WorldMap: Loading GeoJSON data...');
        
        // Load the same GeoJSON file as Next.js site
        d3.json('https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json')
            .then(function(worldData) {
                console.log('WorldMap: GeoJSON loaded, processing data...');
                
                // Convert TopoJSON to GeoJSON and filter out Antarctica
                const countries = topojson.feature(worldData, worldData.objects.countries).features
                    .filter(country => country.properties.name !== 'Antarctica');
                
                console.log('WorldMap: Drawing countries...');
                
                // Draw countries with primary color fill
                svg.selectAll('path')
                    .data(countries)
                    .enter().append('path')
                    .attr('d', path)
                    .attr('fill', '#409ABF')
                    .attr('stroke', '#ffffff')
                    .attr('stroke-width', 1)
                    .attr('class', 'country');
                
                console.log('WorldMap: Adding Singapore marker...');
                
                // Singapore marker hidden as requested
                console.log('WorldMap: Singapore marker hidden by user request');
                
                console.log('WorldMap: Creating location markers...');
                
                // Create location markers (initially hidden)
                const locationMarkers = {};
                NETWORK_LOCATIONS.forEach(location => {
                    const projected = projection(location.coordinates);
                    if (projected && !isNaN(projected[0]) && !isNaN(projected[1])) {
                        const marker = svg.append('circle')
                            .attr('cx', projected[0])
                            .attr('cy', projected[1])
                            .attr('r', 10) // Bigger markers (was 6)
                            .attr('fill', '#A43C45')
                            .attr('stroke', '#ffffff')
                            .attr('stroke-width', 3) // Thicker stroke (was 2)
                            .attr('class', 'location-marker')
                            .style('cursor', 'pointer')
                            .style('opacity', 0); // Initially hidden
                        
                        // Add tooltip
                        marker.on('mouseover', function(event) {
                            d3.select(this).attr('r', 13); // Bigger on hover (was 8)
                            showTooltip(location.name, 'Global Network Location', event.pageX, event.pageY);
                        }).on('mouseout', function(event) {
                            d3.select(this).attr('r', 10); // Back to bigger size (was 6)
                            hideTooltip();
                        });
                        
                        locationMarkers[location.name] = marker;
                    } else {
                        console.warn('WorldMap: Could not project location:', location.name, projected);
                    }
                });
                
                console.log('WorldMap: Setting up animations...');
                
                // Animation variables
                let currentIndex = 0;
                let activeConnections = [];
                let animationInterval = null;
                
                // Function to create animated connection
                function createConnection(from, to) {
                    const fromProjected = projection(from);
                    const toProjected = projection(to);
                    
                    if (fromProjected && toProjected) {
                        const connection = svg.append('line')
                            .attr('x1', fromProjected[0])
                            .attr('y1', fromProjected[1])
                            .attr('x2', toProjected[0])
                            .attr('y2', toProjected[1])
                            .attr('stroke', '#A43C45')
                            .attr('stroke-width', 4) // Thicker lines (was 2)
                            .attr('stroke-dasharray', '8,6') // Bigger dashes (was 5,5)
                            .attr('class', 'connection-line')
                            .style('opacity', 0.8);
                        
                        // Animate the dashed line
                        let dashOffset = 0;
                        const animate = () => {
                            dashOffset -= 0.5; // 2x slower dash animation
                            connection.attr('stroke-dashoffset', dashOffset);
                            requestAnimationFrame(animate);
                        };
                        animate();
                        
                        return connection;
                    }
                    return null;
                }
                
                // Function to clear connections
                function clearConnections() {
                    activeConnections.forEach(connection => {
                        if (connection) connection.remove();
                    });
                    activeConnections = [];
                    
                    // Hide location markers
                    NETWORK_LOCATIONS.forEach(location => {
                        if (locationMarkers[location.name]) {
                            locationMarkers[location.name].style('opacity', 0);
                        }
                    });
                }
                
                // Function to update connections
                function updateConnections() {
                    clearConnections();
                    
                    // Add new connections (4-5 at a time)
                    const connectionsToShow = Math.min(4 + Math.floor(Math.random() * 2), 5);
                    
                    for (let i = 0; i < connectionsToShow; i++) {
                        const index = (currentIndex + i) % NETWORK_LOCATIONS.length;
                        const location = NETWORK_LOCATIONS[index];
                        
                        // Show marker
                        if (locationMarkers[location.name]) {
                            locationMarkers[location.name].style('opacity', 1);
                        }
                        
                        // Create connection
                        const connection = createConnection(SINGAPORE, location.coordinates);
                        if (connection) {
                            activeConnections.push(connection);
                        }
                    }
                    
                    // Move to next batch
                    currentIndex = (currentIndex + connectionsToShow) % NETWORK_LOCATIONS.length;
                }
                
                // Start animation after a delay
                setTimeout(() => {
                    console.log('WorldMap: Starting connection animation...');
                    updateConnections();
                    
                    // Continue animation every 4 seconds (2x slower)
                    animationInterval = setInterval(updateConnections, 4000);
                }, 2000); // 2x slower initial delay
                
                console.log('WorldMap: Initialization complete!');
                
                // Mark as initialized
                window.worldMapInitialized = true;
                
                // Store map reference globally for debugging
                window.worldMap = {
                    svg: svg,
                    projection: projection,
                    path: path,
                    clearConnections: clearConnections,
                    updateConnections: updateConnections
                };
                
            })
            .catch(function(error) {
                console.error('WorldMap: Failed to load GeoJSON:', error);
                showFallback(container);
            });
    }

    // Tooltip functions
    function showTooltip(title, description, x, y) {
        // Remove existing tooltip
        d3.select('.map-tooltip').remove();
        
        // Ensure we have valid coordinates
        if (typeof x !== 'number' || typeof y !== 'number') {
            console.warn('WorldMap: Invalid tooltip coordinates:', x, y);
            return;
        }
        
        // Create tooltip
        const tooltip = d3.select('body').append('div')
            .attr('class', 'map-tooltip')
            .style('position', 'absolute')
            .style('background', 'white')
            .style('border', '1px solid #e2e8f0')
            .style('border-radius', '8px')
            .style('padding', '8px 12px')
            .style('font-size', '14px')
            .style('font-family', 'Arial, sans-serif')
            .style('box-shadow', '0 4px 6px rgba(0, 0, 0, 0.1)')
            .style('pointer-events', 'none')
            .style('z-index', '1000');
        
        tooltip.append('div')
            .style('font-weight', 'bold')
            .style('color', '#409ABF')
            .text(title);
        
        tooltip.append('div')
            .style('color', '#666')
            .style('font-size', '12px')
            .text(description);
        
        // Position tooltip
        tooltip.style('left', (x + 10) + 'px')
            .style('top', (y - 10) + 'px');
    }

    function hideTooltip() {
        d3.select('.map-tooltip').remove();
    }

    // Add CSS animations
    const mapStyle = document.createElement('style');
    mapStyle.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .singapore-marker {
            animation: pulse 2s infinite;
        }
        
        .location-marker {
            transition: opacity 0.3s ease;
        }
        
        .connection-line {
            transition: opacity 0.3s ease;
        }
    `;
    document.head.appendChild(mapStyle);
})();
