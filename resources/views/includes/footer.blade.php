<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter text-uppercase">{{Theme::titleApps()}}</div>
        <p>{{Theme::descriptionApps()}}</p>
        <p><i class="fa fa-map-pin"></i>{{Theme::locationApps()}}</p>
        <p><i class="fa fa-phone"></i> Phone : {{Theme::phoneApps()}}</p>
        <p><i class="fa fa-envelope"></i> E-mail : {{Theme::emailApps()}}</p>

      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7 text-uppercase">Link</h6>
        <ul class="footer-ul">
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#"> Client Gateway</a></li>
          <li><a href="#"> Frequently Ask Questions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom methods-payment">
        <h6 class="heading7 text-uppercase">Metode Pembayaran</h6>
        <div class="footer-ul">
          <li><a href="">BNI 0278-797-508 A/n Dimas Prasetyo</a></li>
          <li><a href="">BRI </a></li>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom social-icons">
        <div class="fb-page" data-href="" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="navigation-link-social">
              <blockquote cite=""><a class="" href="https://www.facebook.com/dimas.setyo.35728466" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></blockquote>
              <blockquote cite=""><a class="" href="https://www.instagram.com/dimasrecovery" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></blockquote>
              <blockquote cite=""><a class="" href=""><i class="fa fa-twitter"></i> Twitter</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© {{date('Y')}} {{Theme::titleApps()}} - Recoverysolution </p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="{{url('/about')}}">About us</a></li>
        <li><a href="{{url('/servis')}}">Servis</li>
        <li><a href="{{url('/faq')}}">Faq</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
        <li><a href="{{url('/blog')}}">Blog</a></li>
      </ul>
    </div>
  </div>
</div>
