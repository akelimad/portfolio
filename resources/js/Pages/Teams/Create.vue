<template>
    <admin-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Team
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <create-team-form />
            </div>
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from '@/Layouts/AdminLayout'
    import CreateTeamForm from './CreateTeamForm'
    import JetSectionBorder from '@/Jetstream/SectionBorder'

    export default {
        props: ['team'],

        components: {
            AdminLayout,
            CreateTeamForm,
            JetSectionBorder,
        },
    }
</script>
