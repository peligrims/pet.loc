<?php


namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Animal;

use Corp\Repositories\InformationsRepository;


class RfidpControllerController extends LkController
{
	
	  public function __construct(InformationsRepository $i_rep) {
    	    	
    	$this->i_rep = $i_rep;

    	$this->template = env('THEME').'.insurance';
		
	}
	
	
	
    public function index()
    {
		$this->title = 'Портфолио';
		$this->keywords = 'Портфолио';
		$this->meta_desc = 'Портфолио';
		
		

        $content = view(env('THEME').'.insurance_content')->render();
		$this->vars = array_add($this->vars,'content',$content);
       //dd($content);
		return $this->renderOutput();
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
