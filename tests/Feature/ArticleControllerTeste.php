<?php

namespace Tests\Feature;

use App\Models\User; // Importe o modelo User
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;  
use Tests\TestCase;

class ArticleControllerTeste extends TestCase
{
    use RefreshDatabase;

    public function testSaveArticle()
    {
        $user = User::factory()->create();

        $file = UploadedFile::fake()->image('test-image.jpg');

        $data = [
            'titulo' => 'Título do Artigo',
            'imagem' => $file,
            'textContent' => 'Conteúdo do Artigo'
        ];

        $this->actingAs($user);
        $response = $this->postJson('http://localhost:8000/CreateArticles', $data);
        $response->assertSuccessful();
        $this->assertDatabaseHas('articles', [
            'titulo' => $data['titulo'],
            'imagem' => 'img/Articles/' . $file->hashName(),
            'textContent' => $data['textContent']
        ]);

        Storage::disk('public')->assertExists('img/Articles/' . $file->hashName());
    }
}
