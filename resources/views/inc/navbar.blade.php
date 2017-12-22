{{-- <nav class="navbar navbar-inverse ">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="http://localhost:8889/lsapp/public/">{{config('app.name', 'Restart')}}</a>
       </div>

       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a href="http://localhost:8889/lsapp/public/">Home</a></li>
           <li><a href="about">About</a></li>
           <li><a href="services">Services</a></li>
           <li><a href="http://localhost:8889/lsapp/public/posts">Blog</a></li>
           <li><a href="#">Contact</a></li>
         </ul>

         <form class="navbar-form navbar-right">
           <div class="form-group">
             <input type="text" placeholder="Email" class="form-control">
           </div>
           <div class="form-group">
             <input type="password" placeholder="Password" class="form-control">
           </div>
           <button type="submit" class="btn btn-success">Sign in</button>
         </form>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="http://localhost:8889/lsapp/public/posts/create">Create Post</a></li>
         </ul>
       </div><!--/.navbar-collapse -->
     </div>
   </nav> --}}

       <div id="app">
           <nav class="navbar navbar-inverse">
               <div class="container">
                   <div class="navbar-header">

                       <!-- Collapsed Hamburger -->
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                           <span class="sr-only">Toggle Navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>

                       <!-- Branding Image -->
                       <a class="navbar-brand" href="{{ url('/') }}">
                           {{ config('app.name', 'Laravel') }}
                       </a>
                   </div>

                   <div class="collapse navbar-collapse" id="app-navbar-collapse">
                       <!-- Left Side Of Navbar -->
                       <ul class="nav navbar-nav">
                           &nbsp;
                       </ul>
                       <ul class="nav navbar-nav">
                         <li class="active"><a href="http://localhost:8889/lsapp/public/">Home</a></li>
                         <li><a href="about">About</a></li>
                         <li><a href="services">Services</a></li>
                         <li><a href="http://localhost:8889/lsapp/public/posts">Blog</a></li>
                         <li><a href="#">Contact</a></li>
                       </ul>
                       <!-- Right Side Of Navbar -->
                       <ul class="nav navbar-nav navbar-right">
                           <!-- Authentication Links -->
                           @guest
                               <li><a href="{{ route('login') }}">Login</a></li>
                               <li><a href="{{ route('register') }}">Register</a></li>
                           @else
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                   </a>

                                   <ul class="dropdown-menu">
                                       <li>
                                           <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                               Logout
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               {{ csrf_field() }}
                                           </form>
                                       </li>
                                   </ul>
                               </li>
                           @endguest
                       </ul>
                   </div>
               </div>
           </nav>

           @yield('content')
       </div>

       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}"></script>
