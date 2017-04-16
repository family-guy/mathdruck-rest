<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TexBlobsIndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
	public function testExample()
	{
		$response = $this->json('GET', '/texblobs');

		$response
			->assertStatus(200)
			->assertExactJson([
				[
					'id' => 1,
					'tex' => 'Soit $x \\in \\mathbb{R}$'
				],
				[
					'id' => 2,
					'tex' => 'Soit $n \\in \\mathbb{N}$'
				],
				[
					'id' => 3,
					'tex' => 'Supposons que $f$ est une fonction complexe'
				]
			]);
	}
}