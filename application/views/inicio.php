        <div id="divResul" class="col-md-10 col-sm-10 col-xs-10"><p>Introduce una búsqueda.</p></div>
        
      </div>
    </div>

    <div class="container">

      <footer>
        <p>&copy; Aula Mejor.</p>
      </footer>
    </div> <!-- /container -->

    <script type="text/javascript">
      $( "#btnBuscar" ).click(function() {
        $( "#divResul" ).html('');
          var txtNombre = $( "#txtNombre" ).val();
          var txtEmail  = $( "#txtEmail" ).val();
          var txtFolio  = $( "#txtFolio" ).val();
          var txtCompra = $( "#txtCompra" ).val();

          $.ajax({
            method: "post",
            url: "index.php/busqueda",
            data: { nombre: txtNombre, correo: txtEmail, compra: txtCompra, folio: txtFolio }
          })
            .done(function( msg ) {
              if(msg != 0){
               var cnt=1;
               var regis='<div class="table-responsive"><table class="table table-striped"><thead><tr><th>#</th><th>Nombre</th><th>Correo</th><th>Folio</th><th>Compra</th></tr></thead><tbody>';

                response=JSON.parse(msg);
                $.each(response, function(key, val) {
                  regis+= '<tr><td>'+ cnt++ +'</td><td>'+ val.nombre +'</td><td>'+ val.correo +'</td><td>'+ val.folio +'</td><td>'+ val.compra +'</td></tr>';
                });

                $( "#divResul" ).html(regis + '</tbody></table></div>' );
              }
              else{
                $( "#divResul" ).html('<p>Intenta de nuevo con otra busqueda !</p>' ); 
              }
          });
        $( "#btnLimpiar" ).click(function(){
          $( "form" )[0].reset();
          $( "#divResul" ).html('<p>Introduce una búsqueda.</p>' ); 
        });
      });     
    </script>
    
