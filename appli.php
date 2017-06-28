<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="author" content="Martinez Manuel" />
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
  <!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Application</title>
</head>
<body>
	
    <script >
    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    });
    </script>
    <script>
    $(document).ready(function() {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
    </script>


<div class="container">


	<strong>  <h1>Choisir sa pompe</h1> </strong>

  <form method="POST" action="traitement.php">

      
      <ul class="collapsible" data-collapsible="accordion">

        <li>

          <div class="collapsible-header">

            <h2>Type de liquide à pomper 

              <button data-target="modal1" class="btn modal-trigger waves-light light-blue">?</button>

              <!-- Ta modal -->

              <div id="modal1" class="modal modal-fixed-footer">

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

                  <a href="#!" class="modal-action modal-close waves-effect waves-light light-blue btn-flat ">Fermer</a>

                </div>

              </div>

              </h2>

          </div>

          <div class="collapsible-body" id="centrage">
            <ul>

              <li>        
                <input value="claires" name="application1" type="radio" id="eauclair"/>

                  <label for="eauclair">Eau claire </label>

              </li> 
          
              <li>  
                <input value="peucharge" name="application1" type="radio" id="eaupeucharge"  /> 

                  <label for="eaupeucharge"> Eau peu chargée </label>

              </li>

              <li>        
                <input value="charges" name="application1" type="radio" id="eaucharge" />  

                  <label for="eaucharge"> Eau chargée </label> 

              </li> 

              <li>  
                <input value="alimentaire" name="application1" type="radio" id="liquidalim" />   

                  <label for="liquidalim"> Liquide alimentaire </label> 

              </li> 

              <li>
                <input value="engrais" name="application1" type="radio" id="engrais"  />   

                  <label for="engrais"> Engrais </label> 

              </li>
            </ul>

          </div>

        </li>

        <li>

          <div class="collapsible-header">

            <h2>Type de pompe  

              <button data-target="modal2" class="btn modal-trigger waves-light light-blue">?</button>

              <!-- Ta modal -->

              <div id="modal2" class="modal modal-fixed-footer">

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

                    <a href="#!" class=" modal-action modal-close waves-effect waves-light light-blue btn-flat">Fermer</a>

                  </div>
              
                </div>
            </h2>
                
          </div>

          <div class="collapsible-body" id="centrage">
            <ul>
              <li>

                <input value="surface" name="type_pompe" type="radio" id="psurface"  /> 

                  <label for="psurface" > Surface </label> 

              </li>

              <li>
        

                <input type="radio" value="forage" name="type_pompe"  id="pforage" /> 

                  <label for="pforage" > Forage </label> 

              </li>

              <li>

                <input type="radio" value="immerge" name="type_pompe"  id="pimmerge" /> 

                  <label for="pimmerge" > Immergée </label> 
              </li>

              <li>

                <input type="radio" value="motopompe" name="type_pompe" id="pmoto" /> 

                  <label for="pmoto" > Motopompe </label> 

              </li>

            </ul>
            
          </div>

        </li>

        <li>

          <div class="collapsible-header">
            <h2>Type d'alimentation
              <button data-target="modal3" class="btn modal-trigger waves-light light-blue">?</button>
              <!-- Ta modal -->
              <div id="modal3" class="modal modal-fixed-footer">

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

                  <a href="#!" class=" modal-action modal-close waves-effect waves-light light-blue btn-flat">Fermer</a>
                </div> 
                </div> 
            </h2>
          </div>

          <div class="collapsible-body" id="centrage">

            <ul>  

              <li>
              
                <input type="radio" value="monophase" name="alimentation" id="electmono"  /> 

                  <label class="label-radio" for="electmono">  Electrique monophasé </label> 

              </li>

              <li>

                <input type="radio" value="triphase" name="alimentation" id="electripha" /> 
        
                  <label class="label-radio" for="electripha">   Electrique triphasé </label> 
            
              </li>

              <li>

                <input type="radio" value="continue " name="alimentation" id="cont" /> 

                  <label class="label-radio" for="cont"> Continue </label> 

              </li>

              <li>
            
                <input type="radio" name="alimentation" value="force" id="prisfor" /> 

                  <label class="label-radio" for="prisfor" > Prise de force </label> 

              </li>

              <li>

                <input type="radio" name="alimentation" value="arbre " id="arbnu" /> 

                  <label class="label-radio" for="arbnu"> Arbre nu</label> 

              </li>

              <li>
          
                <input type="radio" name="alimentation" value="thermique" id="therm" /> 

                  <label class="label-radio" for="therm"> Thermique</label> 
          
              </li>
            </ul>
          

          </div>
        </li> 
        <li> 
          <div class="collapsible-header">
            <h2>Pression en Bar
              
            </h2>
          </div>

          <div class="collapsible-body" id="centrage">

            <ul>  

              <li>
                  <input type="number" min="0" max="65" step="0.1" name="pressionmax" id="pressionMaxHauteurMin" required>
              </li>

            </ul>
          

          </div>
        </li>
        <li> 
          <div class="collapsible-header">
            <h2>Débit en L/min
              
            </h2>
          </div>

          <div class="collapsible-body" id="centrage">

            <ul>  

              <li>
                  <input type="number" min="0" max="3700" step="1" name="debitmax" id="dmax" required>
              </li>

            </ul>
          

          </div>
        </li>        

      </ul>
  

      <div class="button"> 

        <button class="btn waves-effect waves-light light-blue" type="submit" name="resultat" >

          <i class="material-icons right"></i>Résultat de votre recherche

        </button>

  </form>  

   

</div>

<div class="container">
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">
        <h3> Convertisseur l/min en M3/h </h3>
      </div>
      <div class="collapsible-body" id="centrage">
        <ul>
          <li>
            <label>l/min :</label>
            <input type='number'min="0" id='litres' value='litres' />
            <br />
            <label>m³/h :</label>
            <input type='number' min="0" id='mc' value='mc' />

            <script type="text/javascript">
            $('#litres').on('keyup', function() {
            $('#mc').val($(this).val() * .06);
            })

            $('#mc').on('keyup', function() {
            $('#litres').val($(this).val() * 16.666666666667);
            })
          </script>
          </li>
        </ul>
      </div>    
    </li>
  </ul>
</div>


</body>

</html>