<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribe') }}
        </h2>
    </x-slot>


    <div class="d-flex justify-content-center align-items-center vh-100">
        <form>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="fw-bold mb-1">
                  Subscribe to get premium downloads
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <label for="floatingInput">Email address</label>
              </div>
              <button type="button" class="btn btn-dark btn-lg">Subscribe</button>
            </div>
        </form>
    </div>
</x-app-layout>
