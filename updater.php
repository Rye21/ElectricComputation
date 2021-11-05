<?php
	function e($var){
		return mb_convert_encoding( $var, "utf-8", "sjis-win" );
		}
		///
    class KakouiraiPlans {	
    	public function last_kakouirai_date() {
    		try {
    			$pdo = new PDO( 'mysql:host=localhost;dbname=importing;charset=utf8;', 'root', 'admin' );
    			$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    			$stmt = $pdo->prepare(
    				"SELECT code_number FROM import ORDER BY id DESC LIMIT 1"
    			);
    			$stmt->execute();
    			while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    				$last_execution = $row["code_number"];
    			}
    		} catch( PDOException $e ) {
    			echo $e->getMessage();
    		}
    		return @$last_execution;
    	}
    	//////////////////////////////////////////////////////////////////////////
		public function joutou_start( $code_number ) {
			try {
			$pdo = new PDO( "odbc:HRDSQL4", "sys-committee", "h56r13d" );
			$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $pdo->prepare(
				"SELECT ExpectedHouseRaisingDate FROM HrdInformationService.dbo.ConstructionSchedule
				WHERE ConstructionCode = :code_number 
				"
			);
			
			$stmt->bindValue( ':code_number', $code_number, PDO::PARAM_STR );
			$stmt->execute();
			while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
				return substr($row["ExpectedHouseRaisingDate"],0,10);
			}
			} catch ( PDOException $e) {
				echo $e->getMessage();
			}
		}	
		//////////////////////////////////////////////////////////////////////////
		public function update_joutou( $code_number, $ExpectedHouseRaisingDate ) {
			try {
				$pdo = new PDO( 'mysql:host=localhost;dbname=importing;charset=utf8;', 'root', 'admin' );
				$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 
				$stmt = $pdo->prepare(
					"UPDATE import
					SET jd = :ExpectedHouseRaisingDate
					WHERE
					code_number = :code_number
					"
				);
				$stmt->bindValue( ':ExpectedHouseRaisingDate', $ExpectedHouseRaisingDate, PDO::PARAM_STR );
				$stmt->bindValue( ':code_number', $code_number, PDO::PARAM_STR );	
				$stmt->execute();
			} catch ( PDOException $e) {
				echo $e->getMessage();
			}	
		}			
    	/////////////////////////////////////////////////////////////////////////
		public function plan_update_joutou() {
			try {
				$pdo = new PDO( 'mysql:host=localhost;dbname=importing;charset=utf8;', 'root', 'admin' );
				$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 
				$stmt = $pdo->prepare(
					"SELECT code_number from import
					WHERE
					jd IS NULL
					OR
					jd = ''
					"
				);
				$stmt->execute();
				$plans = array();
				while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
					$plans[] = $row["code_number"];
				}
	 
			} catch ( PDOException $e) {
				echo $e->getMessage();
			}
			return $plans;
		}
		///////////////////////////////////////////////////////////////////////////
			
		
		///////////////////////////////////////////////////////////////////////////
		public function execute() {
	 
			foreach( $this->plan_update_joutou() as $code_number ) {
				$this->update_joutou( $code_number, $this->joutou_start( $code_number ) );
			}
			 foreach( $this->plan_update_joutou1() as $code_number ) {
				$this->update_joutou1( $code_number, $this->joutou1_start( $code_number ) );
			}
		
			
			
			
			
		}
    }
     
    $obj = new KakouiraiPlans();
    $obj->execute();
