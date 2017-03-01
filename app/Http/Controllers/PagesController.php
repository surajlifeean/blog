<?php
   namespace App\Http\Controllers;
   use Illuminate\Http\Request;
   use App\post;


   class PagesController extends Controller {

   	public function getIndex()
   	{
   		return view('pages.index');
   	}
   	public function getContact() {

   		//dd($request->all());
   		//echo $email = $request->input('email');
   		return view('pages.contact');
   	}
      public function postcontact(Request $request){
        /* $email=$request->email;
         $subject=$request->subject;
         $message=$request->message;
         echo "<br>".$email."<br>".$subject."<br>".$message;
         exit; 
         // $auth = new Car()
         // return $auth->postcontact();
         return view('pages.contact');*/
         $users=User::where('email', '=', $request->email)->first();
         if($users)
            {
               return redirect()->back()->with('you have already registered');
            }else
            $user =new user();


      }
   }
?>
