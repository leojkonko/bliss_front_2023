<form wire:submit.prevent="send" class="row g-1">
    @csrf
    <div class="col-12">
        <input type="text" placeholder="Nome*" class="form-control form-contact" wire:model.defer="name" required>
    </div>
    <div class="col-lg-12">
        <input type="email" placeholder="E-mail*" class="form-control form-contact" wire:model.defer="email" required>
    </div>
    <div class="col-lg-12">
        <input type="text" placeholder="Telefone*" class="form-control form-contact mask-telefone" wire:model.defer="phone" required>
    </div>
    <div class="col-12">
        <textarea id="" Placeholder="Mensagem*" class="form-control form-contact text-area" rows="5" wire:model.defer="message" required></textarea>
    </div>
    <div class="col-12 d-flex justify-content-center mt-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
            <label class="" for="termosCheck">
                <x-accept-text />
            </label>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-2">
        <button type="submit" class="btn btn-orange rounded-5">
            <span wire:loading.remove>
                Enviar contato
            </span>
            <span wire:loading.inline>
                Aguarde...
            </span>
        </button>
    </div>
    <div class="col-12">
        <x-flash-messages />
    </div>
</form>
