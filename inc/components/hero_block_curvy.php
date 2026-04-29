<?php // Hero Block Curvy

  if( have_rows('hero_block_curvy') ): 
    while( have_rows('hero_block_curvy') ): the_row(); 
    $page = get_sub_field('page_type');
    $background = get_sub_field('background');
    $image = get_sub_field('image');
    $video = get_sub_field('video');
    $heading = get_sub_field('heading');
    $description = get_sub_field('description');
    $link = get_sub_field('link');
    $additionalLink = get_sub_field('additional_link');
    ?>

<section class="hero-block-curvy__wrapper page-type--<?php echo $page ?>">
  <div class="hero-block-curvy">
    <?php if($background == 'video'): ?>
      <div class="hero-block-curvy__video">
        <video playsinline autoplay muted loop>
          <source src="<?php echo $video ?>" type="video/mp4">
        Your browser does not support the video tag.
        </video>
      </div>
    <?php else: ?>
      <div class="hero-block-curvy__image">
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
      </div> 
    <?php endif; ?> 

    <?php if($heading): ?>
      <h1 class="hero-block-curvy__heading">
        <?php echo $heading ?>
      </h1>
    <?php endif; ?>

    <?php if($description): ?>
      <div class="hero-block-curvy__description">
        <?php echo $description ?>
      </div>
    <?php endif; ?>

    <?php if($link): ?>
      <div class="hero-block-curvy__links">
        <a class="primary-button" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        <?php if($additionalLink): ?>
          <a class="secondary-button" href="<?php echo $additionalLink['url'] ?>"><?php echo $additionalLink['title'] ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</section>  

<?php endwhile; ?>
<?php endif; ?>
