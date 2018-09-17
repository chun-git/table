<?php

/**
 * @Entity
 * @Table(name = "student")
 */
class Student
{
    /**
     * @Id
     * @Column(type = "integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type = "integer", name = "teacher_id")
     */
    private $teacherId;

    /**
     * @Column(type = "integer", name = "source")
     */
    private $source;

    /**
     * @Column(type = "string", length = 10)
     */
    private $name;

    public function __construct($name, $teacherId) {
        $this->name = $name;
        $this->teacherId = $teacherId;
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
     * @param integer $teacherId
     */
    public function setTeacherId($teacherId) {
        $this->teacherId = $teacherId;
    }

    /**
     * @return integer
     */
    public function getTeacherId() {
        return $this->teacherId;
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

    /**
     *
     * @param type $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return type string
     */
    public function getSource(){
        return $this->source;
    }
}
