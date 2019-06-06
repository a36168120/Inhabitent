(function ($) {
    $(function() {

        const searchBar = $('.search-field');
        // const selected = this.value;
    
        searchBar.hide();
        $('.search-submit').on('click', function(event) {
          event.preventDefault();
          searchBar.toggle('slide');
          searchBar.focus();
        });
    
        // searchBar.on('blur', function(event) {
        //   event.preventDefault();
        //   if (selected === '') {
        //       searchBar.hide('slide');
        //   }
        // });
    });

})(jQuery);


