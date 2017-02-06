<?php

namespace TeslaDethray\Anagrammer\Database;

trait DatabaseAwareTrait
{
    /**
     * @var Database
     */
    protected $database;

    /**
     * Return the database object.
     *
     * @return Database
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Inject a pre-configured database object.
     *
     * @param Database $database
     * @return mixed
     */
    public function setRequest(Database $database)
    {
        $this->database = $database;
    }
}
