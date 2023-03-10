<?php

namespace App\Http\Livewire;

use App\Models\Book as ModelsBook;
use App\Models\Shop;
use Livewire\Component;

class Book extends Component
{
    public $title, $author, $description, $books, $book_id, $shops;
    public $updateBook = false;
    public $selectedShop = NULL;

    public function mount()
    {
        $this->shops = Shop::all();
    }

    protected $listeners = [
        'deleteCategory'=>'destroy'
    ];
    
    public function render()
    {
        $this->books = ModelsBook::get();
        return view('livewire.book');
    }


    protected $rules = [
        'selectedShop' => 'required|string',
        'title' => 'required|string',
        'author' => 'required|string',
        'description' => 'required|string',                 //validate
    ];

    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    public function addBook()

    {
        $this->validate();
        
        $book = ModelsBook::create([
            'title'=> $this->title,
            'author' => $this->author,
            'description' => $this->description,
            'shop_id'=> $this->selectedShop,

        ]);
        $this->resetFields();
        session()->flash('message', 'Book Has Been Added Successfully.');
    }

    private function resetFields(){
        $this->title = '';
        $this->author = '';
        $this->description = '';
        $this->selectedShop = '';

    }
    
    public function edit($id){
        $book = ModelsBook::findOrFail($id);
        $this->title = $book->title;
        $this->author = $book->author;
        $this->description = $book->description;
        $this->book_id = $book->id;
        $this->updateBook = true;
    }
    public function cancel()
    {
        $this->updateBook = false;
        $this->resetFields();
    }
    public function update(){
        try{
            // Update book
            ModelsBook::find($this->book_id)->fill([
                'title'=>$this->title,
                'author'=>$this->author,
                'description'=>$this->description
            ])->save();
            session()->flash('success','Book Updated Successfully!!');
    
            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating book!!');
            $this->cancel();
        }
    }
    
    public function destroy($id){
        try{
            ModelsBook::find($id)->delete();
            session()->flash('success',"Book Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting book!!");
        }
    }
}
