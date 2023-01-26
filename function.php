
<?php 
    function generate_password($length) {
        $characters = array_merge(range('a','z'), range('A','Z'), range(0,9), array('!','@','#','$','%','^','&','*'));
        $password = "";
        for($i = 0; $i < $length; $i++) {
            $password .= $characters[array_rand($characters)];
        }
        return $password;
    }
?>