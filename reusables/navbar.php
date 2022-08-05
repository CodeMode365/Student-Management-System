     <div class="sidebar close ">
         <div class="logo-details">
             <i class='bx bxl-c-plus-plus'></i>
             <span class="logo_name">Edu SyS</span>
         </div>
         <ul class="nav-links">
             <li class="active">
                 <a href="#">
                     <i class='bx bx-home'></i>
                     <span class="link_name">Home</span>
                 </a>
                 <ul class="sub-menu blank">
                     <li><a class="link_name" href="#">Home</a></li>
                 </ul>
             </li>
             <li>
                 <div class="iocn-link" onclick="search('');">
                     <a href="#">
                         <i class='bx bx-collection'></i>
                         <span class="link_name">Faculty</span>
                     </a>
                     <i class='bx bxs-chevron-down arrow'></i>
                 </div>
                 <ul class="sub-menu">
                     <li onclick="search('');"><a class="link_name" href="#">Faculty</a></li>
                     <li onclick="search('DCOM')"><a href="#">DCOM</a></li>
                     <li onclick="search('Civil')"><a href="#">Civil</a></li>
                     <li onclick="search('E&E')"><a href="#">E & E</a></li>
                     <li onclick="search('Electrical')"><a href="#">Electriacl</a></li>
                     <li onclick="search('Architecture')"><a href="#">Architecutre</a></li>
                 </ul>
             </li>
             <!-- <li  class="disabled">
                 <a href="# disabled">
                     <i class='bx bx-pie-chart-alt-2'></i>
                     <span class="link_name">Learning <br>Materials</span>
                 </a>
                 <ul class="sub-menu blank">
                     <li><a class="link_name disabled" href="#">Materials</a></li>
                 </ul>
             </li>
              -->
             <li>
                 <div class="profile-details">
                     <div class="profile-content">
                         <img src="../assets/profiles/<?php echo $_SESSION['profile'];?>" alt="profileImg">
                     </div>
                     <div class="name-job">
                         <div class="profile_name"><?php echo  "<h6>" . ucfirst(strtolower($_SESSION['username'])) . "</h6>"; ?></div>
                         <div class="job">
                            <?php
                            if($_SESSION['status']==1){
                                echo 'Admin';
                            }elseif($_SESSION['status'] != 1){
                                echo 'Guest';
                            }
                            ?>
                         </div>
                     </div>
                     <a class="text-decoration-none text-light " href="../phpLogs/logout.php">
                         <i class='bx bx-log-out'></i></a>
                 </div>
             </li>
         </ul>
     </div>
     <section class="home-section bg-dark">
         <div class="home-content" style="position: fixed;">
             <i class='bx bx-menu'></i>

         </div>