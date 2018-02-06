<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Http\Requests;
use Mapper;

use Corp\Repositories\ClinicsRepository;

class ClinicsController extends SiteController
{
    
	 public function __construct( ClinicsRepository $cl_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	
    	$this->cl_rep = $cl_rep;
    	
    	$this->bar = 'right';
    	
    	$this->template = env('THEME').'.clinics';
		
	}

	
    public function index()
    {
        $this->title = 'Клиники';
		$this->keywords = 'Клиники';
		$this->meta_desc = 'Клиники';
		
		$clinic = $this->getClinic();

		
		Mapper::map(55.7234037,37.4331034, ['zoom' => 10, 'markers' => ['title' => 'Государственный центр экстренной ветеринарной помощи', 'animation' => 'DROP']]);
		//Mapper::map(55.680846,37.6322623, ['zoom' => 10, 'markers' => ['title' => 'Ветеринарная клиника "МиВ', 'animation' => 'DROP']]);
		//Mapper::map(55.6480043,37.5993909, ['zoom' => 10, 'markers' => ['title' => 'Группа компаний "Близнецы"  ', 'animation' => 'DROP']]);

		
		
		$content = view(env('THEME').'.clinics_content')->with('clinic',$clinic)->render();
        $this->vars = array_add($this->vars,'content',$content);
        
         
        return $this->renderOutput();
    }
	public function getClinic($take = FALSE,$paginate = TRUE) {
		
		$сlinic = $this->cl_rep->get('*',$take,$paginate);
		
		
		
		return $сlinic;
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
