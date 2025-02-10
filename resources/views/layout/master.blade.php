<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include( 'layout.header' )
        <title>Laravel Library</title>

    </head>
    <body>
        <div class="menu">
            <ul>
              <li class="profile ">
                <div class="img-box">
                  <img src="{{asset('upload/images/user.webp')}}" alt="profile" />
                </div>
                <h2>Library </h2>
              </li>
              <li>
                <a href="/">
                  <i class="fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li>
                <a href="/books/index">
                    <i class="fa-solid fa-book"></i>
                  <p> Books</p>
                </a>
              </li>
            </ul>
        </div>

        <div class="content">
        @yield('my-body')
        </div>
        @include('layout.footer')
    </body>
</html>
