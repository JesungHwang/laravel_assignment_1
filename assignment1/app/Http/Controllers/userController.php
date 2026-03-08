<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
    public function manage()
    {
        $assignment_1_db = DB::select("SELECT * FROM assignment_1");

        return view("manage", [
            "assignment_1" => $assignment_1_db,
            "page" => "Products"
        ]);
    }

    public function insert(Request $request)
    {
        DB::insert(
            "INSERT INTO assignment_1 (prodName, prodDesc, prodCode, prodCost)
             VALUES (?,?,?,?)",
            [
                $request->prodName,
                $request->prodDesc,
                $request->prodCode,
                $request->prodCost
            ]
        );
        return redirect("/manage");
    }

    public function edit($id)
    {
        $product = DB::select(
            "SELECT * FROM assignment_1 WHERE id = ?",[$id]);
            return view("edit", [
                "product"=>$product[0],
                "page"=>"Edit Product"
            ]);
    }
    
    public function update(Request $request, $id)
    {
        DB::update(
            "UPDATE assignment_1 
            SET prodName=?, prodDesc=?, prodCode=?, prodCost=? 
            WHERE id=?",
            [
                $request->prodName,
                $request->prodDesc,
                $request->prodCode,
                $request->prodCost,
                $id
            ]
        );
        return redirect("/manage");
    }

    public function delete($id)
    {
        DB::delete("DELETE FROM assignment_1 WHERE id=?", [$id]);
        return redirect("/manage");
    }

    public function search(Request $request)
    {
        $results = [];
        if($request->has('search')){
            $term=$request->search;
            $low=$request->low;
            $high=$request->high;

            $results=DB::select(
                "SELECT * FROM assignment_1
                 WHERE prodCost >= ?
                 AND prodCost <= ?
                 AND( prodName LIKE ?
                      OR prodDesc LIKE ?
                      OR prodCode LIKE ?
                    )",
            [
                $low,
                $high,
                "%$term",
                "%$term%",
                "%$term%"
            ]
            );
        }
        return view("search",[
                    "results"=>$results,
                    "page"=>"Search"
        ]);
    }
}
