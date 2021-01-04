<?php


class student
{
    protected $id;
    protected $name;
    protected $date;
    protected $sex;
    protected  $from;

    /**
     * student constructor.
     * @param $id
     * @param $name
     * @param $date
     * @param $sex
     * @param $from
     */
    public function __construct($id, $name, $date, $sex, $from)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->sex = $sex;
        $this->from = $from;
    }

}