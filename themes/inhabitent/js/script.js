(function ($) {
    $(function() {

        const searchBar = $('.search-field');
      
        // console.log(this.title);
    
        searchBar.hide();
        $('.fa-search').on('click', function(event) {
          event.preventDefault();
          searchBar.toggle('slide');
          searchBar.focus();
        });
    
        searchBar.on('blur', function(event) {
          event.preventDefault();
          if ( searchBar.val() === '' ) {
              searchBar.hide('slide');
          }
        });
    });

})(jQuery);


