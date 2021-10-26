<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Criteria;
use App\Models\Customers;
use App\Models\Hobbies;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function search(Request $request)
    {
        if ($request->has('search')){
            $text=  trim($request->get('search'));
            $movie = Movies::where('Movie','like','%'.$text.'%')->limit(50)->get();
            $Newmovie = Movies::where('Movie','like','%'.$text.'%')->get();
            echo "<h2>Total Result: <b style='text-align: center;color: pink'>".count($Newmovie)."</b><br /> And we show only less than <b style='color: blue'>50</b> result</h2>
<table border='1' cellpadding='4'>
<tr>
<td> #</td>
<td> Movie</td>
</tr>";

            $i=0;
            foreach ($movie as $mo){
                echo "
                <tr>
<td> ".$i."</td>
<td> ".$mo->Movie."</td>
</tr>";

                $i++;
            }
            echo"</table>";


            echo"<br /><h3 style='text-align: center'>Get personalised recommendations</h3>";
        }else{
            return view('search');
        }

    }



    public function Clustering($id)
    {

        $Hobbits = Hobbies::where('CustomerID', $id)->get();
        $array =[];

        foreach ($Hobbits as $ho) {

            //$stepOne = Hobbies::where('Hobby',$ho->Hobby)->distinct()->latest()->get();
            $stepOne = Hobbies::where('Hobby', $ho->Hobby)->distinct()->limit(2)->get();
            foreach ($stepOne as $gt) {

                $movies = Movies::where('CustomerID',$gt->CustomerID)->get();
                foreach ($movies as $newM){
                    if(!in_array($newM->Movie,$array)){
                        array_push($array,trim($newM->Movie));
                    }
                }
           }


        }
        return view('Clustering',['array'=>$array]);


    }




    public function Classification(){
        $id = 877723;
        $Movies = Movies::where('CustomerID',$id)->get();
        $cus = Customers::where('CustomerID',$id)->first();

        echo"<table border='1' cellpadding='4'>
<tr>
<td>ID</td>
<td>Movie</td>
<td> status</td>
<td>#</td>
</tr>
";
        $Children = $Other= $me = $Partner  =0;
        foreach ($Movies as $mov){
            $getMovies = Movies::where('Movie',$mov->Movie)->first(); //one  movie
            $getuser = Customers::where('CustomerID',$getMovies->CustomerID)->get(); // many users
            foreach ($getuser as $check) {
                if($check->Movie_Selector == 'Spouse/Partner'){$Partner = $Partner+1;}
                else if($check->Movie_Selector == 'Me'){$me = $me+1;}
                else if($check->Movie_Selector == 'Children'){$Children = $Children+1;}
                else if($check->Movie_Selector == 'Other'){$Other = $Other+1;}
                echo "<tr>
<td>" . $cus->CustomerID . "</td>
<td>" . $mov->Movie. "</td>
<td>" . $cus->Marital_Status. "</td>
<td>" . $check->Movie_Selector. "</td>
</tr>";
            }



        }
        echo"</table>";
        dd('Children '.$Children , 'Other '.$Other , 'Me '.$me , 'Spouse/Partner '.$Partner );

    }





    // 4
    public function actors_friends(){
        $ActorName = 'Bacon, Kevin';
        $getCu = Actor::where('Actor',$ActorName)->inRandomOrder()->first(); // Random
        $acto =  Customers::where('CustomerID',$getCu->CustomerID)->first();
        $CustActor = Actor::where('CustomerID',$acto->CustomerID)->where('Actor','!=',$ActorName)->limit(1000)->orderBy('CustomerID','desc')->get();
        $arrayt =0;
        echo "<table>";
        foreach($CustActor as $act){
           echo "<tr>
                    <td>".$act->Actor."</td>
                </tr>";
            $arrayt = $arrayt+1;
            if($arrayt > 5){break;}

        }echo "</table>";

    }

    public function Actorsearch(){
        return view('actorslist');
    }

}
