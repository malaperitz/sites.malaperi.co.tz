<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function Update(Requests $request, $id)
//     {
//         $validatedData = $request->validate([
//             'title' => 'required|string',
//             'client_id' => 'required|exists:clients,id',
//             'project_id' => 'required|exists:projects,id',
//             'description' => 'required|string',
//             'priority' => 'required|string',
//             'severity' => 'required|string',
//             'status' => 'required|string',
//             'team_id' => 'required|exists:teams,id',
//             'attachment' => 'nullable|file|mimes:pdf',
//         ]);
    
//     $validatedData = $request->validate([
//         'title' => 'required|string',
//         'project_id' => 'required',
//         'client_id' => 'required',
//         'description' => 'required|string',
//         'attachment' => 'nullable|file|mimes:pdf',
//         'priority' => 'required|string',
//         'severity' => 'required|string',
//         'status' => 'required|string',
//         'team_id' => 'required',
//     ]);
//     if ($request->hasFile('attachment')) {
//         $file = $request->file('attachment');
//         $fileName = time() . '_' . $file->getClientOriginalName();
//         // $file->storeAs('attachments', $fileName);
//         $file->move('attachments/', $filename);

//         $validatedData['attachment'] = $fileName;
//     }

    
//     if($request->hasfile('invoice_attachment')){

//         $destination = 'uploads/invoice/document/'.$invoice_attachment->invoice_attachment;
//         if(File::exists($destination)){
//             File::delete($destination);
//         }

//         $file = $request->file('invoice_attachment');
//         $filename = time() . '.' . $file->getClientOriginalExtension();
//         $file->move('attachments/', $filename);
//         $invoice_attachment->invoice_attachment = '/attachments/'.$filename;
//     }

//     Bug::create($validatedData->all());
// }

// public function update(Request $request, string $id)
//     {
//         $validatedData = $request->validate([
//             'title' => 'required|string',
//             'client_id' => 'required|exists:clients,id',
//             'project_id' => 'required|exists:projects,id',
//             'description' => 'required|string',
//             'priority' => 'required|string',
//             'severity' => 'required|string',
//             'status' => 'required|string',
//             'team_id' => 'required|exists:teams,id',
//             'attachment' => 'nullable|file|mimes:pdf',
//         ]);
    
//         $bug = Bug::findOrFail($id);
//         $bug->fill($validatedData);
    
//         if ($request->hasFile('attachment')) {
//             $file = $request->file('attachment');
//             $fileName = time() . '_' . $file->getClientOriginalName();
//             $file->storeAs('attachments', $fileName);
//             $bug->attachment = $fileName;
//         }
    
//         $bug->save();
        
//         return redirect()->route('bug.index')->with('success', 'Bug updated successfully.');
//     }



$bug = Bug::findOrFail($id);


if ($request->hasFile('attachment')) {
    $file = $request->file('attachment');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move('attachments/', $fileName);
        $validatedData['attachment'] = $fileName;
}
else
{
    $validatedData['attachment']=$bug->attachment;

}

$bug->fill($validatedData);
$bug->save();
}