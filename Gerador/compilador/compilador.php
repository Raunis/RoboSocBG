<style>
body {
  overflow: hidden; 
}


@font-face {
    src: url(fonts/abster.otf);
    font-family: 'abster';    
    font-weight: normal;
}

@font-face {
    src: url(fonts/acacio.otf);
    font-family: 'acacio';    
    font-weight: normal;
}
@font-face {
    src: url(fonts/atalanta.otf);
    font-family: 'atalanta';    
    font-weight: normal;
}
@font-face {
    src: url(fonts/beckman.otf);
    font-family: 'beckman';    
    font-weight: normal;
}
@font-face {
    src: url(fonts/dreams.ttf);
    font-family: 'dreams';    
    font-weight: normal;
}


 
/* ini: Preloader */

.c-loader {
  animation: is-rotating 1.5s infinite;
  border: 5px solid #e5e5e5;
  border-radius: 50%;
  border-top-color: #51d4db;
  height: 20px;
  width: 20px;
}

@keyframes is-rotating {
  to {
    transform: rotate(1turn);
  }
}
 
#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    z-index:999; /* z-index para jogar para frente e sobrepor tudo */
}

#preloader .inner {
    font-family: 'abster'; 
    color:  #51d4db;
    align-items: center;
    display: flex;
    justify-content: center;
    position: absolute;
    top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/
    left: 50%;
}

 
@keyframes animarBola {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  16% {
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    opacity: 0.7;
  }
  33% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1; 
  } 
</style>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <link rel="stylesheet" href="preloader-com-css3.css">


</head>

<body >

	<script type="text/javascript">
	    //<![CDATA[
	    function sincrona()
		{
		   $.ajax({
			  type: 'POST',
			  url: 'compila.php',
			  success:  function(resultado) {$("#content").append('<p>' + resultado + '</p>');},
			  async:false
			});
		 }



	   function assinc()
		{
			$.get("compila.php", function(resultado){
				$("#content").append('<p>' + resultado + '</p>');
			})
		}

        function copiar()
        {
            $.get("copia.php", function(resultado){
                $("#content").append('<p>' + resultado + '</p>');
            })
        }

	</script>

    <!-- Preloader -->
    <div id="preloader">
        <div class="inner">
            COMPILANDO &nbsp
            <div class="c-loader">
                <div></div>
                <div></div>
                <div></div>                    
            </div>
        </div>
    </div>
    
    
    <div id="content" class="content">
    	

    </div>
    
    
    <script type="text/javascript">
    //<![CDATA[
    
    $(document).ready(function() {  // makes sure the whole site is loaded 
		//BAKUP DO SPLANNER PRECISA AQUI?
        //copiar();
        
        assinc();
        copiar();

		$body = $("body");

		$(document).on({
		    ajaxStop: function() { 
		    	$('#preloader .inner').fadeOut(); // will first fade out the loading animation 
		        $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website. 
		        $('body').delay(200).css({'overflow': 'visible'});
		    }    
		});

        //$('#preloader .inner').fadeOut(); // will first fade out the loading animation 
        //$('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        //$('body').delay(200).css({'overflow': 'visible'});
    })
    //]]>
    </script> 
</body>
</html>




