Hola soy la vista de login agalaga bebé bello
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
</div>