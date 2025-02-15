<x-app-layout>
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
      
        .custom-number-input input:focus {
          outline: none !important;
        }
      
        .custom-number-input button:focus {
          outline: none !important;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl md:text-3xl text-center font-bold text-white mb-6">Ordena tu contenedor</h3>
            <div
                class="my-6 relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                <div class="w-full md:w-1/4 bg-white grid place-items-center">
                    <img src="{{ asset('images/landing/water-tank-3.png') }}" class="max-w-32" />
                </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                        <h3 class="font-black text-gray-800 md:text-2xl text-xl text-center">1,100 Litros</h3>
                    <p class="md:text-lg text-gray-500 text-base">Tanque con capacidad de 1,100 litros</p>
                </div>
            </div>

            <div
                class="my-4 relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                <div class="w-full md:w-1/4 bg-white grid place-items-center">
                    <img src="{{ asset('images/landing/water-tank-2.png') }}" class="max-w-32" />
                </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                        <h3 class="font-black text-gray-800 md:text-2xl text-xl text-center">450 Litros</h3>
                    <p class="md:text-lg text-gray-500 text-base">Tanque con capacidad de 450 litros</p>
                </div>
            </div>

            <div
                class="my-4 relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                <div class="w-full md:w-1/4 bg-white grid place-items-center">
                    <img src="{{ asset('images/landing/water-tank.png') }}" class="max-w-32" />
                </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                        <h3 class="font-black text-gray-800 md:text-2xl text-xl text-center">100 Litros</h3>
                    <p class="md:text-lg text-gray-500 text-base">Tanque con capacidad de 100 litros</p>
                </div>
            </div>

            <h3 class="text-2xl md:text-3xl text-center font-bold text-white my-6">Solicita tu llenado</h3>

            <div
                class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white mb-52">
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    <img src="{{ asset('images/landing/tank-truck.png') }}" alt="tailwind logo" class="max-h-32" />
                </div>
                    <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                        <h3 class="font-black text-gray-800 md:text-3xl text-xl text-center">Personaliza tu entrega</h3>
                        <p class="md:text-lg text-gray-500 text-base text-center">Selecciona cuantos litros quieres en tu pedido</p>
                        <p class="text-xl font-black text-gray-800 text-center">
                            $1.0
                            <span class="font-normal text-gray-600 text-base">/litro</span>
                        </p>
                    </div>
                    <div class="custom-number-input h-12 w-32">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent">
                          <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                          </button>
                          <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                          <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function decrement(e) {
          const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
          );
          const target = btn.nextElementSibling;
          let value = Number(target.value);
          value--;
          target.value = value;
        }
      
        function increment(e) {
          const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
          );
          const target = btn.nextElementSibling;
          let value = Number(target.value);
          value++;
          target.value = value;
        }
      
        const decrementButtons = document.querySelectorAll(
          `button[data-action="decrement"]`
        );
      
        const incrementButtons = document.querySelectorAll(
          `button[data-action="increment"]`
        );
      
        decrementButtons.forEach(btn => {
          btn.addEventListener("click", decrement);
        });
      
        incrementButtons.forEach(btn => {
          btn.addEventListener("click", increment);
        });
    </script>
</x-app-layout>
