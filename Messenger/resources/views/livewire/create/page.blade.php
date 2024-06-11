<div>
    <div class="row">
        <x-adminlte-input name="iLabel" wire:model="title" label="Masukkan Pesan" placeholder="Silahkan ketik pesan"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    
    <br>
    <div class="row">
        <x-adminlte-button wire:click="save" class="btn-flat" type="submit" label="Kirim" theme="success" icon="fas fa-lg fa-save"/>
    </div>
</div>