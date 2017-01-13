<!-- Block Highlighted -->
<div class="container-fluid container-fluid-all">
  <div id="video" class="row">
    <video id="video-longines" src="video/video.mp4" width="100%" height="auto" autoplay poster="video/video_poster.jpg"></video>
    <div class="video-controls">
      <button onclick="document.getElementById('video-longines').play()" id="video-play">Play</button>
      <button onclick="document.getElementById('video-longines').pause()" id="video-pause">Pausa</button>
    </div>
  </div>
</div>
<!-- SLIDER DESKTOP-->
<div class="container-fluid">
  <div id="news-featured">
   <h3 style="font-size: 50px;"><span style="background: #003F72;color: #fff; font-size: 50px;">Relo</span>jes</h3>
      <div id="ca-container" class="ca-container">
        <div class="ca-wrapper">
          <div class="ca-item ca-item-1">
            <div class="ca-item-main">
              <div class="ca-icon"></div>
              <a href="#"><h2 style="color: #002744;border-left: 2px solid;text-align: left;padding-left: 10px;">ELEGANCIA</h2></a>
              <p style=" text-align: left;">
                Longines DolceVita</br>
                Longines Primaluna</br>
                Longines Symphonette</br>
                La Grande Classique de Longines</br>
                Présence</br>
                Flagship</br>
                Longines Lyre
              </p>
            </div>
          </div>
          <div class="ca-item ca-item-2">
            <div class="ca-item-main">
              <div class="ca-icon"></div>
              <a href="#"><h2 style="color: #002744;border-left: 2px solid;text-align: left;padding-left: 10px;">TRADICIÓN RELOJERA</h2></a>
              <p style=" text-align: left;">
                The Longines Master Collection</br>
                Conquest Classic</br>
                The Longines Saint-Imier Collection</br>
                The Longines Elegant Collection</br>
                Longines evidenza
                </p>
            </div>
          </div>
          <div class="ca-item ca-item-3">
            <div class="ca-item-main">
              <div class="ca-icon"></div>
              <a href="#"><h2 style="color: #002744;border-left: 2px solid;text-align: left;padding-left: 10px;">EQUESTRIAN</h2></a>
                <p style=" text-align: left;">
                  The Longines Equestrian Collection</br>
                </p>
            </div>
          </div>
          <div class="ca-item ca-item-4">
            <div class="ca-item-main">
              <div class="ca-icon"></div>
              <a href="#"><h2 style="color: #002744;border-left: 2px solid;text-align: left;padding-left: 10px;">DEPORTES</h2></a>
              <p style=" text-align: left;">
                HydroConquest</br>
                Conquest
              </p>
            </div>
          </div>
          <div class="ca-item ca-item-5">
            <div class="ca-item-main">
              <div class="ca-icon"></div>
              <a href="#"><h2 style="color: #002744;border-left: 2px solid;text-align: left;padding-left: 10px;">HERITAGE</h2></a>
              <p style=" text-align: left;">
                Heritage Collection
              </p>
            </div>
          </div>
          </div>
        </div>
      <div class="clearfix">
      <div class="view-more-all">
        <a href="#">Ver más</a>
      </div>
    </div>
   </div>
  </div>
<div class="container-fluid">
  <div id="news-featured" class="row">
    <h3>El <span>Universo</span> Longines</h3>
    <div class="news-list clearfix">
      <div class="col-lg-12-col-md-12 col-sm-12">
        <ul>
          <li class="clearfix">
            <div class="new-image">
              <img src="images/new_item_01.jpg">
            </div>
            <div class="new-detail">
              <div class="new-date">20/11/2016</div>
              <div class="new-category">Carreras Planas</div>
              <h2>Longines FEI World Cup Western European League - Stuttgart German Masters</h2>
              <p>El 20 de noviembre de 2016, el número 1 de los Longines Rankings, Christian Ahlmann (Alemania), a lomos de Taloubet Z, se alzó con la victoria en la Longines FEI World CupTM Jumping en Stuttgart por segundo año consecutivo. Steve Guerdat (Suiza) y Bianca lograron el...</p>
              <a class="view-more">Ver más</a>
            </div>
          </li>
          <li class="clearfix">
            <div class="new-image">
              <img src="images/new_item_02.jpg">
            </div>
            <div class="new-detail">
              <div class="new-date">20/11/2016</div>
              <div class="new-category">Carreras Planas</div>
              <h2>Longines FEI World Cup North American League - Las Vegas</h2>
              <p>El 20 de noviembre de 2016, el número 1 de los Longines Rankings, Christian Ahlmann (Alemania), a lomos de Taloubet Z, se alzó con la victoria en la Longines FEI World CupTM Jumping en Stuttgart por segundo año consecutivo. Steve Guerdat (Suiza) y Bianca lograron el...</p>
              <a class="view-more">Ver más</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="clearfix">
      <div class="view-more-all">
        <a href="#">Más noticias</a>
      </div>
    </div>
  </div>
</div>
<div id="formulario"></div>
<div class="container-fluid">
  <div id="contact-form" class="row">
    <h3><span>Form</span>ulario</h3>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <?php if (isset($_GET['contact']) && $_GET['contact']): ?>
      <div id="confirmation">
        <h3>Gracias,</h3>
        <p>Dentro de poco nos comunicaremos contigo</p>
      </div>
      <div name="confirmation"></div>
      <?php else: ?>
      <form id="block-form" action="send-form.php" method="post">
        <div class="form-fiel-left">
          <div class="form-group">
            <label>Nombres</label>
            <input type="text" class="form-control required" name="firstname" />
          </div>
        </div>
        <div class="form-fiel-right">
          <div class="form-group">
            <label>Apellidos</label>
            <input type="text" class="form-control required" name="lastname" />
          </div>
        </div>
        <div class="form-fiel-left">
          <div class="form-group">
            <label>Celular</label>
            <input type="tel" class="form-control required" name="phone" />
          </div>
        </div>
        <div class="form-fiel-right">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control required" name="email" />
          </div>
        </div>
        <div class="form-fiel-full form-textarea clearfix">
          <div class="form-group">
            <label>Comentarios</label>
            <textarea class="form-control required" id="field-comments" name="comments"></textarea>
          </div>
        </div>
        <div class="form-group form-actions">
          <input type="submit" class="form-submit" value="Enviar">
        </div>
      </form>
      <?php endif; ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="form-image">
        <img src="img/reloj-principal_09.png">
      </div>
    </div>
  </div>
  <div class="banner-image"></div>
</div>