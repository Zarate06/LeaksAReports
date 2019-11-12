<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//le añadi
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use App\Trainer;

class TrainerController extends Controller
{
    
    public function pdf()
    {
        $trainers=Trainer::all();
        $pdf = PDF::loadView('pdf.listado',compact('trainers'));
        //$pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('listado.pdf');
    }

    public function pdf2 (Trainer $id)
    {
        $pdf = PDF::loadView('pdf.listdo2',['trainer'=> $id]);
        return $pdf->download('listdo2.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers=Trainer::all();
        return view( 'index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$trainer = new Trainer();
        //$trainer->name=$request->input('name');
        //$trainer->apellido=$request->input('apellido')
        //$trainer->save();
        //return 'Guardado';
        //return $request->all();
        //
        //return $request->input('name');
        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( ).'/images/',$name);

            $trainer= new Trainer();
            $trainer->name=$request->input('name');
            $trainer->apellido=$request->input('apellido');
            //imagen
            $trainer->avatar=$name;
            $trainer->save();
             return redirect('trainers/');
            //return $name;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {

        //$trainer = Trainer::find($id);
        return view ('show', compact('trainer'));
        //return $trainer;
        //return view('show');
        //return 'tengo que regresar al id';
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('edit',compact('trainer'));

        //return $trainer;
        //
    }
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if ($request->hasFile('avatar')) {
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();

            //imagen
            $trainer->avatar=$name;
            $file->move(public_path( ).'/images/',$name);
            # code...
        }
        $trainer->save();
        return redirect('trainers/');

        //$trainer->fill($request->all());
        //$trainer->save( );
        //return "update";
        //return $request;
        //return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**$trainer = Trainer::find($id);
        if ($trainer->delete($id))
        {
            return redirect('trainers/');
        }
        else return 'El '.$id." No se pudo borrar";
        */

        $data = Trainer::FindOrFail($id);
        if(file_exists('images/'.$data->avatar) AND !empty($data->avatar)){
            unlink('images/'.$data->avatar);
        }
        try{

            $data->delete();
            $bug = 0;
        }
        catch(\Exception $e){
            $bug = $e->errorInfo[1];
        }
        if($bug==0){
            echo "success";
            return redirect('trainers/');
        }else{
            echo "Error";
        }
    }
}


