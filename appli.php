<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Document</title>
</head>
<body>
	



<div class="container">


	<strong>  <h1>Choisir sa pompe</h1> </strong>

	<ul class="collapsible" data-collapsible="accordion">

    	<li>


     	 	<div class="collapsible-header">

     	 		<h2>Type de liquide à pomper 
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">?</i></a>

            <div id="modal1" class="modal">

              <div class="modal-content">

               <h3>Liquide à transferer</h3>

                <p>Certaines pompes étant adaptées pour le relevage d’eaux chargées, d’autres destinées à pomper des eaux claires… Il est important de définir le type de liquide pompé afin de déterminer correctement sa pompe :
                <p>- Eaux claires : particules en suspension quasiment inexistantes. Granulométrie maximale de 5 mm.</p>
                <p>- Eaux peu chargées : eaux très légèrement sablonneuses avec peu de particules en suspension appelé également eaux brunes, eaux verte, lisier… Granulométrie maximale de 10 mm.</p>
                <p>- Eau chargées : eaux chargées en particules. Granulométrie supérieure à 10 mm.</p>
                <p>- Engrais : liquide corrosif destiné à la pulvérisation d’insecticides, de fertilisants…</p>
                <p>- Liquide alimentaire : Liquide destiné à l’alimentation animale</p>
                </p>

             </div>

              <div class="modal-footer">

               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>

              </div>
              
            </div>
          </h2>

  <script type="text/javascript">
        $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal-trigger').leanModal();
        });
</script>

     	 	</div>
        
      		<div class="collapsible-body" id="centrage">

      			<form action="result.php" method="POST">
      <li>        
     			 	<input name="application1" type="radio" id="eauclair"/>

      					<label for="eauclair">Eau claire</label>

    	</li>	
					
    	<li>	
    				<input name="application1" type="radio" id="eaupeucharge"  /> 

    					<label for="eaupeucharge"> Eau peu chargée </label>

    	</li>

      <li>				
					<input name="application1" type="radio" id="eaucharge" />  

						<label for="eaucharge"> Eau chargée </label> 
			</li>	

      <li>	

						
			 		<input name="application1" type="radio" id="liquidalim" />   

				 		<label for="liquidalim"> Liquide alimentaire </label> 
			</li>	

      <li>
							
					<input name="application1" type="radio" id="engrais"  />   

						<label for="engrais"> Engrais </label> 
      </li>

			    </form>

			</div>

   		</li>

    	<li>

      		<div class="collapsible-header">

      		 <h2> Type de pompe 
            <a class="waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons">?</i></a>

            <div id="modal2" class="modal">

              <div class="modal-content">

               <h3>Type de pompe</h3>

                <p>. :
              <p>- Surface : </p>
              <p>- Forage : </p>
              <p>- Immergée : </p>
              <p>- Motopompe : </p>
                </p>

             </div>

              <div class="modal-footer">

               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>

              </div>
              
            </div>
           </h2>

      		</div>

      		<div class="collapsible-body" id="centrage">

      			

      				<form action="result.php" method="POST">

				  <li>

    				 <input name="type_pompe" type="radio" id="surface"  /> 

    					<label for="surface" > Surface </label> 

    			</li>

				  <li>
				

    				 <input type="radio" name="type_pompe"  id="forage" /> 

    					<label for="forage" > Forage </label> 

    			</li>

    			<li>

    				 <input type="radio" name="type_pompe"  id="immerge" /> 

    					<label for="immerge" > Immergée </label> 
				  </li>

				  <li>

    				 <input type="radio" name="type_pompe" id="moto" /> 

    					<label for="moto" > Motopompe </label> 

				  </li>

    				</form>

    		

    		  </div>

    	</li>

    	<li>

      		<div class="collapsible-header">

      			<h2>Type d'alimentation
            <a class="waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons">?</i></a>

            <div id="modal3" class="modal">

              <div class="modal-content">

               <h3>Type d'alimentation</h3>

                <p>L’alimentation doit pouvoir s’adapter à votre réseau électrique ou à vos besoins.:
              <p>- Electrique triphasé : 380 V</p>
              <p>- Electrique Monophasé : 230 V</p>
              <p>- Electrique continu : 12 / 24 V</p>
              <p>- Prise de force : Entrainement grâce à une prise de force tracteur</p>
              <p>- Arbre nu : </p>
              <p>- Thermique : Entrainement grâce à une énergie pétrolière</p>
                </p>

             </div>

              <div class="modal-footer">

               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
            </h2>

      		</div>

      		<div class="collapsible-body" id="centrage">

      			
      				<form action="result.php" method="POST"> 	

      			<li>
              
    				<input type="radio" name="alimentation" id="electmono"  /> 

    					<label class="label-radio" for="electmono">	 Electrique monophasé </label> 

    			</li>

    			<li>

    				<input type="radio" name="alimentation" id="electripha" /> 
				
    					<label class="label-radio" for="electripha">	 Electrique triphasé </label> 
    				
				</li>

				<li>

    				<input type="radio" name="alimentation" id="cont12" /> 

    					<label class="label-radio" for="cont12"> Continue 12V </label> 

    			</li>

    			<li>

    				<input type="radio" name="alimentation" id="cont24" /> 

    				  	<label class="label-radio" for="cont24" > Continue 24V </label> 

				</li>

				<li>
    				
    				<input type="radio" name="alimentation" id="prisfor" /> 

    					<label class="label-radio" for="prisfor" > Prise de force </label> 

				</li>

				<li>

    				<input type="radio" name="alimentation" id="arbnu" /> 

    				  	<label class="label-radio" for="arbnu"> Arbre nu</label> 

				</li>

				<li>
					
    				<input type="radio" name="alimentation" id="therm" /> 

					 	<label class="label-radio" for="therm"> Thermique</label> 
					
				</li>
    				

    				</form>

      			

 	 		</div>

    	</li>

    	<li>

      		<div class="collapsible-header">

      			<h2>Débit de pompage</h2>

      		</div>

     		<div class="collapsible-body">

     			<form action="result.php" method="POST">
          <p>
     				<input type='number' id='litres' /> 

                		<label for="litres">l/min </label> 

                	<br> <p>

				
					<input type='number' id='mc' /> 

                 		<label for="mc">m³/h </label> 

 						<script type="text/javascript">

                       		 $('#litres').on('keyup', function() {
                       		 $('#mc').val($(this).val() * 0.06);
                       		 });
                       		 $('#mc').on('keyup', function() {
                       		 $('#litres').val($(this).val() * 16.666666666667);
                        	 });

            </script>
          </form>

      		</div>

    	</li>

    	<li>

      		<div class="collapsible-header">

      			<h2>Hauteur d'aspiration et hauteur de refoulement</h2>

      		</div>

      		<div class="collapsible-body">
            <form action="result.php" method="POST">

      		<p>

      				<input TYPE="number" NAME="Hta" id="hta" value="0" > 

					Hauteur d'aspiration en m
          
          </p>

					<br> <p>

					 <input TYPE="number" NAME="Htr" id="htr" value="0"> 

					 Hauteur de refoulement en m

				</form>

			</div>

   		</li>

    	<li>
      		<div class="collapsible-header">

      			<h2>Diamètre intérieur de vos tuyaux</h2>

      		</div>

      		<div class="collapsible-body">

      			<p>

      			<form action="result.php" method="POST" >

						  <select class="browser-default" id="centrage">

						  	 <option value="" disabled selected>

								Choisiser le diamètre intérieur de vos tuyaux

							   </option>

								<option value="20"  >20 <=> 3/4"  </option>
                <option value="25"  >25 <=> 1"    </option>
								<option value="32"  >32 <=> 1"1/4 </option>
								<option value="40"  >40 <=> 1"1/2 </option>
								<option value="50"  >50 <=> 2"    </option>
								<option value="65"  >65 <=> 2"1/2 </option>
								<option value="80"  >80 <=> 3"    </option>
								<option value="100">100 <=> 4"    </option>
								<option value="125">125 <=> 5"    </option>
								<option value="150">150 <=> 6"    </option>

              </select> 

            </form>

  			</div>

    	</li>

	</ul>
 
		<div class="button"> 

      <form action="result.php" method="POST" >
			 	
        <button class="btn waves-effect waves-light" type="submit" name="resultat" >
          <i class="material-icons right"></i>Résultat de votre result
        </button>

      
      </form>
        

			
	
		</div>
	
</div>

<script >
   $(document).ready(function(){
     $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
</script>

<script type="text/javascript" src="Materialize/js/materialize.min.js"></script>

</body>

</html>