<?php
require_once __DIR__ . '/../security.php';

class Controller_Contact {
    public function __construct() {
        add_filter( 'send_contact_form', array( new Service_Contact_Form, 'send_contact_form' ) );
    }
}

new Controller_Contact;