@if (session()->has('modal-success'))
<div class="col-md-4">
    <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
  <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-success">
          
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          
          <div class="modal-body">
              
              <div class="py-3 text-center">
                  <i class="ni ni-bell-55 ni-3x"></i>
                  <h4 class="heading mt-4">Ativo cadastrado com sucesso!</h4>
                  <p>{{ session()->get('modal-success') }} ,criado com sucesso .</p>
              </div>
              
          </div>
          
          <div class="modal-footer">
              <button type="button" class="btn btn-white">Ok, Got it</button>
              <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
          </div>
          
      </div>
  </div>
</div>
@endif