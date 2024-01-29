<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="mt-3">Accedi</h3>
                <form method="POST" action="/login">
                    @csrf
                    <div class="mt-3 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
