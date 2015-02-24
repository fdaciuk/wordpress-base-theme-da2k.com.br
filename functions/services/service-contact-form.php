<?php
require_once __DIR__ . '/../security.php';

class Service_Contact_Form {
    public function send_contact_form() {
        return (object) array(
            'status' => 'success',
            'message' => 'Seu e-mail foi enviado com sucesso!'
        );
    }
}