<header>
    {{--NAVBAR AVEC OFFCANVAS --}}
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 text-success fw-bold" ><img src="{{asset('template/images/inventory.png')}}" alt="Logo d'EMI"  class="me-2" style="height:40px;"></a>
        {{-- me-4 pour ne pas que le burger menu soit collé à droite --}}
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header border border-top-0 border-start-0 border-end-0 border-success">{{--border-secondary--}}
                <h5 class="offcanvas-title text-success fw-bold" id="offcanvasExampleLabel"><img src="{{asset('template/images/inventory.png')}}" alt="Logo d'EMI"  class="me-2 ms-2 mt-0" style="height:40px;"></h5>
                <button type="button" class="btn-close btn-close-white me-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mt-2 mt-md-auto me-0 ms-md-auto mb-2 mb-md-0">
                    {{-- mb-2 mb-md-0 pour mettre une marge entre les 2 btn dans le draw = offcanvas: --}}
                    <li class="nav-item ms-2 mb-3 mb-md-0">
                    <a href="{{ url('/home/login') }}" class="btn btn-sm fw-bold me-2" style="background: #10B981;color:#334155;">Log in</a>
                    </li>
                    <li class="nav-item ms-2">
                    <a href="{{ url('/admin/login') }}" class="btn btn-sm fw-bold me-2" style="background: #F59E0B;color:#334155;">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>