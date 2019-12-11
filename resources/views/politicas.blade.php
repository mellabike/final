@extends('maestra')

@section('seccion')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script>
            function mostrar(enla) {
            obj = document.getElementById('oculto'+enla);
            obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';}
            </script>
                       
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Politicas de Compra/Venta</title>
  </head>
  <body>
<br>
        <h4>Politicas de Compra/Venta</h4>
        <h6>Términos y condiciones de uso del sitio AbastCam<br><br>
            <p>
            Este contrato describe los términos y condiciones generales aplicables al uso de los servicios ofrecidos por AbastCam. Cualquier persona que desee acceder y/o usar el sitio o los servicios de www.abastcam.cl podrá hacerlo sujetándose a los Términos y Condiciones Generales, junto con todas las demás políticas y principios que rige AbastCam y que son incorporados al presente por referencia.
            </p>        
                CUALQUIER PERSONA QUE NO ACEPTE ESTOS TÉRMINOS Y CONDICIONES GENERALES, LOS CUALES TIENEN UN CARÁCTER OBLIGATORIO Y VINCULANTE, DEBERÁ ABSTENERSE DE UTILIZAR EL SITIO Y/O LOS SERVICIOS.
                <br>
                El Usuario debe leer, entender y aceptar todas las condiciones establecidas en los Términos y Condiciones Generales y en las Políticas de Privacidad así como en los demás documentos incorporados a los mismos por referencia, previo a su inscripción como Usuario de AbastCam.
                <br><br>

                <div class="container">
                   
                  <div id="accordion" role="tablist">
                    <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Artículo # 1: Capacidad
                          </font></font></a>
                        </h5>
                      </div>
            
                      <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Los Servicios sólo están disponibles para personas que tengan capacidad legal para contratar. No podrán utilizar los servicios las personas que no tengan esa capacidad, los menores de edad o Usuarios de AbastCam que hayan sido suspendidos temporalmente o inhabilitados definitivamente. Si estás inscribiendo un Usuario como Empresa, debes tener capacidad para contratar a nombre de tal entidad y de obligar a la misma en los términos de este Acuerdo.     
                        </font></font></div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 2: Inscripcion
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Para poder utilizar los servicios que brinda AbastCam es obligatorio que todos los campos del formulario de inscripción cuenten con datos válidos. El futuro Usuario debe verificar que la información personal que pone a disposición de AbastCam a fin de registrarse en el Sitio sea exacta, precisa y verdadera ("Datos Personales") y asume el compromiso de actualizar los Datos Personales conforme resulte necesario. El Usuario presta expresa conformidad con que AbastCam utilice diversos medios para identificar sus datos personales, asumiendo el Usuario la obligación de revisarlos y mantenerlos actualizados. AbastCam NO se responsabiliza por la certeza de los Datos Personales de los Usuarios. Los Usuarios garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de sus Datos Personales.
                        </font></font></div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 3: Ingreso
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          El Usuario accederá a su cuenta personal ("Cuenta") mediante el ingreso de su Seudónimo o de un correo electrónico a su elección, y de la clave de seguridad personal elegida ("Clave de Seguridad"). El Usuario se obliga a mantener la confidencialidad de su Clave de Seguridad. La Cuenta es personal, única e intransferible, y está prohibido que un mismo Usuario inscriba o posea más de una cuenta, su información, datos personales y actividad como usuarios del sitio, es compartida e integrada en tiempo real. En caso que AbastCam detecte distintas Cuentas que contengan datos coincidentes o relacionados, podrá cancelar, suspender o inhabilitarlas.
                        </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingFour">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 4: Modificaciones del Acuerdo
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        AbastCam podrá modificar los Términos y Condiciones Generales en cualquier momento haciendo públicos en el Sitio los términos modificados. Todos los términos modificados entrarán en vigor a los 10 (diez) días de su publicación. Dichas modificaciones serán comunicadas por AbastCam a los usuarios que en la Configuración de su Cuenta de AbastCam hayan indicado que desean recibir notificaciones de los cambios en estos Términos y Condiciones. Todo usuario que no esté de acuerdo con las modificaciones efectuadas por AbastCam podrá solicitar la baja de la cuenta.
                        </font></font></div>
                      </div>
                    </div>
                    
                    <div class="card">
                      <div class="card-header" role="tab" id="headingFive">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 5: Inclusión de imágenes y fotografías.
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFive">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                           El usuario puede incluir imágenes y fotografías del producto ofrecido siempre que las mismas se correspondan con el artículo. El usuario declara y garantiza que está facultado para incluir las imágenes y fotografías contenidas en sus publicaciones, siendo responsable por cualquier infracción a derechos de terceros.
                           AbastCam podrá impedir la publicación de la fotografía, e incluso del producto, si interpretara, a su exclusivo criterio, que la imagen no cumple con los presentes Términos y Condiciones. Las imágenes y fotografías de artículos publicados en el tipo de publicación deberán cumplir con algunos requisitos adicionales como condición para ser expuestas en la Pagina Principal del Sitio Web. Conoce los requisitos. 
                          El usuario otorga a AbastCam una autorización gratuita y sin límite temporal para publicar y/o adaptar las imágenes incluidas en sus publicaciones con fines de clasificación de productos en todos sus sitios, redes sociales y/o por cualquier medio que AbastCam utilice para comunicación.
                           </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingSix">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 6: Artículos Prohibidos.
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingSix">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Sólo podrán ser ingresados en las listas de productos ofrecidos, aquellos cuya venta no se encuentre tácita o expresamente prohibida en los Términos y Condiciones Generales y demás políticas de AbastCam o por la ley vigente. 
                        </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingSeven">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 7: Privacidad de la Información.
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseSeven" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Para utilizar los Servicios ofrecidos por AbastCam, los Usuarios deberán facilitar determinados datos de carácter personal. Su información personal se procesa y almacena en servidores que mantienen altos estándares de seguridad y protección tanto física como tecnológica. Para mayor información sobre la privacidad de los Datos Personales y casos en los que será revelada la información personal, se pueden consultar nuestras Políticas de Privacidad.
                        </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingEight">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 8: Obligaciones del Comprador.
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseEight" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingEight">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Durante el plazo fijado por el Usuario Vendedor, los Usuarios interesados realizarán ofertas de compra para los productos. La oferta de venta se cierra una vez que vence el plazo o se acaban las cantidades estipuladas por el Vendedor.
                          El Comprador está obligado a intentar comunicarse con el vendedor y completar la operación si ha realizado una oferta por un artículo publicado, salvo que la operación esté prohibida por la ley o los Términos y Condiciones Generales y demás políticas de AbastCam, en cuyo caso no estará obligado a concretar la operación.
                          Al ofertar por un artículo el Usuario acepta quedar obligado por las condiciones de venta incluidas en la descripción del artículo en la medida en que las mismas no infrinjan las leyes o los Términos y Condiciones Generales y demás políticas de AbastCam. La oferta de compra es irrevocable salvo en circunstancias excepcionales, tales como que el vendedor cambie sustancialmente la descripción del artículo después de realizada alguna oferta, que exista un claro error tipográfico, o que no pueda verificar la identidad del vendedor.
                          Impuestos. Tal como lo establece la normativa fiscal vigente, el comprador debe exigir boleta o factura al vendedor como comprobante de la operación. El vendedor no estará obligado a emitir boleta o factura sólo en el caso de tratarse de una persona física que efectúa ventas ocasionalmente.
                          </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingNine">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 9: Obligaciones del Vendedor.
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseNine" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingNine">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          El Usuario Vendedor debe tener capacidad legal para vender el bien objeto de su oferta. Si el Usuario Vendedor ha recibido al menos una oferta sobre el precio mínimo que estableció, queda obligado a intentar comunicarse con el comprador y completar la operación. La cancelación de las ofertas de compra por parte del usuario vendedor impactarán en su reputación y AbastCam podra sancionar y/o inhabilitar su cuenta.
                          <br><br><p style="color:#FF0000";>!!!importante.</p>Dado que AbastCam es un punto de encuentro entre comprador y vendedor y no participa de las operaciones que se realizan entre ellos, el Vendedor será responsable por todas las obligaciones y cargas impositivas que correspondan por la venta de sus artículos, sin que pudiera imputársele a AbastCam algún tipo de responsabilidad por incumplimientos en tal sentido.
                          <br>
                          Como se menciona anteriormente, AbastCam sólo pone a disposición de los Usuarios un espacio virtual que les permite comunicarse mediante Internet para encontrar una forma de vender o comprar repuestos y/o accesorios. AbastCam no tiene participación alguna en el proceso de negociación entre las partes. Por eso, AbastCam no es responsable por el efectivo cumplimiento de las obligaciones fiscales o impositivas establecidas por la ley vigente.
                          <br>
                          El vendedor acepta que su comprador puede revocar la compra dentro de un plazo de 10 días desde que recibe el producto. Asimismo, el vendedor acepta que los compradores podrán pedir el cambio o devolución del producto .dentro de los primeros 10 dias.
                          En cualquiera de los mencionados casos, el vendedor deberá aceptar el cambio o devolución del producto vendido y podrá hacerse cargo de los gastos que esto conlleve, incluyendo los costos de envío que fueren necesarios.
                          <br>
                          Sin perjuicio de lo previsto en el párrafo anterior, en el caso de publicaciones que prevean envíos internacionales, el vendedor podrá excluir el derecho de retracto del comprador siempre que cumpla con los requisitos que prevé la normativa vigente.
                         </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingTen">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 10: Prohibiciones
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseTen" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTen">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Los Usuarios no podrán:
                          <br><br>
                          <br>(a) manipular los precios de los artículos;
                          <br>(b) insultar o agredir a otros Usuarios;
                          <br>(c) publicar artículos idénticos en más de una publicación;
                          <br>(d) aceptar datos personales proporcionados por otros usuarios;
                          <br>(e) publicar o vender artículos prohibidos por los Términos y Condiciones Generales, demás políticas de Mercado Libre o leyes vigentes; 
                          <br>(f) utilizar su reputación, calificaciones o comentarios recibidos en el sitio de AbastCam en cualquier ámbito fuera de AbastCam; 
                          <br><br>
                          Este tipo de actividades será investigado por AbastCam y el infractor podrá ser sancionado con la suspensión o cancelación de la oferta e incluso de su registro de  Usuario de AbastCam y/o de cualquier otra forma que estime pertinente, sin perjuicio de las acciones legales a que pueda dar lugar por la configuración de delitos o contravenciones o los perjuicios civiles que pueda causar a los Usuarios oferentes.
                             
                        </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingEleven">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 11: Violaciones del Sistema o Bases de Datos. 
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseEleven" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingEleven">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        No está permitida ninguna acción o uso de dispositivo, software, u otro medio tendiente a interferir tanto en las actividades y operatoria de AbastCam como en las ofertas, descripciones, cuentas o bases de datos de AbastCam. Cualquier intromisión, tentativa o actividad violatoria o contraria a las leyes sobre derecho de propiedad intelectual y/o a las prohibiciones estipuladas en este contrato harán pasible a su responsable de las acciones legales pertinentes, y a las sanciones previstas por este acuerdo, así como lo hará responsable de indemnizar los daños ocasionados.
                       </font></font></div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwelve">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 12: Sanciones. Suspensión de operaciones. 
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseTwelve" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwelve">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                         Sin perjuicio de otras medidas, AbastCam podrá advertir, suspender en forma temporal o inhabilitar definitivamente la Cuenta de un Usuario o una publicación,  aplicar una sanción que impacte negativamente en la reputación de un Usuario, iniciar las acciones que estime pertinentes y/o suspender la prestación de sus Servicios si:  
                         <br>(a) se quebrantara alguna ley, o cualquiera de las estipulaciones de los Términos y Condiciones Generales y demás políticas de AbastCam;
                         <br>(b) si incumpliera sus compromisos como Usuario; 
                         <br>(c) si se incurriera a criterio de AbastCam en conductas o actos dolosos o fraudulentos; 
                         <br>(d) no pudiera verificarse la identidad del Usuario o cualquier información proporcionada por el mismo fuere errónea; 
                         <br>(e) AbastCam entendiera que las publicaciones u otras acciones pueden ser causa de responsabilidad para el Usuario que las publicó, para AbastCam o para los demás Usuarios en general. 
                         <br><br>En el caso de la suspensión de un Usuario, sea temporal o definitiva, todos los artículos que tuviera publicados serán removidos del sistema. También se removerán del sistema las ofertas de compra y venta.
                        </font></font></div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="card-header" role="tab" id="headingThirteen">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 13: Alcance de los servicios de AbastCam. 
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseThirteen" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThirteen">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                         Este acuerdo no crea ningún contrato de sociedad, de mandato, de franquicia, o relación laboral entre AbastCam y el Usuario. El Usuario reconoce y acepta que AbastCam no es parte en ninguna operación, ni tiene control alguno sobre la calidad, seguridad o legalidad de los artículos anunciados, la veracidad o exactitud de los anuncios, la capacidad de los Usuarios para vender o comprar artículos. AbastCam no puede asegurar que un Usuario completará una operación ni podrá verificar la identidad o Datos Personales ingresados por los Usuarios. AbastCam no garantiza la veracidad de la publicidad de terceros que aparezca en el sitio y no será responsable por la correspondencia o contratos que el Usuario celebre con dichos terceros o con otros Usuarios.
                        </font></font></div>
                      </div>
                    </div>


                     <div class="card">
                      <div class="card-header" role="tab" id="headingFourteen">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 14: Fallas en el sistema. 
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseFourteen" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFourteen">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        AbastCam no se responsabiliza por cualquier daño, perjuicio o pérdida al Usuario causados por fallas en el sistema, en el servidor o en Internet. AbastCam tampoco será responsable por cualquier virus que pudiera infectar el equipo del Usuario como consecuencia del acceso, uso o examen de su sitio web o a raíz de cualquier transferencia de datos, archivos, imágenes, textos, o audio contenidos en el mismo. Los Usuarios NO podrán imputarle responsabilidad alguna ni exigir pago por lucro cesante, en virtud de perjuicios resultantes de dificultades técnicas o fallas en los sistemas o en Internet. AbastCam no garantiza el acceso y uso continuado o ininterrumpido de su sitio. El sistema puede eventualmente no estar disponible debido a dificultades técnicas o fallas de Internet, o por cualquier otra circunstancia ajena a AbastCam; en tales casos se procurará restablecerlo con la mayor celeridad posible sin que por ello pueda imputársele algún tipo de responsabilidad. AbastCam no será responsable por ningún error u omisión contenidos en su sitio web.
                          </font></font></div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingFifteen">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Artículo # 15: Jurisdicción y Ley Aplicable. 
                          </font></font></a>
                        </h5>
                      </div>
                      <div id="collapseFifteen" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFifteen">
                        <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                         Este acuerdo estará regido en todos sus puntos por las leyes vigentes en la República Chilena.<br>
                         Cualquier controversia derivada del presente acuerdo, su existencia, validez, interpretación, alcance o cumplimiento, será sometida a las leyes aplicables y a los Tribunales competentes de la Ciudad de Santiago y los procedimientos se llevarán a cabo en idioma castellano.
                      </font></font></div>
                      </div>
                    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>       
        
@endsection