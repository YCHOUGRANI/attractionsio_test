<?php
namespace AttractionsIo\Domain;

class User
{

  /**
   * @var string
   */
  private $first_name;
  
  /**
   * @var string
   */
  private $last_name;
  
  /**
   * @var string
   */
  private $password;
  
  /**
   * @var mix
   */
  private $date_of_birth;
  
  /**
   * @var string
   */
  private $email;
  
  /*public function __construct(string $first_name,string $last_name,string date_birthday,string email)
    {
        
        if (strlen($first_name) > 32 ) {
            throw new InvalidArgumentException("first_name only max 32 chars allowed");
        }
		if (strlen($last_name) > 32 ) {
            throw new InvalidArgumentException("last_name only max 32 chars allowed");
        }
		if (strlen($email) > 32 ) {
            throw new InvalidArgumentException("last_name only max 32 chars allowed");
        }
        $this->first_name = $first_name;
        $this->first_name = $first_name;
		$this->email = $email;
    }*/
  
  public function getFirstName(){
        return $this->first_name;
  }
  
  public function setFirstName(string $first_name)
  {
        if (strlen($first_name) > 32 ) {
            throw new \InvalidArgumentException("first_name only max 32 chars allowed");
        }
        $this->first_name=$first_name;
  }  
  
  public function getLastName(){
        return $this->last_name;
  }
  
  public function setLastName(string $last_name)
  {
         if (strlen($last_name) > 32 ) {
            throw new \InvalidArgumentException("last_name only max 32 chars allowed");
        }
		 $this->last_name=$last_name;
  }  
    
  
  public function getEmail(){
        return $this->email;
  }
  
  public function setEmail(string $email)
  {
        if (strlen($email) > 254 ) {
            throw new \InvalidArgumentException("email only max 254 chars allowed");
        }    
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("email is not valid format");
        }    

	    $this->email=$email;
  }  
  
  
  public function getDateOfBirth(){
        return $this->date_of_birth;
  }
  
  public function setDateOfBirth(string $date_of_birth)
  {
    $minAge=strtotime("-13 YEAR");
    $entrantAge= strtotime($date_of_birth);
  
    if($entrantAge < $minAge){
	            throw new \InvalidArgumentException("you are too young to register");
    }
  
  
}
}
