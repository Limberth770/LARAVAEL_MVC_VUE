<template>
   <div class="card">
        <div class="card-header">
            SIDEBAR
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">LIBROS</li>
                <li class="list-group-item">CATEGORIAS</li>
                <li class="list-group-item">ETIQUETAS</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Sidebar Component mounted.')
        }
    }
</script>
