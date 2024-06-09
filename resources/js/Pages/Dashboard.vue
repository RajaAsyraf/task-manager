<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps({
    tasks: {
        type: Array,
        default: [],
    },
});
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="page-title">Dashboard</h2>
    </template>

    <div class="container-xl">
      <div class="card">
        <div class="card-body">
          <div id="table-default" class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    <button class="table-sort" data-sort="sort-title">
                      Title
                    </button>
                  </th>
                  <th>
                    <button class="table-sort" data-sort="sort-description">
                      Description
                    </button>
                  </th>
                  <th>
                    <button class="table-sort" data-sort="sort-priority">
                      Priority
                    </button>
                  </th>
                  <th>
                    <button class="table-sort" data-sort="sort-due-date">
                      Due Date
                    </button>
                  </th>
                  <th>
                    <button class="table-sort" data-sort="sort-completed-at">
                      Completed at
                    </button>
                  </th>
                </tr>
              </thead>
              <tbody class="table-tbody">
                <tr v-for="(task, index) in tasks" :key="index">
                  <td class="sort-title">{{ task.title }}</td>
                  <td class="sort-description">{{ task.description }}</td>
                  <td class="sort-priority">{{ task.priority_level }}</td>
                  <td class="sort-due-date">{{ task.due_date }}</td>
                  <td class="sort-completed-at">{{ task.completed_at }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
