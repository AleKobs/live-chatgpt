<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;


class CopyController extends Controller
{
    public function index(): View
    {
        return view('copy');
    }
    public function copyAcao(Request $r): View
    {

        $result = OpenAI::chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => 'Responda como um profissional de Copywriter!'],
                ['role' => 'user', 'content' => 'Quero criar a copy para um produto. O nome do produto é: ' . $r->nome_produto],
                ['role' => 'user', 'content' => 'O produto será vendido por: R$ ' . $r->preco_produto],
                ['role' => 'user', 'content' => 'As principais características do produto são: ' . $r->caracteristicas_produto],
                ['role' => 'user', 'content' => 'A copy deve ser criada de forma que se comunique bem com o público alvo que é: ' . $r->publico_produto],
                ['role' => 'user', 'content' => 'O estilo de escrita da copy deve ser muito ' . $r->estilo_copy]
            ]
        ]);

        $image = OpenAI::images()->create(
            [
                'prompt' => 'Crie uma imagem de: ' . $r->nome_produto . ' com as seguintes características: ' . $r->caracteristicas_produto,
                'n' => 1,
                'size' => '256x256',
                'response_format' => 'url',
            ]
        );
        $data['image'] = $image->data[0]->url;

        $data['copyGerada'] = $result->choices[0]->message->content;

        return view('copy', $data);
    }
}
