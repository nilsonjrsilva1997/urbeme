<?php

namespace App\Http\Controllers;

use App\Models\Incorporadora;
use Illuminate\Http\Request;

class IncorporadoraController extends Controller
{

    public function index()
    {
        $incorporadoras = Incorporadora::with('empreendimento')
            ->get();

        return $incorporadoras;
    }

    public function show($id)
    {
        $incorporadora = Incorporadora::where(['id' => $id])
            ->with('empreendimento')
            ->first();

        if (!empty($incorporadora)) {
            return $incorporadora;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'informacoes' => 'required|string|max:10000',
            'live' => 'required|url',
            'site' => 'required|url',
        ]);

        $fileNameToStoreLogo = '';

        if ($request->hasFile('logo')) {
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStoreLogo = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStoreLogo);
        }

        $validatedData['logo'] = $fileNameToStoreLogo;

        return Incorporadora::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'informacoes' => 'string|max:10000',
            'live' => 'url',
            'site' => 'url',
        ]);

        $empreendimento = Incorporadora::find($id);

        if (!empty($empreendimento)) {

            $fileNameToStoreLogo = '';

            if ($request->hasFile('logo')) {
                $filenameWithExt = $request->file('logo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStoreLogo = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('logo')->storeAs('public/images', $fileNameToStoreLogo);
            }

            $validatedData['logo'] = $fileNameToStoreLogo;

            $empreendimento->fill($validatedData);
            $empreendimento->save();
            return $empreendimento;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $incorporadora = Incorporadora::find($id);

        if (!empty($incorporadora)) {
            $incorporadora->delete();
            return true;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }
}
