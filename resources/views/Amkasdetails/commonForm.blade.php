
        <div class="form-group">
            <label for="first">Enter Shelter case number</label>
            <input type="number" class="form-control" name="shelterCase" value="{{ isset($form->sheltercase_no) ? $form->sheltercase_no : "" }}" id="shelterCase" placeholder="Enter Shelter case number">

            @error('shelterCase')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Date of Arrival at TIA</label>
          <input type="date" class="form-control" name="date_of_arr" id="date_of_arr" value="{{ isset($form->date_of_arr) ? $form->date_of_arr : "" }}" placeholder="Enter Date of Arrival at TIA">
            @error('date_of_arr')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Date of registration at AMKAS</label>
            <input type="date" class="form-control" name="date_of_reg" value="{{ isset($form->date_of_reg) ? $form->date_of_reg : "" }}" id="date_of_reg" placeholder="Enter Date of registration">
            @error('date_of_reg')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Date of Departure</label>
            <input type="date" class="form-control" name="date_of_dep" value="{{ isset($form->date_of_dep) ? $form->date_of_dep : "" }}" id="date_of_dep" placeholder="Enter Date of Departure">
            @error('date_of_dep')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <h3 style="margin-left: 35%;font-weight:500; text-decoration: underline;">Details of survivor</h3>
        <div class="form-group">
            <label for="first">Enter name</label>
            <input type="text" class="form-control" name="name" value="{{ isset($form->name) ? $form->name : "" }}" id="name" placeholder="Enter name">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ isset($form->dob) ? $form->dob : "" }}" id="date_of_birth" placeholder="Enter Date of Birth">
            @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter PassportNumber</label>
            <input type="text" class="form-control" name="passportno" value="{{ isset($form->passportno) ? $form->passportno : "" }}" id="passportno" placeholder="Enter PassportNumber">
            @error('passportno')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Original Address</label>
            <input type="text" class="form-control" name="original_add" value="{{ isset($form->originaladdress) ? $form->originaladdress: "" }}" id="original_add" placeholder="Enter Original Address">
            @error('original_add')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Contact Number</label>
            <input type="number" class="form-control" name="contact_no" value="{{ isset($form->contact_no) ? $form->contact_no : "" }}" id="contact_no" placeholder="Enter Contact Number">
            @error('contact_no')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Age</label>
            <input type="number" class="form-control" value="{{ isset($form->age) ? $form->age : "" }}" name="age" id="age" placeholder="Enter Age">
            @error('age')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Select Maritial status</label>
            <select class="form-control" name="maritialstatus" id="role">
                @if(isset($form))
                <option value="">Select Status</option>
                <option @if($form->maritialstatus == 'married') selected @endif value="married">Married</option>
                <option @if($form->maritialstatus == 'single') selected @endif value="single">Single</option>
                @else
                <option value="">Select Status</option>
                <option value="married">Married</option>
                <option value="single">Single</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="first">Enter No of children</label>
            <input type="number" class="form-control" value="{{ isset($form->no_of_children) ? $form->no_of_children : "" }}" name="no_of_child" id="no_of_child" placeholder="Enter No of children">
            @error('age')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Education</label>
            <input type="text" class="form-control" value="{{ isset($form->Education) ? $form->Education : "" }}" name="education" id="education" placeholder="Enter Education">
            @error('education')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Foreign Employment</label>
            <input type="text" class="form-control" value="{{ isset($form->foreignemployment) ? $form->foreignemployment : "" }}" name="forign_emp" id="forign_emp" placeholder="Enter Foreign Employment">
            @error('forign_emp')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Transit Country</label>
            <input type="text" class="form-control"  value="{{ isset($form->transitcountry) ? $form->transitcountry : "" }}" name="transitCountry" id="transitCountry" placeholder="Enter  Transit Country">
            @error('transitCountry')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Duration Of Stay</label>
            <input type="text" class="form-control"  value="{{ isset($form->durationofstay) ? $form->durationofstay : "" }}" name="duration_of_stay" id="duration_of_stay" placeholder="Enter Duration Of Stay">
            @error('duration_of_stay')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Document or Undocumented</label>
            <input type="text" class="form-control"  value="{{ isset($form->document) ? $form->document : "" }}" name="docx" id="docx" placeholder="Enter  Document or Undocumented">
            @error('docx')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Parential Name</label>
            <input type="text" class="form-control"  value="{{ isset($form->parentialname) ? $form->parentialname : "" }}" name="parent" id="parent" placeholder="Enter  Spouse or Guardian">
            @error('parent')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first">Enter Nature of Job</label>
            <input type="text" class="form-control"  value="{{ isset($form->natureofjobs) ? $form->natureofjobs : "" }}" name="natureofjob" id="natureofjob" placeholder="Enter  Nature of Job">
            @error('natureofjob')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <h1 style="margin-left: 35%;font-weight:500; text-decoration: underline;">Brief Background</h1>
        <div class="form-group">
            <label for="first">Enter Maternal Family</label>
            <input type="text" class="form-control" name="maternal_family" id="maternal_family" placeholder="Enter Maternal Family">
            @error('parent')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}
