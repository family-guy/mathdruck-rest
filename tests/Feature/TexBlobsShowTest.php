<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TexBlobsShowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
	public function testExample()
	{
		$response = $this->json('GET', '/texblobs/3');

		$response
			->assertStatus(200)
			->assertExactJson(
				[
					'id' => 3,
					'tex' => 'Supposons que $f$ est une fonction complexe'
				]
			);
	}
}