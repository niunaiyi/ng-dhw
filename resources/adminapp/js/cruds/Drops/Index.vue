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
                            <strong>投放</strong>
                        </h4>
                    </div>
                    <div class="card-body">
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
                                <datatable
                                    :columns="columns"
                                    :data="data"
                                    :total="total"
                                    :query="query"
                                    :xprops="xprops"
                                    :HeaderSettings="false"
                                    :pageSizeOptions="[10, 25, 50, 100]"
                                >
                                    <global-search :query="query" class="pull-left"/>
                                    <header-settings :columns="columns" class="pull-right"/>
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
import {mapGetters, mapActions} from 'vuex'
import DatatableActions from '@components/Datatables/DatatableActions'
import TranslatedHeader from '@components/Datatables/TranslatedHeader'
import HeaderSettings from '@components/Datatables/HeaderSettings'
import GlobalSearch from '@components/Datatables/GlobalSearch'
import DatatableSingle from '@components/Datatables/DatatableSingle'

export default {
    components: {
        GlobalSearch,
        HeaderSettings
    },
    data() {
        return {
            columns: [
                {
                    title: 'cruds.drop.fields.id',
                    field: 'id',
                    thComp: TranslatedHeader,
                    sortable: true,
                    colStyle: 'width: 100px;'
                },
                {
                    title: 'cruds.drop.fields.customer',
                    field: 'customer.phonenumber',
                    thComp: TranslatedHeader,
                    tdComp: DatatableSingle,
                    sortable: true
                },
                {
                    title: 'cruds.customer.fields.address',
                    field: 'address.fullname',
                    thComp: TranslatedHeader,
                    tdComp: DatatableSingle,
                    sortable: true
                },
                {
                    title: 'cruds.drop.fields.device',
                    field: 'device.name',
                    thComp: TranslatedHeader,
                    tdComp: DatatableSingle,
                },
                {
                    title: 'cruds.drop.fields.type',
                    field: 'type.name',
                    thComp: TranslatedHeader,
                    tdComp: DatatableSingle,
                },
                ,
                {
                    title: 'cruds.drop.fields.created_at',
                    field: 'created_at',
                    thComp: TranslatedHeader,
                },
                {
                    title: 'global.actions',
                    thComp: TranslatedHeader,
                    tdComp: DatatableActions,
                    visible: true,
                    thClass: 'text-right',
                    tdClass: 'text-right td-actions',
                    colStyle: 'width: 150px;'
                }
            ],
            query: {sort: 'id', order: 'desc', limit: 100, s: ''},
            xprops: {
                module: 'DropsIndex',
                route: 'drops',
                permission_prefix: 'drop_'
            }
        }
    },
    beforeDestroy() {
        this.resetState()
    },
    computed: {
        ...mapGetters('DropsIndex', ['data', 'total', 'loading'])
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
    methods: {
        ...mapActions('DropsIndex', ['fetchIndexData', 'setQuery', 'resetState'])
    }
}
</script>
