<?php

interface Logger{
    public function save($message);
}

class FileLogger implements Logger{
    public function save($message)
    {
        var_dump('log into file'.$message);
    }
}

class DatabaseLogger implements Logger{
    public function save($message)
    {
        var_dump('log into database'.$message);
    }
}

class UsersController{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger=$logger;
    }

    public function register()
    {
        $user='Ming';
        $this->logger->save($user);
    }
}

$controller=new UsersController(new DatabaseLogger());
$controller->register();