<?php
require_once __DIR__ . '/../autoload.php';

class InvoiceController
{
    public static function index()
    {
        // tutaj jakaś logika
        die("Tu jest invoice list");
    }

    public static function show()
    {
        $invoiceId = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        if (! $invoiceId) {
            throw new \Exception("Lipa nie ma idika");
        }

        // pobieranie faktury
        $invoiceRepository = new InvoiceRepository();
        $invoice = $invoiceRepository->getInvoice($invoiceId);

        // tutaj jakaś logika
        echo InvoiceViewShow::render([
            'invoice' => $invoice,
        ]);
        return;

//        die("Tu jest invoice show dla $invoiceId " . print_r($invoice, true));
    }
}
