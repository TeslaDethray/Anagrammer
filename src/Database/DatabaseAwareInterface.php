<?php

namespace TeslaDethray\Anagrammer\Database;

interface DatabaseAwareInterface
{
    /**
     * Return the database object.
     *
     * @return Database
     */
    public function getDatabase();

    /**
     * Inject a pre-configured database object.
     *
     * @param Database $database
     * @return mixed
     */
    public function setRequest(Database $database);
}