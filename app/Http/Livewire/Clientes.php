<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;

class Clientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $title, $date,$time,$max_participants,$description,$image;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clientes.view', [
            'clientes' => Cliente::latest()
						->orWhere('title', 'LIKE', $keyWord)
						->orWhere('date', 'LIKE', $keyWord)
                        ->orWhere('time', 'LIKE', $keyWord)
                        ->orWhere('max_participants', 'LIKE', $keyWord)
                        ->orWhere('description', 'LIKE', $keyWord)
                        ->orWhere('image', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->title = null;
		$this->date = null;

    }

    public function store()
    {
        $this->validate([
		'title' => 'required',
		'date' => 'required',

        ]);

        Cliente::create([ 
			'title' => $this-> title,
			'date' => $this-> date,
            'time' => $this-> time,
            'max_participants' => $this-> max_participants,
            'description' => $this-> description,
            'image' => $this-> image
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Cliente Successfully created.');
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);

        $this->selected_id = $id; 
		$this->title = $record-> title;
		$this->date = $record-> date;
        $this->time = $record-> time;
        $this->max_participnts = $record-> max_participants;
        $this->description = $record-> description;
        $this->image = $record-> image;

		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cliente::find($this->selected_id);
            $record->update([ 
			'title' => $this-> title,
			'date' => $this-> date
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Cliente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Cliente::where('id', $id);
            $record->delete();
        }
    }
}
