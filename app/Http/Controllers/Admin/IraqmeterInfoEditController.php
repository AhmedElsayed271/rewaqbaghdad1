<?php


namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\IraqmeterInfoEdit;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\IraqmeterInfoEditTranslation;

class IraqmeterInfoEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:edit-iraqMeterInfo ')->only('edit', 'update');
    }

    public function edit()
    {
        $row = IraqmeterInfoEdit::with('translations')->first();

        return view('admin.iraq-meter.editInfo.edit', compact('row'));
    }

    public function update(Request $request)
    {
        
        $validatedData = $request->validate([
            'contact_email' => 'required|email|string|max:50',
            'img' => 'required|string|max:255',

            'facebook'  => 'nullable|url|max:255',
            'twitter'   => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube'   => 'nullable|url|max:255',
            'linkedin'  => 'nullable|url|max:255',
            'whatsapp'  => 'nullable|url|max:255',
            'telegram'  => 'nullable|url|max:255',
            'tiktok'    => 'nullable|url|max:255',
            'content' => 'required|array',
            'content.*' => 'required|string',
        ]);
        try {

            DB::beginTransaction();
            $iraqmeterInfoEdit = IraqmeterInfoEdit::first();
            $id = $iraqmeterInfoEdit->id;
            if ($iraqmeterInfoEdit) {
        
                $iraqmeterInfoEdit = $iraqmeterInfoEdit->update([
                    'img' => $request->img,
                    'contact_email' => $request->contact_email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'youtube' => $request->youtube,
                    'linkedin' => $request->linkedin,
                    'whatsapp' => $request->whatsapp,
                    'telegram' => $request->telegram,
                    'tiktok' => $request->tiktok,
                ]);
               
            } else {

                $iraqmeterInfoEdit = IraqmeterInfoEdit::create([
                    'img' => $request->img,
                    'contact_email' => $request->contact_email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'youtube' => $request->youtube,
                    'linkedin' => $request->linkedin,
                    'whatsapp' => $request->whatsapp,
                    'telegram' => $request->telegram,
                    'tiktok' => $request->tiktok,
                ]);
                $id = $iraqmeterInfoEdit->id;
            }
        
    
            foreach (SupportedKeys() as $key) :
                IraqmeterInfoEditTranslation::where(['parent_id'=>$id ,'locale'=>$key])
                ->update([
                    'content' => $request->content[$key],
                ]);
            endforeach;
            DB::commit();
        } catch (Exception $e)  {
            DB::rollback();

            throw $e;
        }

    

        return back()->with('success', __('global.alert_done_update'));

    }
}
