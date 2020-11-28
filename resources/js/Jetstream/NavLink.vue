<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'flex items-center py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100'
                            : 'flex items-center py-2 px-6 text-gray-100'
            }
        }
    }
</script>
