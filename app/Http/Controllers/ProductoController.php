<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductoController extends Controller
{
    public function getAll()
    {
        return response()->json(
            [
                "error" => false,
                "data" => Producto::all()
            ],
            Response::HTTP_FOUND
        );
    }
    public function find($id)
    {
        return response()->json(
            [
                "error" => false,
                "data" => Producto::find($id)
            ],
            Response::HTTP_FOUND
        );
    }
    public function create(Request $request)
    {
        $producto = Producto::create($request->all());
        return response()->json(
            [
                "error" => false,
                "data" => $producto
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request, Producto $producto)
    {

        try {
            $producto->update($request->all());

            return response()->json(
                [
                    "error" => false,
                    "data" => $producto
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "error" => true,
                    "data" => "Error al modificar producto"
                ],
                Response::HTTP_OK
            );
        }
    }

    public function delete(Producto $producto)
    {
        $producto->status = 0;
        $producto->save();


        return response()->json(
            [
                "error" => false,
                "data" => $producto
            ],
            Response::HTTP_OK
        );
    }
}
