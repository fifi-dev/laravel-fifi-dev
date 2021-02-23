<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true"> <!--  Modal -->
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url({{ asset('assets/img/product-5.jpg') }})" href="{{ asset('assets/img/product-5.jpg') }}" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="{{ asset('assets/img/product-5-alt-1.jpg') }}" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="{{ asset('assets/img/product-5-alt-2.jpg') }}" title="Red digital smartwatch" data-lightbox="productview"></a></div>
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
                                    <h2 class="h4">Red digital smartwatch</h2>
                                    <p class="text-muted">$250</p>
                                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                                    <div class="row align-items-stretch mb-4">
                                        <div class="col-sm-7 pr-sm-0">
                                            <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantité</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="/panier">Ajouter au Panier</a></div>
                                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Ajouter à la wish list</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Votre Panier</h1>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Panier</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5">
           
                <h2 class="h5 text-uppercase mb-4">Panier</h2>
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <!-- CART TABLE-->
                        <div class="table-responsive mb-4">
                            <table class="table">
                            @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Success</strong> {{Session::get('success_message')}}
                            </div>
                            @endif
                                <thead class="bg-light">
                                    <tr>
                                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Produit</strong></th>
                                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Prix</strong></th>
                                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantité</strong></th>
                                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                                        <th class="border-0" scope="col"> </th>
                                    </tr>
                                </thead>
                                @if(Cart::count() > 0)
                                <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <th class="pl-0 border-light" scope="row">
                                            <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.html"><img src="{{ asset('assets/img') }}/{{$item->image}}" alt="{{$item->model->name}}" width="70" /></a>
                                                <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></strong></div>
                                            </div>
                                        </th>
                                        <td class="align-middle border-light">
                                            <p class="mb-0 small">${{$item->model->regular_price}}</p>
                                        </td>
                                        <td class="align-middle border-light">
                                            <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Quantité</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                    <input class="form-control form-control-sm border-0 shadow-0 p-0" type="text" value="{{$item->qty}}" />
                                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle border-light">
                                            <p class="mb-0 small">${{$item->subtotal}}</p>
                                        </td>
                                        <td class="align-middle border-light"><a class="reset-anchor" href="#"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                            <p>Pas de produit dans le panier</p>
                            @endif
                            </table>
                        </div>
                        <!-- CART NAV-->
                        <div class="bg-light px-4 py-3">
                            <div class="row align-items-center text-center">
                                <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="/boutique"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continuer votre shopping</a></div>
                                <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="/paiement">Payer<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ORDER TOTAL-->
                    <div class="col-lg-4">
                        <div class="card border-0 rounded-0 p-lg-4 bg-light">
                            <div class="card-body">
                                <h5 class="text-uppercase mb-4">Total du Panier</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Sous-total</strong><span class="text-muted small">${{Cart::subtotal()}}</span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>${{Cart::total()}}</span></li>
                                    <li>
                                        <form action="#">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="text" placeholder="Entrer votre coupon">
                                                <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Ajouter coupon</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>