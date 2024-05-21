
  <div class="modal modal-xl" id="add_event" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="ev_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="ev_name" name="ev_name" required>
            </div>
            <div class="mb-3">
                <label for="ev_desc" class="form-label">Event Description</label>
                <textarea class="form-control" id="ev_desc" name="ev_desc" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ev_start_date" class="form-label">Event Start Date</label>
                <input type="date" class="form-control" id="ev_start_date" name="ev_start_date" required>
            </div>
            <div class="mb-3">
                <label for="ev_end_register_date" class="form-label">End Registration Date</label>
                <input type="date" class="form-control" id="ev_end_register_date" name="ev_end_register_date" required>
            </div>
            <div class="mb-3">
                <label for="publish" class="form-label">Publish</label>
                <select class="form-select" id="publish" name="publish" required>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Event Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

