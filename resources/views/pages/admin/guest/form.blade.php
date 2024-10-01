<div class="card-body">
    <form id="form-modalAction" class="form"
        action="{{ $guest->id ? route('admin.guests.update', $guest->id) : route('admin.guests.store') }}" method="POST">
        @csrf
        @if ($guest->id)
            @method('PUT')
        @endif
        <input type="hidden" name="guestId" id="guestId" value="{{ $guest->id }}">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Tamu</label>
                    <input type="text" placeholder="Input Here" name="name" class="form-control" id="name"
                        value="{{ $guest->name }}">
                    <small class="text-danger" id="name-error"></small>
                </div>
            </div>
        </div>
    </form>
</div>
