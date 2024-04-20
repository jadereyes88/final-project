<?php

namespace app\controllers;

use app\core\Database;

class ContactController {
    use Database;

    public function submitContact() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Return JSON error
                echo json_encode(['error' => 'Invalid email address.']);
                exit;
            }

            $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
            $data = [$name, $email, $subject, $message];

            $result = $this->query($sql, $data);

            if ($result) {
                echo json_encode(['success' => 'Thank you for your message. I will get back to you soon.']);
                exit;
            } else {
                echo json_encode(['error' => 'Error saving contact information.']);
                exit;
            }
        }
    }
}
