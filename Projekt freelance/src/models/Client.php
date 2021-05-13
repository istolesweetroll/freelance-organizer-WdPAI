<?php


class Client
{
private $clientname;
private $clientemail;
private $client_id;

    /**
     * Client constructor.
     * @param $clientname
     * @param $clientemail
     * @param $client_id
     */
    public function __construct($clientname, $clientemail)
    {
        $this->clientname = $clientname;
        $this->clientemail = $clientemail;

    }

    /**
     * @return mixed
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * @param mixed $clientname
     */
    public function setClientname($clientname): void
    {
        $this->clientname = $clientname;
    }

    /**
     * @return mixed
     */
    public function getClientemail()
    {
        return $this->clientemail;
    }

    /**
     * @param mixed $clientemail
     */
    public function setClientemail($clientemail): void
    {
        $this->clientemail = $clientemail;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id): void
    {
        $this->client_id = $client_id;
    }

}