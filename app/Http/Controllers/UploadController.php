<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        $data['uploads'] = Upload::all();
        $data['categories'] = Categories::all();
        return view('upload', $data);
    }

    public function display_upload(){
        
        $data['uploads'] = Upload::all();
        
        return view('viewupload', $data);
    }

    public function save_upload (Request $request){
        // $input = $request->all();
        // if($request->file()) {
        //     $input['file'] =$fileName= time().'_'.$request->file->getClientOriginalName();

        //     $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        // } 
        //     $saveRecord = Upload::create($input);
        // // $input->save();
        // return redirect()->route('upload');

        $extensions = [
                    'jpg' => 'jpeg.png',
                    'png' => 'png.png',
                    'pdf' => 'pdfdocument.png',
                    'doc' => 'wordicon.jpg',
                ];


        $destinationPath = 'file';
        $myimage = $request->file->getClientOriginalName();
        $request->file->move(public_path($destinationPath), $myimage);

        $input = $request->all();
        $input['file'] = $myimage; 
        $input['user_id'] = Auth::user()->id;
        $user = Upload::create($input);
        // $user->save($input);
        return redirect()->route('upload');
        // return redirect()->back()->with('success', 'User created successfully');
    }
    
    public function uploadfile()
    {
        $data['categories'] = Categories::all();
        return view('uploadfile',$data);
    }

    // public function getIconAttribute() {

    //     $extensions = [
    //         'jpg' => 'jpeg.png',
    //         'png' => 'png.png',
    //         'pdf' => 'pdfdocument.png',
    //         'doc' => 'wordicon.jpg',
    //     ];
    
    //     return array_get($extensions,$this->extension,'unknown.png');
    // }
 
    public function update_upload(Request $request)
        {
            $input = $request->all();
           
            if($request->file()) {
                $input['file'] =$fileName= time().str_replace('','-', $request->file->getClientOriginalName());
    
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            } 
            $id = $request->id;
            $upload = Upload::find($id);
            $upload->update($input);
            return redirect()->route('uploadfile');
        }
        

        public function edit_uploadhome($id)
        {
            $data['uploads'] = Upload::find($id);
            $data['categories'] = Categories::all();
            return view('editupload', $data);
        } 
        public function view($id)
        {
            $data['uploads'] = Upload::find($id);
            $data['categories'] = Categories::all();
            return view('uploaddetails', $data);
        } 
        public function edit(Request $request, $id)
        {
            $input = $request->all();
            $id = $request->id;
            $data['uploads'] = Upload::find($id);
            $data['categories'] = Categories::all();
            $data->update($input);
            // return view('upload', $data);
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        
        public function delete_upload(Request $request)
        {
            $id = $request->id;
            $upload = Upload::find($id);
            $upload->delete();
    
            return redirect()->back()->with('success', 'Record deleted successfully');
        } 

}
