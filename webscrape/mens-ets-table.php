<?php
  include 'domscraper.php';

  //get only tables with id="some_table_id" or any attribute match eg class="somthing"
  echo '<div class="col-md-6 text-center">
          <table class="table-responsive table table-condensed">'
            .$mens_table->getInnerHTML('table','class=ladder').'
          </table>
        </div>';

?>
