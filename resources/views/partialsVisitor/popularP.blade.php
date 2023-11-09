
<div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Maisons les plus recherchées
          </h2>
        </div>
        {{-- <div class="col-lg-6 text-lg-end">
          <p>
            <a
            href="{{ route('proprietes.show', $propriete) }}"
            target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >Voir toutes les propriétés</a
            >
          </p>
        </div> --}}
      </div>
      <div class="row">
        <div class="row">
          @foreach ($proprieteTops as $proprieteTop)
          <div class="col-sm-12 col-lg-4">
            
             <!-- product card -->
             <div class="product-item bg-light">
                <div class="card">
                   <div class="thumb-content">
                      <!-- <div class="price">$200</div> -->
                      <a href="">
                      <img class="card-img-top img-fluid" src="{{asset('assets/uploads/proprietes/'.$proprieteTop->Image2 )}}" alt="Card image cap">
                      </a>
                   </div>
                   <div class="card-body">
                      <h4 class="card-title"><a href=""> {{$proprieteTop->DesignProp}} </a></h4>
                      <ul class="list-inline product-meta">
                         <li class="list-inline-item">
                            <a href="">{{$proprieteTop->Categorie->LibCat}}</a>
                         </li>
                         <li class="list-inline-item">
                            <a href=""><i class="fa fa-calendar"></i> {{$proprieteTop->Descript}} </a>
                         </li>
                      </ul>
                      <p class="card-text"> {{$proprieteTop->Descript}} </p>
                      
                      <a
                      href="{{ route('proprietes.show', $proprieteTop->NumProp) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                   </div>
                </div>
             </div>
          </div>
          @endforeach
          <div
            id="property-nav"
            class="controls"
            tabindex="0"
            aria-label="Carousel Navigation"
            >
              <span
              class="prev"
              data-controls="prev"
              aria-controls="property"
                tabindex="-1"
                >Prev</span
                >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Next</span
              >
            </div>
        </div>
        {{-- <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="AdminProp/vendors/images/img_4.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 Botour Imm, Ave. 21BC</span
                      >
                      <span class="city d-block mb-3">Gombe, Kinshasa</span>
                      
                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="{{ route('proprietes.show', $propriete->NumProp) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->
              
              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="AdminProp/vendors/images/img_5.jpg" alt="Image" class="img-fluid" />
                </a>
                
                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                    >5232 Bumbu Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">Makala, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>
                    
                    <a
                      href="{{ route('proprietes.show', $propriete->NumProp) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                      >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="AdminProp/vendors/images/img_6.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                    >5232 Manzengele Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">Ngaba, Kin</span>
                    
                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="{{ route('proprietes.show', $propriete->NumProp) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="AdminProp/vendors/images/img_7.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                    >5232 DGC Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">Ngaliema, Kinshasa</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>
                    
                    <a
                    href="{{ route('proprietes.show', $propriete->NumProp) }}"
                    class="btn btn-primary py-2 px-3"
                      >See details</a
                      >
                    </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="AdminProp/vendors/images/img_8.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 Kipasi Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">Barumbu, Kinshasa</span>
                    
                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .item -->
              
              <div class="property-item">
                <a href="{{ route('proprietes.show', $propriete->NumProp) }}" class="img">
                  <img src="AdminProp/vendors/images/img_1.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="{{ route('proprietes.show', $propriete->NumProp) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .item -->
              </div>
            
          </div>
        </div> --}}
      </div>
    </div>
  </div>