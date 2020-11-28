<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
        <h3 class="text-gray-700 text-3xl font-medium m-0">
          <a href="/formations"><i class="fa fa-long-arrow-left"></i></a>
          {{ editMode ? "Edit formation" : "Add new formation" }}
        </h3>
    </div>
    <div class="form-container">
      <div class="bg-white p-3">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 text-sm font-bold mb-2 required">Title</label>
          <input id="title" v-model="form.title" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Title">
          <div v-if="$page.errors.title" class="text-red-800">
            {{ $page.errors.title[0] }}
          </div>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2 required">Description</label>
          <textarea id="description" v-model="form.description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description"></textarea>
          <div v-if="$page.errors.description" class="text-red-800">
            {{ $page.errors.description[0] }}
          </div>
        </div>
        <div class="mb-4 flex">
          <div class="">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2 required">Start date</label>
            <input id="title" type="date" v-model="form.startdate"   class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            <div v-if="$page.errors.startdate" class="text-red-800">
              {{ $page.errors.startdate[0] }}
            </div>
          </div>
          <div class="ml-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2" >Obtention date</label>
            <input id="title" type="date" v-model="form.enddate" class="appearance-none border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"/>
          </div>
        </div>
        <div class="mb-4">
          <label for="title" class="block text-gray-700 text-sm font-bold mb-2 required">School</label>
          <input id="title" v-model="form.school" type="text" class="appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="School">
          <div v-if="$page.errors.school" class="text-red-800">
            {{ $page.errors.school[0] }}
          </div>
        </div>
        <div class="mb-4">
          <button type="button" @click="submit" class="py-2 px-4 bg-info rounded  text-white">Save</button>
        </div>
      </div>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
  components: {
    AdminLayout,
  },
  props: ["formation", "currentRouteName", "flash"],
  data() {
    return {
      form: {
        id: this.formation.id,
        title: this.formation.title,
        description: this.formation.description,
        startdate: this.formation.startdate,
        enddate: this.formation.enddate,
        school: this.formation.school,
      },
      editMode: this.formation.id != null,
    };
  },
  methods: {
    submit() {
      this.$inertia.post("/formations/form/store", this.form);
    },
  },
};
</script>
