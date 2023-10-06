<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Auth\Events\Validated;
use Symfony\Contracts\Service\Attribute\Required;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barangs = Barang::all();
        return view('Brg.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Brg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=> 'Required',
            'harga'=> 'Required'
        ]);
        Barang::create($request->all());
        return redirect()->route('Barang.index')
            ->with('success', 'Data Barang berhasil ditambahkan.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $brgs)
    {
        //
        return view('Brg.edit', compact('brgs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $brgs)
    {
        //
        $request->validate(
            [
            'nama'=> 'Required',
            'harga'=> 'Required'
            ]);

            $brgs->update($request->all());
            return redirect()->route('Barang.index')
                ->with('success', 'Data Barang berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $brgs)
    {
        //
        $brgs->delete();
        return redirect()->route('Barang.index')
            ->with('success', 'Data Barang berhasil ditambahkan.');

    }
}
