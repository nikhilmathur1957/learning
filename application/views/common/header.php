  <body>

    <div class="body">

      <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
          <div class="header-top header-top-default header-top-borders border-bottom-0">
            <div class="container h-100">
              <div class="header-row h-100">
                <div class="header-column justify-content-end">
                  <div class="header-row">
                    <nav class="header-nav-top">
                      <ul class="nav nav-pills">
                        <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                          <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> 1234 Street Name, City Name</span>
                        </li>
                        <li class="nav-item nav-item-borders py-2">
                          <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
                        </li>
                        <li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
                          <a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column">
                <div class="header-row">
                  <div class="header-logo">
                    <a href="<?php echo base_url(); ?>">
                      <img alt="MLPC" src="<?php echo base_url(); ?>assets/img/demos/mlpc_logo.jpg">
                    </a>
                  </div>
                </div>
              </div>
              <div class="header-column justify-content-end">
                <div class="header-row">
                  <div class="header-nav order-2 order-lg-1">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                      <nav class="collapse">
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link <?php if($this->uri->segment(1) == ''){?> active <?php } ?>" href="<?php echo base_url(); ?>">
                              Home
                            </a>
                          </li>
                          <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link <?php if($this->uri->segment(2) == 'about'){?> active <?php } ?>" href="<?php echo base_url('welcome/about/'); ?>">
                              About Us
                            </a>
                          </li>
                          
                        </ul>
                      </nav>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>