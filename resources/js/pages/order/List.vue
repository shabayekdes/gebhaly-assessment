<template>
<div class="content-wrapper" style="min-height: 971.94px;">

 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Orders</h1>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
   <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <h3 class="card-title">List</h3>
              </div>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <datatable :columns="columns" :length="getAllOrders.length">
                    <tr role="row" class="odd" v-for="order in getAllOrders" :key="order.id">
                      <td class="sorting_1">{{ order.id }}</td>
                      <td class="project-actions text-right">
                        <div class="row">
                          <!-- /.col -->
                          <div class="col-sm-3 border-right">
                            <!-- <router-link
                              :to="{ name: 'product.edit',  params: { id: product.id } }"
                              class="btn btn-info btn-xs"
                            >
                              <i class="fas fa-pencil-alt"></i>
                            </router-link> -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <a
                              class="btn btn-danger btn-xs"
                              @click="deleteOrder(order.id)"
                              href="#"
                            >
                              <i class="fas fa-trash"></i>
                            </a>
                          </div>
                          <!-- /.col -->
                        </div>

                        <!-- <a class="btn btn-info btn-sm" @click="editSerivce(service.id)" href>
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                        </a>-->
                      </td>
                    </tr>
                  </datatable>
                </div>
              </div>
              <pagination :meta_data="getMetaData" v-on:next="fetchListOrders"></pagination>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import pagination from "@Admin/components/Pagination.vue";
import datatable from "@Admin/components/DataTable.vue";

export default {
  name: "OrderList",
  components: {
    pagination,
    datatable
  },
  data() {
    return {
      columns: [
        { width: "2%", label: "#", name: "id", active: true },
        { width: "23%", label: "Title", name: "title", active: true },
        { width: "15%", label: "Description", name: "description", active: true },
        { width: "18%", label: "Action", name: "action", active: false }
      ]
    };
  },
  methods: {
    ...mapActions([
	  "fetchListOrders"
    ])
  },
  created() {
    this.fetchListOrders();
  },
  computed: mapGetters(["getAllOrders", "getMetaData"])
};
</script>
