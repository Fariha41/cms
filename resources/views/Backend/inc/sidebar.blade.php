<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{url('/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="{{route('branch.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                brance
                            </a>
                            
                            <a class="nav-link" href="{{('location')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                location
                            </a>

                            <a class="nav-link" href="{{route('parcel.type')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                parcel type
                            </a>


                            <a class="nav-link" href="{{('price set up')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                price set up
                            </a>

                            

                            <a class="nav-link" href="{{route('admin.booking')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Booking
                            </a>
                            <a class="nav-link" href="{{('cargo')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                cargo
                            </a>
                            <a class="nav-link" href="{{('report')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                report
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">