new Vue({
    el: '#root',
    data: {
        records: [],
    },
    created(){
      axios.get( 'http://localhost/php-ajax-dischi/milestone%202/database.php' )
          .then((res) => {
            this.records = res.data;
            console.log(this.records);
          })
    }
  })