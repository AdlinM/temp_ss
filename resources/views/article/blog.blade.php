@extends('layouts.admin')

@section('styles')
<link href="assets/plugins/google-grid-gallery/css/component.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="assets/plugins/google-grid-gallery/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/google-grid-gallery/js/masonry.pkgd.min.js"></script>
<script src="assets/plugins/google-grid-gallery/js/classie.js"></script>
<script src="assets/plugins/google-grid-gallery/js/cbpGridGallery.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/gallery.js"></script>
@endsection

@section('content')
<div class="row">

  <div id="grid-gallery" class="grid-gallery">
  <section class="grid-wrap">
  <ul class="grid">
  <li class="grid-sizer"></li><!-- for Masonry column width -->
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/1.png" alt="img01"/>
  <figcaption><h5 class="flow-text">Letterpress asymmetrical</h5><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/2.png" alt="img02"/>
  <figcaption><h5 class="flow-text">Vice velit chia</h5><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/3.png" alt="img03"/>
  <figcaption><h5 class="flow-text">Brunch semiotics</h5><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/4.png" alt="img04"/>
  <figcaption><h5 class="flow-text">Chillwave nihil occupy</h5><p>In post-ironic gluten-free deserunt, PBR&B non pork belly cupidatat polaroid. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/5.png" alt="img05"/>
  <figcaption><h5 class="flow-text">Kale chips lomo biodiesel</h5><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/6.png" alt="img06"/>
  <figcaption><h5 class="flow-text">Exercitation occaecat</h5><p>Street chillwave hoodie ea gentrify.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/1.png" alt="img01"/>
  <figcaption><h5 class="flow-text">Letterpress asymmetrical</h5><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/2.png" alt="img02"/>
  <figcaption><h5 class="flow-text">Vice velit chia</h5><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/3.png" alt="img03"/>
  <figcaption><h5 class="flow-text">Brunch semiotics</h5><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/4.png" alt="img04"/>
  <figcaption><h5 class="flow-text">Chillwave nihil occupy</h5><p>In post-ironic gluten-free deserunt, PBR&B non pork belly cupidatat polaroid. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/5.png" alt="img05"/>
  <figcaption><h5 class="flow-text">Kale chips lomo biodiesel</h5><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/6.png" alt="img06"/>
  <figcaption><h5 class="flow-text">Exercitation occaecat</h5><p>Street chillwave hoodie ea gentrify.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/3.png" alt="img03"/>
  <figcaption><h5 class="flow-text">Brunch semiotics</h5><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/4.png" alt="img04"/>
  <figcaption><h5 class="flow-text">Chillwave nihil occupy</h5><p>In post-ironic gluten-free deserunt, PBR&B non pork belly cupidatat polaroid. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/5.png" alt="img05"/>
  <figcaption><h5 class="flow-text">Kale chips lomo biodiesel</h5><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
  </figure>
  </li>
  <li>
  <figure>
  <img src="assets/plugins/google-grid-gallery/img/thumb/6.png" alt="img06"/>
  <figcaption><h5 class="flow-text">Exercitation occaecat</h5><p>Street chillwave hoodie ea gentrify.</p></figcaption>
  </figure>
  </li>
  </ul>
  </section><!-- // grid-wrap -->
  <section class="slideshow">
  <ul>
  <li>
  <figure>
  <figcaption>
  <h5>Letterpress asymmetrical</h5>
  <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/1.png" alt="img01"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Vice velit chia</h5>
  <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/2.png" alt="img02"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Brunch semiotics</h5>
  <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/3.png" alt="img03"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Chillwave nihil occupy</h5>
  <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/4.png" alt="img04"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Kale chips lomo biodiesel</h5>
  <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/5.png" alt="img05"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Exercitation occaecat</h5>
  <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/6.png" alt="img06"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Letterpress asymmetrical</h5>
  <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/1.png" alt="img01"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Vice velit chia</h5>
  <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/2.png" alt="img02"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Brunch semiotics</h5>
  <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/3.png" alt="img03"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Chillwave nihil occupy</h5>
  <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/4.png" alt="img04"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Kale chips lomo biodiesel</h5>
  <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/5.png" alt="img05"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Exercitation occaecat</h5>
  <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/6.png" alt="img06"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Brunch semiotics</h5>
  <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/3.png" alt="img03"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Chillwave nihil occupy</h5>
  <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/4.png" alt="img04"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Kale chips lomo biodiesel</h5>
  <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/5.png" alt="img05"/>
  </figure>
  </li>
  <li>
  <figure>
  <figcaption>
  <h5>Exercitation occaecat</h5>
  <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
  </figcaption>
  <img src="assets/plugins/google-grid-gallery/img/large/6.png" alt="img06"/>
  </figure>
  </li>
  </ul>
  <nav>
  <i class="material-icons nav-prev">keyboard_arrow_left</i>
  <i class="material-icons nav-next">keyboard_arrow_right</i>
  <i class="material-icons nav-close">close</i>
  </nav>
  </section><!-- // slideshow -->
  </div><!-- // grid-gallery -->
</div>
@endsection
