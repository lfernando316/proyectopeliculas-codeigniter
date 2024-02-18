<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();

        return view('dashboard/dashboard/categoria/index', [
            'categorias' => $categoriaModel->findAll(),
        ]);
    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/show', [
            'categoria' => $categoriaModel->find($id)
        ]);

    }

    public function create()
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/dashboard/categoria');
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/edit', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->delete($id);

        return redirect()->back();

    }
    public function new()
    {

        return view('dashboard/categoria/new', [
            'categoria' => [
                'titulo' => '',
            ]
        ]);

    }

}
