<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="{{asset('spinner/src/jquery.1.11.3.min.js')}}"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="{{asset('spinner/jquery-ui.min.js')}}"></script>
	<script src="{{asset('spinner/src/swal2.min.js')}}"></script>
	<style type="text/css">
		div:where(.swal2-container) h2:where(.swal2-title){
			color: #000 !important;
			font-size: 82px;
			padding: 0 !important;
		}
		swal2-popup swal2-modal swal2-show{
			padding: 1.5em 3em !important;
		}
	</style>
	<title>Cerdas Cermat</title>
</head>
<body>
    <h2>Sesi 1</h2>
	<center>
	<canvas id="canvas" width="800px" height="800px" style="z-index: 999"></canvas>
	</center>
	
	<script type="text/javascript" src="{{asset('spinner/src/rouletteWheel.js')}}"></script>
	<script type="text/javascript">
		$(function(){

			// var items = ["NKRI", "Sejarah", "Ekonomi", "Pendidikan", "Pemerintahan","Pengetahuan Umum"];
			var items = [
					{ name: 'NKRI', color: '#F7F6BB' },
			        { name: 'Sejarah', color: '#C5EBAA' },
			        { name: 'Ekonomi', color: '#ababab' },
			        { name: 'Pendidikan', color: '#9AD0C2' },
			        { name: 'Pemerintahan', color: '#ECB159' },
			        { name: 'Pengetahuan Umum', color: '#FFEECC' },
		        ];

		  $('#canvas').rouletteWheel({
		    items : items,
		    selected : function(key, value){
		      	Swal.fire({
				  title: value.name,
				  width: 600,
				  padding: "3em",
				  color: "#0000",
				  background: "#fff url(/images/trees.png)",
				  backdrop: `
				    rgba(0,0,123,0.4)
				    url("/images/nyan-cat.gif")
				    left top
				    no-repeat
				  `
				}).then((result) => {
                // Check if the user clicked "OK"
                if (result.isConfirmed) {
                    // Use Laravel's route function to generate the URL
                    window.location.href = '{{ url("/pilih-pertanyaan") }}';
                }
            });
		    },
		    spinText : '',
		  });

		});
	</script>
</body>
</html>