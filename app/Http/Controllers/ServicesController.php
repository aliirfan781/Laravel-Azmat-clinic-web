<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('services', compact('services'));
        //
    }

    public function admin()
    {
        $services = Services::all();
        return view('Backend/admin-services', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Backend/add-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert_services(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:60',
            'image' => 'required',
        ]);

        $fileName = '';
        if ($request->file()) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/img', $fileName);
        }

        $service = Services::create([
            'title' => $request->title,
            'image' => $fileName,
        ]);

        return redirect()->route('Admin-Services')->with('message', 'Service added successfully!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Services::where('id', $id)->delete();
        return redirect()->route('Admin-Services')->with('message', 'Service deleted Successfully');
        //
    }
}