<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- Modal -->
<div class="modal fade" id="ModalError" tabindex="-1" role="dialog" aria-labelledby="ModalError" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
       <div class="modal-header" style="background-color: #c72e36;;">
  
        <h4 class="modal-title" style="    color: white;font-size: 14px;">One2one cerca de ti.</h4>
      </div>
      
      <div class="modal-body center-text">
        <div class="row center-text">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
               
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="    padding: 7%;">
                <h3>
                 <i class="fas fa-bullhorn" style="font-size: 25px;"></i> <?= $message ?>
                </h3>    
            </div>
             <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <a  style="    padding: 1%;" class="btn-wi-3-new close"  data-dismiss="modal" aria-label="Close">Aceptar</a>
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

