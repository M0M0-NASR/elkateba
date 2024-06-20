<nav class="navbar navbar-expand-lg ">
  <div class="container main-color">
  {{-- start logo and collapse button --}}
  
    <a class="navbar-brand mx-0 px-0" href="#">
      <img class="logo" width="70" src="{{asset('assets/imgs/background.png')}}" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse main-color justify-content-between" id="navbarSupportedContent">
  {{-- end logo and collapse button --}}
      
  {{-- start link list --}}
      <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
        <li class="nav-item @yield('main_active')">
          <a class="nav-link " aria-current="page" href="{{route('student.index')}}" >الطلاب</a>
        </li>  
        <li class="nav-item @yield('products_active')">
          <a class="nav-link " aria-current="page" href="{{route('sarya.index')}}">السرايا</a>
        </li>
        <li class="nav-item @yield('complince_active')">
          <a class="nav-link " aria-current="page" href="{{route('fasela.index')}}">فصائل</a>
        </li>
        <li class="nav-item @yield('complince_active')">
          <a class="nav-link " aria-current="page" href="{{route('anbar.index')}}">عنابر</a>
        </li>
          
        <li class="nav-item @yield('about_active')">
          <a class="nav-link " >العيادة</a>
        </li>      
        <li class="nav-item @yield('complince_active')">
          <a class="nav-link " aria-current="page" href="{{route('anbar.index')}}">الشكاوي</a>
        </li>
              
          
      </ul>
  {{-- end link list --}}

  {{-- start search bar --}}

        
      <div class="d-flex gap-2" role="search">
          <input id="searchInput" class="form-control" type="search" placeholder="اكتب اسم السلعة مثل:ارز" aria-label="Search" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <button class="btn btn-outline-success" type="" >بحث</button>
      </div>      
    
      </div>
  {{-- end search bar --}}
  </div>
</nav>

