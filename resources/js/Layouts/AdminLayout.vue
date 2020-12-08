<template>
    <div>
        <!-- component -->
        <div>

            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                            <i class="fa fa-cog fa-2x"></i>
                            <span class="text-white text-2xl mx-2 font-semibold">Portfolio</span>
                        </div>
                    </div>

                    <nav class="mt-10">
                        <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                            <i class="fa fa-dashboard"></i>
                            <span class="mx-3">Dashboard</span>
                        </jet-nav-link>

                        <jet-nav-link :href="route('formations')" :active="route().current('formations')">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="mx-3">Formations</span>
                        </jet-nav-link>

                        <jet-nav-link :href="route('experiences')" :active="route().current('experiences')">
                            <i class="fa fa-briefcase"></i>
                            <span class="mx-3">Experiences</span>
                        </jet-nav-link>

                        <jet-nav-link :href="route('skills')" :active="route().current('skills')">
                            <i class="fa fa-bar-chart"></i>
                            <span class="mx-3">Skills</span>
                        </jet-nav-link>

                        <jet-nav-link :href="route('certifications')" :active="route().current('certifications')">
                            <i class="fa fa-certificate"></i>
                            <span class="mx-3">Certifications</span>
                        </jet-nav-link>

                        <jet-nav-link :href="route('projects')" :active="route().current('projects')">
                            <i class="fa fa-wrench"></i>
                            <span class="mx-3">Projects</span>
                        </jet-nav-link>
                    </nav>
                </div>
                <div class="flex-1 flex flex-col overflow-hidden">
                    <header class="flex justify-between items-center py-2 px-6 bg-white">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </button>

                            <div class="relative mx-4 lg:mx-0 border">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>

                                <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                                       placeholder="Search">
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="relative">
                                <jet-dropdown align="right" width="48">
                                    <template #trigger>
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                            <img class="h-8 w-8 rounded-full object-cover" v-if="$page.user" :src="$page.user.profile_photo_url" :alt="$page.user.name" />
                                        </button>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <jet-dropdown-link href="/user/profile">
                                            Profile
                                        </jet-dropdown-link>

                                        <jet-dropdown-link href="/user/api-tokens" v-if="$page.jetstream.hasApiFeatures">
                                            API Tokens
                                        </jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Management -->
                                        <template v-if="$page.jetstream.hasTeamFeatures">
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Team
                                            </div>

                                            <!-- Team Settings -->
                                            <jet-dropdown-link :href="'/teams/' + $page.user.current_team.id">
                                                Team Settings
                                            </jet-dropdown-link>

                                            <jet-dropdown-link href="/teams/create" v-if="$page.jetstream.canCreateTeams">
                                                Create New Team
                                            </jet-dropdown-link>

                                            <div class="border-t border-gray-100"></div>

                                            <!-- Team Switcher -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Switch Teams
                                            </div>

                                            <template v-for="team in $page.user.all_teams">
                                                <form @submit.prevent="switchToTeam(team)">
                                                    <jet-dropdown-link as="button">
                                                        <div class="flex items-center">
                                                            <svg v-if="team.id == $page.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                            <div>{{ team.name }}</div>
                                                        </div>
                                                    </jet-dropdown-link>
                                                </form>
                                            </template>

                                            <div class="border-t border-gray-100"></div>
                                        </template>

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <jet-dropdown-link as="button">
                                                Logout
                                            </jet-dropdown-link>
                                        </form>
                                    </template>
                                </jet-dropdown>
                            </div>
                        </div>
                    </header>
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        <div class="container mx-auto px-6 py-3">
                            <slot></slot>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
                sidebarOpen: false,
                dropdownOpen: false
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                axios.post(route('logout').url()).then(response => {
                        window.location = '/';
                })
            },
        },
    }
</script>

