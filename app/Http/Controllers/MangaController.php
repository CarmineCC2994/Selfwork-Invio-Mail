<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public $mangas = [
        ['id' => '1', 'title' => 'Berserk', 'author' => 'Kentaro Miura', 'img' => '/media/bersek.jpg', 'genres' => 'dark fantasy, seinen'],
        ['id' => '2', 'title' => 'Monster', 'author' => 'Naoki Urasawa', 'img' => '/media/monster.jpg', 'genres' => 'thriller, psicologico'],
        ['id' => '3', 'title' => 'Vagabond', 'author' => 'Takehiko Inoue', 'img' => '/media/vagabond.jpg', 'genres' => 'azione, storico, seinen'],
        ['id' => '4', 'title' => 'Chainsaw Man', 'author' => 'Tatsuki Fujimoto', 'img' => '/media/chain.jpg', 'genres' => 'azione, soprannaturale'],
        ['id' => '5', 'title' => 'Vinland Saga', 'author' => 'Makoto Yukimura', 'img' => '/media/vinland.jpg', 'genres' => 'avventura, storico'],
        ['id' => '6', 'title' => 'Frieren: Beyond Journey\'s End', 'author' => 'Kanehito Yamada', 'img' => '/media/fireren.jpg', 'genres' => 'fantasy, avventura'],
    ];

  public function mangalist()
{
    return view('manga.manga', ['mangas' => $this->mangas]);
}

    public function mangadetail($id)
    {
        foreach ($this->mangas as $manga) {
            if ($id == $manga['id']) {
                return view('manga.detail', ['manga' => $manga]);
            }
        }
    }
}