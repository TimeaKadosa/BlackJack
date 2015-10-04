<?php


class Password {
    
    

   public static function password_encrypt($password) {

	
        $hash = crypt($password, self::getSalt());

        return $hash;
        
	 }
        
   public static function getSalt() {

        $hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10 #####  $2a$10$
        $salt_length = 22; 	// Blowfish salts should be 22-characters or more
        $salt = self::generate_salt($salt_length);

        return $hash_format . $salt;
        
    }
    
    public static function generate_salt($length) {

        // MD5 returns 32 characters	
       $unique_string = md5(true);

       // Valid characters for a salt are [a-zA-Z0-9./]
       $base64_string = base64_encode($unique_string);

       // But not '+' which is valid in base64 encoding
       $modified_base64_string = str_replace('+', '.', $base64_string);

       // Truncate string to the correct length
       $salt = substr($modified_base64_string, 0, $length);

       return $salt;
       
	}
	
    public static function password_check($password, $existing_hash) {
        // existing hash contains format and salt at start
        // existing_hash --> hashed_password in database

        $hash = crypt($password, self::getSalt());

                if ($hash === $existing_hash) {

                        return true;
        }
        else {
                        return false;
        }
        
    }




}



?>