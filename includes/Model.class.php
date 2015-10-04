<?php


	class Model{

		protected $Db;
		protected $table;

		public $fields;
		public $collection;

		public function __construct ($validatorObject = null) {

			global $Db;

			$this->Db = $Db;
			
			$this->Validation 	= $validatorObject;

			$this->fields 		= array();
			$this->collection 	= array();

			$this->construct();

		}


		public function makeFields($aFieldsConfig) {

			foreach ($aFieldsConfig as $fieldname => $value) {

				$this->fields[$fieldname] = null;
			}

		}


		/********************************************************************
				FILL FIELDS
		*********************************************************************
		*	Takes 1 argument
		*	First we get an array with getRow() function
		*	In that function we call this fillfields() function 
		*	to make the result useable by putting it in a storage
		*	We put it in the $collection if $aResult is a multiple array 
		*	We put it in the $fields if $aResult is a row

		*********************************************************************/	
		
		public function fillfields($aResult) {

			// reset the pointer to first key
			reset($aResult); 	
			// return the key the pointer is at		
			$mFirstKey = key($aResult);	

			// if it is a number that means we have a multiple array with rows
			if(is_numeric($mFirstKey)) {

				$this->setCollection($aResult);
				
			}
			// else we have an array with one row
			else {

				$this->setFields($aResult);
			}

		}

		// extends fillfields function
		public function setCollection ($aResult) {

			// loop through the $aResult
			foreach ($aResult as $aRow) {

				// as the $aResult is a multiple array we need to loop through again
				// loop through the rows in the result
				foreach ($aRow as $sFieldName => $sValue) {

					// checks if the fieldname is matching with names in the predefined fields
					if(array_key_exists($sFieldName, $this->fields)) {

						// by default the fields values are null
						// set the values for the fileds from the result
						$this->fields[$sFieldName] = $sValue;
					}
				}

				// put the rows in the 'collection' array, so now we have an array of collection
				array_push($this->collection, $this->fields);


			}

		}

		// extends fillfields function
		public function setFields ($aResult) {

			// loop through the $aResult 
			foreach ($aResult as $sFieldName => $sValue) {

				// checks if the fieldname is matching with names in the predefined fields
				if(array_key_exists($sFieldName, $this->fields)) {

					// by default the fields values are null
					// set the values for the fileds from the result
					$this->fields[$sFieldName] = $sValue;
				}
			}
		}


		/********************************************************************
				INSERT
		*********************************************************************
		*	Dynamic insert function. Takes 3 arguments.
		*	$sValuesClause for the values
		*	$fieldName for the field's name
		*	$aBinding for binding
		*	All of them prepared in the current model, so we can use this 
		*	function dynamically
		*********************************************************************/	
		public function insert($sValuesClause,$fieldName,$aBinding) {
		 
			$sql  = "
					INSERT INTO " . $this->table . "
						 (".$fieldName.")
					VALUES (" . $sValuesClause . ") 

			";

			return $this->Db->execute($sql, $aBinding);
	        
		}
	        
	    /******************************************************************
	    *				PUT
	    *******************************************************************
	    *	$aData is 
	    *
	    *	
	    *	
	    *	do validation and store valid data
	    ******************************************************************/
	    public function put($aData) {

	        	# No error, data is validated
	                # Put the validated and made safe data into the model
	                $this->fields = $aData;

	                return true;
	    }


	    /******************************************************************
	    *			GET ROW
	    *******************************************************************
	    *	$mWhereClause is a mixed parameter. 
	    *
	    *	It can hold a number if we want to get a row by 'id' 
	    *	Or it can hold a string if we want to get a row by other terms
	    *
	    ******************************************************************/

	    public function getRow($mWhereClause = null , $aBinding = null, $sJoin = null) {

	    	
	    	if(is_numeric($mWhereClause)) {

	    		$sWhereClause = " WHERE id=:id";

	    		$binding = array(
							':id' => $mWhereClause
	                       );

	    		$sql = "
	                    SELECT 
	                        " . implode(', ' , array_keys($this->fields)) . "
	                    FROM 
	                        " . $this->table . " 
	                         "
	                          .$sWhereClause ."

	                ";

	            $aResult = $this->Db->fetchRow($sql,$binding);
	        }
			else {
	                
	                if (isset($sWhereClause)) {

	                	$sWhereClause = " WHERE " . $mWhereClause;
	                
	               
	            
			           $sql = "
			                SELECT 
			                    " . implode(', ' , array_keys($this->fields)) . "
			                FROM 
			                    " . $this->table . " 
			                    " . $sJoin . "
			                    " .$sWhereClause ."

			            ";

	            	}
	            	else {

	            		$sql = "
			                SELECT 
			                    *
			                FROM 
			                    " . $this->table . " 
			                    " . $sJoin . "
			                    " . $mWhereClause ."
			                    

			            ";
	            	}
            		
	           
	            	$aResult = $this->Db->fetchArray($sql, $aBinding);

					return $this->fillfields($aResult);	           
	        }
	           
	     
		}


		public function update($sSetClause = null,  $aBinding = null, $sJoin = null, $sWhereClause) {
    
            
           $sql  = " 
					UPDATE 
						" . $this->table . "
						" . $sJoin . "
					SET " . $sSetClause . " 
						" . $sWhereClause ." 
			";
							
			return $this->Db->execute($sql, $aBinding);
			
			
		}


	}


?>