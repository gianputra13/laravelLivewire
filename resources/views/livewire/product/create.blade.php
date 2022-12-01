    <div class="row justify-content-center mb-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" method="POST" enctype="multipart">
                        <div class="row mb-3">
                            <div class="col">
                              <input wire:model="title" type="text" class="form-control @error('title') is-invalid  @enderror" placeholder="Tilte">
                              @error('title')
                                  <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="col">
                              <input wire:model="price" type="number" class="form-control @error('price') is-invalid  @enderror" placeholder="Price">
                              @error('price')
                              <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
                        <div class="mb-3">
                          <input wire:model="description" type="text" placeholder="Description" class="form-control @error('description') is-invalid  @enderror">
                          @error('description')
                          <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input wire:model="image" class="form-control" type="file" id="image">
                            @error('image')
                            <span class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="" class="mt-2" width="200">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button wire:click="$emit('formClose')" type="submit" class="btn btn-secondary">Close</button>
                      </form>
                </div>
            </div>
        </div>
    </div>