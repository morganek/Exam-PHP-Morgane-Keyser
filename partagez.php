<!DOCTYPE html>

	<html>
		<?php include 'includes/head.php'; ?>
		
		
		<head>
		    <link rel="stylesheet" href="css/demo.css">
		    <link rel="stylesheet" href="css/medium-editor.css">
		    <link rel="stylesheet" href="css/themes/default.css">
		</head>

		<body>
			<?php 
				include 'includes/header.php'; 
				require_once 'core/init.php';
			?>

    <div id="container">
    
	    <div id="immersion">
	    
		    <section class="histoire">
		        <div class="editable">
		            <p>Ecrivez et éditez vos moments en voyant immédiatement comment ça va apparaître sur That Song.</p>
		            <br>
		            <p><b>Cliquez ici pour essayer!</b></p>
		            <br>
		        </div>
		        
		        <form>
		        	<p class="boutoninscription"> 
						<input type="submit" value="ENREGISTRER LE MOMENT">
					</p>
				</form>
		        
		    </section>        
	    </div>
    </div>
    
    
    
    <script src="js/medium-editor.js"></script>
    <script>
        var editor = new MediumEditor('.editable', {
            buttonLabels: 'fontawesome'
        });
    </script>


			
			
		<?php include 'includes/footer.php';?>
	</body>