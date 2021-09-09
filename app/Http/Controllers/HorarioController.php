<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HorarioController extends Controller
{
    public function getAll()
    {
        return response()->json(
            [
                "error" => false,
                "data" => Horario::all()
            ],
            Response::HTTP_FOUND
        );
    }
    public function find($id)
    {
        return response()->json(
            [
                "error" => false,
                "data" => Horario::find($id)
            ],
            Response::HTTP_FOUND
        );
    }
    public function create(Request $request)
    {
        $horario = Horario::create($request->all());
        return response()->json(
            [
                "error" => false,
                "data" => $horario
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request, Horario $horario)
    {

        try {
            $horario->update($request->all());

            return response()->json(
                [
                    "error" => false,
                    "data" => $horario
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "error" => true,
                    "data" => "Error al modificar Horario"
                ],
                Response::HTTP_OK
            );
        }
    }

    public function delete(Horario $horario)
    {

        $horario->delete();


        return response()->json(
            [
                "error" => false,
                "data" => $horario
            ],
            Response::HTTP_OK
        );
    }
}
