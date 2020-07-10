<?php

class Cinema 
{
    private $id;
    private $date_session;
    private $day;
    private $hour;
    private $movie;


    public function findAllProgramm()
    {
        $sql = 'SELECT * FROM programmation';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $programmationListMovie = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Cinema');
        //dump($programmationListMovie);
        return $programmationListMovie;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_session
     */ 
    public function getDate_session()
    {
        return $this->date_session;
    }

    /**
     * Set the value of date_session
     *
     * @return  self
     */ 
    public function setDate_session($date_session)
    {
        $this->date_session = $date_session;

        return $this;
    }

    /**
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */ 
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get the value of hour
     */ 
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set the value of hour
     *
     * @return  self
     */ 
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get the value of movie
     */ 
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * Set the value of movie
     *
     * @return  self
     */ 
    public function setMovie($movie)
    {
        $this->movie = $movie;

        return $this;
    }
}