@foreach ($related_products as $r_product)<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true"> <!--  Modal -->
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url({{ asset('assets/img') }}/{{$r_product->image}})" href="{{ asset('assets/img') }}/{{$r_product->image}}" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="{{ asset('assets/img/product-5-alt-1.jpg') }}" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="{{ asset('assets/img/product-5-alt-2.jpg') }}" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                            <div class="col-lg-6">
                                <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="p-5 my-md-4">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    </ul>
                                    <h2 class="h4">{{$r_product->name}}</h2>
                                    <p class="text-muted">${{$r_product->regular_price}}</p>
                                    <p class="text-small mb-4">{{$r_product->description}}</p>
                                    <div class="row align-items-stretch mb-4">
                                        <div class="col-sm-7 pr-sm-0">
                                            <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="#" wire::click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Ajouter au panier</a></div>
                                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Ajouter à la liste de souhait</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <section class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <!-- PRODUCT SLIDER-->
                        <div class="row m-sm-0">
                            <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
                                <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                                    <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{ asset('assets/img') }}/{{$product->image}}" alt="{{$product->name}}"></div>
                                    <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{ asset('assets/img/product-detail-2.jpg') }}" alt="..."></div>
                                    <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{ asset('assets/img/product-detail-3.jpg') }}" alt="..."></div>
                                    <div class="owl-thumb-item flex-fill mb-2"><img class="w-100" src="{{ asset('assets/img/product-detail-4.jpg') }}" alt="..."></div>
                                </div>
                            </div>
                            <div class="col-sm-10 order-1 order-sm-2">
                                <div class="owl-carousel product-slider" data-slider-id="1">
                                <a class="d-block" href="{{ asset('assets/img') }}/{{$product->image}}" data-lightbox="product" title="Product item 1">
                                <img class="img-fluid" src="{{ asset('assets/img') }}/{{$product->image}}" alt="{{$product->name}}"></a>
                                <a class="d-block" href="{{ asset('assets/img/product-detail-2.jpg') }}" data-lightbox="product" title="Product item 2">
                                <img class="img-fluid" src="{{ asset('assets/img/product-detail-2.jpg') }}" alt="..."></a>
                                <a class="d-block" href="{{ asset('assets/img/product-detail-3.jpg') }}" data-lightbox="product" title="Product item 3">
                                <img class="img-fluid" src="{{ asset('assets/img/product-detail-3.jpg') }}" alt="..."></a>
                                <a class="d-block" href="{{ asset('assets/img/product-detail-4.jpg') }}" data-lightbox="product" title="Product item 4">
                                <img class="img-fluid" src="{{ asset('assets/img/product-detail-4.jpg') }}" alt="..."></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT DETAILS-->
                    <div class="col-lg-6">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        </ul>
                        <h1>{{$product->name}}</h1>
                        <p class="text-muted lead">${{$product->regular_price}}</p>
                        <p class="text-small mb-4">{{$product->short_description}}</p>
                        <div class="row align-items-stretch mb-4">
                            <div class="col-sm-5 pr-sm-0">
                                <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantité</span>
                                    <div class="quantity">
                                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="/panier">Ajouter au panier</a></div>
                        </div><a class="btn btn-link text-dark p-0 mb-4" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a><br>
                        <ul class="list-unstyled small d-inline-block">
                            <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ml-2 text-muted">{{$product->SKU}}</span></li>
                            <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ml-2" href="#">Demo Products</a></li>
                            <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ml-2" href="#">Innovation</a></li>
                        </ul>
                    </div>
                </div>
                <!-- DETAILS TABS-->
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
                </ul>
                <div class="tab-content mb-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="p-4 p-lg-5 bg-white">
                            <h6 class="text-uppercase">Product description </h6>
                            <p class="text-muted text-small mb-0">{{$product->description}}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="p-4 p-lg-5 bg-white">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="media mb-3"><img class="rounded-circle" src="{{ asset('assets/img/customer-1.png') }}" alt="" width="50">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                            <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                            <ul class="list-inline mb-1 text-xs">
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                            <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="media"><img class="rounded-circle" src="{{ asset('assets/img/customer-2.png') }}" alt="" width="50">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                            <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                            <ul class="list-inline mb-1 text-xs">
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                            <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RELATED PRODUCTS-->
                <h2 class="h5 text-uppercase mb-4">Related products</h2>
                <div class="row">
                @foreach ($related_products as $r_product)
                    <!-- PRODUCT-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product text-center skel-loader">
                            <div class="d-block mb-3 position-relative"><a class="d-block" href="{{route('products.details',['slug'=>$r_product->slug])}}"><img class="img-fluid w-100" src="{{ asset('assets/img') }}/{{$r_product->image}}" alt="{{$r_product->name}}"></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#">Ajouter au panier</a></li>
                                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="{{route('products.details',['slug'=>$r_product->slug])}}">{{$r_product->name}}</a></h6>
                            <p class="small text-muted">${{$r_product->regular_price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>