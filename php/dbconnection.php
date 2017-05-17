
<? php 
  class DBConnection {

  	var $conn 

  	function DBConnection() {
  		$this -> conn = pg_connect(host = 'localhost', 
  								   port = '5432', 
  								   dbname = 'zip_codes',
  			                       user = 'postgres',
  			                       password = '26262626') or die ('unable to connect to database ... bitch');
  	}

  }

?> 