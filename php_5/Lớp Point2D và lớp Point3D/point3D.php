<?php


class point3D extends point2D
{
    private $Z;
    public function __construct($X, $Y,$Z)
    {   $this->Z=$Z;
        parent::__construct($X, $Y);
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->Z;
    }

    /**
     * @param mixed $Z
     */
    public function setZ($Z)
    {
        $this->Z = $Z;
    }

    public function __toString()
    {
        return parent::__toString($this->getZ()); // TODO: Change the autogenerated stub
    }
    public function get_XYZ()
    {
        return parent::get_XY($this->getZ()); // TODO: Change the autogenerated stub
    }
    public function getX()
    {
        return parent::getX(); // TODO: Change the autogenerated stub
    }
    public function getY()
    {
        return parent::getY(); // TODO: Change the autogenerated stub
    }
    public function setX($X)
    {
        parent::setX($X); // TODO: Change the autogenerated stub
    }
    public function setY($Y)
    {
        parent::setY($Y); // TODO: Change the autogenerated stub
    }

}