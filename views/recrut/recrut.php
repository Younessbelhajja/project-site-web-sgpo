<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-1" data-bg-img="<?=WEB_ROOT?>images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-theme-colored">CANDIDATURE SPONTANÉE</h3>
              <ul class="breadcrumb white">
                <li><a href="index-mp-layout1.html">Home</a></li>
                <li class="active">Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-0">

        <br><br><br><br><br>
          <!-- Google Map Javascript Codes -->
          
            <!-- Contact Form -->
            <form  action="<?=WEB_ROOT?>recrut/demander" method="post" enctype='multipart/form-data'>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name/Prenom <small>*</small></label>
                    <input name="nom" class="form-control" type="text" placeholder="Enter Name et Prenom" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>ville <small>*</small></label>
                    <input name="ville" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Niveau de formation <small>*</small></label>
                    <input name="Niveauformation" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Niveau d’expérience <small>*</small></label>
                    <input name="experience" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" type="text" placeholder="Enter Phone" name="tele">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Spécialité <small>*</small></label>
                    <input name="specialite" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>choisir une cv <small>*</small></label>
                    <br>
                   <input name="cv" type="file" accept="application/pdf, application/vnd.ms-excel" />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>lettre motivation</label>
                <textarea name="motive" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Envoyez </button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            
          </div>
        </div>
      </div>
    </section>
  </div>