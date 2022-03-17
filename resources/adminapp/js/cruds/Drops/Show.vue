<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <em class="material-icons">remove_red_eye</em>
                        </div>
                        <h4 class="card-title">
                            查看
                            <strong>投放</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <back-button></back-button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <div class="table">
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.id') }}
                                            </td>
                                            <td>
                                                {{ entry.id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.customer') }}
                                            </td>
                                            <td>
                                                <datatable-single
                                                    :row="entry"
                                                    field="customer.phonenumber"
                                                >
                                                </datatable-single>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.address') }}
                                            </td>
                                            <td>
                                                <datatable-single
                                                    :row="entry"
                                                    field="address.fullname"
                                                >
                                                </datatable-single>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.device') }}
                                            </td>
                                            <td>
                                                <datatable-single
                                                    :row="entry"
                                                    field="device.name"
                                                >
                                                </datatable-single>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.type') }}
                                            </td>
                                            <td>
                                                <datatable-single
                                                    :row="entry"
                                                    field="type.name"
                                                >
                                                </datatable-single>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary">
                                                {{ $t('cruds.drop.fields.created_at') }}
                                            </td>
                                            <td>
                                                {{ entry.created_at }}
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex'
import DatatableSingle from '@components/Datatables/DatatableSingle'

export default {
    components: {
        DatatableSingle
    },
    data() {
        return {}
    },
    beforeDestroy() {
        this.resetState()
    },
    computed: {
        ...mapGetters('DropsSingle', ['entry'])
    },
    watch: {
        '$route.params.id': {
            immediate: true,
            handler() {
                this.resetState()
                this.fetchShowData(this.$route.params.id)
            }
        }
    },
    methods: {
        ...mapActions('DropsSingle', ['fetchShowData', 'resetState'])
    }
}
</script>
