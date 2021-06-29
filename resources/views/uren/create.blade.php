<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' niew urenregistratie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Urenregistratie</h3>
                    <p class="mt-1 text-sm text-gray-500">
                      Use a permanent address where you can receive mail.
                    </p>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="country" class="block text-sm font-medium text-gray-700">Cliënt</label>
                            <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Kies een Cliënt</option>

                                @foreach ($clients as $client)
                                <option>{{ $client->voorNaam }}  {{ $client->achterNaam }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-2 ">
                            <button disabled class="bg-white mt-5 py-2 px-3 border align-middle border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 mt-px w-5 float-left text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                <span class="h-5 pl-2 mt-1 inline-block">Nieuw</span>
                            </button>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                          <label for="country" class="block text-sm font-medium text-gray-700">locatsie</label>
                          <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Kies een locatsie</option>

                            @foreach ($locatsies as $locatsie)
                                <option>{{ $locatsie->titel }},  {{ $locatsie->plats }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-span-6 sm:col-span-2 ">
                            <button disabled class="bg-white mt-5 py-2 px-3 border align-middle border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 mt-px w-5 float-left text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                <span class="h-5 pl-2 mt-1 inline-block">Nieuw</span>
                            </button>
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="city" class="block text-sm font-medium text-gray-700">Start tijd en datum</label>
                            <input type="datetime-local" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="state" class="block text-sm font-medium text-gray-700">Eind tijd en datum</label>
                            <input type="datetime-local" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                bijzonderheden
                            </label>
                            <div class="mt-1">
                              <textarea id="bijzonderheden" name="bijzonderheden" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md" ></textarea>
                            </div>

                        </div>




                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</x-app-layout>
