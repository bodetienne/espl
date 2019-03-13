<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Candidat;
use App\Entity\Garant;
use App\Entity\Formation;

class PdfController extends Controller
{
    public function index($id)
    {

        $candidat = $this->getDoctrine()->getRepository(Candidat::class)->find($id);
        

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $dompdf->set_option('isHtml5ParserEnabled', true);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pdf.html.twig', [
            'title' => "Dossier de candidature",
            'candidat' => $candidat
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);



    }
}
