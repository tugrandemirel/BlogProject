@extends('front.layout.master')

{{-- sayfa title belirleme. (sayfaya özel) --}}
{{-- Header içerisinde bulunan title kısmında bulunan yield içerisindeki title ye karşılık gelecek olan kısım --}}
@section('title','Anasayfa')

{{-- layout icerisinde bulunan master icindeki yield e aasgıdaki alani gonderdim --}}
@section('content')
        <div class="col-md-9 mx-auto">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 18, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on August 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on July 8, 2019</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    <div class="col-md-3">
        <div class="list-group">
            <a href="" class="list-group-item">Günlük Hayat <span class="badge bg-success">12</span></a>
            <a href="" class="list-group-item">Eğitim <span class="badge bg-danger">12</span></a>
            <a href="" class="list-group-item">Teknolıji <span class="badge bg-primary">12</span></a>
        </div>
    </div>
@endsection

