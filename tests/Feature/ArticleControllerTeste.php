<?php

namespace Tests\Feature;

use App\Models\User; // Importe o modelo User
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has; // Importe a classe Factory do Laravel
use Tests\TestCase;

class ArticleControllerTeste extends TestCase
{
    use RefreshDatabase;

    public function testSaveArticle()
    {
        // Crie um usuário para autenticar
        $user = User::factory()->create();

        // Simula um arquivo de imagem
        $file = UploadedFile::fake()->image('test-image.jpg');

        // Dados simulados do artigo
        $data = [
            'titulo' => 'Título do Artigo',
            'imagem' => $file,
            'textContent' => 'Conteúdo do Artigo'
        ];

        // Autentica o usuário
        $this->actingAs($user);

        // Envia uma solicitação HTTP para o endpoint SaveArticle com os dados simulados
        $response = $this->postJson('http://localhost:8000/CreateArticles', $data);

        // Verifica se a resposta é bem-sucedida
        $response->assertSuccessful();

        // Verifica se o artigo foi salvo corretamente no banco de dados
        $this->assertDatabaseHas('articles', [
            'titulo' => $data['titulo'],
            'imagem' => 'img/Articles/' . $file->hashName(),
            'textContent' => $data['textContent']
        ]);

        // Verifica se o arquivo de imagem foi armazenado corretamente
        Storage::disk('public')->assertExists('img/Articles/' . $file->hashName());
    }
} 
