<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Consulta;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'          => 'required|string',
            'especialidade' => 'required|string',
            'cidade_id'     => 'required|exists:cidades,id',
        ]);

        $medico = Medico::create($data);
        
        $response = [
            'id'            => $medico->id,
            'nome'          => $medico->nome,
            'especialidade' => $medico->especialidade,
            'cidade_id'     => $medico->cidade_id,
            'created_at'    => $medico->created_at,
            'updated_at'    => $medico->updated_at,
            'deleted_at'    => $medico->deleted_at,
        ];
    
        return response()->json($response, 201);
    }

    private function removerPrefixoDr($texto)
    {
        $texto = preg_replace('/^dr\.?\s*/i', '', $texto);
        $texto = preg_replace('/^dra\.?\s*/i', '', $texto);
        return $texto;
    }

    public function index(Request $request)
    {
        $query = Medico::query();

        if ($request->has('nome')) {
            $nome = $this->removerPrefixoDr($request->query('nome'));
            $query->where('nome', 'LIKE', "%$nome%");
        }

        $query->orderBy('nome', 'asc');
        return response()->json($query->get(), 200);
    }

    public function indexByCidade($cidadeId, Request $request)
    {
        $query = Medico::where('cidade_id', $cidadeId);

        if ($request->has('nome')) {
            $nome = $this->removerPrefixoDr($request->query('nome'));
            $query->where('nome', 'LIKE', "%$nome%");
        }

        $query->orderBy('nome', 'asc');
        return response()->json($query->get(), 200);
    }

    public function agendarConsulta(Request $request)
    {
        $data = $request->validate([
            'medico_id'   => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'data'        => 'required|date_format:Y-m-d H:i:s'
        ]);

        $consulta = Consulta::create($data);

        $response = [
            'id'          => $consulta->id,
            'medico_id'   => $consulta->medico_id,
            'paciente_id' => $consulta->paciente_id,
            'data'        => $consulta->data,
            'created_at'  => $consulta->created_at,
            'updated_at'  => $consulta->updated_at,
            'deleted_at'  => $consulta->deleted_at,
        ];
    
        return response()->json($response, 201);
    }
}
