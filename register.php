<?php
include 'inc/header.php';
require_once 'CsvFile.php';
require_once 'User.php';
?>

<div class="text-center">
	<?php
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$first_name       = trim( $_POST['first_name'] );
		$last_name        = trim( $_POST['last_name'] );
		$email            = trim( $_POST['email'] );
		$password         = trim( $_POST['password'] );
		$confirm_password = trim( $_POST['confirm_password'] );

		$errors = array();

		if ( empty( $first_name ) ) {
			$errors[] = 'First name is required';
		}

		if ( empty( $last_name ) ) {
			$errors[] = 'Last name is required';
		}

		if ( empty( $email ) ) {
			$errors[] = 'Email address is required';
		} elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$errors[] = 'Invalid email format';
		}

		if ( empty( $password ) ) {
			$errors[] = 'Password is required';
		}

		if ( empty( $confirm_password ) ) {
			$errors[] = 'Confirm password is required';
		}

		if ( $password != $confirm_password ) {
			$errors[] = 'Passwords do not match';
		}

		if ( empty( $errors ) ) {
			$user = new User( $first_name, $last_name, $email, $password );
			$file = new CsvFile( 'users.csv' );
			$file->save( $user->toArray() );
			echo '<h1>Registration successful</h1>';
		} else {
			echo '<ul class="list-group list-group-light">';
			foreach ( $errors as $error ) {
				echo "<li class='list-group-item'>$error</li>";
			}
			echo '</ul>';
		}
	}
	?>
    <br>
    <a href="index.php">Back To LOGIN page</a>
</div>


<?php include 'inc/footer.php';?>