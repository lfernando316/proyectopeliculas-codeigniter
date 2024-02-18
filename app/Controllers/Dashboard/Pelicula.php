<?php
namespace App\controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController
{


    public function index()
    {
        $peliculaModel = new PeliculaModel();

        return view('dashboard/pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),
        ]);

    }

    public function show($id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/show', [
            'pelicula' => $peliculaModel->find($id)

        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/dashboard/pelicula');

    }
    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/edit', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->back();
        // return redirect()->to('/dashboard/pelicula');
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->delete($id);

        return redirect()->back();

    }
    public function new()
    {

        return view('dashboard/pelicula/new', [
            'pelicula' => [
                'titulo' => '',
                'descripcion' => '',
            ]
        ]);

    }

}