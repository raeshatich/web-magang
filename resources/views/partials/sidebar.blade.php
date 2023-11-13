<div id="mySidenav" class="sidenav">
    <ul class="menu_sidebar">
       <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
       <li><a href="/home">Home</a></li>
       <li><a href="/syarat">Persyaratan</i></a></li>
       <li><a href="/info">Informasi</a></li>
       <li><a href="/logout">Logout</a></li>
    </li>
    </ul>
 </div>
 <header class="header">
   <div class="header_top">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="full">
                  <span class="toggle_icon" style="cursor:pointer " onclick="openNav()"><img src="assets/images/menu.png " alt="#" /></span>
                  <h3>

                    Welcome back, {{ auth()->user()->name }} 
                 </h3> 
       

                  
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
 