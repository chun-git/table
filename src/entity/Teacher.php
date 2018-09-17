<?php

/**
 * @Entity
 * @Table(name = "teacher")
 */
class Teacher
{
    /**
     * @Id
     * @Column(type = "integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type = "string", length = 10)
     */
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @param integer $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }
}
