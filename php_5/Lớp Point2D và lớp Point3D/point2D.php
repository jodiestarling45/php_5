<?php


class point2D
{
    private $X;
    private $Y;
    public function __construct($X,$Y)
    {
        $this->X=$X;
        $this->Y=$Y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->Y;
    }

    /**
     * @param mixed $X
     */
    public function setX($X)
    {
        $this->X = $X;
    }

    /**
     * @param mixed $Y
     */
    public function setY($Y)
    {
        $this->Y = $Y;
    }
    public function get_XY(){
        return json_decode($this->getX().",".$this->getY());
    }
    public function __toString()
    {   return $this->getX().",".$this->getY();
        // TODO: Implement __toString() method.
    }

}