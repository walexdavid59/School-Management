<template>
    <div class="col-lg-12">
        <div class="card alert">
            <div style="padding-bottom:5px;">
                <router-link to="/add-students" class="btn btn-info pull-right"
                    >Add Student</router-link
                >
            </div>
            <div class="card-header">
                <h4>Students List</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert">
                            <i class="ti-close"></i>
                        </li>
                        <li class="card-option drop-menu">
                            <i
                                class="ti-settings"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                                role="link"
                            ></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="ti-loop"></i> Update data
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-menu-alt"></i> Detail log
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-pulse"></i> Statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-power-off"></i> Clear ist
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Admission Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="students2 in newstudent" :key="students2.id">
                            <th scope="row">{{ students2.id }}</th>
                            <th scope="col">{{ students2.fullname }}</th>
                            <th scope="col">{{ students2.email }}</th>
                            <th scope="col">{{ students2.gender }}</th>
                            <th scope="col">{{ students2.admnumber }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /# column -->
</template>

<script>
export default {
    data() {
        return {
            newstudent: []
        };
    },

    methods: {
        loadStudents() {
            axios
                .get("http://127.0.0.1:8000/api/students-list")
                .then(response => {
                    //this.newstudent = response.data.data;
                    console.log(response)
                })
                .catch(err => {
                  console.log(err)
                })
        },
        created() {
            this.loadStudents();
            // console.log(this.loadStudents());
        }
    },
    mounted() {}
};
</script>

<style></style>
