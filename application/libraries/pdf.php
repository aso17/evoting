<?php
class Pdf
{
    public function __construct()
    {
        require_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}