<?php

namespace AppBundle\Controller;

use AppBundle\Reader\Reader;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array());
    }


    /**
     * @Route("/list", name="list-indian-states")
     */
    public function listIndianStatesAction(Request $request)
    {
        $rootDir = $this->get('kernel')->getRootDir() . '/Resources/fixtures/';
        $csvReader = new Reader($rootDir);

        $dataFixtures = $csvReader->readCSV();

        $indianStatesCollection = $csvReader->fillStatesWithData($dataFixtures);

        return $this->render('default/list.html.twig', array(
            'states' => $indianStatesCollection
            )
        );
    }

    /**
     * @Route("/download-file", name="download-file")
     */
    public function downloadFileAction(Request $request)
    {
        // Generate response
        $response = new Response();

        $filename = $this->get('kernel')->getRootDir() . '/Resources/fixtures/list-indian-states.csv';

        // Set headers
        $response->headers->set('Cache-Control', 'private');
        $response->headers->set('Content-type', mime_content_type($filename));
        $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($filename) . '";');
        $response->headers->set('Content-length', filesize($filename));

        // Send headers before outputting anything
        $response->sendHeaders();

        $response->setContent(file_get_contents($filename));

        return $response;

    }


}
