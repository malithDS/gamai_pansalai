<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User;
use App\Models\Pansal;
use App\Models\Dharma_deshana_grantha;
use App\Models\Idiriyata_ena_daham_wedasatahan;
use App\Models\Wath_piliweth;
use App\Models\Pirith;
use App\Models\Bana;
use App\Models\Notification;

class UserController extends Controller
{
    public function register(Request $request){
        //validation 
        $validator = Validator::make($request->all(), [
            'name' => 'required',
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
        $user = User::create($input);

        $status['token'] = $user->createToken('Gamai_Pansalai')->plainTextToken;
        $status['name'] = $user->name;

        $response = [
            'status' =>true,
            'data' =>$status,
            'message' => 'User register successfully'
        ];
        return response()->json($response, 200);

    }
    public function login(Request $request){
        if(Auth::attempt(['email' =>$request->email, 'password' => $request->password])){
            $user = Auth::user();
            $status['token'] = $user->createToken('Gamai_Pansalai')->plainTextToken;
            $status['name'] = $user->name;

            $response = [
                'status' => true,
                'data' => $status,
                'message' => 'User login successfully'
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

    //update user profile 
    public function editProfile($id){
        $user = User::find($id);
        if($user){
            
            return response()->json([
                "status" => 200,
                "data" => $user
            ], 200);

        }else{
            
            return response()->json([
                "status" => 404,
                "data" => "Data Not Found"
            ], 404);
        }
    }
    public function updateProfile(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:pansal',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required', 
            'c_password' => 'required|same:password',
            'gender' => 'required', 
            'image' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        else{
            $user = User::find($id);
    
            if($user){
    
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'password' => $request->password, 
                    'gender' => $request->gender, 
                    'image' => $request->image
                ]);
    
                return response()->json([
                    'status' => 200,
                    'message' => "User Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found"
                ], 404);
            }
        }
        
    }


    //pansal
    public function getAllPansal(){
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

    public function getPansalById($id){
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

    //dharma deshana grantha
    public function getAllDharmaDeshanaGrantha(){
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
    public function getDharmaDeshanaGranthaById($id){
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

    //Idiriyata ena daham wedasatahan
    public function getAllIdiriyataEnaDahamWedasatahan(){
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
    public function getIdiriyataEnaDahamWedasatahanById($id){
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

    //Wath piliweth
    public function getAllWathPiliweth(){
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
    public function getWathPiliwethById($id){
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

    //Pirith
    public function getAllPirith(){
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
    public function getPirithById($id){
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

        //Bana
        public function getAllBana(){
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
        public function getBanaById($id){
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

         //Notification
         public function getAllNotification(){
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
        public function getNotificationById($id){
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
}
