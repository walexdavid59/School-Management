<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">{{ info }} dcvdfd</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            info: null
        };
    },
    mounted() {
        axios
            .get("https://api.coindesk.com/v1/bpi/currentprice.json")
            .then(response => (this.info = response.data.bpi));
    }
};
</script>
