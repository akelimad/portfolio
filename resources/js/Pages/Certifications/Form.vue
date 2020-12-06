<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
        <h3 class="text-gray-700 text-3xl font-medium m-0">
          <a href="/certifications"><i class="fa fa-long-arrow-left"></i></a>
          {{ editMode ? "Edit certification" : "Add certification" }}
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
            <label for="obtention_date" class="block text-gray-700 text-sm font-bold mb-2 required">Obtention date</label>
            <input id="obtention_date" type="date" v-model="form.obtention_date" class="appearance-none border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"/>
          </div>
          <div class="col-span-6">
            <label for="delivred_by" class="block text-gray-700 text-sm font-bold mb-2 required">Delivred by</label>
            <input id="delivred_by" v-model="form.delivred_by" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Delivred by">
            <div v-if="$page.errors.delivred_by" class="text-red-800">
              {{ $page.errors.delivred_by[0] }}
            </div>
          </div>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
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
  props: ["certification", "currentRouteName", "flash"],
  data() {
    return {
      form: {
        id: this.certification.id,
        title: this.certification.title,
        obtention_date: this.certification.obtention_date,
        delivred_by: this.certification.delivred_by,
        description: this.certification.description,
      },
      editMode: this.certification.id != null,
    };
  },
  methods: {
    submit() {
      this.$inertia.post("/certifications/form/store", this.form);
    },
  },
};
</script>
