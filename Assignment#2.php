<?php
    class User
    {
        public $name;
        public $username;
        public $email;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;   
        }

        function set_username($username) {
            $this->username = $username;
        }

        function get_username() {
            return $this->username;
        }

        function set_email($email) {
            $this->email = $email;
        }

        function get_email() {
            return $this->email;
        }
    }

    $example = new User();
    
    $example->set_name('Francheska Nicole C. Alcid');
    $example->set_username('@iskaanicole');
    $example->set_email('@nicsfranz64@gmail.com');

    echo "{$example->get_name()}. Added a friend.";
    echo "<br>";
    echo "{$example->get_username()}. Posted a status.";
    

    



        



?>


        