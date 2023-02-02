<section class="  uk-section video-section-wrap " data-scroll-section data-persistent>
  <div class="uk-container uk-container-expand-right uk-padding-remove-right" id="fixed-elements">
    <div class="uk-grid uk-grid-medium uk-grid-large" uk-grid>
      <div class="uk-width-1-2@m uk-flex uk-flex-middle">
        <div class="c-section_infos_inner" data-scroll data-scroll-target="#fixed-elements">
          <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
            <h3 class="section_infos_inner--title">
              <?php echo get_field('video_title','option'); ?>
            </h3>
            <div class="c-sections_infos_text ">
              <p>
              <?php echo get_field('short_description','option'); ?>
              </p>

            </div>
          </div>
        </div>
      </div>

      <div class="uk-width-1-2@m">
        <div class="c-speed-block" data-scroll data-scroll-speed="2">
          <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
            <div uk-lightbox class="o-image uk-position-relative" data-scroll>
              <img class="c-speed-block_image " src=" <?php echo get_field('video_thumbnail','option'); ?>" alt=" image from unsplash">
             <?php /* <a href="#modal-media-video" uk-toggle>
                <i class="uk-icon" uk-icon="icon:play-circle; ratio:2.8"></i>
              </a> */ ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
