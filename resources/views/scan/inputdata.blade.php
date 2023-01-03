<form id="form">
    @csrf
    <div class="form-outline mb-4 ">
        {{-- <textarea class="form-control" id="input1" rows="3"></textarea> --}}
        <input type="hidden" name="dn_no" id="dn_no">
        <input type="hidden" name="job_no" id="job_no">
        <input type="hidden" name="part_no" id="part_no">
        <label class="form-label" for="textAreaExample6"></label>
        <input type="text" class="form-control" id="input1" name="input1" placeholder="" value=""
            required="">
    </div>
    <div class="form-outline mb-4 ">
        {{-- <textarea class="form-control" rows="5" id="input2"></textarea> --}}
        {{-- <input type="text" id="part"> --}}
        <label class="form-label" for="textAreaExample6"></label>
        <input type="text" class="form-control" id="input2" name="input2" placeholder="" value=""
            required="">
    </div>

    <div class="form-group">
        {{-- <a  class="btn btn-dark mb-2 text-white" id=""style="float: left; font-size: 15px; ">button1</a>
    <a class="btn btn-dark mb-2" id="" style="float: right; font-size: 15px;">button2</a> --}}
        <button type="button" class="btn btn-secondary" id="reset"
            data-dismiss="modal"style="float: left; font-size: 15px;" value="cancel">RESET</button>
        {{-- <button type="submit" class="btn btn-primary" id="add" style="float: right; font-size: 15px;"
        value="simpan">SUBMIT</button> --}}
    </div>
</form>
</div>
