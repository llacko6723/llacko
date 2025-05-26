<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function listW() {
        $all_workers = Worker::all();
        return view('admin.workers.list', [
            "workers" => $all_workers
        ]);
    }

    public function create(){
        return view("admin.workers.create");
    }

    public function store(Request $request){
        if(empty($request->ime) or empty($request->prezime) or empty($request->email)){
            return redirect()->back()->with("error", "Morate popuniti sva polja!");
        }
        Worker::create([
            "ime" => $request->ime,
            "prezime" => $request->prezime,
            "email" => $request->email,
        ]);
        return redirect(url('/admin/listw'))->with("success", "Radnik je uspesno zaposlen i dodat u bazu!");
    }

    public function edit($id){
        $worker = Worker::find($id);
        return view("/admin/workers.edit", [
            "worker" => $worker
        ]);
    }

    public function update(Request $request, $id){
        if (empty($request->ime) or empty($request->prezime) or empty($request->email)){
            return redirect()->back()->with("error", "Svi podaci moraju biti popunjeni!");
        }

        $worker = Worker::find($id);
        $worker->ime = $request->ime;
        $worker->prezime = $request->prezime;
        $worker->email = $request->email;
        $worker->save();

        return redirect(url("/admin/listw"))->with("info", "Radnik je uspesno izmenjen!");

    }

    public function delete($id){
        return view("admin.workers.delete", [
            "id" => $id,
            "worker" => Worker::findOrFail($id),
        ]);
    }

    public function destroy($id){
        $worker = Worker::findOrFail($id);
        $worker->delete();

        return redirect(url("/admin/listw"))->with("success", "Uspesno ste obrisali radnika iz baze!");

    }
}
