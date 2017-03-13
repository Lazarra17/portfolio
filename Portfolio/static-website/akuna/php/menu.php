        <?php if (loggedin()){?>



<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>My account <a href="profile.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Shop retail <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Akuna registration <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Shop with discount <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Contact form <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

        <?php
        }
        elseif (loggedinAdmin() && userDataAdmin($sEmail,"a_code") == "HRADMIN"){
            
           
        ?>
        
     
        
<div class="menu">
<p class="menu-des center"><span style="font-weight:bold;color:black"><?php echo userDataAdmin($sEmail,"department") . " Department"?></span></p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Find Record <a href="find.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>   

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Add Customer <a href="profile.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Manage Customers <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Reports <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>



        <?php }
        
            elseif (loggedinAdmin() && userDataAdmin($sEmail,"a_code") == "MDADMIN"){
          ?>
          
          <div class="menu">
          
<p class="menu-des center"><span style="font-weight:bold;color:black"><?php echo userDataAdmin($sEmail,"department") . " Department"?></span></p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Add Product <a href="profile.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Manage Product <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Inventory <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Reports <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Feedbacks <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>
          
          
          
          
          
          <?php  
            
        } elseif (loggedinAdmin() && userDataAdmin($sEmail,"a_code") == "HRSADMIN"){
          ?>
          
<div class="menu">      
<p class="menu-des center"><span style="font-weight:bold;color:black"><?php echo userDataAdmin($sEmail,"department") . " Department Superadmin"?></span></p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Find Record <a href="find.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>  

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Add Admin <a href="add-admin.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Manage Admin <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Reports <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Audit Trail <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Backup <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Restore <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>
          
          
          
          
          
          <?php  
            
        }elseif (loggedinAdmin() && userDataAdmin($sEmail,"a_code") == "MDSADMIN"){
          ?>
          
          

<div class="menu">
<p class="menu-des center"><span style="font-weight:bold;color:black"><?php echo userDataAdmin($sEmail,"department") . " Department Superadmin"?></span></p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Find Record <a href="find.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div> 

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Add Product <a href="profile.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Manage Product <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Inventory <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Reports <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Feedbacks <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>
          
<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Backup <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

     
          
          
          <?php  
            
        } else{
    
    
?><div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Register <a href="register.php"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Shop retail <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Akuna registration <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Shop with discount <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>


<div class="menu">
<p class="menu-des"><img src="images/akuna-leaf.png" class="akuna-leaf" width="40px"/>Contact form <a href="#"><img src="images/btn.png" class="input-btn" /></a> </p>
</div>

<?php }?>