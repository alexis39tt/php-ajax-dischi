new Vue({
    el: '#root',
    data: {
        records: [],
        genere: 'Pop'
    },
    created(){
      axios.get(`http://localhost/php-ajax-dischi/milestone%20bonus/database.php/?genre=${this.genere}` )
          .then((res) => {
            this.records = res.data;
            console.log(this.records);
          })
    }
  })