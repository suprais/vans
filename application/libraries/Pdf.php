<?php
use Dompdf\Dompdf;

class Pdf extends Dompdf {
    public function __construction()
    {
        parent::__construction();
    }

    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = [], $filename = 'laporan.pdf')
    {
        $html = $this->ci()->load->view($view,$data,true);
        $this->load_html($html);
        $this->render();
        $this->stream($filename, [ 'Attachment' => false]);
    }
}
?>