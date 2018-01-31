<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;

class PdfGenerator extends Dompdf
{
    public function __construct()
    {
        parent::__construct();
    }
    public function load_ci()
    {
        return get_instance();
    }
    public function generate($view, $data, $filename)
    {
        $this->setPaper('A4','potrait');
        $this->load_html($this->load_ci()->load->view($view,$data,TRUE));
        $this->render();
        $this->stream($filename, array("Attachment" => false));
    }
}