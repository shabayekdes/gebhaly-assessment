<template>
<div class="content-wrapper" style="min-height: 971.94px;">

 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Serivces</h1>
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
              <div class="col-sm-12 col-md-7">
                <a
                  class="btn btn-success float-right"
                  @click="newModal()"
                  href="#"
                >
                Add New
                  <i class="fas fa-wrench"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <datatable :columns="columns" :length="getAllServices.length">
                    <tr role="row" class="odd" v-for="service in getAllServices" :key="service.id">
                      <td class="sorting_1">{{ service.id }}</td>
                      <td>{{ service.title }}</td>
                      <td>{{ service.description }}</td>
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
                              @click="deleteService(service.id)"
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
              <pagination :meta_data="getMetaData" v-on:next="fetchListServices"></pagination>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          	<form @submit.prevent="createService">
				<div class="modal-body">
					<div class="form-group">
						<label for="serviceTitle">Title</label>
						<input type="text" class="form-control" v-model="getSingleService.title" id="serviceTitle" aria-describedby="titleHelp" placeholder="Enter service title">
						<small id="titleHelp" class="form-text text-muted">Title should be sample.</small>
					</div>
					  <div class="form-group">
						<label for="serviceDescription">Description</label>
						<textarea class="form-control" v-model="getSingleService.description" id="serviceDescription" rows="3"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
        	</form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import pagination from "@Admin/components/Pagination.vue";
import datatable from "@Admin/components/DataTable.vue";

export default {
  name: "ServiceList",
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
	  "fetchListServices",
	  "storeService"
    ]),
    newModal(){
      $('#newModal').modal('show')
	},
	createService(){
		this.storeService(this.getSingleService)
	}
  },
  created() {
    this.fetchListServices();
  },
  computed: mapGetters(["getAllServices", "getSingleService", "getMetaData"])
};
</script>
