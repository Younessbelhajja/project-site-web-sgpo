<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-1" data-bg-img="<?=WEB_ROOT?>images/bg/bg1.jpg">
  <div class="container pt-100 pb-50">
    <!-- Section Content -->
    <div class="section-content pt-100">
      <div class="row"> 
        <div class="col-md-12">
          <h3 class="title text-theme-colored">Nos Services</h3>
          <ul class="breadcrumb white">
            <li><a href="index-mp-layout1.html">Home</a></li>
            <li class="active">Nos Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row multi-row-clearfix">
      <div class="blog-posts">
      <?php foreach($service as $value){?>
        <div class="col-md-4">
          <article class="post clearfix mb-30 bg-lighter">
            <div class="entry-header">
              <div class="post-thumb thumb"> 
                <img src="<?=WEB_ROOT?>images/<?=$value['images']?>" alt="" class="img-responsive img-fullwidth"> 
              </div>
            </div>
            <div class="entry-content p-20 pr-10">
              <div class="entry-meta media mt-0 no-bg no-border">
                <div class="media-body pl-15">
                  <div class="event-content pull-left flip">
                    <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?=$value['titre']?></a></h4>
                    
                  </div>
                </div>
              </div>
              <p class="mt-10"><?=$value['description']?></p>
              <a href="#" class="btn-read-more">Lire la suite</a>
              <div class="clearfix"></div>
            </div>
          </article>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
</div>