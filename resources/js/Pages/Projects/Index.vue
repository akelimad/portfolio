<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
      <h3 class="text-gray-700 text-3xl font-medium m-0"><i class="fa fa-wrench"></i> Projects</h3>
      <a
        href="/projects/form"
        class="px-3 py-1 bg-success text-white rounded"
      >
        <i class="fa fa-plus"></i> Add new
      </a>
    </div>
    <div class="table-box bg-white">
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="border px-4 py-2">Image</th>
            <th class="border px-4 py-2">Link</th>
            <th class="border px-4 py-2 text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="project in projects" :key="project.id">
            <td class="border px-4 py-2">
              <img :src="'/uploads/projects/' + project.id + '/' + project.image" width="40" alt="">
            </td>
            <td class="border px-4 py-2">{{ project.link }}</td>
            <td class="border px-4 py-2 text-center">
              <a
                :href="'/projects/form/' + project.id"
                class="rounded bg-gray-200 hover:bg-gray-300 py-1 px-3 text-black"
                ><i class="fa fa-pencil"></i
              ></a>
              <a
                href="javascript:void(0)"
                @click="remove(project.id)"
                class="rounded bg-gray-200 hover:bg-gray-300 py-1 px-3 text-black"
                ><i class="fa fa-trash"></i
              ></a>
            </td>
          </tr>
          <tr v-if="projects.length == 0">
            <td class="border px-4 py-2 text-center" colspan="3">
              No results found
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
  data () {
    return {
    }
  },
  components: {
    AdminLayout,
  },
  props: ["projects", "flash"],
  methods: {
    remove(id) {
      this.$confirm("Are you sure?").then(() => {
        this.$inertia.post("/projects/" + id + "/delete", {});
        setTimeout(() => {
          if (this.flash.success != null) {
            this.$toastr.s(this.flash.success);
          }
        }, 1000);
      });
    },
  },
  mounted() {
    if (this.flash.success != null) {
      this.$toastr.s(this.flash.success);
    }
  },
};
</script>
