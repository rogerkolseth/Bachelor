<?php



class Dummy{
    
    private $dbConn;
    
    
    const TABLE = "dummy";
    const SELECT_QUERY = "SELECT * FROM " . Dummy::TABLE;
    
    /** @var PDOStatement Statement for selecting all entries */
    private $selStmt;
    
    public function __construct(PDO $dbConn) {
    $this->dbConn = $dbConn;
    $this->selStmt = $this->dbConn->prepare(Dummy::SELECT_QUERY);
    }
    
    /**
     * Get all info stored in the DB
     * @return array in associative form
     */
    public function getAll() {
        // Fetch all customers as associative arrays
        $this->selStmt->execute();
        return $this->selStmt->fetchAll(PDO::FETCH_ASSOC);
    }   
    
}


