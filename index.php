<?php include 'header.php'; ?>
<?php include 'DataBase.php'; 
        $objDataBase = new DataBase();
        $countries = $objDataBase->getCountries();
?>

<div class="panel panel-info panel_div col-xs-8">
    <div class="panel-heading">
        <h3 class="panel-title">Add User</h3>
    </div>

    <div class="bs-example jumbotron">
        <form class="form-horizontal" method="post" action="processInput.php" name="about_you">
            <div class="form-group form_blocks" method="post" action="processInput.php" name="about_you">
                <div class="col-xs-4 ">
                    <label for="name">Name</label>
                    <input type="text" id="inputSuccess" class="form-control" name="name" placeholder="Enter your name" value="<?php echo (isset($_REQUEST['name']))? $_REQUEST['name'] : "" ?>">
                    <span class="help-block required_error" > <?php echo (isset($_GET['name'])  && 'error' == $_GET['name'])? "Please enter a valid name." : ''; ?> </span>
                </div>
            </div>
            
            <div class="form-group form_blocks">
                <div class="col-xs-4">
                    <label for="country">Country</label>
                    <select class="selectpicker" name="country" style="width:260px;">
                        <option value="0">Please select your country</option>
                        <?php foreach( $countries as $country ): ?>
                            <option value="<?php echo $country['name']; ?>"> <?php echo $country['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                    <span class="help-block required_error"><?php echo (isset($_GET['country']) && 'error' == $_GET['country'])? "Please select your country." : ''; ?> </span>
                </div>
            </div>
            
            <div class="form-group form_blocks">
                <div class="col-xs-4">
                    <label for="email">Email</label>
                    <input type="email" id="inputError" class="form-control" name="email" placeholder="Your Email" value="<?php echo (isset($_REQUEST['email']))? $_REQUEST['email'] : "" ?>">
                    <span class="help-block required_error"> <?php echo (isset($_GET['email']) && 'error' == $_GET['email'])? "Please enter a valid email address." : ''; ?> </span>
                </div>
            </div>

            <div class="form-group form_blocks">
                <div class="col-xs-4">
                    <label for="mobile">Mobile</label>
                    <input type="number" id="inputError" class="form-control" name="mobile" placeholder="Mobile number" value="<?php echo (isset($_REQUEST['mobile']))? $_REQUEST['mobile'] : "" ?>">
                    <span class="help-block required_error"> <?php echo (isset($_GET['mobile']) && 'error' == $_GET['mobile'])? "Please enter a valid mobile number." : ''; ?> </span>
                </div>
            </div>

            <div class="form-group form_blocks">
                <div class="col-xs-4">
                    <label for="birthday">Birthday</label>
                    <input data-provide="datepicker" data-date-format="yyyy/mm/dd"class="form-control" name="birthday" placeholder="yyyy/mm/dd" value="<?php echo (isset($_REQUEST['birthday']))? $_REQUEST['birthday'] : "" ?>">

                    <span class="help-block required_error"> <?php echo (isset($_GET['birthday']) && 'error' == $_GET['birthday'])? "Please select your birthday." : ''; ?> </span>
                </div>
            </div>

            <div class="form-group form_blocks">
                <div class="col-xs-4">
                    <label for="about_you">About You</label>
                    <textarea rows="4" cols="50" name="about_you" value="<?php echo (isset($_REQUEST['about_you']))? $_REQUEST['about_you'] : "" ?>">   </textarea>
                    <span class="help-block required_error"></span>
                </div>
            </div>

            <input type="submit" class="btn btn-primary submit_button"  value="Submit">  
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
