<?php

namespace AppBundle\Reader;

use AppBundle\Entity\State;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\File\File;

class Reader
{
    // change these options about the file to read
    private $csvParsingOptions = array(
        'finder_in' => __DIR__,
        'finder_name' => 'list-indian-states.csv'
    );

    /**
     * Reader constructor.
     */
    public function __construct($rootDir, $file)
    {
        $this->csvParsingOptions['finder_in'] = $rootDir;
        $this->csvParsingOptions['finder_name'] = $file;
    }


    /**
     * Read a csv file and return it into an array
     *
     * @return array
     */
    public function readCSV()
    {
        $finder = new Finder();
        $finder->files()
            ->in($this->csvParsingOptions['finder_in'])
            ->name($this->csvParsingOptions['finder_name'])
        ;

        foreach ($finder as $file) {
            /** @var File $csv */
            $csv = $file;
        }

        $rows = array();
        if (($handle = fopen($csv->getRealPath(), "r")) !== FALSE) {
            $i = 0;
            while (($data = fgetcsv($handle, null, ",")) !== FALSE) {
                $i++;

                if(is_numeric($data[0])){
                    $rows[] = $data;
                }

            }

            fclose($handle);
        }

        return $rows;
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function fillStatesWithData(array $data)
    {
        $listIndianStates = array();

        foreach ($data as $state){
            $indianState = new State();
            $indianState->setId($state[0]);
            $indianState->setName($state[1]);
            $indianState->setPopulation($state[2]);
            $indianState->setArea($state[3]);
            $indianState->setOfficial($state[4]);
            $indianState->setCapital($state[5]);
            $indianState->setLargestCity($state[6]);
            $indianState->setPopulationDensity($state[7]);
            $indianState->setLiteracyRate($state[8]);
            $indianState->setPercentajeUrbanPopulation($state[9]);
            $indianState->setSexRatio($state[10]);

            array_push($listIndianStates, $indianState);
        }

        return $listIndianStates;
    }

}