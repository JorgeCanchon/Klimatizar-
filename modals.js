
        $(".btn-danger").on("click", function (e) { //SE ACTIVA CUANDO SE HACE CLIC EN EL BOTON CON CLASE (btn-eliminar)

            var id=this.id; // CON EL (this.id) PODEMOS SACAR EL CONTENIDO DE LA ID  DEL BOTON CON LA CLASE (btn-eliminar) AL CUAL DIMOS CLIC  

            p = confirm("¿Estas seguro que desea eliminar?");

            if(p){ 

                 window.location="inactivarEmpleado.php?Documento="+id;    //ENVIAMOS POR GET EL ID PARA LUEGO RECIBIRLO EN eliminar_persona.php
             }
         });
  $(".btn-editar").on("click", function (e) {   //SE ACTIVA CUANDO SE HACE CLIC EN EL BOTON CON CLASE (btn-editar)

            e.preventDefault();

            var id=this.id;   // CON EL (this.id) PODEMOS SACAR EL CONTENIDO DE LA ID  DEL BOTON CON LA CLASE (btn-editar) 
                                     //AL CUAL DIMOS CLIC   

            //AJAX ES UNA ESTRUCTURA PROPIA DE JQUERY Q PERMITE EL ENVIAR Y RECIBIR DATOS POR POST Y GET 
            //TYPE: TIPO DE ENVIO   / URL: LA URL DONDE ENVIARAS O RECIBIRAS ALGUN DATO / DATA: PARA ENVIAR VARIABLES

            $.ajax({

                type: "POST",
                url: '../controlers/fetch.php',
                data: { idPersona: id },
              error: function(){
              alert("error al cargar los datos");
              },
                success: function (data) {  //EL JSON QUE ENVIAMOS DESDE BUSCAR_PRODUCTOS_ID SE ALACENA EN DATA 

                    var valor =JSON.parse(data);  // JSON.parse convierte ese JSON en un objeto 
                    $('#Documento').val(valor[0]);
                    $('#nombreCompleto').val(valor[1]);
                    $('#direccion').val(valor[2]);
                     $('#telefono').val(valor[3]);
                      $('#email').val(valor[4]);
                       $('#fechaN').val(valor[5]);
                        $('#Cargo').val(valor[6]);
                         $('#EPS').val(valor[7]);
                          $('#ARL').val(valor[8]);
                           $('#AFP').val(valor[9]);
                },

            });
        });
