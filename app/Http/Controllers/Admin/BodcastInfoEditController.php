<?php


namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\BodcastInfoEdit;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BodcastInfoEditTranslation;

class BodcastInfoEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:edit-bodcastInfo')->only('edit', 'update');
    }

    public function edit()
    {
        $row = BodcastInfoEdit::with('translations')->first();

        return view('admin.bodcasts.editInfo.edit', compact('row'));
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
            $bodcastInfoEdit = BodcastInfoEdit::first();
            $id = $bodcastInfoEdit->id;
            if ($bodcastInfoEdit) {
        
                $bodcastInfoEdit = $bodcastInfoEdit->update([
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

                $bodcastInfoEdit = BodcastInfoEdit::create([
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
                $id = $bodcastInfoEdit->id;
            }
        
    
            foreach (SupportedKeys() as $key) :
                BodcastInfoEditTranslation::where(['parent_id'=>$id ,'locale'=>$key])
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
