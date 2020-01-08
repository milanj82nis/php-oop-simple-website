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
	protected function checkIsLoginFormEmpty( $email , $password ){
		
		if( !empty( $email) && !empty( $password)){
			
			return true;
		} else {
			
			return false;
		}
		
	}// checkIsLoginFormEmpty
	
	

	public function userLogin( $email , $password ){
		
		if( $this -> checkIsLoginFormEmpty( $email , $password )){
			
			
			$sql = 'select * from users where email = ? limit 1 ';
			
			$query = $this -> connect() -> prepare( $sql );
			
			$query -> execute([ $email ]);
			
			$results = $query -> fetchAll();
			
			
			
			if ( count ( $results ) > 0 ) {
				
				foreach( $results as $result ){
					
					$hashedPassword = $result['password'];
				
						
					if( password_verify( $password , $hashedPassword )){
	
						
						$_SESSION['logged'] = 1;
						$_SESSION['user_id']= $result['id'];
						$_SESSION['email'] = $result['email'];
						
						if (headers_sent()) {
							
						die('You are successfully loged in.Please click on link to go on home page. <a href="index.php">Home page</a>'  );
		}
		else{
			exit(header("Location: /index.php"));
		}

				exit();
						
					} else {
						
						$this-> setMessage('You entered wrong password or email');
					}
					
				}
							
			} else{
				
				$this -> setMessage( 'You entered wrong email or password.Try again.');
			}
			
		} else {
			
			$this -> setMessage('Please , Fill all fields in form.');
		}
		
		
	}// userLogin
	
	public function logout() { 
       $_SESSION = array();
       session_destroy();
		header('Location:index.php');
   }
	
	
	
	
	
	
	
	
	
	
	
	
}// User
