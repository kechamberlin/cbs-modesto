<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/cbs-hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <!-- <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3> -->
        <a href="#" class="btn btn--large btn--blue">Donate</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">May</span>
              <span class="event-summary__day">15</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Educational Programming Meeting</a></h5>
              <p>
                Join us to help plan our children's educations.
                <a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Jul</span>
              <span class="event-summary__day">15</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Blood Drive</a></h5>
              <p>
                Donate blood and save a life!<a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Celebrate Diversity</a></h5>
              <p>Read the article by Modesto Bee about inclusion at CBS <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Solidarity Shabbat</a></h5>
              <p>Read article by Modesto Bee about the Jews attacked in NY  area <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/cbs-hero.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Content 1</h2>
                <p class="t-center">Some content for first box.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/cbs-hero.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Content 2</h2>
                <p class="t-center">Some content for second box.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/cbs-hero.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Content 3</h2>
                <p class="t-center">Some content for third box.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer(); ?>