<?php
include "includes/start.php";
include "includes/connect.php";
?>
<?php
 if(!empty($message)):?>
   <p><?php echo $message; ?></p>
   <?php endif; ?>
   
<?php
echo' <div class="form-container">
        <h2>Admission Form</h2>
        <form action=" '.insert($conn).' " method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" require>

            <label for="gender">Gender:</label>
            <div class="radio-btn">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>
            
            <label for="address">Address:</label>
            <textarea name="address" id="address" rows="4" required></textarea>

            <label for="courses">Select Course:</label>
            <select name="course" id="course">
                <option value="engineering">Engineering</option>
                <option value="business">Business Administration</option>
                <option value="medicine">Medicine</option>
                <option value="art">Art and Humanities</option>
            </select>

            <button type="submit" name ="submit" id= "submit">Submit Application</button>
        </form>
    </div>';
?>

</body>
</html>