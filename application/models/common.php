<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model {

	// category model
	CONST CATEGORY = 'category';

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

	/**
	 * GetCategory method
	 */
	public function GetCategory()
	{
		$data = $this->db->get(self::CATEGORY)->result_array();
		return empty($data) ? false : $this->format($data);
	}

	// format data
    private function format($data)
    {	
    	$parent = [];
    	$pi = 0;
    	$ci = 0;
    	$ni = 0;
    	foreach ($data as $key => $value) {
    		if($value['parent'] == 0){
    			$parent[$pi]['parent_id'] = $value['id'];
    			$parent[$pi]['name']      = $value['name'];
    			$parent[$pi]['href']      = $value['href'];
    			$pi++;
    		}else{
    			$children[$ci]['parent_id']     = $value['parent'];
    			$children[$ci]['children_name'] = $value['name'];
    			$children[$ci]['href']      	= $value['href'];
    			$ci++;
    		}
    	}
    	if(!empty($parent)){
    		foreach ($parent as $key => $value) {
    			$pid 		 = $value['parent_id'];
    			$childrenArr = $this->getChildrenIdByParentID($children,$pid);
    			$new[$key]['parent_name'] = $value['name'];
    			$new[$key]['parent_href'] = $value['href'];
    			$new[$key]['children'] 	  = $childrenArr;
    		}
    	}
    	return $new;
    }

    // child
    private function getChildrenIdByParentID($data,$parentID)
    {	
    	$children = [];
    	foreach ($data as $key => $value) {
    		$parent = $value['parent_id'];
    		if($parent == $parentID){
    			$children[] = $value;
    		}
    	}
    	return $children;
    }
}