
  <?php include 'form1.php';?>
        <form action="" method="POST">
  <p>
   <label for="email">Email:</label>
   <input type="email"  placeholder="Enter your email" id="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email address" required><br>
          
  </p>

  <p>
   <label for="password">Password:</label>
   <input type="password"  placeholder="Enter password" id="password" name="password" pattern=".{4,}" title="four or more characters" required>
  </p>
   <br />
  <button class="button" name = "submit"><span>Sign In</span></button><br>

  <fieldset>
             <a href="view/add.php" class="txt2">
              SIGN UP NOW
             </a>
  </fieldset>
  </form>
    
      
   