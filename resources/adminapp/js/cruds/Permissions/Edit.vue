<template>
    <div class="container-fluid">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">edit</i>
                            </div>
                            <h4 class="card-title">
                                编辑
                                <strong>权限</strong>
                            </h4>
                        </div>
                        <div class="card-body">
                            <back-button></back-button>
                        </div>
                        <div class="card-body">
                            <bootstrap-alert/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div
                                        class="form-group bmd-form-group"
                                        :class="{
                                                  'has-items': entry.name,
                                                  'is-focused': activeField == 'name'
                                                }"
                                    >
                                        <label class="bmd-label-floating">{{
                                                $t('cruds.permission.fields.name')
                                            }}</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            :value="entry.name"
                                            @input="updateName"
                                            @focus="focusField('name')"
                                            @blur="clearFocus"
                                        />
                                    </div>
                                    <div
                                        class="form-group bmd-form-group"
                                        :class="{
                                                  'has-items': entry.title,
                                                  'is-focused': activeField == 'title'
                                                }"
                                    >
                                        <label class="bmd-label-floating required">{{
                                                $t('cruds.permission.fields.title')
                                            }}</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            :value="entry.title"
                                            @input="updateTitle"
                                            @focus="focusField('title')"
                                            @blur="clearFocus"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <vue-button-spinner
                                class="btn-primary"
                                :status="status"
                                :isLoading="loading"
                                :disabled="loading"
                            >
                                保存
                            </vue-button-spinner>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'

export default {
    data() {
        return {
            status: '',
            activeField: ''
        }
    },
    computed: {
        ...mapGetters('PermissionsSingle', ['entry', 'loading'])
    },
    beforeDestroy() {
        this.resetState()
    },
    watch: {
        '$route.params.id': {
            immediate: true,
            handler() {
                this.resetState()
                this.fetchEditData(this.$route.params.id)
            }
        }
    },
    methods: {
        ...mapActions('PermissionsSingle', [
            'fetchEditData',
            'updateData',
            'resetState',
            'setName',
            'setTitle'
        ]),
        updateName(e) {
            this.setName(e.target.value)
        },
        updateTitle(e) {
            this.setTitle(e.target.value)
        },
        submitForm() {
            this.updateData()
                .then(() => {
                    this.$router.push({name: 'permissions.index'})
                    this.$eventHub.$emit('update-success')
                })
                .catch(error => {
                    this.status = 'failed'
                    _.delay(() => {
                        this.status = ''
                    }, 3000)
                })
        },
        focusField(name) {
            this.activeField = name
        },
        clearFocus() {
            this.activeField = ''
        }
    }
}
</script>
