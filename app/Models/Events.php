<?php


namespace Models;

use Exception;

class Events {

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Récupère les évenements commencant entre deux dates
     *
     * @param \DateTime $start
     * @param \DateTime $end
     * @return array
     */
    public function getEventsBetween (\DateTime $start, \DateTime $end) :array {
        
        
        $sql = "SELECT * FROM `events` 
        WHERE start 
        BETWEEN '{$start->format('Y-m-d 00:00:00')}' 
        AND '{$end->format('Y-m-d 23:59:59')}'";
        //var_dump($sql);
        $statement = $this->pdo->query($sql);
        $results = $statement->fetchAll();
        //var_dump($results);
        return $results;
    }

    /**
     * Récupère les évenements commencant entre deux dates indexé par jours
     *
     * @param \DateTime $start
     * @param \DateTime $end
     * @return array
     */
    public function getEventsBetweenByDay (\DateTime $start, \DateTime $end) :array {
        $events = $this->getEventsBetween($start, $end);
        $days = [];
        foreach ($events as $event) {
            $date = explode (' ', $event['start'])[0];
            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }

    /**
     * Récupère un évnement
     *
     * @param integer $id
     * @return $result
     */
    public function find(int $id): Event {
        require 'Event.php';
        $statement = $this->pdo->query("SELECT * FROM events WHERE id = $id LIMIT 1");
        $statement->setFetchMode(\PDO::FETCH_CLASS, Event::class);
        $result = $statement->fetch();

        if ($result === false ) {
            throw new Exception('Aucun resultat n\'a été trouvé');
        } 
        return $result ;
    }


}