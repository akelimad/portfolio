<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
        <h3 class="text-gray-700 text-3xl font-medium m-0">
          <a href="/experiences"><i class="fa fa-long-arrow-left"></i></a>
          {{ editMode ? "Edit experience" : "Add new experience" }}
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
        <div class="grid grid-cols-12 gap-4 mb-4">
          <div class="col-span-6">
            <label for="company" class="block text-gray-700 text-sm font-bold mb-2 required">Company</label>
            <input id="company" v-model="form.company" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Company">
            <div v-if="$page.errors.company" class="text-red-800">
              {{ $page.errors.company[0] }}
            </div>
          </div>
          <div class="col-span-6">
            <label for="city" class="block text-gray-700 text-sm font-bold mb-2 required">City</label>
            <input id="city" v-model="form.city" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="City">
            <div v-if="$page.errors.city" class="text-red-800">
              {{ $page.errors.city[0] }}
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-4 mb-4">
          <div class="col-span-6">
            <label for="startdate" class="block text-gray-700 text-sm font-bold mb-2 required">Start date</label>
            <input id="startdate" type="date" v-model="form.startdate"   class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            <div v-if="$page.errors.startdate" class="text-red-800">
              {{ $page.errors.startdate[0] }}
            </div>
          </div>
          <div class="col-span-6">
            <label for="enddate" class="block text-gray-700 text-sm font-bold mb-2" >End date</label>
            <input id="enddate" type="date" v-model="form.enddate" class="appearance-none border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"/>
          </div>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2 required">Description</label>
          <textarea id="description" v-model="form.description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description"></textarea>
          <div v-if="$page.errors.description" class="text-red-800">
            {{ $page.errors.description[0] }}
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
  props: ["experience", "currentRouteName", "flash"],
  data() {
    return {
      form: {
        id: this.experience.id,
        title: this.experience.title,
        company: this.experience.company,
        city: this.experience.city,
        startdate: this.experience.startdate,
        enddate: this.experience.enddate,
        description: this.experience.description,
      },
      editMode: this.experience.id != null,
    };
  },
  methods: {
    submit() {
      console.log(this.form)
      this.$inertia.post("/experiences/form/store", this.form);
    },
  },
};
</script>
