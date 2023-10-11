<?php
use Illuminate\Database\Eloquent\Model;
use App\Traits\PrintableTrait;
use Illuminate\Support\Facades\PDF;

trait PrintableTraitt
{
    public function print()
    {
        $pdf = PDF::loadView('printable', ['data' => $this]);
        return $pdf->download('printable.pdf');
    }
}