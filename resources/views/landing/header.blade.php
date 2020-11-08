@include('landing.headTag')

<nav class="navbar my-navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src=" {{ asset('images/cyber.png') }}" alt="" />
            </a>

        <button
            class="navbar-toggler border-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
          <span
              class="iconify bar-icon"
              data-icon="fa-solid:bars"
              data-inline="false"
          ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-active">
                    <a class="nav-link" href="#"
                    >Home <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron bg-white">
    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col-md-5">
                <h1 style="margin-top: 60px;" class="mb-3 font-weight-bold">
                    Play With Local Community
                </h1>
                <p class="mb-4">
                    Lorem ipsum dolor sit, amet consectetur <br />
                    adipisicing elit. Unde mollitia provident,
                </p>
                <button class="btn btn-warning font-weight-bold">
                    Get Started
                </button>
            </div>
            <div class="col-md-6">
                <img
                    src="{{asset('images/landing.jpg')}}"
                    alt=""
                    class="img-fluid"
                />
            </div>
        </div>
    </div>
</div>
<div class="content-text col-8 col-lg-6 mt-20 mr-15">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur debitis eaque error eum eveniet, explicabo facere id inventore labore laboriosam minus modi nostrum reprehenderit rerum saepe, sint vel voluptates!

</div>
