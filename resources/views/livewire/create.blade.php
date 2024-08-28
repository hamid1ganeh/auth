<form>

    <div class="row">
        <label for="exampleFormControlInput1">Title:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="row">
        <label for="exampleFormControlInput2">Description:</label>
        <textarea   class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Enter Description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <label for="pcal1">Dadline</label><br>
            <input id="date_input_1" type="text" /><img id="date_btn_1" src="cal.png" style="vertical-align: top;" />

            @error('deadline') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-6">
            <label for="exampleFormControlInput1">Priority:</label><br>
            <select wire:model="priority">
                <option value="0">Low</option>
                <option value="1">Medium</option>
                <option value="1">High</option>
            </select>
            @error('priority') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>


    <div class="row mt-2">
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </div>
</form>

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "date_input_1",   // id of the input field
        button         :    "date_btn_1",   // trigger for the calendar (button ID)
        ifFormat       :    "%Y/%m/%d",       // format of the input field
        dateType	   :	'jalali',
        weekNumbers    : false
    });
</script>
