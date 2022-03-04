<?php

namespace Pessoa;

/**
 * @Entity @Table(name="client")
 */

class client
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $name;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $cpf;

    /**
     * @Column(type="datetime")
     */
    protected $created;

    /**
     * @Column(type="datetime")
     */
    protected $updated;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $created
     */
    public function setCreated()
    {
        $this->created = new \DateTime(date('Y-m-d H:i:s'));
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated()
    {
        $this->updated = new \DateTime(date('Y-m-d H:i:s'));
    }
}