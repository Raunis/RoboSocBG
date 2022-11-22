<html>
   <head>
   </head>
   <body>
    <?php
      //Backup SPlanner
            
        exec('bash ./copia.sh');
        
    ?>
    <script type="text/javascript">
        alert("Backup performed successfully. The current version of SPlanner toll has been saved to: \nGerador/versionamento \nThe folders in /versionamento can be accessed by date.");
        window.location.replace("http://localhost/Gerador/gerador.php");
   </script>
   </body>
</html>