<?php
  include 'domscraper.php';

  //get only tables with id="some_table_id" or any attribute match eg class="somthing"
echo '<h3>Men\'s ETS</h3>';

echo '<div class="col-md-6 text-center">
          <h4>Men\'s Table</h4>
          <table class="table-responsive table table-condensed">'
            .$ets_mens->getInnerHTML('table','class=ladder').'
          </table>
        </div>';

echo '
      <div class="col-md-6 text-center">
      <h4>Men\'s Fixtures</h4>
          <table class="table-responsive table table-condensed">'
              .$ets_mens->getInnerHTML('table','class=team draw').'
          </table>
      </div>';

echo '<h3>Women\'s ETS</h3>';

echo '<div class="col-md-6 text-center">
          <h4>Women\'s Table</h4>
          <table class="table-responsive table table-condensed">'
            .$ets_womens->getInnerHTML('table','class=ladder').'
          </table>
        </div>';

echo '
      <div class="col-md-6 text-center">
      <h4>Women\'s Fixtures</h4>
          <table class="table-responsive table table-condensed">'
            .$ets_womens->getInnerHTML('table','class=team draw').'
          </table>
      </div>';

echo '<h3>Mixed ETS</h3>';

echo '<div class="col-md-6 text-center">
            <h4>Mixed Table</h4>
            <table class="table-responsive table table-condensed">'
              .$ets_mixed->getInnerHTML('table','class=ladder').'
            </table>
        </div>';

echo '
      <div class="col-md-6 text-center">
          <h4>Stingrays Fixtures</h4>
          <table class="table-responsive table table-condensed">'
              .$ets_mixed_stingrays_fixtures->getInnerHTML('table','class=team draw').'
          </table>
      </div>';

echo '
      <div class="col-md-6 text-center">
          <h4>Sharks Fixtures</h4>
          <table class="table-responsive table table-condensed">'
              .$ets_mixed_sharks_fixtures->getInnerHTML('table','class=team draw').'
          </table>
      </div>';
?>
