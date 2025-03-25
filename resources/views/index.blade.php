@extends('layouts.layout')



@section('content')
    <!--
      - PRODUCT
    -->

    <!-- <div class="product-container">

      <div class="container"> -->


        <!--
          - SIDEBAR
        -->

        <!-- <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Categorias</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Homem</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="/camisas/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Camisas</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/shortsjeansmen/categoria" class="sidebar-submenu-title">
                      <p class="product-name">shorts & jeans</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/calcadomen/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Calçado</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/carteiras/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Carteiras</p>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Mulher</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="/vestidos/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Vestidos</p>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="/bolsas/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Bolsas</p>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="/bijutaria/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Bijuteria</p>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="/shortsjeanswoman/categoria" class="sidebar-submenu-title">
                      <p class="product-name">shorts & jeans</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/calcadowoman/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Calçado</p>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="/maquiagem/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Maquiagem</p>

                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Informática</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="/componentes/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Componentes</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/perifericos/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Periféricos</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/desktop/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Desktop</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="/portateis/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Portáteis</p>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="/smartphones/categoria" class="sidebar-submenu-title">
                      <p class="product-name">Smartphones</p>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

        </div> -->



        <div class="product-box">




          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">
                @forelse ($items as $item)

                <div class="showcase">

                    <div class="showcase-banner">

                    <img src="{{ asset($item->thumbnail_path)}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                    <img src="{{ asset($item->thumbnail_path)}} " alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                    <div class="showcase-actions">

                        <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                        <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                        </button>

                    </div>

                    </div>

                    <div class="showcase-content">

                    <a href="#" class="showcase-category">{{$item->name}}</a>

                    <a href="#">
                        <h3 class="showcase-title">{{$item->description}}</h3>
                    </a>

                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                        <p class="price">{{$item->price}}</p>
                        <del>$75.00</del>
                    </div>

                    </div>

                </div>

                @empty
                <p>No items.</p>
                @endforelse

            </div>

          </div>
<!--
        </div>

      </div> -->

    </div>
    @endsection
