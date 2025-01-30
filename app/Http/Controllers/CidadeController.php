<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(Request $request)
    {
        $query = Cidade::query();

        if ($request->has('nome')) {
            $nome = $request->query('nome');
            $query->where('nome', 'LIKE', "%$nome%");
        }

        $query->orderBy('nome', 'asc');

        return response()->json($query->get(), 200);
    }
}
