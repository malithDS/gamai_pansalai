<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Validator;
use App\Models\Pansal;
use App\Models\Dharma_deshana_grantha;
use App\Models\Idiriyata_ena_daham_wedasatahan;
use App\Models\Wath_piliweth;
use App\Models\Pirith;
use App\Models\Bana;
use App\Models\Notification;

class AdminController extends Controller
{
/*
    public function adminRegister(Request $request){
        //validation 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|unique:users|min:8',
            'c_password' => 'required|same:password',
            'remember_token',
        ]);
        if($validator->fails()){
            $response = [
                'status' => false,
                'message' =>$validator->errors()
            ];
            return response()->json($response, 400);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $admin = Admin::create($input);

        //$status['token'] = $user->createToken('Gamai_Pansalai')->plainTextToken;
        $status['email'] = $admin->email;

        $response = [
            'status' =>true,
            'data' =>$status,
            'message' => 'Admin register successfully'
        ];
        return response()->json($response, 200);

    }*/
    
    //Admin login
    public function adminLogin(Request $request){
        //if(Auth::guard('admin')->attempt(['email' =>$request->email, 'password' => $request->password])){
        if(Auth::guard('admin')->attempt($request->only(['email', 'password']))){
            //$admin = Auth::guard('admin');
            //$status['email'] = $admin->email;

            $response = [
                'status' => true,
                //'data' => $status,
                'message' => 'Admin login successfully'
            ];
            return response()->json($response, 200);

        }else{
            $response = [
                'status' => false,
                'message' => 'Unauthorised'
            ];
            return response()->json($response);
        }
    }

    /* ------------ start functios of pansal ------------ */
    //get all pansal details 
    public function getAllAdminPansal(){
        $pansal = Pansal::all();
        if($pansal->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $pansal
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //get pansal details by id 
    public function getAdminPansalById($id){
        $pansal = Pansal::find($id);
        if($pansal){
            
            return response()->json([
                "status" => 200,
                "data" => $pansal
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert pansal to database
    public function storePansal(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:pansal',
            'review' => 'required',
            'thero' => 'required',
            'town' => 'required', 
            'details' => 'required', 
            'gallery' => 'required',
            'history' => 'required', 
            'monk' => 'required', 
            'location' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $pansal = Pansal::create([
                'name' => $request->name,
                'review' => $request->review,
                'thero' => $request->thero,
                'town' => $request->town, 
                'details' => $request->details, 
                'gallery' => $request->gallery,
                'history' => $request->history, 
                'monk' => $request->monk, 
                'location' => $request->location,
            ]);

            if($pansal){
                return response()->json([
                    'status' => 200,
                    'message' => "Pansal Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update pansal in database
    public function editPansal($id){
        $pansal = Pansal::find($id);
        if($pansal){
            
            return response()->json([
                "status" => 200,
                "data" => $pansal
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updatePansal(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:pansal',
            'review' => 'required',
            'thero' => 'required',
            'town' => 'required', 
            'details' => 'required', 
            'gallery' => 'required',
            'history' => 'required', 
            'monk' => 'required', 
            'location' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $pansal = Pansal::find($id);

            if($pansal){

                $pansal->update([
                    'name' => $request->name,
                    'review' => $request->review,
                    'thero' => $request->thero,
                    'town' => $request->town, 
                    'details' => $request->details, 
                    'gallery' => $request->gallery,
                    'history' => $request->history, 
                    'monk' => $request->monk, 
                    'location' => $request->location,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Pansal Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific pansal row data
    public function deletePansal($id){
        $pansal = Pansal::find($id);
        if($pansal){
            $pansal->delete();
            return response()->json([
                'status' => 200,
                'message' => "Pansal Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }
    /* ------------ end functios of pansal ------------ */



    /* ------------ start functios of dharma deshana grantha ------------ */
    //get all dharma deshana grantha details 
    public function getAllAdminDharmaDeshanaGrantha(){
        $dharma_deshana_grantha = Dharma_deshana_grantha::all();
        if($dharma_deshana_grantha->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $dharma_deshana_grantha
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminDharmaDeshanaGranthaById($id){
        $dharma_deshana_grantha = Dharma_deshana_grantha::find($id);
        if($dharma_deshana_grantha){
            
            return response()->json([
                "status" => 200,
                "data" => $dharma_deshana_grantha
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert dharma deshana grantha to database
    public function storeDharmaGrantha(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:dharma_deshana_grantha',
            'details' => 'required',
            'author' => 'required',
            'book_pdf' => 'required', 
            'image' => 'required', 
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $dharma_grantha = Dharma_deshana_grantha::create([
                'name' => $request->name,
                'details' => $request->details,
                'author' => $request->author,
                'book_pdf' => $request->book_pdf, 
                'image' => $request->image, 
                
            ]);
            if($dharma_grantha){
                return response()->json([
                    'status' => 200,
                    'message' => "Dharma Deshana Grantha Created Successfully"
                ], 200);

            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }

        }
    }
    //Update dharma deshana grantha in database
    public function editDharmaGrantha($id){
        $dharma_grantha = Dharma_deshana_grantha::find($id);
        if($dharma_grantha){
            
            return response()->json([
                "status" => 200,
                "data" => $dharma_grantha
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateDharmaGrantha(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:dharma_deshana_grantha',
            'details' => 'required',
            'author' => 'required',
            'book_pdf' => 'required', 
            'image' => 'required', 
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $dharma_grantha = Dharma_deshana_grantha::find($id);

            if($dharma_grantha){

                $dharma_grantha->update([
                    'name' => $request->name,
                    'details' => $request->details,
                    'author' => $request->author,
                    'book_pdf' => $request->book_pdf, 
                    'image' => $request->image, 
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Dharma Desha Grantha Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific dharma grantha row data
    public function deleteDharmaGrantha($id){
        $dharma_grantha = Dharma_deshana_grantha::find($id);
        if($dharma_grantha){
            $dharma_grantha->delete();
            return response()->json([
                'status' => 200,
                'message' => "Dharma Grantha Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }
    /* ------------ end functios of dharma deshana grantha ------------ */


    /* ------------ start functios of Idiriyata ena daham wedasatahan ------------ */
    //get all Idiriyata ena daham wedasatahan details
    public function getAllAdminDahamWedasatahan(){
        $idiriyata_ena_daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::all();
        if($idiriyata_ena_daham_wedasatahan->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $idiriyata_ena_daham_wedasatahan
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminDahamWedasatahanById($id){
        $idiriyata_ena_daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::find($id);
        if($idiriyata_ena_daham_wedasatahan){
            
            return response()->json([
                "status" => 200,
                "data" => $idiriyata_ena_daham_wedasatahan
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert idiriyata ena daham wedasatahan to database
    public function storeDahamWedasatahan(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:idiriyata_ena_daham_wedasatahan',
            'details' => 'required',
            'image' => 'required', 
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::create([
                'name' => $request->name,
                'details' => $request->details,
                'image' => $request->image, 
                
            ]);
            if($daham_wedasatahan){
                return response()->json([
                    'status' => 200,
                    'message' => "Dharma Deshana Grantha Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update idiriyata ena daham wedasatahan in database
    public function editDahamWedasatahan($id){
        $daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::find($id);
        if($daham_wedasatahan){
            
            return response()->json([
                "status" => 200,
                "data" => $daham_wedasatahan
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateDahamWedasatahan(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:idiriyata_ena_daham_wedasatahan',
            'details' => 'required',
            'image' => 'required', 
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::find($id);

            if($daham_wedasatahan){

                $daham_wedasatahan->update([
                    'name' => $request->name,
                    'details' => $request->details,
                    'image' => $request->image, 
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Daham Wedasatahan Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific daham wedasatahan row data
    public function deleteDahamWedasatahan($id){
        $daham_wedasatahan = Idiriyata_ena_daham_wedasatahan::find($id);
        if($daham_wedasatahan){
            $daham_wedasatahan->delete();
            return response()->json([
                'status' => 200,
                'message' => "Daham Wedasatahan Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }

/* ------------ end functios of Idiriyata ena daham wedasatahan ------------ */


/* ------------ start functios of Wath piliweth ------------ */
    //get all Wath piliweth
    public function getAllAdminWathPiliweth(){
        $wath_piliweth = Wath_piliweth::all();
        if($wath_piliweth->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $wath_piliweth
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminWathPiliwethById($id){
        $wath_piliweth = Wath_piliweth::find($id);
        if($wath_piliweth){
            
            return response()->json([
                "status" => 200,
                "data" => $wath_piliweth
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert Wath piliweth to database
    public function storeWathPiliweth(Request $request){
        $validator = Validator::make($request->all(), [
            'topic' => 'required|unique:wath_piliweth',
            'details' => 'required',
            'image' => 'required', 
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $wath_piliweth = Wath_Piliweth::create([
                'topic' => $request->topic,
                'details' => $request->details,
                'image' => $request->image, 
                
            ]);
            if($wath_piliweth){
                return response()->json([
                    'status' => 200,
                    'message' => "Wath Piliweth Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update Wath piliweth in database
    public function editWathPiliweth($id){
        $wath_piliweth = Wath_Piliweth::find($id);
        if($wath_piliweth){
            
            return response()->json([
                "status" => 200,
                "data" => $wath_piliweth
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateWathPiliweth(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'topic' => 'required|unique:wath_piliweth',
            'details' => 'required',
            'image' => 'required', 
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $wath_piliweth = Wath_Piliweth::find($id);

            if($wath_piliweth){

                $wath_piliweth->update([
                    'topic' => $request->topic,
                    'details' => $request->details,
                    'image' => $request->image, 
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Wath Piliweth Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific wath piliweth row data
    public function deleteWathPiliweth($id){
        $wath_piliweth = Wath_Piliweth::find($id);
        if($wath_piliweth){
            $wath_piliweth->delete();
            return response()->json([
                'status' => 200,
                'message' => "Wath Piliweth Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }

/* ------------ end functios of Wath piliweth ------------ */



/* ------------ start functios of Pirith ------------ */
    //get all Pirith
    public function getAllAdminPirith(){
        $pirith = Pirith::all();
        if($pirith->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $pirith
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminPirithById($id){
        $pirith = Pirith::find($id);
        if($pirith){
            
            return response()->json([
                "status" => 200,
                "data" => $pirith
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert pirith to database
    public function storePirith(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:pirith',
            'image' => 'required',
            'media' => 'required', 
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $pirith = Pirith::create([
                'name' => $request->name,
                'image' => $request->image,
                'media' => $request->media, 
                
            ]);
        if($pirith){
            return response()->json([
                'status' => 200,
                    'message' => "Pirith Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update pirith in database
    public function editPirith($id){
        $pirith = Pirith::find($id);
        if($pirith){
            
            return response()->json([
                "status" => 200,
                "data" => $pirith
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updatePirith(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:pirith',
            'image' => 'required',
            'media' => 'required', 
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $pirith = Pirith::find($id);

            if($pirith){

                $pirith->update([
                    'name' => $request->name,
                    'image' => $request->image,
                    'media' => $request->media, 
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Pirith Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific pirith row data
    public function deletePirith($id){
        $pirith = Pirith::find($id);
        if($pirith){
            $pirith->delete();
            return response()->json([
                'status' => 200,
                'message' => "Pirith Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }
/* ------------ end functios of Pirith ------------ */






/* ------------ start functios of Bana ------------ */
//get all Bana
    public function getAllAdminBana(){
        $bana = Bana::all();
        if($bana->count()>0){
            
            return response()->json([
                "status" => 200,
                "data" => $bana
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminBanaById($id){
        $bana = Bana::find($id);
        if($bana){
            
            return response()->json([
                "status" => 200,
                "data" => $bana
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert bana to database
    public function storeBana(Request $request){
        $validator = Validator::make($request->all(), [
            'thero' => 'required|unique:bana',
            'title' => 'required',
            'media' => 'required', 
            'image' => 'required', 
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $bana = Bana::create([
                'thero' => $request->thero,
                'title' => $request->title,
                'media' => $request->media,
                'image' => $request->image, 
                
            ]);
            if($bana){
                return response()->json([
                    'status' => 200,
                    'message' => "Bana Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update bana in database
    public function editBana($id){
        $bana = Bana::find($id);
        if($bana){
            
            return response()->json([
                "status" => 200,
                "data" => $bana
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateBana(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'thero' => 'required|unique:bana',
            'title' => 'required',
            'media' => 'required',
            'image' => 'required', 
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $bana = Bana::find($id);

            if($bana){

                $bana->update([
                    'thero' => $request->thero,
                    'title' => $request->title,
                    'media' => $request->media,
                    'image' => $request->image, 
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Bana Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific bana row data
    public function deleteBana($id){
        $bana = Bana::find($id);
        if($bana){
            $bana->delete();
            return response()->json([
                'status' => 200,
                'message' => "Bana Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }
    /* ------------ end functios of Bana ------------ */




    /* ------------ start functios of Notification ------------ */
    //get all Notification
    public function getAllAdminNotification(){
       $notification = Notification::all();
       if($notification->count()>0){
           
            return response()->json([
                "status" => 200,
                "data" => $notification
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function getAdminNotificationById($id){
        $notification = Notification::find($id);
        if($notification){
            
            return response()->json([
                "status" => 200,
                "data" => $notification
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    //Insert notification to database
    public function storeNotification(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'notification' => 'required',
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $notification = Notification::create([
                'title' => $request->title,
                'notification' => $request->notification
                
            ]);
            if($notification){
                return response()->json([
                    'status' => 200,
                    'message' => "Notification Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
    //Update notification in database
    public function editNotification($id){
        $notification = Notification::find($id);
        if($notification){
            
            return response()->json([
                "status" => 200,
                "data" => $notification
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateNotification(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'notification' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $notification = Notification::find($id);

            if($notification){

                $notification->update([
                    'title' => $request->title,
                    'notification' => $request->notification,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Notification Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
    }
    //delete specific notification row data
    public function deleteNotification($id){
        $notification = Notification::find($id);
        if($notification){
            $notification->delete();
            return response()->json([
                'status' => 200,
                'message' => "Notification Deleted Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found"
            ], 404);
        }
    }

    /* ------------ end functios of Notification ------------ */




}
