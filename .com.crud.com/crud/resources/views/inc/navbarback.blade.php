
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container">

   <a class="navbar-brand" href="/">{{ config('app.name', 'CRUDv1') }}</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <!-- NAV BAR MOBILE COLLAPSE -->
     <div class="collapse navbar-collapse" id="navbarCollapse">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/about">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/services">Services</a>
         </li>
       </ul>

       <ul class="navbar-nav ml-auto nav-item">
            <button onclick="location.href = '/post';" class="btn btn-success ">Post</button>
        </ul>

       <!-- DROPDOWN NAV -->
              <!-- <ul class="navbar-nav ml-auto nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="/post" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
                   <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="/post">Show All Posts</a>
                     <a class="dropdown-item" href="/post/create">Create A Post</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                   </div>
               </ul> -->
       <!-- END DROPDOWN NAV -->

       <!-- <form class="form-inline mt-2 mt-md-0">
         <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form> -->
       
     </div>
   <!-- NAV BAR MOBILE COLLAPSE -->

 </div>
 </nav>
