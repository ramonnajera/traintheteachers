<!-- Hola soy la vista de login agalaga bebé bello
<div>
    <p class="text-2xl mb-5 pt-10 text-center">Ingresar</p>
    <form action="<?= htmlspecialchars(base_url . "User/login") ?>" method="post">
        <div class="mb-3 px-5 flex flex-col">
            <label for="user" class="input-label">Correo</label>
            <div class="estemero flex pr-auto">
                <input type="text" id="userlog" name="user" class="input-text1" placeholder="rnajera" required>
                <span dir="ltr" class="flex items-center whitespace-nowrap rounded-r-lg border border-l-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700" id="basic-addon2">@uach.mx</span>
            </div>
        </div>
        <div class="mb-5 px-5 w-80">
            <label for="pass" class="input-label">Contraseña</label>
            <input type="password" id="passlog" name="pass" class="input-text" required>
        </div>
        <p class="mx-5 my-4">¿No tienes cuenta? <a class="text-pink-500 hover:text-pink-700 " href="<?= base_url ?>Page/registro">regístrate. </a></p>
        <div class=" pb-10 flex justify-center">
            <button data-close-modal class="btn  border border-gray-500 text-black hover:text-white hover:border-transparent hover:bg-[#D5175E] mx-5">Cerrar</button>
            <button type="submit" class="btn btn-primary mr-5">Entrar</button>
        </div>
    </form>
</div> -->

<!-- New Login Form -->

<div class="flex min-h-full">
    <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-10 w-auto" src="/assets/img/isotipo-TTT.png" alt="Your Company">
                <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-gray-900">Inicia Sesión</h2>
                <p class="mt-2 text-sm leading-6 text-gray-500">
                    ¿No tienes cuenta?
                    <a href="<?= base_url ?>Page/registro" method="post" class="font-semibold text-pink-600 hover:text-pink-500">Regístrate</a>
                </p>
            </div>
            <div class="mt-1">
                <div>
                    <form action="<?= htmlspecialchars(base_url . "User/login") ?>" method="post" class="space-y-5">

                        <div class="mb-3 text-left">
                            <label for="user" class="input-label">Correo</label>
                            <div class="flex items-stretch md:w-96">
                                <input type="text" id="userlog" name="user" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full md:w-80 p-2.5 rounded-l-lg" placeholder="rnajera" required>
                                <span dir="ltr" class="flex items-center whitespace-nowrap rounded-r-lg border border-l-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700" id="basic-addon2">@uach.mx</span>
                            </div>
                        </div>
                        <div class="mb-5 text-left ">
                            <label for="pass" class="input-label">Contraseña</label>
                            <input type="password" id="passlog" name="pass" class="input-text" required>
                        </div>
                        <div class="flex items-center justify-between pb-4">
                            <div class="text-sm leading-6">
                                <a href="#" class="font-semibold text-pink-600 hover:text-pink-500">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
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
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1499914485622-a88fac536970?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
</div>