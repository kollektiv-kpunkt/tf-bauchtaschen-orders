<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Created At',
            'Last updated at',
            "Order ID",
            "Donation Hash",
            "Status",
            "Vorname",
            "Nachname",
            "E-Mail",
            "Adresse",
            "PLZ",
            "Ort",
            "Telefonnummer",
            "Spendenbetrag",
            "Opt-In",
            "Order URL",
            "Anzahl der Reminder E-Mails"
        ];
    }
}
