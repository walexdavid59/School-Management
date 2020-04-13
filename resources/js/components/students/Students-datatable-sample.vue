<template>
    <div class="col-lg-12">
        <div class="card-body">
            <div class="basic-elements">
                <mdb-datatable :data="data" striped bordered />
            </div>
        </div>
    </div>
</template>

<script>
import { mdbDatatable } from "mdbvue";

export default {
    name: "DatatablePage",
    components: {
        mdbDatatable
    },
    data() {
        return {
            data: {
                columns: [
                    {
                        label: "Full Name",
                        field: "name",
                        sort: "asc"
                    },
                    {
                        label: "Phone",
                        field: "phone",
                        sort: "asc"
                    },
                    {
                        label: "Email",
                        field: "email",
                        sort: "asc"
                    },
                    {
                        label: "Gender",
                        field: "gender",
                        sort: "asc"
                    },
                    {
                        label: "Age",
                        field: "age",
                        sort: "asc"
                    },
                    {
                        label: "Father's Full Name",
                        field: "father",
                        sort: "asc"
                    }
                ],
                rows: [
                    {
                        name: "Hermione Butler",
                        position: "Regional Director",
                        office: "London",
                        age: "47",
                        date: "2011/03/21",
                        salary: "$356"
                    },
                    {
                        name: "Lael Greer",
                        position: "Systems Administrator",
                        office: "London",
                        age: "21",
                        date: "2009/02/27",
                        salary: "$103"
                    },
                    {
                        name: "Jonas Alexander",
                        position: "Developer",
                        office: "San Francisco",
                        age: "30",
                        date: "2010/07/14",
                        salary: "$86"
                    },
                    {
                        name: "Shad Decker",
                        position: "Regional Director",
                        office: "Edinburgh",
                        age: "51",
                        date: "2008/11/13",
                        salary: "$183"
                    },
                    {
                        name: "Michael Bruce",
                        position: "Javascript Developer",
                        office: "Singapore",
                        age: "29",
                        date: "2011/06/27",
                        salary: "$183"
                    },
                    {
                        name: "Donna Snider",
                        position: "Customer Support",
                        office: "New York",
                        age: "27",
                        date: "2011/01/25",
                        salary: "$112"
                    }
                ]
            }
        };
    }
};
</script>

<style></style>
