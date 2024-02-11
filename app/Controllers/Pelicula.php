<?php
namespace App\controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController
{


    public function index()
    {
        $peliculaModel = new PeliculaModel();

        return view('pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),
        ]);

    }

    public function show($id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('pelicula/show', [
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

        echo 'creado';
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/edit', [
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

        echo 'editado';
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->delete($id);

        echo "borrado";

    }
    public function new()
    {

        return view('pelicula/new', [
            'pelicula' => [
                'titulo' => '',
                'descripcion' => '',
            ]
        ]);

    }

}