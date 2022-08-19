<?php

namespace App\Http\Livewire\Admin\Brand;
use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
class Index extends Component
{
    public $name, $slug, $status;

    public function rules(){
        return[
            'name' => 'required|string',
            'slug' => 'required|string',
            'status' => 'nullable',
        ];
    }
    public function resetInput(){
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
    }

    public function storeBrand(){

    $vadilatedData = $this->validate();
    Brand::create([
        'name' => $this->name,
        'slug' =>Str::slug( $this->slug),
        'status' => $this->status== true?'1':'0',
    ]);
    session()->flash('message','Brand Created Successfully');
    $this->dispatchBrowserEvent('close-modal');
    $this->resetInput();
    }
    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.brand.index',['brands'=>$brands]);


    }
}
