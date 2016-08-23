<?php
	include 'User.php';
	include 'header.php'; 

	$objUser 		= new User();
	$userDetails 	= $objUser->getAllUsers();

?>
<?php if( isset($_GET['addUser']) ) { ?>
	<div class="well well-sm well_block">User added successfully!</div>
<?php } ?>
<div class="panel panel_div panel-success col-xs-8">
    <div class="panel-heading">
        <h3 class="panel-title">User List</h3>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Country</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>BirthDay</th>
                <th>About you</th>
            </tr>
        </thead>
        <tbody>
     		<?php if( count($userDetails) ) { ?>
		        <?php foreach( $userDetails as $userData ) {?>
		            <tr>
		                <td><?php echo $userData['id']; ?></td>
		                <td><?php echo $userData['name']; ?></td>
		                <td><?php echo $userData['country']; ?></td>
		                <td><?php echo $userData['email']; ?></td>
		                <td><?php echo $userData['mobile']; ?></td>
		                <td><?php echo $userData['birthday']; ?></td>
		                <td><?php echo $userData['about_you']; ?></td>
		            </tr>
		        <?php } ?>
		    <?php } else { ?>
		    	<tr>
		    		<td colspan="7" style="text-align:center;">No Records</td>
		    	</tr>
        	<?php } ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
