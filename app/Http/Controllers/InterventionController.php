<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervention;
class InterventionController extends Controller
{
    public function indexMenu() {
        $intervention = Intervention::take(4)->latest()->get();
        return view('admin/InterMenu', [
            'intervention'=> $intervention]);
    }

    public function index() {
        $intervention = Intervention::paginate(4);
        return view('admin/InterMenu', [
            'intervention'=> $intervention]);
    }

    public function create() {
        return view('admin/createInter');
    }

    public function edit(Intervention $intervention) {
        return view('admin/EditInter', compact('intervention'));
    }

    public function delete(Intervention $intervention)
    {


        $intervention->delete();
        return redirect(route('admin.intervention'));

    }


    public function store() {

        Intervention::create($this->validateIntervention());

        return redirect(route('admin.intervention'));
    }

    public function update(Intervention $intervention) {

        $intervention->update($this->validateIntervention());

        return $this->index();
    }




    public function validateIntervention(): array
    {
        return request()->validate([
            'type_intervention' => 'required',
            'city' => 'required',
            'intervention_date' => 'required',
            'extra_vehicle' => 'required',
            'inter_vehicle' => 'required'
        ]);
    }
}
