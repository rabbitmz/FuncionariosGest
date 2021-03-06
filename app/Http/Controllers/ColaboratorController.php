<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\ProfessionalSearch;
use App\Provincia;
use App\Distrito;
use App\Classe;
use App\Tipo_documento;

class ColaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$professionals = Professional::all();
    	return view("listAll.listAll",compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$professional = Professional::find($id);

        //get colaborator by id
    	return view("viewColaborator.viewColaborator3",compact('professional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	//get colaborator by id
    	return view("editColaborator.editColaborator3");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function colaboratorForm()
    {
        return view('colaborator.create', [
            'tipo_documento' => Tipo_documento::orderBy('id','asc')->pluck('descricao','id'),
            'naturalidade_provincias' => Provincia::pluck('nome','id'),
            'naturalidade_distritos' => Distrito::pluck('nome','id'),
            'endereco_provincias' => Provincia::pluck('nome','id'),
            'endereco_distritos' => Distrito::pluck('nome','id'),
            'classes' => Classe::orderBy('id','asc')->pluck('descricao','id'),
        ]);
    }

    public function storeColaboratorForm(Request $request)
    {
       $professional= new Professional;

        $professional->nome=$request->name;
        $professional->genero=$request->input('gender');
        $professional->data_nascimento=$request->birthDate;
        $professional->tipo_documento_id=$request->input('documentype');
        $professional->numero_documento=$request->identificationDocument;
        $professional->data_emissao_documento=$request->dateIssue;
        $professional->data_validade_documento=$request->dateValid;
        $professional->naturalidade_provincia_id=$request->input('naturalidade_provincia');
        $professional->naturalidade_distrito_id=$request->input('naturalidade_distrito');
        $professional->endereco_provincia_id=$request->input('endereco_provincia');
        $professional->distrito_id=$request->input('endereco_distrito');
        $professional->cidade=$request->addressCity;
        $professional->bairro=$request->neighborhood;
        $professional->rua=$request->street;
        $professional->quarteirao=$request->block;
        $professional->celula=$request->cell;
        $professional->casa=$request->house;
        $professional->tem_nivel_academico=$request->input('educationLevel');
        $professional->tem_ensino_geral=$request->input('generalEducation');
        $professional->tem_ensino_tecnico=$request->input('technicalEducation');
        $professional->tem_ensino_universitario=$request->input('university');
        $professional->classe_id=$request->input('classe');
        $professional->telefone=$request->phoneNumber;
        $professional->email=$request->email;

        $professional->save();

        return redirect('/createColaborator/page1');

    }

    public function onPageOne(Request $request)
    {
    	return view("colaborator.create1");
    }
    public function onPageTwo(Request $request)
    {
    	return view("colaborator.create2");
    }
    public function onPageThree(Request $request)
    {
    	return view("colaborator.create3");
    }
    public function onPageFour(Request $request)
    {
    	return view("colaborator.create4");
    }
    public function onPageFive(Request $request)
    {
    	return view("colaborator.create5");
    }
    public function onPageSix(Request $request)
    {
    	//Save na base
    	return view("colaborator.create6");
    }

    public function getViewColaboratorSearchView()
    {
    	return view("viewColaborator.viewColaborator1");
    }

    public function getColaboratorByNameOrDocumentIdentification(Request $request)
    {
    	$search = false;

    	if($request->has("name"))
    	{
    		$this->validate($request, [
    				'name' => 'bail|regex:/^[a-zA-Z]+$/u|max:255|min:3',
    		]);
    		$search = true;
    	}

      if($request->has("surname"))
      {
        $this->validate($request, [
            'surname' => 'bail|regex:/^[a-zA-Z]+$/u|max:255|min:3',
        ]);
        $search = true;
      }

    	if($request->has("docNumber"))
    	{
    		$this->validate($request, [
    				'docNumber' => 'min:5',
    		]);
    		$search = true;
    	}
    	if($search)
    	{
    		$professionals= ProfessionalSearch::apply($request);
    	}
    	else
    	{
    		return view("viewColaborator.viewColaborator1");
    	}
    	return view("viewColaborator.viewColaborator2",compact('professionals'));
    }

	//edit
    public function getEditColaboratorSearchView()
    {
    	return view("editColaborator.editColaborator1");
    }
    public function getColaboratorByNameOrDocumentIdentificationEdit(Request $request)
    {

    	return view("editColaborator.editColaborator2");
    }
    public function onEditPageFour(Request $request)
    {
    	return view("editColaborator.editColaborator4");
    }
    public function onEditPageFive(Request $request)
    {
    	return view("editColaborator.editColaborator5");
    }
    public function onEditPageSix(Request $request)
    {
    	return view("editColaborator.editColaborator6");
    }
    public function onEditPageSeven(Request $request)
    {
    	return view("editColaborator.editColaborator7");
    }
    public function onEditPageEight(Request $request)
    {
    	return view("editColaborator.editColaborator8");
    }
    public function onEditPageNine(Request $request)
    {
    	//Save na base
    	return view("editColaborator.editColaborator9");
    }


}
