



<?php include 'form1.php';?>
    <body>
  
        <form action="../index.php" method="POST">
  <p>
   <label for="email">Ownermail:</label>
   <input type="email"  placeholder="Enter your email" id="mail" name="owneremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email address" required><br>
          
  </p>
  <p>
   <label for="email">Due date:</label>
   <input id="datetime" name ="duedate" type="datetime-local">
          
  </p>

  <p>
   <label for="text">Description:</label>
   <input type="text"  placeholder="A description of the to-do item" id="text" name="message"  required>
  </p>
   <br />
  <button class="button" name = "create" ><span>create</span></button><br>
  </form>
    
      
   