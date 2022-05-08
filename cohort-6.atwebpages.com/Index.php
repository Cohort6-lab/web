<!Doctype html>
 <html lang="en">
  <!--This webpage is licensed under Cohort-6 copyright and created with fellow alx Cohort_6 Members read the Doc.html for more -->
  <head>
  <meta charset='UTF-8'/>
  <link rel='stylesheet' href=' http://cohort-6.atwebpages.com/style.css'>
  <script src="https://threejs.org/build/three.js"></script>
  
  <title>Cohort_6-lab</title>
 
 </head>
  
  <html>
  <body>
  <div class="Headings">
  <h1>Welcome to ALX-Cohort6_Lab  </h1>
  </div>
  
  <div>
  <p >
  Welcome to AlX-Cohort6_Lab. 
This is a onestop solution to ALX-Cohort6 Aspiring <em> SOFTWARE ENGINEERS<em> Challanges
        welcome Home.
  </p>
  </div>

  
 <div>
 
  
  <script>
  const scene = new THREE.Scene();
			const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

			const renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );

			const geometry = new THREE.BoxGeometry();
			const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			const cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			camera.position.z = 5;

			function animate() {
				requestAnimationFrame( animate );

				cube.rotation.x += 0.01;
				cube.rotation.y += 0.01;

				renderer.render( scene, camera );
			};
                        
                        animate();
                        
                        </script>
 
 </div>  
 
 
 
 
 <footer> 
         ALX-Cohort6_Lab 2022
         All rights reserved
  
  </footer>
  
  
  
  </body>
  </html>
  
  
