@extends(env('APP_TEMPLATE'))

@section('content')

<div class="row">

    <div class="col-md-12">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('demo/la.jpg') }}" alt="Los Angeles">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('demo/chicago.jpg') }}" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('demo/ny.jpg') }}" alt="New York">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            
        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-4">

        <div class="card">
            <img class="card-img-top" src="{{ asset('demo/img_avatar2.png') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some example text. Some example text.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    </div>

    <div class="col-md-4">

        <div class="card">
            <img class="card-img-top" src="{{ asset('demo/img_avatar3.png') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some example text. Some example text.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    
    </div>

    <div class="col-md-4">

        <div class="card">
            <img class="card-img-top" src="{{ asset('demo/img_avatar4.png') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some example text. Some example text.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        
    </div>

</div>

@endsection