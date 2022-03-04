<?php

namespace Contato;

/**
 * @Entity @Table(name="contact")
 */
class contact
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="integer")
     */
    protected $client;

    /**
     * @Column(type="integer")
     */
    protected $type;

    /**
     * @Column(type="string")
     */
    protected $description;

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    function createContact($client, $type, $description){
        $this->client = $this->setClient($client);
        $this->type = $this->setType($type);
        $this->description = $this->setDescription($description);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        if($this->type == 1){
            return 'Telefone';
        }
        else {
            return 'Email';
        };
    }
}