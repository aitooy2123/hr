<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Auth\Events\Validated;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function dashboard()
    {
        $dataPoints = array( 
            array("label"=>"Chrome", "y"=>64.02),
            array("label"=>"Firefox", "y"=>12.55),
            array("label"=>"IE", "y"=>8.47),
            array("label"=>"Safari", "y"=>6.08),
            array("label"=>"Edge", "y"=>4.29),
            array("label"=>"Others", "y"=>4.59)
        );

        $dataPoints2 = array( 
            array("y" => 3373.64, "label" => "Germany" ),
            array("y" => 2435.94, "label" => "France" ),
            array("y" => 1842.55, "label" => "China" ),
            array("y" => 1828.55, "label" => "Russia" ),
            array("y" => 1039.99, "label" => "Switzerland" ),
            array("y" => 765.215, "label" => "Japan" ),
            array("y" => 612.453, "label" => "Netherlands" )
        );

        return view('layouts.dashboard',compact('dataPoints','dataPoints2'));
    }


    public function test()
    {
        $Test = Test::all();
        return view('layouts.test', compact('Test'));
    }

    public function test_create()
    {
        return view('layouts.test_create');
    }

    public function test_insert(Request $request)
    {
        // dd($request->all());

        $insert = new Test();
        $insert->fname = $request->fname;
        $insert->lname = $request->lname;
        $insert->save();

        if ($insert) {
            return redirect()->route('test')->with('Success', 'เพิ่มข้อมูลสำเร็จ');
        } else {
            return back()->withInput()->with('Error', 'เพิ่มข้อมูลไม่สำเร็จ');
        }
    }

    public function test_edit(Request $request)
    {
        $Edit = Test::find($request->id);
        // $Edit = Test::where('id',$request->id)->first();
        return view('layouts.test_edit', compact('Edit'));
    }

    public function test_update(Request $request)
    {
        // dd($request->all());

        $insert = Test::find($request->id);
        $insert->fname = $request->fname;
        $insert->lname = $request->lname;
        $insert->update();

        if ($insert) {
            return redirect()->route('test')->with('Success', 'เพิ่มข้อมูลสำเร็จ');
        } else {
            return back()->withInput()->with('Error', 'เพิ่มข้อมูลไม่สำเร็จ');
        }
    }

    public function test_delete(Request $request)
    {
        $del = Test::where('id',$request->id)->delete();
        if ($del) {
            return redirect()->route('test')->with('Success', 'ลบข้อมูลสำเสร้จ');
        }
    }
}
