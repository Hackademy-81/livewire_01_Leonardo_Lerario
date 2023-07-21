<div>
    <form wire:submit.prevent='save'>
        @csrf
        <div class="mb-3">
          <label class="form-label">titolo</label>
          {{-- debounce.2000ms --}}
          <input type="text" class="form-control" wire:model.lazy='title'>
          @error('title') <span class="error bg-info">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">sottotitolo</label>
            <input type="text" class="form-control" wire:model.lazy='subtitle'>
            @error('subtitle') <span class="error bg-info">{{ $message }}</span> @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">titolo</label>
           <textarea id="" cols="30" rows="10" class="form-control" wire:model.lazy='body'></textarea>
           @error('body') <span class="error">{{ $message }}</span> @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
