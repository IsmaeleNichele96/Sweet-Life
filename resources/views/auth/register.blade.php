<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 ">
                <h3 class="mt-5">Compila il form e registrati!</h3>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mt-3 mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="emailAdress" class="form-label">Indirizzo email</label>
                        <input name="email" type="email" class="form-control" id="emailAdress"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Ripeti Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="passwordConfirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
