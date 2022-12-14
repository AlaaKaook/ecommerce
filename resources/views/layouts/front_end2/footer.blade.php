  <!-- Footer Section Begin -->
  <footer class="footer spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer__about">
                      <div class="footer__about__logo">
                          <a href="./index.html"><img src="img/logo.png" alt=""></a>
                      </div>
                      <ul>
                          <li>Address : Damascus</li>
                          <li>Phone : +963 999999999</li>
                          <li>Email : alaaqaouq1998@gmail.com</li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                  <div class="footer__widget">
                      <h6>Categories</h6>
                      @foreach ($categories as $category)
                          @if ($loop->index < 6)
                              <ul>
                                  <li><a
                                          href="{{ route('product_by_category', [$category->slug, $category->name]) }}">{{ $category->name }}</a>
                                  </li>
                              </ul>
                          @endif
                      @endforeach
                  </div>
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="footer__widget">
                      <h6>Join Our Newsletter Now</h6>
                      <p>Get E-mail updates about our latest shop and special offers.</p>
                      <form action="{{ route('subscriber') }}">
                          <input id="email" type="email" placeholder="Enter your mail"
                              class="form-control @error('email') is-invalid @enderror" name="email"
                              value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          {{-- <input type="email" placeholder="Enter your mail"> --}}
                          <button type="submit" class="site-btn">Subscribe</button>
                      </form>
                      {{-- <div class="footer__widget__social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                      </div> --}}
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="footer__copyright">
                      <div class="footer__copyright__text">
                          <p>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              This Website is Work By <i class="fa fa-heart" aria-hidden="true"></i> <a href="#"
                                  target="_blank">ALAA KAOOK</a> <i class="fa fa-heart" aria-hidden="true"></i> 2022
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          </p>
                      </div>
                      <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->
