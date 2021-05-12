<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\LogoIncorporadora;
use Auth;

class LogoIncorporadoraController extends Controller
{
    public function index()
    {
        return LogoIncorporadora::all();
    }

    public function show($id)
    {
        $logoIncorporadora = LogoIncorporadora::findOrFail($id);
        return $logoIncorporadora;
    }

    public function create(Request $request)
    {
        $request['incorporadora_id'] = Auth::id();

        $validatedData = $request->validate([
            'incorporadora_id' => 'integer|exists:incorporadoras,id|unique:logo_incorporadoras,incorporadora_id',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $photoResponse = Helper::uploadImage($request, 'logo');

        if ($photoResponse['status'] == true) {
            $validatedData['logo'] = url('/') . '/storage/images/' . $photoResponse['file_name_to_storage'];
        }


        return LogoIncorporadora::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logoIncorporadora = LogoIncorporadora::find($id);

        if (empty($logoIncorporadora)) {
            return response(['message' => 'Incorporadora não encontrada'], 404);
        }

        $photoResponse = Helper::uploadImage($request, 'logo');

        if ($photoResponse['status'] == true) {
            $validatedData['logo'] = url('/') . '/storage/images/' . $photoResponse['file_name_to_storage'];
        }

        Helper::deleteImageStorage($logoIncorporadora->logo);

        $logoIncorporadora->fill($validatedData);
        $logoIncorporadora->save();
        return $logoIncorporadora;
    }

    public function destroy($id)
    {
        $logoIncorporadora = LogoIncorporadora::findOrFail($id);
        Helper::deleteImageStorage($logoIncorporadora->logo);
        $logoIncorporadora->delete();
    }
}
