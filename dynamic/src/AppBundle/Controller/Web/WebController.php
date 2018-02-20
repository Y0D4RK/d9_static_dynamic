<?php

namespace AppBundle\Controller\Web;

use AppBundle\Service\Benchmark;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class WebController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Benchmark $benchmark, Request $request)
    {
        $methods = get_class_methods(new Benchmark);

        $line = str_pad("-",38,"-");

        $total = 0;

        $start = "<pre>$line\n|".str_pad("PHP BENCHMARK SCRIPT",36," ",STR_PAD_BOTH).
            "|\n$line\nStart : ".date("Y-m-d H:i:s").
            "\nServer : {$_SERVER['SERVER_NAME']}@{}\nPHP version : ".PHP_VERSION.
            "\nPlatform : ".PHP_OS. "\n$line\n";

        $end = str_pad("-", 38, "-") .
            "\n" . str_pad("Total time:", 25) .
            " : " . $total .
            " sec.</pre>";

        foreach ($methods as $method) {
            if (preg_match('/^test_/', $method)) {
                $total += $result = $method();
                $res = str_pad($method, 25) . " : " . $result . " sec.\n";
            }
        }


        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'start' => $start,
            'end' => $end,
        ]);
    }
}
