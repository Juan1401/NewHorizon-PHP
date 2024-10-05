<?php

use PHPUnit\Framework\TestCase;
use App\Validate;


class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('jjquitiaquez@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('jjquitiaquez@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('www.google.com');
        $this->assertTrue($url);

        $url = Validate::url('ww.google.!@342');
        $this->assertFalse($url);
    }
}