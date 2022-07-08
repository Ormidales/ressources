<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ressources/css/index.css">

		<!-- GSAP -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Draggable.min.js"></script>

		<style type="text/css">
			.loader{
			  position: fixed;
			  height: 100vh;
			  width: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  background: #252525;
			  transition: all 0.5s;
			}
			.loader .ring{
			  height: 45px;
			  width: 45px;
			  border: 5px solid #ddd;
			  border-radius: 50%;
			  position: relative;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			}
			.loader .ring:after{
			  position: absolute;
			  content: "";
			  height: 100%;
			  width: 100%;
			  border-radius: 50%;
			  border: 5px solid #ff3d00;
			  border-top-color: transparent;
			  animation: rotate 1.5s linear infinite;
			}
			@keyframes rotate {
			  100%{
			    transform: rotate(360deg);
			  }
			}

			::-webkit-scrollbar {
			  width: 5px;
			}
			::-webkit-scrollbar-track {
			  background: rgba(255, 255, 255, 0.15);
			}
			::-webkit-scrollbar-thumb {
			  background-color: rgba(255, 255, 255, 0.30);
			}
		</style>
	</head>
	<body style="font-family: Poppins, sans-serif;" class="overflow-hidden">

		<div class="loader z-[99999]">
			<div class="block">
				
				<p class="text-lg text-white mb-5">Chargement de la page</p>

				<div class="flex items-center justify-center">
					
					<div class="ring"></div>

				</div>
			</div>
	    </div>

	    <div class="w-full h-[100vh] bg-[url('../ressources/images/562a64d67812ecb3a7b87fcb56aef872.gif')] bg-cover bg-center flex items-center justify-center">
	    	
	    	<div class="w-[50vh] p-3 rounded-lg bg-white/10 border border-white/25 backdrop-blur-xl text-center">

		    	<p class="sm:text-[35px] text-[20px] text-white">404 - Page non trouvée</p>

		    	<p class="sm:text-[20px] text-[15px] text-white">Veuillez retourner dans le Bureau pour continuer vos recherches.</p>

		    </div>

	    </div>

	    <script>
	         const loader = document.querySelector(".loader");
	         window.onload = function(){
	           setTimeout(function(){
	             loader.style.opacity = "0";
	             setTimeout(function(){
	               loader.style.display = "none";
	             }, 500);
	           },1500);
	         }
      	</script>

	</body>
</html>