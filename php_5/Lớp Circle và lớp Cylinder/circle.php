<?php

class circle
{
    private $area;
    private $perimeter;
    private $color;

    public function __construct($area, $color, $perimeter)
    {
        $this->area = $area;
        $this->color = $color;
        $this->perimeter = $perimeter;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getPerimeter()
    {
        return $this->perimeter;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @param mixed $perimeter
     */
    public function setPerimeter($perimeter)
    {
        $this->perimeter = $perimeter;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}