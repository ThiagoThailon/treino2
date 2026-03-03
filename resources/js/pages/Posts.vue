<script setup>

import {useForm } from '@inertiajs/vue3';


const form = useForm({
    titulo: '',
    comentario: ''
})

 const submit=() => {
    form.post('/post/store', {
        preserveScroll:true,
        onSuccess: () => {
            form.reset();
        },
    })
}


</script>


<template>

    <main class="bg-slate-100 min-h-screen flex flex-col justify-center items-center">

        <div class="bg-white w-80 flex flex-col p-10 rounded-2xl border border-gray-200">
            
                    <form @submit.prevent="submit" class="text-black flex flex-col w-full gap-3">
                        <input type="text" class="border rounded-lg p-1 " v-model="form.titulo" placeholder="Titulo">
                        <input type="text" class="border rounded-lg p-1 " v-model="form.comentario" placeholder="Comentário">
                        <button type="submit" class="bg-blue-500 rounded-lg py-1 text-white font-semibold">Enviar</button>
                    </form>
        </div>

    </main>

</template>