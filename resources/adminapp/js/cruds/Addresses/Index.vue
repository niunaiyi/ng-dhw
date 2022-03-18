<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">
              <strong>地址</strong>
            </h4>
          </div>
          <div class="card-body">
            <router-link
              class="btn btn-primary"
              v-if="$can(xprops.permission_prefix + 'create')"
              :to="{ name: xprops.route + '.create' }"
            >
              <i class="material-icons">
                add
              </i>
              新增
            </router-link>
            <button
              type="button"
              class="btn btn-default"
              @click="fetchIndexData"
              :disabled="loading"
              :class="{ disabled: loading }"
            >
              <i class="material-icons" :class="{ 'fa-spin': loading }">
                refresh
              </i>
              刷新
            </button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="table-overlay" v-show="loading">
                  <div class="table-overlay-container">
                    <material-spinner></material-spinner>
                    <span>Loading...</span>
                  </div>
                </div>
                <el-table
                  :data="addressData"
                  style="width: 100%"
                  row-key="id"
                  lazy
                  :load="load"
                  :tree-props="{
                    children: 'children',
                    hasChildren: 'hasChildren',
                  }"
                >
                  <el-table-column prop="name" label="地址"> </el-table-column>
                  <el-table-column label="类型">
                    <template slot-scope="scope">
                      <datatable-single
                        field="type.name"
                        :row="scope.row"
                      ></datatable-single>
                    </template>
                  </el-table-column>
                  <el-table-column prop="created_at" label="日期" width="180">
                  </el-table-column>
                  <el-table-column label="操作" width="160">
                    <template slot-scope="scope">
                      <datatable-actions
                        :row="scope.row"
                        :xprops="xprops"
                      ></datatable-actions>
                    </template>
                  </el-table-column>
                </el-table>
                <datatable
                  v-show="false"
                  :columns="columns"
                  :data="data"
                  :total="total"
                  :query="query"
                  :xprops="xprops"
                  :HeaderSettings="false"
                  :pageSizeOptions="[10, 25, 50, 100]"
                >
                  <global-search :query="query" class="pull-left" />
                  <header-settings :columns="columns" class="pull-right" />
                </datatable>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import DatatableActions from "@components/Datatables/DatatableActions";
import TranslatedHeader from "@components/Datatables/TranslatedHeader";
import HeaderSettings from "@components/Datatables/HeaderSettings";
import GlobalSearch from "@components/Datatables/GlobalSearch";
import DatatableSingle from "@components/Datatables/DatatableSingle";

export default {
  components: {
    GlobalSearch,
    HeaderSettings,
    DatatableActions,
    DatatableSingle,
  },
  data() {
    return {
      columns: [
        {
          title: "cruds.address.fields.id",
          field: "id",
          thComp: TranslatedHeader,
          sortable: true,
          colStyle: "width: 100px;",
        },
        {
          title: "cruds.address.fields.fullname",
          field: "fullname",
          thComp: TranslatedHeader,
          sortable: true,
        },
        {
          title: "cruds.address.fields.name",
          field: "name",
          thComp: TranslatedHeader,
          sortable: true,
        },
        {
          title: "cruds.address.fields.type",
          field: "type.name",
          thComp: TranslatedHeader,
          tdComp: DatatableSingle,
          sortable: true,
        },
        {
          title: "global.actions",
          thComp: TranslatedHeader,
          tdComp: DatatableActions,
          visible: true,
          thClass: "text-right",
          tdClass: "text-right td-actions",
          colStyle: "width: 150px;",
        },
      ],
      query: { sort: "id", order: "asc", limit: 100, s: "" },
      xprops: {
        module: "AddressesIndex",
        route: "addresses",
        permission_prefix: "address_",
      },
      addressData: [],
    };
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('AddressesIndex', ['data', 'total', 'loading'])
  },
  watch: {
    query: {
      handler(query) {
        this.setQuery(query)
        this.fetchIndexData()
      },
      deep: true
    }
  },
  mounted() {
      this.getAddress()
  },
  methods: {
    ...mapActions("AddressesIndex", [
      "fetchIndexData",
      "setQuery",
      "resetState",
    ]),
    async load(tree, treeNode, resolve) {
      resolve(await this.getAddressChildren(tree.id));
    },
    getAddress() {
      axios
        .get(`addresses/1`)
        .then(async (response) => {
          this.addressData = [response.data.data];
        })
        .catch((error) => {
          message = error.response.data.message || error.message;
          // TODO error handling
        })
        .finally(() => {
          // commit('setLoading', false)
        });
    },
    getAddressChildren(id) {
      return axios.get(`addresses/${id}/children`).then((response) => {
        return response.data.data;
      });
    },
  },
};
</script>
