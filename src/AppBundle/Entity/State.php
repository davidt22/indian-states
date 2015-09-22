<?php


namespace AppBundle\Entity;


class State
{
    protected $id;
    protected $name;
    protected $population;
    protected $area;
    protected $official;
    protected $capital;
    protected $largestCity;
    protected $populationDensity;
    protected $literacyRate;
    protected $percentajeUrbanPopulation;
    protected $sexRatio;

    /**
     * State constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * @param mixed $official
     */
    public function setOfficial($official)
    {
        $this->official = $official;
    }

    /**
     * @return mixed
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param mixed $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return mixed
     */
    public function getLargestCity()
    {
        return $this->largestCity;
    }

    /**
     * @param mixed $largestCity
     */
    public function setLargestCity($largestCity)
    {
        $this->largestCity = $largestCity;
    }

    /**
     * @return mixed
     */
    public function getPopulationDensity()
    {
        return $this->populationDensity;
    }

    /**
     * @param mixed $populationDensity
     */
    public function setPopulationDensity($populationDensity)
    {
        $this->populationDensity = $populationDensity;
    }

    /**
     * @return mixed
     */
    public function getLiteracyRate()
    {
        return $this->literacyRate;
    }

    /**
     * @param mixed $literacyRate
     */
    public function setLiteracyRate($literacyRate)
    {
        $this->literacyRate = $literacyRate;
    }

    /**
     * @return mixed
     */
    public function getPercentajeUrbanPopulation()
    {
        return $this->percentajeUrbanPopulation;
    }

    /**
     * @param mixed $percentajeUrbanPopulation
     */
    public function setPercentajeUrbanPopulation($percentajeUrbanPopulation)
    {
        $this->percentajeUrbanPopulation = $percentajeUrbanPopulation;
    }

    /**
     * @return mixed
     */
    public function getSexRatio()
    {
        return $this->sexRatio;
    }

    /**
     * @param mixed $sexRatio
     */
    public function setSexRatio($sexRatio)
    {
        $this->sexRatio = $sexRatio;
    }

}