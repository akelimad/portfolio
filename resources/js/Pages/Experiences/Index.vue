<template>
  <admin-layout>
    <div class="flex justify-content-between items-center mb-3">
      <h3 class="text-gray-700 text-3xl font-medium m-0"><i class="fa fa-briefcase"></i> Experiences</h3>
      <inertia-link :href="'/experiences/form'" :class="'px-3 py-1 bg-success text-white rounded'"><i class="fa fa-plus"></i> Add new</inertia-link>

    </div>
    <div class="table-box bg-white">
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2">Company</th>
            <th class="border px-4 py-2">City</th>
            <th class="border px-4 py-2">Start date</th>
            <th class="border px-4 py-2">End date</th>
            <th class="border px-4 py-2 text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="experience in experiences" :key="experience.id">
            <td class="border px-4 py-2" :title="experience.title">{{ experience.title|truncate(30) }}</td>
            <td class="border px-4 py-2">{{ experience.company }}</td>
            <td class="border px-4 py-2">{{ experience.city }}</td>
            <td class="border px-4 py-2">{{ experience.startdate }}</td>
            <td class="border px-4 py-2">{{ experience.enddate }}</td>
            <td class="border px-4 py-2 text-center">
              <a
                :href="'/experiences/form/' + experience.id"
                class="rounded bg-gray-200 hover:bg-gray-300 py-1 px-3 text-black"
                ><i class="fa fa-pencil"></i
              ></a>
              <a
                href="javascript:void(0)"
                @click="remove(experience.id)"
                class="rounded bg-gray-200 hover:bg-gray-300 py-1 px-3 text-black"
                ><i class="fa fa-trash"></i
              ></a>
            </td>
          </tr>
          <tr v-if="experiences.length == 0">
            <td class="border px-4 py-2 text-center" colspan="6">
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
  props: ["experiences", "flash"],
  methods: {
    remove(id) {
      this.$confirm("Are you sure?").then(() => {
        this.$inertia.post("/experiences/" + id + "/delete", {});
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
