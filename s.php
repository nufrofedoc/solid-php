<?php

// Single Responsibility Principle Violation
class User {
  
    private $email;
    
    // Getter and setter...
    
    public function store() {
        // Store attributes into a database...
    }
}

// Refactored
class User {
  
    private $email;
    
    // Getter and setter...
}

class UserDB {
  
    public function store(User $user) {
        // Store the user into a database...
    }
}
