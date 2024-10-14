<!-- resources/views/livewire/create-reclamo.blade.php -->
<div class="max-w-2xl mx-auto">
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div>
            <label for="servicio" class="block text-sm font-medium text-gray-700">Servicio</label>
            <select id="servicio" wire:model="servicio"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Seleccione un servicio</option>
                <option value="servicio1">Servicio 1</option>
                <option value="servicio2">Servicio 2</option>
                <option value="servicio3">Servicio 3</option>
            </select>
            @error('servicio') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" wire:model="nombre"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('nombre') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                <input type="text" id="apellido" wire:model="apellido"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('apellido') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
            <div>
                <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                <select id="departamento" wire:model="departamento"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Seleccione</option>
                    <option value="lima">Lima</option>
                    <option value="arequipa">Arequipa</option>
                    <option value="cusco">Cusco</option>
                </select>
                @error('departamento') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="provincia" class="block text-sm font-medium text-gray-700">Provincia</label>
                <select id="provincia" wire:model="provincia"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Seleccione</option>
                    <option value="lima">Lima</option>
                    <option value="callao">Callao</option>
                </select>
                @error('provincia') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="distrito" class="block text-sm font-medium text-gray-700">Distrito</label>
                <select id="distrito" wire:model="distrito"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Seleccione</option>
                    <option value="miraflores">Miraflores</option>
                    <option value="san_isidro">San Isidro</option>
                    <option value="surco">Surco</option>
                </select>
                @error('distrito') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
            <input type="text" id="direccion" wire:model="direccion"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('direccion') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
                <label for="piso" class="block text-sm font-medium text-gray-700">Piso</label>
                <input type="text" id="piso" wire:model="piso"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('piso') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="oficina" class="block text-sm font-medium text-gray-700">Oficina</label>
                <input type="text" id="oficina" wire:model="oficina"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('oficina') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
                <label for="tipo_documento" class="block text-sm font-medium text-gray-700">Tipo de Documento</label>
                <select id="tipo_documento" wire:model="tipo_documento"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Seleccione</option>
                    <option value="dni">DNI</option>
                    <option value="ce">Carnet de Extranjería</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
                @error('tipo_documento') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="numero_documento" class="block text-sm font-medium text-gray-700">Número de
                    Documento</label>
                <input type="text" id="numero_documento" wire:model="numero_documento"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('numero_documento') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" id="telefono" wire:model="telefono"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('telefono') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="datos_apoderado" class="block text-sm font-medium text-gray-700">Datos del Apoderado
                (opcional)</label>
            <textarea id="datos_apoderado" wire:model="datos_apoderado" rows="3"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('datos_apoderado') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <span class="block text-sm font-medium text-gray-700">Tipo</span>
            <div class="mt-2 space-y-2">
                <div class="flex items-center">
                    <input id="tipo_producto" wire:model="tipo" type="radio" name="tipo" value="producto"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="tipo_producto" class="ml-3 block text-sm font-medium text-gray-700">Producto</label>
                </div>
                <div class="flex items-center">
                    <input id="tipo_servicio" wire:model="tipo" type="radio" name="tipo" value="servicio"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="tipo_servicio" class="ml-3 block text-sm font-medium text-gray-700">Servicio</label>
                </div>
            </div>
            @error('tipo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <span class="block text-sm font-medium text-gray-700">Moneda</span>
            <div class="mt-2 space-y-2">
                <div class="flex items-center">
                    <input id="moneda_soles" wire:model.live="moneda" type="radio" name="moneda" value="soles"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="moneda_soles" class="ml-3 block text-sm font-medium text-gray-700">Soles</label>
                </div>
                <div class="flex items-center">
                    <input id="moneda_dolares" wire:model.live="moneda" type="radio" name="moneda" value="dolares"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="moneda_dolares" class="ml-3 block text-sm font-medium text-gray-700">Dólares</label>
                </div>
            </div>
            @error('moneda') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="monto_reclamado" class="block text-sm font-medium text-gray-700">Monto Reclamado</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">
                        @if (isset($moneda) && $moneda)
                            {{ $moneda === 'soles' ? 'S/' : '$' }}
                        @endif
                    </span>
                </div>
                <input type="number" step="0.01" id="monto_reclamado" wire:model="monto_reclamado"
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
                    placeholder="0.00">
            </div>
            @error('monto_reclamado') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="descripcion_producto_servicio" class="block text-sm font-medium text-gray-700">Descripción del
                Producto o Servicio</label>
            <textarea id="descripcion_producto_servicio" wire:model="descripcion_producto_servicio" rows="3"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('descripcion_producto_servicio') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <span class="block text-sm font-medium text-gray-700">Tipo de Reclamo</span>
            <div class="mt-2 space-y-2">
                <div class="flex items-center">
                    <input id="tipo_reclamo_reclamo" wire:model="tipo_reclamo" name="tipo_reclamo" type="radio"
                        value="reclamo" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="tipo_reclamo_reclamo"
                        class="ml-3 block text-sm font-medium text-gray-700">Reclamo</label>
                </div>
                <div class="flex items-center">
                    <input id="tipo_reclamo_queja" wire:model="tipo_reclamo" name="tipo_reclamo" type="radio"
                        value="queja" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="tipo_reclamo_queja" class="ml-3 block text-sm font-medium text-gray-700">Queja</label>
                </div>
            </div>
            @error('tipo_reclamo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="descripcion_reclamo" class="block text-sm font-medium text-gray-700">Descripción del
                Reclamo</label>
            <textarea id="descripcion_reclamo" wire:model="descripcion_reclamo" rows="4"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('descripcion_reclamo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="solicitud" class="block text-sm font-medium text-gray-700">Solicitud</label>
            <textarea id="solicitud" wire:model="solicitud" rows="4"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('solicitud') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-6">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Enviar Reclamo
            </button>
        </div>
    </form>
</div>