<div class="btn-group btn-group-justified">

 <?php
  $url = rawurlencode( get_permalink() );
  $url2 = rawurlencode( wp_get_shortlink( get_the_id() ) );
  $title = get_the_title();
  $username = 'TiKwenPam'; ?>

  <a
    class="btn btn-primary"
    target="_blank"
    title="Sou Facebook"
    href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=<?php echo $title; ?>">
    <strong>
      <i class="fa fa-facebook fb"></i> <span class="fab">Facebook</span>
    </strong>
  </a>

  <a
    class="btn btn-info"
    target="_blank"
    title="Sou Twitter"
    href="http://twitter.com/share?url=<?php echo $url2; ?>&text=<?php echo $title; ?>&via=<?php echo $username; ?>">
    <strong>
      <i class="fa fa-twitter tw"></i> <span class="fab">Twitter</span>
    </strong>
  </a>

  <a
    class="btn btn-success"
    target="_blank"
    title="sou WhatsApp"
    href="whatsapp://send?text=<?= $title . ' ' . $url2 . ' via @' . $username; ?>">
    <strong>
      <i class="fa fa-whatsapp wa"></i> <span class="fab">WhatsApp</span>
    </strong>
  </a>

  <a
    class="btn btn-danger"
    target="_blank"
    title="Sou Google Plus"
    href="https://plus.google.com/share?url=<?php echo $url; ?>">
    <strong>
      <i class="fa fa-google-plus google"></i> <span class="fab">Google+</span>
    </strong>
  </a>

</div>