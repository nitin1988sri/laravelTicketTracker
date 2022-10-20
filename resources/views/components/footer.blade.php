<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Upload File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="uploadFile" class="uploadFile" method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">uploadFile</label>
            <input type="file" class="form-control" id='file' name="file" required>
          </div>
          <div class="form-group mb-4 massage">
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
