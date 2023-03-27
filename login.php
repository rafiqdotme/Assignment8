<?php
include 'inc/header.php';

require_once 'CsvFile.php';
require_once 'User.php';
?>

<div class="text-center">
	<?php
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$email    = trim( $_POST['email'] );
		$password = trim( $_POST['password'] );

		$errors = array();

		if ( empty( $email ) ) {
			$errors[] = 'Email address is required';
		} elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$errors[] = 'Invalid email format';
		}

		if ( empty( $password ) ) {
			$errors[] = 'Password is required';
		}

		if ( empty( $errors ) ) {
			$file  = new CsvFile( 'users.csv' );
			$users = $file->getUsers();

			foreach ( $users as $user ) {
				if ( $user->getEmail() == $email && $user->getPassword() == $password ) {
					header( 'Location: welcome.php?first_name=' . urlencode( $user->getFirstName() ) );
					exit();
				}
			}

			$errors[] = 'email or password dose not match';
		}

		if ( !empty( $errors ) ) {
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