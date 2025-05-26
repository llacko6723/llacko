<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ServiceController extends Controller
{
    public function usluge() {
        $all_services = Service::all();
        return view('usluge', [
            "services" => $all_services
        ]);
    }

    public function list() {
        $all_services = Service::all();
        return view('admin.services.list', [
            "services" => $all_services
        ]);
    }

    public function opsirnije($id) {
        $service = Service::find($id);
        return view('opsirnije', [
            "service" => $service
        ]);
    }

    public function create(){
        return view("admin.services.create");
    }

    public function store(Request $request){
        if(empty($request->slika) or empty($request->naziv) or empty($request->opis) or empty($request->cena)){
            return redirect()->back()->with("error", "Morate popuniti sva polja!");
        }
        Service::create([
            "slika" => $request->slika,
            "naziv" => $request->naziv,
            "opis" => $request->opis,
            "cena" => $request->cena,
            "istaknuto" => $request->istaknuto,
        ]);
        return redirect(url('/admin/list'))->with("success", "Usluga je uspesno kreirana i sacuvana u bazu!");
    }

    public function edit($id){
        $service = Service::find($id);
        return view("admin.services.edit",[
            "service" => $service
        ]);
    }

    public function update(Request $request, $id){
        if (empty($request->naziv) or empty($request->opis) or empty($request->cena)){
            return redirect()->back()->with("error", "Podaci ne smeju da ostanu prazni!");
        }

        $service = Service::find($id);
        $service->naziv = $request->naziv;
        $service->opis = $request->opis;
        $service->cena = $request->cena;
        $service->save();

        return redirect(url("/admin/list"))->with("info", "Usluga je uspesno izmenjena!");
    }

    public function delete($id){
        return view("admin.services.delete",[
            "id" => $id,
            "service" => Service::findOrFail($id)
        ]);
    }

    public function destroy($id){
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect(url("/admin/list"))->with("success", "Usluga je uspesno obrisana iz baze!");
        
    }
}
