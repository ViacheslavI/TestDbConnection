<?php


interface DbConnection
{
    function connectMySqlite();

    function connectSQLite();

    public function create();

    public function show();

    public function update();

    public function delete();


}