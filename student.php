<?php


class student
{
    protected $id;
    protected $name;
    protected $date;
    protected $gender;
    protected  $from;

    /**
     * student constructor.
     * @param $id
     * @param $name
     * @param $date
     * @param $gender
     * @param $from
     */
    public function __construct($id, $name, $date, $gender, $from)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->gender = $gender;
        $this->from = $from;
    }

}