<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Consulta;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'       => 'required|string',
            'cpf'        => 'required|string|unique:pacientes,cpf',
            'celular'    => 'nullable|string'
        ]);

        $paciente = Paciente::create($data);

        $response = [
            'id'            => $paciente->id,
            'nome'          => $paciente->nome,
            'cpf'           => $paciente->cpf,
            'celular'       => $paciente->celular,
            'created_at'    => $paciente->created_at,
            'updated_at'    => $paciente->updated_at,
            'deleted_at'    => $paciente->deleted_at,
        ];
    
        return response()->json($response, 201);
        return response()->json($paciente, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nome'    => 'sometimes|string',
            'celular' => 'sometimes|string'
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($data);

        return response()->json($paciente, 200);
    }

    public function indexByMedico($idMedico, Request $request)
    {
        $apenasAgendadas = $request->query('apenas-agendadas');
        $nome = $request->query('nome');

        $consultas = Consulta::with('paciente')
            ->where('medico_id', $idMedico);

        if ($apenasAgendadas === 'true') {
            $consultas->where('data', '>', now());
        }

        if ($nome) {
            $consultas->whereHas('paciente', function ($q) use ($nome) {
                $q->where('nome', 'LIKE', "%$nome%");
            });
        }

        $consultas->orderBy('data', 'asc');

        $lista = $consultas->get();

        $result = $lista->map(function($consulta){
            $paciente = $consulta->paciente;
            return [
                'id'         => $paciente->id,
                'nome'       => $paciente->nome,
                'cpf'        => $paciente->cpf,
                'celular'    => $paciente->celular,
                'created_at' => $paciente->created_at,
                'updated_at' => $paciente->updated_at,
                'deleted_at' => $paciente->deleted_at,
                'consulta'   => [
                    'id'         => $consulta->id,
                    'data'       => $consulta->data,
                    'created_at' => $consulta->created_at,
                    'updated_at' => $consulta->updated_at,
                    'deleted_at' => $consulta->deleted_at,
                ],
            ];
        });
    
        return response()->json($result, 200);
    }
}
