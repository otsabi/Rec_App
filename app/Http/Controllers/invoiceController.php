<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Buyer;

class invoiceController extends Controller
{
	public function show(){
            $client = new Party([
            'name'          => 'najib benali',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
            'note'        => 'IDDQD',
                
            ],
        ]);

        $customer = new Party([
            'name'          => 'othmane sabi',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
            'numéro de l\'ordre' => '> 654321 <',
            ],
        ]);

        $items = [
            (new InvoiceItem())->title('achats produit')->pricePerUnit(47.79)->quantity(2)->discount(10),
            (new InvoiceItem())->title('achat matériels')->pricePerUnit(71.96)->quantity(2),  
        ];

        $notes = [
            'HEALTH INNOVATION',
            '10 Rue Racine Quartier Val Fleuri Maarif - Casablanca',
            '05222-32251',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('LISTE DES BONS DE LIVRAISON NON SOLDES')
            ->series('BIG')
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->seller($client)
            ->buyer($customer)
            ->date(now())
            ->dateFormat('d/m/Y')
            ->payUntilDays(14)
            ->currencySymbol('dh')
            ->currencyCode('MAD')
            ->currencyFormat('{VALUE}{SYMBOL}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . ' ' . $customer->name)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('public');
            
        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->stream();
	}
}
