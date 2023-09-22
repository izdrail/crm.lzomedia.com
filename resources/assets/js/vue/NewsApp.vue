<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>
                                Welcome to the News App
                            </h5>
                        </div>

                        <div class="col-lg-12">

                            <h2 class="text-center">
                                Google
                            </h2>

                            <ul v-for="(item, index) in google" :key="index">
                                <li>{{ item }}</li>
                            </ul>
                        </div>


                        <div class="col-lg-12">

                            <h2 class="text-center">
                                Newspapers
                            </h2>
                            <ul v-for="(item, index) in newspapers" :key="index">
                                <li>{{ item }}</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'NewsApp',
    data() {
        return {
            google:[],
            newspapers:[],
        }
    },
    methods: {
        fetchNews()
        {
            console.log('fetchNews');

            fetch('/news/api/trending')
                .then(response => {
                    return response.json();
                }).then(response => {

                    this.google = response.data.google;
                    this.newspapers = response.data.newspaper;
                    console.log(this.google);
                    console.log(this.newspaper);
                })
                .catch(error => {
                    alert(error);
                });

        }
    },
    mounted()
    {
        this.fetchNews();
        console.log('NewsApp.vue mounted');
        console.log('NewsApp.vue mounted');
    }

}
</script>

