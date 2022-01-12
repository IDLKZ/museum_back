<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Экспонат KAZMUSEUM</title>
    <style>
        html, body {
            margin: 0;
            height: 100%;
        }
        #scene {
            width: 100%;
            height: 100%;
            display: block;
        }
    </style>
</head>
<body>

<canvas id="scene"></canvas>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" integrity="sha512-dLxUelApnYxpLt6K2iomGngnHO83iUvZytA3YjDUCjT0HDOHKXnVYdf3hU4JjM8uEhxf9nD1/ey98U3t2vZ0qQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
<!-- GLTFLoader.js -->
<script src="https://cdn.jsdelivr.net/gh/mrdoob/three.js@r92/examples/js/loaders/GLTFLoader.js"></script>

<script type="module">



    import {OBJLoader} from 'https://cdn.skypack.dev/three@0.134.0/examples/jsm/loaders/OBJLoader.js';
    import {OrbitControls} from 'https://cdn.skypack.dev/three@0.134.0/examples/jsm/controls/OrbitControls.js';
    //import {MTLLoader} from 'https://cdn.skypack.dev/three@0.134.0/examples/jsm/loaders/MTLLoader.js';

    let Obj = @json($model['wavefront']);
    {{--let Mtl = @json($model->texture);--}}
    {{--let TextureImage = @json($model->texture_image);--}}

    const canvas = document.querySelector('#scene');
    var scene = new THREE.Scene();
    //scene.background = new THREE.Color( 0xFFffff );
    var camera = new THREE.PerspectiveCamera( 100, window.innerWidth/window.innerHeight, 0.1, 1000 );
    camera.position.z = 20;
    const loader = new THREE.TextureLoader();
    let bgTexture = loader.load("/images/img.png",
        function ( texture ) {
            var img = texture.image;
            var bgWidth= img.width;
            var bgHeight = img.height;

        } );
    scene.background = bgTexture;
    var renderer = new THREE.WebGLRenderer({canvas});
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    var controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.25;
    controls.enableZoom = true;

    var keyLight = new THREE.DirectionalLight(new THREE.Color('hsl(0,0%,99%)'), 1.0);
    keyLight.position.set(-100, 0, 100);

    var fillLight = new THREE.DirectionalLight(new THREE.Color('hsl(0,0%,100%)'), 0.75);
    fillLight.position.set(100, 0, 100);

    var backLight = new THREE.DirectionalLight(0xffffff, 1.0);
    backLight.position.set(100, 0, -100).normalize();

    scene.add(keyLight);
    scene.add(fillLight);
    scene.add(backLight);

    const gltfLoader = new THREE.GLTFLoader();
    gltfLoader.load( Obj, function ( gltf ) {

        scene.add( gltf.scene );

    } );

    // var mtlLoader = new MTLLoader();
    // mtlLoader.setResourcePath('/uploads/');
    // mtlLoader.setPath('/uploads/');
    // mtlLoader.load(Mtl, function (materials) {
    //
    //     materials.preload();
    //
    //     var objLoader = new OBJLoader();
    //     objLoader.setMaterials(materials);
    //     objLoader.setPath('/uploads/');
    //     objLoader.load(Obj, function (object) {
    //
    //         var texture = new THREE.TextureLoader().load("/uploads/" + TextureImage);
    //         object.traverse(function (child) {   // aka setTexture
    //             if (child instanceof THREE.Mesh) {
    //                 child.material.map = texture;
    //             }
    //         });
    //         object.position.y -= 0;
    //         scene.add(object);
    //
    //
    //     });
    //
    // });

    var animate = function () {
        requestAnimationFrame( animate );
        controls.update();
        renderer.render(scene, camera);
    };

    animate();
</script>





</body>
</html>
