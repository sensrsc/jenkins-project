<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Helpers\RequestHelper;
use Config;

class RequestHelperTest extends TestCase
{  
    public function testCreateRequestTest()
    {
        $req = new RequestHelper;
        $req->loadConfig('UNITTEST');
        $this->assertInstanceOf(RequestHelper::class, $req);
        $this->assertAttributeCount(2, 'headers', $req);
    }

    public function testCreateEmptyRequestTest()
    {
        $req = new RequestHelper;
        $this->assertInstanceOf(RequestHelper::class, $req);
        $this->assertAttributeEmpty('headers', $req);
        $this->assertAttributeEmpty('config', $req);
        $this->assertAttributeEmpty('baseUri', $req);
    }

    public function testSendRequestTest()
    {
      
    }
}
