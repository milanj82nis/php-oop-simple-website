<?php
 
class User extends DbConnect {
	
	public function setMessage( $message){
		
		echo "<script>alert('$message');</script>";
		
	}// setMessage
	
	
	protected function checkRegisterFormIfEmpty( $name , $email , $password , $password_confirmation){
		
		if( !empty( $name ) && !empty( $email ) && !empty( $password ) && !empty( $password_confirmation )   ) {
			
			return true;
			
		} else {
			
			return false;
		}
		
		
	}// checkRegisterFormIfEmpty
	

	
	public function userRegistration( $name , $email , $password , $password_confirmation ){
		
		if( $this -> checkRegisterFormIfEmpty(  $name , $email , $password , $password_confirmation)){
			
			$errors = array();
			
			if( $password !== $password_confirmation ){
				
				$errors[] = 'Your passwords don\'t match.';
			}
			
			$sql = 'select email from users where email = ? ';
			
			$query = $this -> connect() -> prepare( $sql );
			
			$query -> execute ([ $email ]);
			
			$results = $query -> fetchAll();
			
			if ( count ($results)> 0 ) {
				
				$errors[] = 'Email address is already taken.';
			}
				
				
				
				
				
			if ( count ( $errors ) > 0 ){
				
				foreach ($errors as $error ){
					
					echo $error . '<br>';
					
				}// endoforeach
				
			} else {
			
				$hashedPassword = password_hash( $password , PASSWORD_DEFAULT);

				$sql = 'insert into users ( name , email , password ) values ( ? , ? , ? ) ';

				$query = $this -> connect() -> prepare ( $sql );

				$query -> execute([ $name , $email , $hashedPassword ]);

				$this -> setMessage( 'Registration is succesfull.Please login after registration.');

				
			}
			
		
			
			
		} else {
			
			$this -> setMessage('Please , fill all fields in registration form.');
		}
		
	}// userRegistration
	
	
}// User
