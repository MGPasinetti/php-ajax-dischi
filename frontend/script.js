new Vue({
    el: '#app',
    data: {
        dischi: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php')
            .then(response => this.dischi = response.data);
    },
})
