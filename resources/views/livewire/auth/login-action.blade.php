 <form action="#">
        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" wire:model="email" id="emailaddress" required placeholder="Enter your email">
             @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            {{--<a href="{{ route('/') }}" class="text-muted float-end"><small>Forgot your password?</small></a>--}}
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" wire:model="password" required id="password" placeholder="Enter your password">
             @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="d-grid mb-0 text-center">
            <button class="btn btn-primary"  wire:click.prevent="login" type="submit"><i class="mdi mdi-login"></i> Log In </button>
        </div>
  </form>