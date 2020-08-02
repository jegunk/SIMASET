<?PHP
//Helper: application/helpers/pdf_helper.php
function pdf_create($html, $filename='', $stream=TRUE) 
{
	require_once(APPPATH.'third_party/dompdf/dompdf_config.inc.php');
        $dompdf = new DOMPDF('A4','landscape');
        $dompdf->load_html($html);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename.".pdf");
        } else {
           // return $dompdf->output();
			return $dompdf->stream($filename, array("Attachment" => 0));
        }
}
?>
