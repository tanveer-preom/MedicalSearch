<?php namespace App\Http\Controllers;

	use DB;
class PageController extends Controller {

    public function index()
    {
    	$company= \App\Company::get();
    	//echo $company;
    	return view('search')->with('company_name',$company);
    }
    

    public function search()
    {
    	//echo $sm= \App\TestCategory::where('category_id','<>','712')->get();
    	
    	if(!isset($_GET['search']))
    		$_GET['search']='';

    	
    	
    	$query='%'.$_GET['search'].'%';
		//echo $query;  	
    	//echo '%'.$_GET['search'].'%';
    	//$test= \App\Test::all(); 
    	//$dummy= \App\Test::where('name','like',$query);
    	
    	//$dummy= DB::table('test')->join('test_category','test.category_id','=','test_category.category_id')->pluck('test.description'); 
    	//print_r($dummy) ;
    	
    		$dummy= DB::table('test')
    				->join('diagnostic_center_and_test','diagnostic_center_and_test.test_id','=','test.test_id')
    				->join('diagnostic_center','diagnostic_center.diagnostic_center_id','=', 'diagnostic_center_and_test.diagnostic_center_id')
    				->join('Company','diagnostic_center.company_id','=','Company.company_id')
    				
    				->select('Company.name as CompanyName','test.name as TestName','diagnostic_center.name as DiagName','diagnostic_center_and_test.price as DiagPrice',
    					'diagnostic_center_and_test.additional_info as additional_info')
    				
    				->where('test.name','like',$query);
    	if(isset($_GET['CompanyName']) and $_GET['CompanyName']!='All' )

	    	$dummy=$dummy->where('Company.name','like','%'.$_GET['CompanyName'].'%');
    		
 		

 		$test= $dummy->get();
    	//print_r($test) ;
    	return view('result')->with('results',$test);
    }

}

?>