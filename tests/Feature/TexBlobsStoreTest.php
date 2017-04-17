<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TexBlobsStoreTest extends TestCase
{
	use DatabaseTransactions;
	
    /**
     * A basic test example.
     *
     * @return void
     */
	public function testExample()
	{
		$tex = 'this is a test';
		$response = $this->json('POST', '/texblobs', ['tex' => $tex]);

		$response
			->assertStatus(200)
			->assertJson(['tex' => $tex]);
	}
}