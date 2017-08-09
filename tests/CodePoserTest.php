<?php

class CodePoserTest extends \PHPUnit\Framework\TestCase
{

    protected $baseUrl = 'http://127.0.0.1:1349';

    protected function setUp()
    {
        //waiting for the server to be ready
        //sleep for 1 senconds
        sleep(1);
    }

    public function testIndex()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        $isOk = preg_match('/CodePoser/', $response) ? true : false;

        $this->assertTrue($isOk);
    }

}
