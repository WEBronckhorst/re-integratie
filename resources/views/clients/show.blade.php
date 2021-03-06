<?php use Carbon\Carbon; ?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client') }}
        </h2>
    </x-slot>



    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->



    <main class="py-10">
      <!-- Page header -->
      <div class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
        <div class="flex items-center space-x-5">
          <div class="flex-shrink-0">
            <div class="relative">
              <img class="h-16 w-16 rounded-full" src="https://loremflickr.com/350/350/face,men/" alt="">
              <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
            </div>
          </div>
          <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ $client->voorNaam }}  {{ $client->achterNaam }}</h1>
            <p class="text-sm font-medium text-gray-500">TRENER: <a href="#" class="text-gray-900">{{ $client->user->name }}</a> inschijf datum <time datetime="{{ $client->inschijfDatum }}">{{ Carbon::parse($client->inschijfDatum)->isoFormat('dd D MMM Y') }}  </time></p>
          </div>
        </div>
        <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
          <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
            Disqualify
          </button>
          <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
            Advance to offer
          </button>
        </div>
      </div>

      <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="space-y-6 lg:col-start-1 lg:col-span-2">
          <!-- Description list-->
          <section aria-labelledby="applicant-information-title">
            <div class="bg-white shadow sm:rounded-lg">
              <div class="px-4 py-5 sm:px-6">
                <h2 id="applicant-information-title" class="text-lg leading-6 font-medium text-gray-900">
                  Applicant Information
                </h2>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                  Personal details and application.
                </p>
              </div>
              <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Adres
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->adres }}, {{ $client->poetcode }} {{ $client->plats }}
                    </dd>
                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->mail }}
                    </dd>
                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Salary expectation
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                      $120,000
                    </dd>
                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Phone
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->telefoon }}
                    </dd>
                  </div>
                  <div class="sm:col-span-2">
                    <dt class="text-lg font-medium text-gray-500">
                      Ouders/volgt
                    </dt>

                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Naam
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->ouders_voorLeters }} {{ $client->ouders_tussenNaam }} {{ $client->ouders_achterNaam }}
                    </dd>
                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Adres
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->ouders_adres }}, {{ $client->ouders_poetcode }} {{ $client->ouders_plats }}
                    </dd>
                  </div>
                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->ouders_mail }}
                    </dd>
                  </div>

                  <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">
                      Phone
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->ouders_telefoon }}
                    </dd>
                  </div>
                  <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">
                     Bijzonderheden
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $client->bijzonderheden }}
                    </dd>
                  </div>
                  <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">
                      Documenten
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                      <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                          <div class="w-0 flex-1 flex items-center">
                            <!-- Heroicon name: solid/paper-clip -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">
                              resume_front_end_developer.pdf
                            </span>
                          </div>
                          <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                              Download
                            </a>
                          </div>
                        </li>

                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                          <div class="w-0 flex-1 flex items-center">
                            <!-- Heroicon name: solid/paper-clip -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">
                              coverletter_front_end_developer.pdf
                            </span>
                          </div>
                          <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                              Download
                            </a>
                          </div>
                        </li>
                      </ul>
                    </dd>
                  </div>
                </dl>
              </div>
              <div>
                <a href="#" class="block bg-gray-50 text-sm font-medium text-gray-500 text-center px-4 py-4 hover:text-gray-700 sm:rounded-b-lg">Read full application</a>
              </div>
            </div>
          </section>

          <!-- Comments-->
          <section aria-labelledby="notes-title">
            <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
              <div class="divide-y divide-gray-200">
                <div class="px-4 py-5 sm:px-6">
                  <h2 id="notes-title" class="text-lg font-medium text-gray-900">Notes</h2>
                </div>
                <div class="px-4 py-6 sm:px-6">
                  <ul class="space-y-8">
                    <li>
                      <div class="flex space-x-3">
                        <div class="flex-shrink-0">
                          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div>
                          <div class="text-sm">
                            <a href="#" class="font-medium text-gray-900">Leslie Alexander</a>
                          </div>
                          <div class="mt-1 text-sm text-gray-700">
                            <p>Ducimus quas delectus ad maxime totam doloribus reiciendis ex. Tempore dolorem maiores. Similique voluptatibus tempore non ut.</p>
                          </div>
                          <div class="mt-2 text-sm space-x-2">
                            <span class="text-gray-500 font-medium">4d ago</span>
                            <span class="text-gray-500 font-medium">&middot;</span>
                            <button type="button" class="text-gray-900 font-medium">Reply</button>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="flex space-x-3">
                        <div class="flex-shrink-0">
                          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div>
                          <div class="text-sm">
                            <a href="#" class="font-medium text-gray-900">Michael Foster</a>
                          </div>
                          <div class="mt-1 text-sm text-gray-700">
                            <p>Et ut autem. Voluptatem eum dolores sint necessitatibus quos. Quis eum qui dolorem accusantium voluptas voluptatem ipsum. Quo facere iusto quia accusamus veniam id explicabo et aut.</p>
                          </div>
                          <div class="mt-2 text-sm space-x-2">
                            <span class="text-gray-500 font-medium">4d ago</span>
                            <span class="text-gray-500 font-medium">&middot;</span>
                            <button type="button" class="text-gray-900 font-medium">Reply</button>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="flex space-x-3">
                        <div class="flex-shrink-0">
                          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div>
                          <div class="text-sm">
                            <a href="#" class="font-medium text-gray-900">Dries Vincent</a>
                          </div>
                          <div class="mt-1 text-sm text-gray-700">
                            <p>Expedita consequatur sit ea voluptas quo ipsam recusandae. Ab sint et voluptatem repudiandae voluptatem et eveniet. Nihil quas consequatur autem. Perferendis rerum et.</p>
                          </div>
                          <div class="mt-2 text-sm space-x-2">
                            <span class="text-gray-500 font-medium">4d ago</span>
                            <span class="text-gray-500 font-medium">&middot;</span>
                            <button type="button" class="text-gray-900 font-medium">Reply</button>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-6 sm:px-6">
                <div class="flex space-x-3">
                  <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="min-w-0 flex-1">
                    <form action="#">
                      <div>
                        <label for="comment" class="sr-only">About</label>
                        <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md" placeholder="Add a note"></textarea>
                      </div>
                      <div class="mt-3 flex items-center justify-between">
                        <a href="#" class="group inline-flex items-start text-sm space-x-2 text-gray-500 hover:text-gray-900">
                          <!-- Heroicon name: solid/question-mark-circle -->
                          <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                          </svg>
                          <span>
                            Some HTML is okay.
                          </span>
                        </a>
                        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                          Comment
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
          <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
            <h2 id="timeline-title" class="text-lg font-medium text-gray-900">urenregistratie</h2>

            <!-- Activity Feed -->
            <div class="mt-6 flow-root">
              <ul class="-mb-8">
                  @foreach ($client->Uren as $uren)
                  <li>
                    <div class="relative pb-8">
                      <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                      <div class="relative flex space-x-3">
                        <div>
                          <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                            <!-- Heroicon name: solid/user -->
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                          <div>
                            <p class="text-sm text-gray-500">afspraak gehad met  <a href="#" class="font-medium text-gray-900">{{ $uren->user->name }}</a><br/>
                                vanaf {{ Carbon::parse($uren->start)->isoFormat('hh:mm') }} tot {{ Carbon::parse($uren->eind)->isoFormat('hh:mm') }} <br/>  bij {{ $uren->Locatie->titel }}
                            </p>
                          </div>
                          <div class="text-right text-sm whitespace-nowrap text-gray-500">
                            <time datetime="2020-09-20"> {{ Carbon::parse($uren->start)->isoFormat(' D MMM YY') }}</time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach



              </ul>
            </div>

          </div>
        </section>
      </div>
    </main>




</x-app-layout>
