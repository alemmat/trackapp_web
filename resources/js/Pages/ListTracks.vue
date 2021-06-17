<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                  <div class="p-10 grid grid-cols-1 md:grid-cols-3">
                    <!--Card 1-->
                    <div class="h-15 max-w-sm rounded overflow-hidden shadow-lg" v-for="track in tracks" style="height:200px;">

                      <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"> <a :href="route('track.show', { id: track.id })" >{{track.created_at.substring(0, 10)}}</a></div>
                        <p class="text-gray-700 text-base">
                          Tracked positions:{{track.positions.length}}
                        </p>
                      </div>

                    </div>
                  </div>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    import VueGoogleMap from 'vuejs-google-maps'
    import 'vuejs-google-maps/dist/vuejs-google-maps.css'

    export default {

      props: ['tracks'],

        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
