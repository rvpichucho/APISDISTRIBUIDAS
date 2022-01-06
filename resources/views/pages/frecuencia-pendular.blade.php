
<x-app-layout>

    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-14 m-20 sm:rounded-lg">
            <livewire:frecuencia-pendular />
        </div>
        <div class="absolute bottom-0 right-0 m-20 sm:rounded-lg">                
            <div class="md:w-auto">
                <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mt-20">
                    <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-purple-600 ">Cálculo de Frencuencia <br>Pendular</p>
                        <img class="object-none object-center pl-20 pt-20" src="http://hyperphysics.phy-astr.gsu.edu/hbasees/imgmec/pend.gif"
                        alt="Densidad">
                        <p class="leading-7 text-center mt-20 text-xl">Para calcular la frecuencia pendular se <br>
                        multiplica 2(π) por la raíz cuadrada de <br>la longitud sobre la gravedad<br></p>                                                            
                    </div>
                </div>
            </div>            
        </div>
    </div>
</x-app-layout>
