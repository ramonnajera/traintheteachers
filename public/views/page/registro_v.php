<div class="flex min-h-full">
    <div class="flex flex-1 flex-col justify-center px-4 py-2 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-10 w-auto" src="/assets/img/isotipo-TTT.png" alt="Your Company">
                <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-gray-900">Regístrate</h2>
                <p class="mt-2 text-sm leading-6 text-gray-500">
                    ¿Ya tienes cuenta?
                    <a href="<?= base_url ?>Page/login" class="font-semibold text-pink-600 hover:text-pink-500">Inicia sesión</a>
                </p>
            </div>
            <div class="mt-1">
                <div>
                    <form action="<?= htmlspecialchars(base_url . "User/signup") ?>" method="post" class="space-y-5">
                        <div>
                            <label for="name" class="input-label">Nombre</label>
                            <div class="mt-2">
                                <input type="text" id="name" name="name" class="input-text " placeholder="Ramon Gomez" required>
                            </div>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="user" class="input-label">Correo</label>
                            <div class="flex items-stretch md:w-96">
                                <input type="text" id="userlog" name="correo" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full md:w-80 p-2.5 rounded-l-lg" placeholder="rnajera" required>
                                <span dir="ltr" class="flex items-center whitespace-nowrap rounded-r-lg border border-l-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700" id="basic-addon2">@uach.mx</span>
                            </div>
                        </div>
                        <div class="mb-3 text-left ">
                            <label for="area" class="input-label">Unidad Académica</label>
                            <input type="text" id="area" name="area" class="input-text" placeholder="Facultad de artes" required>
                        </div>
                        <div class="mb-5 text-left ">
                            <label for="pass" class="input-label">Contraseña</label>
                            <input type="password" id="pass" name="pass" class="input-text" required>
                        </div>
                        <div class="flex items-center justify-between pb-1">
                            <div class="text-sm leading-6">
                                <a href="#" class="font-semibold text-pink-600 hover:text-pink-500">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Registrarte</button>
                        </div>
                    </form>
                </div>
                <div class="mt-10">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative hidden w-0 flex-1 lg:block">
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&q=80&w=1472&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
</div>