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
    public function indexAction(Request $request)
    {
        $bench = new Benchmark();
        $methods = get_class_methods($bench);

        $line = str_pad("-",38,"-");

        $total = 0;

        preg_match("#^\d.\d#", PHP_VERSION, $match);

        $start = "$line\n|".str_pad("PHP BENCHMARK SCRIPT",36," ",STR_PAD_BOTH).
            "|\n$line\nStart : ".date("Y-m-d H:i:s").
            "\nServer : xlwlx.fr".
            "\nPHP version : ".$match[0].
            "\nPlatform : ".PHP_OS. "\n$line\n";

        foreach ($methods as $method) {
            if (preg_match('/^test_/', $method)) {
                $result = $bench->$method();
                $total += $result;
                $content[] = str_pad($method, 25) . " : " . $result . " sec.\n";
            }
        }

        $end = str_pad("-", 38, "-") .
            "\n" . str_pad("Total time:", 25) .
            " : " . $total .
            " sec.";


        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'start' => $start,
            'end' => $end,
            'content' => $content
        ]);
    }

    /**
     * @Route("/php/info", name="phpinfo")
     * @Method("GET")
     */
    public function phpinfoAction(Request $request)
    {
        ob_start();
        phpinfo();
        $phpinfo = ob_get_clean();

        return $this->render('default/phpinfo.html.twig', [
            'phpinfo' => $phpinfo,
        ]);
    }
}
