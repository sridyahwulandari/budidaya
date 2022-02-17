 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="assets/images/logo.png" alt="Chain App Dev">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a class="{{ Request::is('beranda*') ? 'active font-bold' : ''}}" href="/beranda">Beranda</a></li>
            <li class="scroll-to-section"><a href="#">Tentang Kami</a></li>
            <li class="scroll-to-section"><a href="#">Informasi</a></li>
            <li class="scroll-to-section"><a href="#">Produk</a></li>
            <li class="scroll-to-section"><a href="#">Hubungi Kami</a></li>
            <li><div class="gradient-button"><a id="modal_trigger" class="{{ Request::is('masuk*') ? 'active font-bold' : ''}}" href="/masuk"><i class="fa fa-sign-in-alt"></i> Masuk</a></div></li> 
          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->