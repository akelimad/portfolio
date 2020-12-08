<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
        <h3 class="text-gray-700 text-3xl font-medium m-0">
          <a href="/projects"><i class="fa fa-long-arrow-left"></i></a>
          {{ editMode ? "Edit project" : "Add new project" }}
        </h3>
    </div>
    <div class="form-container">
      <div class="bg-white p-3">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
          <input id="title" v-model="form.title" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Title">
          <div v-if="$page.errors.title" class="text-red-800">
            {{ $page.errors.title[0] }}
          </div>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
          <textarea id="description" v-model="form.description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description"></textarea>
          <div v-if="$page.errors.description" class="text-red-800">
            {{ $page.errors.description[0] }}
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="col-gap-1">
            <label for="realized_at" class="block text-gray-700 text-sm font-bold mb-2">Realized at</label>
            <input id="realized_at" type="date" v-model="form.realized_at" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            <div v-if="$page.errors.realized_at" class="text-red-800">
              {{ $page.errors.realized_at[0] }}
            </div>
          </div>
          <div class="col-gap-1">
            <label for="link" class="block text-gray-700 text-sm font-bold mb-2 required" >Link</label>
            <input id="link" type="text" v-model="form.link" class="appearance-none border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline"/>
          </div>
        </div>
        <div class="mb-4">
          <label for="link" :class="['block text-gray-700 text-sm font-bold mb-2', form.image != '' ? '':'required']">Image</label>
          <input type="file" accept="image/*" @change="fileUpload">
          <div v-if="$page.errors.image" class="text-red-800">
              {{ $page.errors.image[0] }}
            </div>
        </div>
        <div class="mb-4">
          <label for="link" class="block text-gray-700 text-sm font-bold mb-2 required">Tags</label>
          <tag-input :tags="form.tags" @tagUpdated="tagsUpdated"></tag-input>
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
import TagInput from "@/Components/TagInput";

export default {
  components: {
    AdminLayout, TagInput
  },
  props: ["project", "currentRouteName", "flash"],
  data() {
    return {
      form: {
        id: this.project.id,
        title: this.project.title,
        description: this.project.description,
        image: this.project.image,
        link: this.project.link,
        realized_at: this.project.realized_at,
        tags: this.project.tags,
      },
      editMode: this.project.id != null,
    };
  },
  methods: {
    fileUpload (e) {
      let files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(files[0]);
    },
    createImage (file) {
      let reader = new FileReader();
      let thiss = this
      reader.onload = function (e) {
        thiss.form.image = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    tagsUpdated (value) {
      this.form.tags = value.tags
    },
    submit() {
      this.$inertia.post("/projects/form/store", this.form);
    },
  },
};
</script>
