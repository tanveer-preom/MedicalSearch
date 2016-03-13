<?php namespace App\Http\Controllers;
     use Input;
	use DB;
    use Auth; 
class PageController extends Controller {

    public function index()
    {
        $ID='null';
        //echo \App\DiagnosticCenter::find('1')->Company;
        if(Auth::check()){
        $ID=Auth::user();

        
    	}

        $tests= \App\Test::all();
        $company= \App\Company::get();
        //dd($test);
        //return view('search')->with('company_name',$company)->with('userId',$ID);
        return view('search')->with('tests',$tests)->with('userId',$ID);
    }
    

    public function search()
    {

    	//echo $sm= \App\TestCategory::where('category_id','<>','712')->get();
    	//dd($request);
    	if(!isset($_GET['search']))
    		$_GET['search']='';

    	
    	
    	$query='%'.$_GET['search'].'%';
		
        	$dummy= DB::table('test')
    				->join('diagnostic_center_and_test','diagnostic_center_and_test.test_id','=','test.id')
    				->join('diagnostic_center','diagnostic_center.id',
                        '=', 'diagnostic_center_and_test.diagnostic_center_id')
    				->join('Company','diagnostic_center.company_id','=','Company.id')
    				
    				->select('test.id as test_id','Company.name as name','test.name as TestName','diagnostic_center.name as DiagName',
                        'diagnostic_center_and_test.price as DiagPrice',
    					'diagnostic_center_and_test.additional_info as additional_info')
    				
    				->where('test.name','like',$query);
    	
         	
 		

		$test= $dummy->get();
        //dd($test);
        
        /*$test= \App\Test::where('name','like', $query)->get();

        foreach ($test as $key  ) {
            echo $key->name;//.'  '. $key->DiagnosticCenterAndTest()->additional_info.'<br>';
        }
        */


        return view('result')->with('results',$test);
    }



    //
    public function showTest($id)
    {
        $test=\App\Test::find($id);//->DiagnosticCenterAndTest;
        //dd($test);
        return $test->toArray();
    }


    public function search_result()
    {
        
        //dd($_POST);
        $test_id= Input::get('TestName');

        /*
        $dump=\App\Test::find($test_id)->DiagnosticCenterAndTest;
        foreach ($dump as $key  ) {
            
            //var_dump($key->DiagnosticCenter);  
            echo $key.'<br>';
            echo $key->DiagnosticCenter.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
            //echo $key->
        } 
*/

            $dummy= DB::table('test')
                    ->join('diagnostic_center_and_test','diagnostic_center_and_test.test_id','=','test.id')
                    ->join('diagnostic_center','diagnostic_center.id',
                        '=', 'diagnostic_center_and_test.diagnostic_center_id')
                    ->join('Company','diagnostic_center.company_id','=','Company.id')
                    
                    ->select('test.id as test_id','Company.name as name','test.name as TestName','diagnostic_center.name as DiagName',
                        'diagnostic_center_and_test.price as DiagPrice',
                        'diagnostic_center_and_test.additional_info as additional_info')
                    
                    ->where('test.id',$test_id);
        


       
        $test=$dummy->get();
        return view('result')->with('results',$test);
    }

}
?>