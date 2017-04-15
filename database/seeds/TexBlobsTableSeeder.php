<?php

use Illuminate\Database\Seeder;

class TexBlobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TexBlob::create([
        	'id' => 1,
			'tex' => 'Soit $x \\in \\mathbb{R}$'
        ]);
			
        \App\TexBlob::create([
        	'id' => 2,
			'tex' => 'Soit $n \\in \\mathbb{N}$'
        ]);
			
        \App\TexBlob::create([
        	'id' => 3,
			'tex' => 'Supposons que $f$ est une fonction complexe'
        ]);
		
    }
}
