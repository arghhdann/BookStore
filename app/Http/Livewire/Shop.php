<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Shop as ModelsShop;
use Livewire\Component;

class Shop extends Component
{
    public $name, $location, $description, $shops, $shop_id;
    public $updateShop = false , $createform = false;

    protected $listeners = [
        'deleteCategory'=>'destroy'
    ];
    
    public function render()
    {
        $this->shops = ModelsShop::get();
        // dd($shops);
        return view('livewire.shop');
    }


    protected $rules = [
        'name' => 'required|string',
        'location' => 'required|string',
        'description' => 'required|string',                 //validate
    ];

    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    public function addShop()

    {
        $this->validate();
        
        $shop = ModelsShop::create([
            'name'=> $this->name,
            'location' => $this->location,
            'description' => $this->description,

        ]);
        $this->resetFields();
        session()->flash('message', 'Shop Has Been Added Successfully.');
    }

    private function resetFields(){
        $this->name = '';
        $this->location = '';
        $this->description = '';

    }
    
    public function edit($id){
        $shop = ModelsShop::findOrFail($id);
        $this->name = $shop->name;
        $this->location = $shop->location;
        $this->description = $shop->description;
        $this->shop_id = $shop->id;
        $this->updateShop = true;
    }
    public function cancel()
    {
        $this->updateShop = false;
        $this->resetFields();
    }
    public function update(){
        // Validate request
        $this->validate();
        try{
            // Update shop
            ModelsShop::find($this->shop_id)->fill([
                'name'=>$this->name,
                'location'=>$this->location,
                'description'=>$this->description
            ])->save();
            session()->flash('success','Shop Updated Successfully!!');
    
            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating shop!!');
            $this->cancel();
        }
    }
    public function destroy($id){
        try{
            ModelsShop::find($id)->delete();
            $books = Book::where('shop_id', $id)->get();
            foreach($books as $data){
                $books ->delete();
            }
            session()->flash('success',"Shop Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting shop!!");
        }
    }

}
