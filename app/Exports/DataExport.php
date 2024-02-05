<?php

namespace App\Exports;

use App\Models\NissanIssue;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $nissanissues = Nissanissue::with('user')->get();
        return $nissanissues->map(function ($nissanissue) {
            return [
                'Issue No.' => $nissanissue->issueno,
                'Part Out' => $nissanissue->partout,
                'Part Tru' => $nissanissue->parttru,
                'Quality' => $nissanissue->quality,
                'Check' => $nissanissue->check, 
                'Scanner' => optional($nissanissue->user)->name,
                'Approval' => $nissanissue->approval,
                'Description' => $nissanissue->description,
                'Create date' => $nissanissue->created_at,
                'Update date' => $nissanissue->updated_at,
                // Get user name or null if user doesn't exist
            ];
        });
    }
    // public function headings(): array
    // {
    //     return [
    //         'Issue No.',
    //         'Part Out',
    //         'Part Tru',
    //         'Quality',            
    //         'Check',
    //         'Approval',
    //         'Description',
    //         'User Name',
    //         'Create date',
    //         'Update date',
    //     ];
    // }
}
