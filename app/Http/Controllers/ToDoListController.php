<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ListItem;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{

    public function index()  {
        return view('welcome', [
            'listItems' =>  ListItem::all()
        ]);
    }

    public function saveItem(Request $request){

        $newItem = new ListItem;
        $newItem->name = $request->listItem;
        $newItem->is_complete = 0; 
        $newItem->save();

        return redirect('/');
    }

    public function viewItem($id){
        return view('viewItem', [
            'listItem' =>  ListItem::find($id)
        ]);
    }

    public function markComplete($id){

        $newItem = ListItem::find($id);
        $status = $newItem->is_complete;
        $newItem->is_complete = $status == 1 ? 0 : 1;
        $newItem->save();
        return redirect('/');
    }

    public function editItem(Request $data){

        $id = $data->id;
        $listItemEdit = $data->listItemEdit;

        $editItem = ListItem::find($id);
        $editItem->name = $listItemEdit;
        $save = $editItem->save();

        if ($save){

            $data=[
                'status'=>'1',
                'item'=> $listItemEdit,
                'id'=>$id,
                'msg'=>'success'
            ];
        
        }else{
        
            $data=[
                'status'=>'0',
                'item'=> $listItemEdit,
                'id'=>$id,
                'msg'=>'fail'
            ];
        
        }
  
        return back()->with('data',  $data);
    }

    public function deleteItem($id){

        $newItem = ListItem::find($id);
        $item = $newItem->name;
        $destroy = $newItem->delete();

        if ($destroy){

            $data=[
                'status'=>'1',
                'item'=> $item,
                'id'=>$id,
                'msg'=>'success'
            ];
        
        }else{
        
            $data=[
                'status'=>'0',
                'item'=> $item,
                'id'=>$id,
                'msg'=>'fail'
            ];
        
        }
  
        return back()->with('data',  $data);
    }
}
