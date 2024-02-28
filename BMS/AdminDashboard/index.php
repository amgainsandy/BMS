<?php
   session_start();
      
   $SESSIONEmail= $_SESSION['admin_email'];

      if(empty($SESSIONEmail)){
         header("Location:../frontpage.php");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="style1.css">
</head>
<body>
      <!-- top left section -->
<div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2>BS<span class="danger">System</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top left !-->

         <!-- sidebar menus -->
          <!-- sidebar menus -->
<div class="sidebar">

    <!-- Category Dropdown -->
    <div class="category-dropdown">
        <a class="" href="#" id="drop_menu">
            <span class="material-symbols-sharp">arrow_drop_down</span>
            <h3>Category</h3>
        </a>
        <div class="category-submenu" id="sub_menu">
            <a href="#">Add Category</a>
            <a href="#">Delete Category</a>
            <a href="#">Update Category</a>
            <a href="#">View Category</a>
         </div>
    </div>
    <!-- End Category Dropdown -->
    <a href="#">
        <span class="material-symbols-sharp">report_gmailerrorred</span>
        <h3>Reports</h3>
    </a>


    <a href="#">
        <span class="material-symbols-sharp">settings</span>
        <h3>Settings</h3>
    </a>

    <a href="../logout.php">
        <span class="material-symbols-sharp">logout</span>
        <h3>Logout</h3>
    </a>
</div>
</aside>



            <!-- main -->
      <main>
           <h1>Dashboard</h1>

           <div class="date">
             <input type="date" >
           </div>

        <div class="insights">

            <!-- middle section (visual representation of datas)   -->
            <div class="sales">
               <span class="material-symbols-sharp">trending_up</span>
               <div class="middle">

                 <div class="left">
                   <h3>User Registrations</h3>
                   <h1></h1>
                 </div>
                  <div class="progress">
                      <svg>
                         <circle  r="" cy="" cx=""></circle>
                      </svg>
                      <div class="number"><p></p></div>
                  </div>

               </div>
               <small></small>
            </div>
         
              <div class="expenses">
                <span class="material-symbols-sharp">local_mall</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Bounce Rates</h3>
                    <h1></h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="" cy="" cx=""></circle>
                       </svg>
                       <div class="number"><p></p></div>
                   </div>
 
                </div>
                <small></small>
             </div>
         
               <div class="income">
                <span class="material-symbols-sharp">stacked_line_chart</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>New Orders</h3>
                    <h1></h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="" cy="" cx=""></circle>
                       </svg>
                       <div class="number"><p></p></div>
                   </div>
 
                </div>
                <small></small>
             </div>

        </div>

         <!-- User Details -->
      <div class="user_details">
         <h2>Admin details</h2>
         <table> 
             <thead>
              <tr>
                <th>User Name</th>
                <th>User Number</th>
                <th>Payments</th>
                <th>Status</th>
              </tr>
             </thead>
              <tbody>
                 <tr>
                   <td>Sandesh Amgain</td>
                   <td>6725</td>
                   <td></td>
                   <td class="warning"></td>
                   <td class="primary"></td>
                 </tr>
                 <tr>
                  <td>Sagun Dhital</td>
                  <td>6726</td>
                  <td></td>
                  <td class="warning"></td>
                  <td class="primary"></td>
                </tr>
              </tbody>
         </table>
         <a href="#">Show All</a>
      </div>

      </main>
    
    <div class="right">

<div class="top">
   <button id="menu_bar">
     <span class="material-symbols-sharp">menu</span>
   </button>

   <!-- Dark mode and Light mode -->
    <div class="profile">
       <div class="info">
         <br>
           <p>
           <?php
            echo $SESSIONEmail;
            ?>
           </p>
           <!-- <small class="text-muted"></small> -->
       </div>
       <div class="profile-photo">
         <img src="person-circle (1).svg" alt=""/>
       </div>
    </div>
</div>

   <!-- recent updates -->
  <div class="recent_updates">
     <h2>Recent Update</h2>
   <div class="updates">
      <div class="update">
         
       
         </div>


   </div>


   <!-- <script src="script.js"></script> -->
   <script>
    
//dropdown
var drop_btn = document.querySelector('#drop_menu');
var drop_item = document.querySelector('#sub_menu');
drop_item.style.display = "none"


drop_btn.addEventListener('click', function(){
  // alert('clicked')
  drop_item.style.display = 'block'
  // drop_item.style.flexDirection = 'column'
})
drop_btn.removeEventListener()


const  sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');


const themeToggler = document.querySelector('.theme-toggler');



menuBtn.addEventListener('click',()=>{
       sideMenu.style.display = "block"
})
closeBtn.addEventListener('click',()=>{
    sideMenu.style.display = "none"
})

themeToggler.addEventListener('click',()=>{
     document.body.classList.toggle('dark-theme-variables')
     themeToggler.querySelector('span:nth-child(1').classList.toggle('active')
     themeToggler.querySelector('span:nth-child(2').classList.toggle('active')
})
   </script>
</body>
</html>