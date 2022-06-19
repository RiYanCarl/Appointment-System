<?php

include_once("Connections/connection.php");
$con = connection();
if(!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION['Access']) && ($_SESSION['Access']) == "admin"){
  "Welcome ".$_SESSION['Login'];
}

// $sql = "SELECT id FROM stakeholder  WHERE office='Faculty'";

$sql = "SELECT * FROM stakeholders   WHERE office ='Faculty' ORDER BY id DESC";
$client = $con->query($sql) or die ($con->error);
$row = $client->fetch_assoc();

?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="UTF-8">
  <title>Faculty Appointments</title>
  <script type="text/javascript" src="JS/website.js"  defer></script>
  <link rel="stylesheet" type="text/css" href="CSS/index.css"></link>
  <link rel="stylesheet" type="text/css" href="CSS/view_appointment.css"></link>
  <script type="text/javascript" src="JS/website.js"  defer></script>
</head>

<body>
  <!-- header starts -->  
  <header class="header">
        <button class="menu-icon-btn" data-menu-icon-btn>
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="menu-icon"><g ><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></g></svg>
          <div class="menu"> MENU</div>  </button>
      <div class="Welcome"><h1> Welcome to University of Rizal System Morong</h1></h1></div>
    </header>
    <!-- header ends -->
        <div class="container">
            
        <aside class="sidebar" data-sidebar>
          <div class="top-sidebar">
            <a href="#" class="channel-logo"><img src="Picture/urslogo.png" alt="URS Logo" ></a>
            <div class="hidden-sidebar University">University of Rizal System</div>
            <div class="hidden-sidebar Campus">Morong Campus</div>
          </div>

          <div class="middle-sidebar">
              
            <ul class="sidebar-list">

              <li class="sidebar-list-item ">
                <a href="#" class="sidebar-link" onclick="window.location.href='index.php '">
                    <svg class="sidebar-icon" viewBox="0 0 36 36" preserveAspectRatio="xMidYMid meet" focusable="false" >
                        <path fill="currentColor" d="M33 19a1 1 0 0 1-.71-.29L18 4.41L3.71 18.71A1 1 0 0 1 2.3 17.3l15-15a1 1 0 0 1 1.41 0l15 15A1 1 0 0 1 33 19Z" class="clr-i-solid clr-i-solid-path-1"/>
                        <path fill="currentColor" d="M18 7.79L6 19.83V32a2 2 0 0 0 2 2h7V24h6v10h7a2 2 0 0 0 2-2V19.76Z" class="clr-i-solid clr-i-solid-path-2"/>
                        <path fill="none" d="M0 0h36v36H0z"/></svg>
                  <div class="hidden-sidebar">Home</div>
                </a>
              </li>
  
              <li class="sidebar-list-item active">
                <a href="#" class="sidebar-link" onclick="window.location.href='Dashboard.php'">
                  <svg  class="sidebar-icon" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" >
                      <path fill="currentColor" d="M11 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h6v18zm2 0h6c1.1 0 2-.9 2-2v-7h-8v9zm8-11V5c0-1.1-.9-2-2-2h-6v7h8z"/>
                    </svg>
                  <div class="hidden-sidebar">Dashboard</div>
                </a>
              </li>

              <!-- <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" >
                        <path fill="currentColor" d="M13 18v2h4v2H7v-2h4v-2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-8zM10 7.5v6l5-3l-5-3z"/>
                    </svg>
                  <div class="hidden-sidebar">Tutorial </div>
                </a>
              </li> -->

              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link" onclick="window.location.href='Schedule.php'">
                    <svg class="sidebar-icon" viewBox="0 0 41 41" preserveAspectRatio="xMidYMid meet" focusable="false" ><g fill="currentColor">
                        <path fill-rule="evenodd" d="M35 40a5 5 0 1 0 0-10a5 5 0 0 0 0 10Zm0 2a7 7 0 1 0 0-14a7 7 0 0 0 0 14Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M35 31.5a1 1 0 0 1 1 1v2.086l.707.707a1 1 0 0 1-1.414 1.414L34 35.414V32.5a1 1 0 0 1 1-1ZM14 
                            23h-2v2h2v-2Zm-2-2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2Zm10 2h-2v2h2v-2Zm-2-2a2 2 0 0 0-2 2v2a2
                            2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2Zm10 2h-2v2h2v-2Zm-2-2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0
                            0 0-2-2h-2ZM14 31h-2v2h2v-2Zm-2-2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2Zm10 2h-2v2h2v-2Zm-2-2a2 
                            2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8 12a1 
                            1 0 0 1 1-1h5V9H9a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h20.255a6.972 6.972 0 0 1-.965-2H9a1 1 0 0 1-1-1V12Zm26 16.07a7.062 7.062 0 0
                            1 2 0V12a3 3 0 0 0-3-3h-3v2h3a1 1 0 0 1 1 1v16.07ZM16 11h10.563V9H16v2Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M28 9H16v3a1 1 0 1 1-2 0V9H9a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2h-3v3a1 1 0 1 1-2 0V9Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M36 18H8v-2h28v2Z" clip-rule="evenodd"/>
                        <path d="M12 7a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0V7Zm14 0a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0V7Z"/></g></svg>
                  <div class="hidden-sidebar">Calendar Schedules</div>
                </a>
              </li>

              <!-- <li class="sidebar-list-item">
                <a href="#" class="sidebar-link" onclick="window.location.href='Appoint.php'">
                    <svg class="sidebar-icon" preserveAspectRatio="xMidYMid meet" focusable="false"  viewBox="0 0 20 20">
                        <rect x="0" y="0" width="20" height="20" fill="none" stroke="none" />
                        <path fill="currentColor" d="M11 10c.104 0 .205.008.305.023A5.493 5.493 0 0 0 9 14.5c0 .824.181
                            1.607.506 2.308A9.917 9.917 0 0 1 7.5 17C4.088 17 2 15.554 2 13.5V12a2 2 0 0 1 2-2h7Zm6-3.5a2.5
                            2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0ZM7.5 2a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7ZM19 14.5a4.5 4.5 0 1
                            1-9 0a4.5 4.5 0 0 1 9 0Zm-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5
                            0 0 0 0-1H15v-1.5Z"/>
                    </svg>
                  <div class="hidden-sidebar">Appoint Now</div>
                </a>
              </li> -->

              <li class="sidebar-list-item" onclick="window.location.href='About.php'">
                <a href="#" class="sidebar-link">
                    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                      <path fill="currentColor" d="M10 .4C4.697.4.399 4.698.399 10A9.6 9.6 0 0 0 10 19.601c5.301 0 9.6-4.298 9.6-9.601c0-5.302-4.299-9.6-9.6-9.6zm.896 3.466c.936 
                      0 1.211.543 1.211 1.164c0 .775-.62 1.492-1.679 1.492c-.886 0-1.308-.445-1.282-1.182c0-.621.519-1.474 1.75-1.474zM8.498 15.75c-.64 0-1.107-.389-.66-2.094l.733-3.025c.127-.484.148-.678 0-.678c-.191 
                      0-1.022.334-1.512.664l-.319-.523c1.555-1.299 3.343-2.061 4.108-2.061c.64 0 .746.756.427 1.92l-.84 3.18c-.149.562-.085.756.064.756c.192 0 .82-.232 1.438-.719l.362.486c-1.513 1.512-3.162 2.094-3.801 2.094z"/></svg>
                  <div class="hidden-sidebar">About</div>
                </a>
              </li>
             
              <li class="sidebar-list-item" onclick="window.location.href='Contact.php'">
                <a href="#" class="sidebar-link">
                  <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg"width="20" height="20"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 1200 1200">
                    <path fill="currentColor"  d="M600 0C268.629 0 0 268.629 0 600s268.629 600 600 600s600-268.629 600-600S931.371 0 600 0zM384.375 238.33c12.362-.729 23.536 6.66 32.007 19.775l82.031 155.566c8.637 18.434 3.729 38.172-9.155 51.343l-37.573 
                    37.573c-2.319 3.178-3.845 6.757-3.882 10.693c14.409 55.775 58.117 107.223 96.681 142.603c38.562 35.38 80.009 83.281 133.812 94.629c6.65 1.855 14.797 2.52 19.556-1.903l43.652-44.458c15.068-11.421 36.866-16.956 52.954-7.617h.732l148.021 
                    87.378c21.728 13.619 23.979 39.944 8.423 55.957L849.683 941.016c-15.056 15.44-35.058 20.631-54.491 20.654c-85.948-2.575-167.158-44.759-233.862-88.11c-109.49-79.653-209.923-178.446-272.975-297.803c-24.182-50.05-52.589-113.91-49.878-169.774c.242-21.016 
                    5.928-41.605 20.728-55.151l101.953-101.953c7.942-6.758 15.799-10.111 23.217-10.549z"/></svg>
                  <div class="hidden-sidebar">Contact</div>
                </a>
              </li> 
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                    
                  <svg viewBox="0 0 24 24" class="sidebar-icon"><g>
                      <path fill="currentColor" d="M10.08 10.86c.05-.33.16-.62.3-.87s.34-.46.59-.62c.24-.15.54-.22.91-.23.23.01.44.05.63.13.2.09.38.21.52.36s.25.33.34.53.13.42.14.64h1.79c-.02-.47-.11-.9-.28-1.29s-.4-.73-.7-1.01-.66-.5-1.08-.66-.88-.23-1.39-.23c-.65
                       0-1.22.11-1.7.34s-.88.53-1.2.92-.56.84-.71 1.36S8 11.29 8 11.87v.27c0 .58.08 1.12.23 1.64s.39.97.71 1.35.72.69 1.2.91 1.05.34 1.7.34c.47 0 .91-.08 1.32-.23s.77-.36 1.08-.63.56-.58.74-.94.29-.74.3-1.15h-1.79c-.01.21-.06.4-.15.58s-.21.33-.36.46-.32.23-.52.3c-.19.07-.39.09-.6.1-.36-.01-.66-.08-.89-.23-.25-.16-.45-.37-.59-.62s-.25-.55-.3-.88-.08-.67-.08-1v-.27c0-.35.03-.68.08-1.01zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></g>
                    </svg>
                  <div class="hidden-sidebar">Appointment <br>System 2022</div>
                </a>
              </li>
             <!-- <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                  <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M7.5 5.6L10 7 8.6 4.5 10 2 7.5 3.4 5 2l1.4 2.5L5 7zm12 9.8L17 14l1.4 2.5L17 19l2.5-1.4L22 19l-1.4-2.5L22 14zM22 2l-2.5 1.4L17 2l1.4 2.5L17 7l2.5-1.4L22 7l-1.4-2.5zm-7.63 5.29c-.39-.39-1.02-.39-1.41 0L1.29 18.96c-.39.39-.39 1.02 0 1.41l2.34 2.34c.39.39 1.02.39 1.41 0L16.7 11.05c.39-.39.39-1.02 0-1.41l-2.33-2.35zm-1.03 5.49l-2.12-2.12 2.44-2.44 2.12 2.12-2.44 2.44z"></path></g></svg>
                  <div class="hidden-sidebar">Customization</div>
                </a>
              </li> -->
              
            </ul>
          </div>
          <div class="bottom-sidebar">
            <ul class="sidebar-list">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link" onclick="window.location.href='Login.php'">
                  <svg viewBox="0 0 26 26" class="sidebar-icon">
                    <path  d="M16.563 15.9c-.159-.052-1.164-.505-.536-2.414h-.009c1.637-1.686 2.888-4.399 2.888-7.07c0-4.107-2.731-6.26-5.905-6.26c-3.176 0-5.892
                    2.152-5.892 6.26c0 2.682 1.244 5.406 2.891 7.088c.642 1.684-.506 2.309-.746 2.396c-3.324 1.203-7.224 3.394-7.224 5.557v.811c0 2.947 5.714 3.617 11.002 3.617c5.296
                     0 10.938-.67 10.938-3.617v-.811c0-2.228-3.919-4.402-7.407-5.557zm-5.516 8.709c0-2.549 1.623-5.99 1.623-5.99l-1.123-.881c0-.842 1.453-1.723 1.453-1.723s1.449.895
                      1.449 1.723l-1.119.881s1.623 3.428 1.623 6.018c0 .406-3.906.312-3.906-.028z"/></svg> 
                  <div class="hidden-sidebar">Admin</div>
                </a>
              </li> 
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                  <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g>
                      <path   fill="currentColor" d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2
                       3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12
                        15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path></g>
                    </svg>
                  <div class="hidden-sidebar">Settings</div>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                  <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g>
                      <path  fill="currentColor" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path>
                    </g></svg>
                  <div class="hidden-sidebar">Send Feedback</div>
                </a>
              </li>
            </ul>
          </div>
        </aside>

        <!-- MAin Body start--> 
        <div class="view-appoint">   
          <div class="txt">Faculty Appointments</div>
          <div class="container-view-appointment">
              <!-- search -->
          <div style="Color: rgb(255, 255, 255); Display: none">
                <?php
                $search = "";

                if(!$search = $_GET['search']){

                }else{
                  if($search = $_GET['search']){ 
                    $curdate = date('Y-m-d');
                  $sql = "SELECT * FROM stakeholders WHERE date = '$curdate' AND
                                                         first_name LIKE  '%$search%' OR
                                                          last_name LIKE  '%$search%' OR 
                                                          -- category LIKE  '%$search%' OR 
                                                          -- address LIKE  '%$search%' OR 
                                                          -- contact_No LIKE  '%$search%' OR 
                                                          -- email LIKE  '%$search%' OR 
                                                          date LIKE  '%$search%' OR 
                                                          time LIKE  '%$search%' OR 
                                                          office LIKE  '%$search%' OR 
                                                          -- purpose_of_appoint LIKE  '%$search%' OR 
                                                          status LIKE  '%$search%' OR
                                                            id LIKE  '%$search%' ";
                                                                       
                  }else {
                  echo "<script type='text/javascript'>alert('failed search!')
                  window.location.href = 'Dashboard.php';
                  </script>";   
                 }                               
               
                }
                   $client = $con->query($sql);
                   $row = $client->fetch_assoc();     
               
                ?></div>
                 <form action="#form" method="get">

                <div class="search-con">
                  <input type="text" name="search" id="search" placeholder="Search 'Surname'">
                  <button type="submit" class="search-btn"  onclick="changeTxt()" id="changetxt" >Search</button>
                  <button type="refresh" class="refresh-btn"   >Refresh</button>
                </div>
                </form>
              <!-- end  search -->
            <table>
                <thead>
                  <tr>
                    
                    <th>Entry ID</th>
                    <th Class="name"> Name    </th>
                    <th>Date of arrival</th>
                    <th>Time of arrival</th>
                    <th>status</th>
                    <th>Changes</th>
                  
                  </tr>              
                </thead>
                <tbody>
                <?php do{?>
                  <tr class="data">        
          
                    <td> <?php echo $row['id'];?> </td>
                    <td Class="tdname"> <?php echo $row['first_name'];?>
                         <?php echo $row['last_name'];?></td>
                   
                    <td  pattern="mm/dd/yyyy">   <?php $orgDate =  $row['date'];
                                                          $newDate = new DateTime($orgDate);
                                                            echo $newDate->format('M d Y');
                                                    ?></td>
                    <td> <?php echo $row['time'];?></td>
                    <td> <?php echo $row['status'];?></td>

                    <td Class="details"> 
                        <button class="noselect" onclick="window.location.href='Login_entry.php?ID=<?php echo $row['id'];?>'"><span class='text'>Edit</span>
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" 
                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path  d="m18.988 2.012l3 3L19.701
                          7.3l-3-3zM8 16h3l7.287-7.287l-3-3L8 13z"/><path d="M19 19H8.158c-.026 0-.053.01-.079.01c-.033 
                          0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"/></svg></span></button>
                        </td>
                  </tr>
                <?php }while($row = $client->fetch_assoc()); ?>
                  
                </tbody>
            </table>

            
          </div><!-- container ends -->
        </div>  <!-- end view appoint--> 
        <!-- Main Body ends--> 

      </div><!-- end of container -->


</body>
</html>

