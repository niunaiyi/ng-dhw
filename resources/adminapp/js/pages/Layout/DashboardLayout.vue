<template>
    <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
        <event-hub></event-hub>
        <side-bar :sidebarLinks="sidebarLinks">
            <mobile-menu slot="content"></mobile-menu>
        </side-bar>

        <div class="main-panel">
            <top-navbar></top-navbar>
            <div class="content">
                <dashboard-content></dashboard-content>
            </div>
        </div>
    </div>
</template>

<script>
import DashboardContent from './Content.vue'
import TopNavbar from './TopNavbar.vue'
import MobileMenu from './MobileMenu.vue'

export default {
    components: {
        DashboardContent,
        TopNavbar,
        MobileMenu
    },
    data() {
        return {
            sidebarLinks: [
                {
                    title: 'global.dashboard',
                    icon: 'dashboard',
                    path: {name: 'dashboard'}
                },
                {
                    title: 'cruds.userManagement.title',
                    icon: 'person',
                    path: {name: 'user_management'},
                    gate: 'user_management_access',
                    children: [
                        {
                            title: 'cruds.permission.title',
                            icon: 'perm_data_setting',
                            path: {name: 'permissions.index'},
                            gate: 'permission_access'
                        },
                        {
                            title: 'cruds.role.title',
                            icon: 'group',
                            path: {name: 'roles.index'},
                            gate: 'role_access'
                        },
                        {
                            title: 'cruds.user.title',
                            icon: 'person',
                            path: {name: 'users.index'},
                            gate: 'user_access'
                        }
                    ]
                },
                {
                    title: 'cruds.productManagement.title',
                    icon: 'table_view',
                    path: {name: 'product_management'},
                    gate: 'product_management_access',
                    children: [
                        {
                            title: 'cruds.productCategory.title',
                            icon: 'table_view',
                            path: {name: 'product_categories.index'},
                            gate: 'product_category_access'
                        },
                        {
                            title: 'cruds.productTag.title',
                            icon: 'table_view',
                            path: {name: 'product_tags.index'},
                            gate: 'product_tag_access'
                        },
                        {
                            title: 'cruds.product.title',
                            icon: 'table_view',
                            path: {name: 'products.index'},
                            gate: 'product_access'
                        },
                        {
                            title: 'cruds.address.title',
                            icon: 'table_view',
                            path: {name: 'addresses.index'},
                            gate: 'address_access'
                        },
                        {
                            title: 'cruds.customer.title',
                            icon: 'table_view',
                            path: {name: 'customers.index'},
                            gate: 'customer_access'
                        },
                        {
                            title: 'cruds.drop.title',
                            icon: 'table_view',
                            path: {name: 'drops.index'},
                            gate: 'drop_access'
                        }
                    ]
                },
                {
                    title: 'cruds.contactManagement.title',
                    icon: 'import_contacts',
                    path: {name: 'contact_management'},
                    gate: 'contact_management_access',
                    children: [
                        {
                            title: 'cruds.contactCompany.title',
                            icon: 'fas fa-building',
                            path: {name: 'contact_companies.index'},
                            gate: 'contact_company_access'
                        },
                        {
                            title: 'cruds.contactContact.title',
                            icon: 'fas fa-user-plus',
                            path: {name: 'contact_contacts.index'},
                            gate: 'contact_contact_access'
                        }
                    ]
                }
            ]
        }
    }
}
</script>
