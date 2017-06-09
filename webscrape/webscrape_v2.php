<?php
  include 'domscraper.php';

  //get only tables with id="some_table_id" or any attribute match eg class="somthing"
echo '<br>
      <button type="button" class="btn btn-info text-center" data-toggle="collapse" data-target="#ets-collapse">
          Open ETS Fixtures & Results 2017
      </button>
      <button type="button" class="btn btn-info text-center" data-toggle="collapse" data-target="#in2touch-collapse">
          Open In2Touch Fixtures & Results 2017
      </button>
<div id="parent">
<div class="panel">
      <div id="ets-collapse" class="collapse" data-parent="#parent">
        <h3>Mixed ETS</h3>
        <div class="col-md-6 text-center">
          <h4>Mixed Table</h4>
            <table class="table-responsive table table-condensed">'
                .$ets_mixed->getInnerHTML('table','class=ladder').'
            </table>
        </div>
        <div class="col-md-6 text-center">
          <h4>Stingrays Fixtures</h4>
            <table class="table-responsive table table-condensed">'
                .$ets_mixed_stingrays_fixtures->getInnerHTML('table','class=team draw').'
            </table>
        </div>
        <div class="col-md-6 text-center">
          <h4>Sharks Fixtures</h4>
            <table class="table-responsive table table-condensed">'
                .$ets_mixed_sharks_fixtures->getInnerHTML('table','class=team draw').'
            </table>
        </div>
        <h3>Men\'s ETS</h3>
        <div class="col-md-6 text-center">
          <h4>Men\'s Table</h4>
            <table class="table-responsive table table-condensed">'
              .$ets_mens->getInnerHTML('table','class=ladder').'
            </table>
        </div>
        <div class="col-md-6 text-center">
          <h4>Men\'s Fixtures</h4>
            <table class="table-responsive table table-condensed">'
                .$ets_mens->getInnerHTML('table','class=team draw').'
            </table>
        </div>
        <h3>Women\'s ETS</h3>
        <div class="col-md-6 text-center">
          <h4>Women\'s Table</h4>
            <table class="table-responsive table table-condensed">'
              .$ets_womens->getInnerHTML('table','class=ladder').'
            </table>
          </div>
        <div class="col-md-6 text-center">
        <h4>Women\'s Fixtures</h4>
            <table class="table-responsive table table-condensed">'
              .$ets_womens->getInnerHTML('table','class=team draw').'
            </table>
        </div>
      </div>
      </div>

      <div class="panel">
        <div id="in2touch-collapse" class="collapse panel" data-parent="#parent">

          <h3>Men\'s In2Touch</h3>
            <div class="col-md-6 text-center">
              <h4>Men\'s Fixtures & Results</h4>
              <table class="table-responsive table table-condensed">'
                .$in2touch_mens_fixtures->getInnerHTML('table','class=TFTable').'
              </table>
            </div>

            <div class="col-md-6 text-center">
              <h4>Mixed Fixtures & Results</h4>
              <table class="table-responsive table table-condensed">'
                .$in2touch_mixed_fixtures->getInnerHTML('table','class=TFTable').'
              </table>
            </div>




          </div>
        </div>

      </div>
    ';
?>
