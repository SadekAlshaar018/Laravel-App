<nav class="navbar navbar-inverse ">
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
           <li class="active"><a href="public/">Home</a></li>
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
   </nav>
