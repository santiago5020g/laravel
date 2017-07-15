<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\LandingPage;
use App\Config;
use App\Benefit;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::with("landing.configs","landing.benefits")->first();
        //return json_encode($organization->landing->benefits[0]["title"]);
        return view('landing',['organization'=>$organization]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $configsArray = [];
        $landing = LandingPage::where('id_organization',$request->organization)->first();
        $configs = Config::where('id_landing_page',$landing->id_landing_page)->get();
        $benefits = Benefit::where('id_landing_page',$landing->id_landing_page)->get();
        $values = $request->values;
        $benefitValues = $request->benefitValues;
        

        $path = public_path().'/uploads/organization_'.$landing->id_organization;

        $fileParalax1 = $request->file('paralax1');
        if(\File::exists($fileParalax1))
        {
            $fileParalax1Name = "paralax1_idOrganization_".$landing->id_organization.".jpg";
            $fileParalax1->move($path, $fileParalax1Name);
        }

        $logo2 = $request->file('logo2');
        if(\File::exists($logo2))
        {
            $fileLogo2Name = "logo2.png";
            $logo2->move($path, $fileLogo2Name);
        }

        $paralax3 = $request->file('paralax3');
        if(\File::exists($paralax3))
        {
            $fileparalax3Name = "paralax3.jpg";
            $paralax3->move($path, $fileparalax3Name);
        }

        $promo = $request->file('promo');
        if(\File::exists($promo))
        {
            $filepromoName = "promo-1.png";
            $promo->move($path, $filepromoName);
        }
        
        
            
        foreach ($configs as $index => $config) {
             $configEdit = Config::where('id_landing_config',$config->id_landing_config)->first();
             $configEdit->value = $values[$index];
             $configsArray[] = $configEdit;
         } 

         //si son dos beneficios el request vendra con 4 que son benefitValues[0] corresponde al titulo del primer beneficio
         //benefitValues[1] corresponde al contenito del primer beneficio
         //benefitValues[2] corresponde al titulo del segundo beneficio
         //benefitValues[3] corresponde al contenito del segundo beneficio
         $indice_benefitValues = 0;
         foreach ($benefits as $index => $benefit) {
             $benefitEdit = Benefit::where('id_landing_benefits',$benefit->id_landing_benefits)->first();
             $benefitEdit->title = $benefitValues[$indice_benefitValues];
             $benefitEdit->title = $this->quitCharacters($benefitEdit->title);
             $indice_benefitValues += 1;
             $benefitEdit->content = $benefitValues[$indice_benefitValues];
             $benefitEdit->content = $this->quitCharacters($benefitEdit->content);
             $benefitsArray[] = $benefitEdit;
             $indice_benefitValues += 1;
         }
    

        //$file = $request->file('paralax1');
        //$info["data"] = $landing;
        $info["status"] = $landing->configs()->saveMany($configsArray);
        $info["benefitsArray"] = $benefitValues;
        $info["message"] = "Cambios guardados";

        return json_encode($info);
    }


    private function quitCharacters($string){
        $string = str_replace('<b>', '', $string);
        $string = str_replace('</b>', '', $string);
        $string = str_replace('<div>', '', $string);
        $string = str_replace('</div>', '', $string);
        $string = str_replace('/([\ \t]+(?=[\ \t])|^\s+|\s+$)/g', '', $string);
        $string = str_replace('\r\n', '', $string);
        return $string;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
