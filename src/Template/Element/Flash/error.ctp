<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- Modal -->
<div class="modal fade" id="ModalError" tabindex="-1" role="dialog" aria-labelledby="ModalError" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row center-text">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 style="    font-weight: 400;">
                 <i class="fas fa-exclamation-triangle" style="    color: #c72e36;
    font-size: 48px;
    padding: 5%;"></i> <br>   <?= $message ?> 
                </h3>    
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function()
   {
      $("#ModalError").modal("show");
   });
</script>
