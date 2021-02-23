 {{-- end funtion --}}
 @section('script')
     <script>
         $(function() { //run when the DOM is ready
             $(".sidenav-item").click(function() { //use a class, since your ID gets mangled
                 $(this).addClass("active"); //add the class to the clicked element
                 $.pjax({
                     url: this.value,
                     container: '#pjax-container'
                 });

             });
         });
         // checked include 
         $('#datatable tbody').on('click', 'tr td input[type=checkbox]', function() {
             $(this).prop('checked', !$(this).prop('checked'));
         });

         $('#datatable tbody').on('click', 'tr', function() {
             $(this).toggleClass('selected');
             c = $(this).children('td:first').children('input[type=checkbox]');
             if (!c.is(':disabled')) {
                 c.prop('checked', !c.prop('checked'));
             }
         });

         $('#datatable2 tbody').on('click', 'tr td input[type=checkbox]', function() {
             $(this).prop('checked', !$(this).prop('checked'));
         });

         $('#datatable2 tbody').on('click', 'tr', function() {
             $(this).toggleClass('selected');
             c = $(this).children('td:first').children('input[type=checkbox]');
             if (!c.is(':disabled')) {
                 c.prop('checked', !c.prop('checked'));
             }
         });

     </script>
