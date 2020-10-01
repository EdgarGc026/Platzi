<?php 

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {

  public function test_email(){
    $email = Validate::email('edgar@mail.com');
    $this->assertTrue($email);
    
    $email = Validate::email('edgar@@mail.com');
    $this->assertFalse($email);
  }

  public function test_url(){
    $url = Validate::url('https://google.com');
    $this->assertTrue($url);

    $url = Validate::url('google.com');
    $this->assertFalse($url);
  }

  public function test_password(){
    // generado por password_hash('1234567', PASSWORD_BCRYPT);
    $hash = '$2y$10$g6hTqydxZVtzhPfo7JxxTuaUb5mnOZlWz4vTzLGCEYxsiBggz9pQ6';
    $check = password_verify('1234567', $hash);

    $this->assertTrue($check);
  }
}

 ?>