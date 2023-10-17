<div class=" mx-auto px-4">
    <form action="<?=htmlspecialchars(base_url . "User/signup")?>" method="post">
        <div class="flex flex-col  justify-center items-center text-center ">
            <br/>
            <p class="text-center text-gray-900 font-bold text-4xl py-5 ">Registro</p>
            <div className="flex flex-col">
                <div class="mb-3  text-left  ">
                    <label for="name" class="input-label">Nombre</label>
                    <input type="text" id="name" name="name" class="input-text " placeholder="Ramon Gomez" required>
                </div>
                <div class="mb-3 text-left">
                        <label for="user" class="input-label">Correo</label>
                        <div class="flex flex-wrap items-stretch">
                            <input type="text" id="userlog" name="correo" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-auto md:w-80 p-2.5 rounded-l-lg" placeholder="rnajera" required>
                            <span dir="ltr" class="flex items-center whitespace-nowrap rounded-r-lg border border-l-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700" id="basic-addon2" >@uach.mx</span>
                        </div>
                    </div>
                <div class="mb-3 text-left ">
                    <label for="area" class="input-label">Area</label>
                    <input type="text" id="area" name="area" class="input-text" placeholder="Cordinacion General de Tecnologias de la informacion" required>
                </div>
                <div class="mb-5 text-left ">
                    <label for="pass" class="input-label">Contraseña</label>
                    <input type="password" id="pass" name="pass" class="input-text" required>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</div>