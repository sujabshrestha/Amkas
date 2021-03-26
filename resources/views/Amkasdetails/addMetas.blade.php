@extends('base')

@push('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
{{-- {{ $formmeta[''] ?? '' }} --}}
@endpush

@section('content')
<div class="container" style="margin-left: 30%">
    <div class="row" id="multi_form">
        <div class="col-lg-8 col-lg-offset-2">
          <form id="msform" action="{{ route('metaSubmit',$amkasform->id) }}" method="POST">
            @csrf
            <!-- progressbar -->
            <ul id="progressbar">
              <li class="active">BRIEF BACKGROUND</li>
              <li>MIGRATION PROCESS</li>
              <li>SERVICES BY SHELTER HOME</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
              <h2 class="fs-title">BRIEF BACKGROUND</h2>
              <span>
                <label for="maternal_family">Maternal family :</label>
                <textarea
                  name="maternal_family"
                  id="maternal_family"
                  cols="30"
                  rows="2"
                >{{ $formmeta['maternal_family'] ?? '' }}</textarea>
              </span>
              <div class="row">
                <div class="col-sm-6">
                  <span>
                    <label for="bread_winner_1">Bread Winner :</label>
                    <input
                      type="text"
                      value="{{ $formmeta['bread_winner_1'] ?? '' }}"
                      id="bread_winner_1"
                      name="bread_winner_1"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="family_occupation_1">Family occupation :</label>
                    <input
                      type="text"
                      value="{{ $formmeta['family_occupation_1'] ?? '' }}"
                      id="family_occupation_1"
                      name="family_occupation_1"
                    />
                  </span>
                </div>
              </div>

              <span>
                <label for="family_married_to">Family married to :</label>
                <textarea
                  name="family_married_to"
                  id="family_married_to"
                  cols="30"
                  rows="2"
                >{{ $formmeta['family_married_to'] ?? '' }}</textarea>
              </span>
              <div class="row">
                <div class="col-sm-6">
                  <span>
                    <label for="bread_winner_2">Bread Winner :</label>
                    <input
                      type="text"
                      value="{{ $formmeta['bread_winner_2'] ?? '' }}"
                      id="bread_winner_2"
                      name="bread_winner_2"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="family_occupation_2">Family occupation :</label>
                    <input
                      type="text"
                      value="{{ $formmeta['family_occupation_2'] ?? '' }}"
                      id="family_occupation_2"
                      name="family_occupation_2"
                    />
                  </span>
                </div>
              </div>

              <span>
                <label for="occupation_job"
                  >Occupation/Job of the survivor going for foreign employment
                  :</label
                >
                <textarea
                  name="job_for_foreignemployment"
                  id="occupation_job"
                  cols="30"
                  rows="2"
                >{{ $formmeta['job_for_foreignemployment'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="foreign_employment"
                  >Reason to go for Foreign Employment :
                </label>
                <textarea
                  name="reason_for_foreignemployment"
                  id="foreign_employment"
                  cols="30"
                  rows="2"
                >{{ $formmeta['reason_for_foreignemployment'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="choose_foreign_employment"
                  >Why did you choose to go to that country for foreign
                  employment?
                </label>
                <textarea
                  name="choosed_country"
                  id="choose_foreign_employment"
                  cols="30"
                  rows="2"
                >{{ $formmeta['choosed_country'] ?? '' }}</textarea>
              </span>

              <span>
                <label for="feeling_foreign_employment"
                  >Feeling when the survivor first left their country for foreign
                  employment :
                </label>
                <textarea
                  name="sur_for_foreignemployment"
                  id="feeling_foreign_employment"
                  cols="30"
                  rows="2"
                >{{ $formmeta['sur_for_foreignemployment'] ?? '' }}</textarea>
              </span>

              <input
                type="button"
                name="next"
                class="next action-button"
                value="Next"
              />
            </fieldset>

            <fieldset>
              <h2 class="fs-title">MIGRATION PROCESS</h2>
              <h3 class="fs-subtitle">Before Departure</h3>
              <div class="row">
                <div class="col-sm-6">
                  <span>
                    <label for="amount_paid ">Amount Paid :</label>
                    <input type="number" value="{{ $formmeta['amount_paid'] ?? '' }}" id="amount_paid" name="amount_paid" />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="medium">Medium :</label>
                    <div class="medium_css">
                      <span for="broker_recruitment">Broker Recruitment </span>
                        <input type="hidden" name="medium_broker" value="0">
                      <input
                        type="checkbox"
                        name="medium_broker"
                        @if (isset($formmeta['medium_broker']) && $formmeta['medium_broker']== '1')
                        checked
                        @endif
                        id="broker_recruitment"
                        value="1"
                        />

                    </div>
                  </span>
                </div>
              </div>

              <span>
                <label for="family_married_to"
                  >Activities done at initial process for foreign labour
                  employment :</label
                >
                <textarea
                  name="activities_done"
                  id="activities_employment"
                  cols="30"
                  rows="2"
                >{{ $formmeta['activities_done'] ?? '' }}</textarea>
              </span>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S.N</th>
                    <th scope="col"></th>
                    <th scope="col">YES</th>
                    <th scope="col">NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Discussion with Family</td>
                    <td>
                      <input type="radio" name="dis_with_family"
                      @if (isset($formmeta['dis_with_family']) && $formmeta['dis_with_family']== '1')
                        checked
                      @endif
                      value="1" id="dis_with_family" />
                    </td>
                    <td>
                      <input type="radio" name="dis_with_family"
                      @if (isset($formmeta['dis_with_family']) && $formmeta['dis_with_family']== '0')
                      checked
                    @endif value="0" id="dis_with_family" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Knowledge about Foreign Employment Procedure</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['know_about_fm']) && $formmeta['know_about_fm']== '1')
                        checked
                      @endif
                      name="know_about_fm" id="know_about_fm" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                        @if (isset($formmeta['know_about_fm']) && $formmeta['know_about_fm']== '0')
                        checked
                        @endif
                      name="know_about_fm" id="know_about_fm" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Pre Departure orientation program</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['pre_depart_orientation']) && $formmeta['pre_depart_orientation']== '1')
                      checked
                      @endif
                      name="pre_depart_orientation" id="pre_depart_orientation" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['pre_depart_orientation']) && $formmeta['pre_depart_orientation']== '0')
                      checked
                      @endif
                      name="pre_depart_orientation" id="pre_depart_orientation" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Language training</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['language_training']) && $formmeta['language_training']== '1')
                      checked
                      @endif
                      name="language_training" id="language_training"/>
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['language_training']) && $formmeta['language_training']== '0')
                      checked
                      @endif
                       name="language_training" id="language_training"/>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Skill training</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['skill_training']) && $formmeta['skill_training']== '1')
                      checked
                      @endif

                      name="skill_training" id="skill_training"/>
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['skill_training']) && $formmeta['skill_training']== '0')
                      checked
                      @endif
                      name="skill_training" id="skill_training"/>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Knowledge about own document</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['knowledge_about_owndocx']) && $formmeta['knowledge_about_owndocx']== '1')
                      checked
                      @endif
                      name="knowledge_about_owndocx" id="knowledge_about_owndocx"/>
                    </td>
                    <td>

                      <input type="radio" value="0"
                        @if (isset($formmeta['knowledge_about_owndocx']) && $formmeta['knowledge_about_owndocx']== '0')
                        checked
                        @endif
                        name="knowledge_about_owndocx" id="knowledge_about_owndocx"/>
                    </td>
                  </tr>
                </tbody>
              </table>

              <h3 class="fs-subtitle">Promised Work</h3>

              <!-- <div class="row">
                  <div class="col-sm-6"></div>
                   <div class="col-sm-6"></div>
              </div> -->

              <span>
                <label>Problems at :</label>
                <input
                  type="text"
                  id="origin"
                  value="{{ $formmeta['problem_at_origin'] ?? '' }}"
                  name="problem_at_origin"
                  placeholder="Origin"
                />
                <input
                  type="text"
                  id="transit"
                  value="{{ $formmeta['problem_at_transit'] ?? '' }}"
                  name="problem_at_transit"
                  placeholder="Transit"
                />
                <input
                  type="text"
                  id="destination"
                  name="problem_at_destination"
                  {{ $formmeta['problem_at_destination'] ?? '' }}
                  placeholder="Destination"
                />
              </span>

              <div class="row">
                <div class="col-sm-6">
                  <span>
                    <label for="job_discription">Job Discription :</label>
                    <input
                      type="text"
                      id="job_discription"
                      name="job_desc"
                      value="{{ $formmeta['job_desc'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="salary_promised">Salary Promised :</label>
                    <input
                      type="text"
                      id="salary_promised "
                      name="salary_promised"
                      value="{{ $formmeta['salary_promised'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="salary_recieved">Salary Received :</label>
                    <input
                      type="text"
                      id="salary_recieved"
                      name="salary_recieved"
                      value="{{ $formmeta['salary_recieved'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="timetaken_reach_destination"
                      >Time taken to reach destination :</label
                    >
                    <input
                      type="text"
                      id="timetaken_reach_destination "
                      name="timetaken_reach_destination"
                      value="{{ $formmeta['timetaken_reach_destination'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="mdeium_of_sendingmoney">Medium of sending money :</label>
                    <input
                      type="text"
                      id="medium_of_sendingmoney"
                      name="medium_of_sendingmoney"
                      value="{{ $formmeta['medium_of_sendingmoney'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="facilities">Facilities :</label>
                    <input
                      type="text"
                      id="facilities "
                      name="facilities"
                      value="{{ $formmeta['facilities'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="working_hr">Working hour :</label>
                    <input
                      type="text"
                      id="working_hr"
                      name="working_hr"
                      value="{{ $formmeta['working_hr'] ?? '' }}"
                    />
                  </span>
                </div>
                <div class="col-sm-6">
                  <span>
                    <label for="day_off">Day off :</label>
                    <input
                      type="text"
                      id="day_off "
                      name="day_off"
                      value="{{ $formmeta['day_off'] ?? '' }}"
                    />
                  </span>
                </div>
              </div>

              <label>Legal Services in Destination :</label>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Services</th>
                    <th scope="col">YES</th>
                    <th scope="col">NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Medical check-ups</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['medical_checkups']) && $formmeta['medical_checkups']== '1')
                      checked
                      @endif
                      name="medical_checkups" id="medical_checkups" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['medical_checkups']) && $formmeta['medical_checkups']== '0')
                      checked
                      @endif
                      name="medical_checkups" id="medical_checkups" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Labour Identity card</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['labour_identity']) && $formmeta['labour_identity']== '1')
                      checked
                      @endif
                      name="labour_identity" id="labour_identity" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['labour_identity']) && $formmeta['labour_identity']== '0')
                      checked
                      @endif
                      name="labour_identity" id="labour_identity" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Working Visa Permit</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['working_visa_permit']) && $formmeta['working_visa_permit']== '1')
                      checked
                      @endif
                      name="working_visa_permit" id="working_visa_permit" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['working_visa_permit']) && $formmeta['working_visa_permit']== '0')
                      checked
                      @endif
                      name="working_visa_permit" id="working_visa_permit" />
                    </td>
                  </tr>
                </tbody>
              </table>

              <span>
                <label for="wassurvivor_incontactfamily_andhow"
                  >Was the survivor in contact with their family? How?</label
                >
                <textarea name="wassurvivor_incontactfamily_andhow" id="wassurvivor_incontactfamily_andhow" cols="30" rows="2">{{ $formmeta['wassurvivor_incontactfamily_andhow'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="howdid_survivorincontact_familyandhowoften"
                  >How did the survivor contact the family? How often?</label
                >
                <textarea name="howdid_survivorincontact_familyandhowoften" id="howdid_survivorincontact_familyandhowoften" cols="30" rows="2">{{ $formmeta['howdid_survivorincontact_familyandhowoften'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="experience_problems_destination"
                  >Experience/Problems/ challenges faced in Destination :</label
                >
                <textarea name="experience_problems_destination" id="experience_problems_destination" cols="30" rows="2">{{ $formmeta['experience_problems_destination'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="">Process of returning home country :</label>
                <textarea name="process_of_returning" id="process_of_returning" cols="30" rows="2">{{ $formmeta['process_of_returning'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >How did the survivor feel when she landed at home
                  country?</label
                >
                <textarea name="howsurvivor_felt_landinghomecountry" id="howsurvivor_felt_landinghomecountry" cols="30" rows="2">{{ $formmeta['howsurvivor_felt_landinghomecountry'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="">Did you know about AMKAS Nepal? If Yes how?</label>
                <textarea name="know_about_amkashow" id="know_about_amkashow" cols="30" rows="2">{{ $formmeta['know_about_amkashow'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >Physical and Psychological condition of the survivor when
                  meeting AMKAS:</label
                >
                <textarea name="physical_psychological_condition" id="physical_psychological_condition" cols="30" rows="2">{{ $formmeta['physical_psychological_condition'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >How did AMKAS meet her? How did she react when AMKAS meet
                  her?</label
                >
                <textarea name="amkas_meet_her" id="amkas_meet_her" cols="30" rows="2">{{ $formmeta['amkas_meet_her'] ?? '' }}</textarea>
              </span>

              <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
              />
              <input
                type="button"
                name="next"
                class="next action-button"
                value="Next"
              />
            </fieldset>

            <fieldset>
              <h2 class="fs-title">SERVICES BY SHELTER HOME</h2>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Services</th>
                    <th scope="col">YES</th>
                    <th scope="col">NO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Transportation service</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['transportation_service']) && $formmeta['transportation_service']== '1')
                      checked
                      @endif
                      name="transportation_service" id="transportation_service" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['transportation_service']) && $formmeta['transportation_service']== '0')
                      checked
                      @endif
                      name="transportation_service" id="transportation_service" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Shelter support</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['shelter_support']) && $formmeta['shelter_support']== '1')
                      checked
                      @endif
                      name="shelter_support" id="shelter_support" />
                    </td>
                    <td>
                      <input type="radio"
                      @if (isset($formmeta['shelter_support']) && $formmeta['shelter_support']== '0')
                      checked
                      @endif
                      value="0" name="shelter_support" id="shelter_support" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Medical support</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['medical_support']) && $formmeta['medical_support']== '1')
                      checked
                      @endif
                      name="medical_support" id="medical_support" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['medical_support']) && $formmeta['medical_support']== '0')
                      checked
                      @endif
                      name="medical_support" id="medical_support" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Counseling support</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['counseling_support']) && $formmeta['counseling_support']== '1')
                      checked
                      @endif
                      name="counseling_support" id="counseling_support" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['counseling_support']) && $formmeta['counseling_support']== '0')
                      checked
                      @endif
                      name="counseling_support" id="counseling_support" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Paralegal support</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['paralegal_support']) && $formmeta['paralegal_support']== '1')
                      checked
                      @endif
                      name="paralegal_support" id="paralegal_support" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['paralegal_support']) && $formmeta['paralegal_support']== '0')
                      checked
                      @endif
                      name="paralegal_support" id="paralegal_support" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Skill training</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['services_skill_training']) && $formmeta['services_skill_training']== '1')
                      checked
                      @endif
                      name="services_skill_training" id="services_skill_training" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['services_skill_training']) && $formmeta['services_skill_training']== '0')
                      checked
                      @endif
                      name="services_skill_training" id="services_skill_training" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Referral to other organization</td>
                    <td>
                      <input type="radio" value="1"
                      @if (isset($formmeta['referral_to_org']) && $formmeta['referral_to_org']== '1')
                      checked
                      @endif
                      name="referral_to_org" id="referral_to_org1" />
                    </td>
                    <td>
                      <input type="radio" value="0"
                      @if (isset($formmeta['referral_to_org']) && $formmeta['referral_to_org']== '0')
                      checked
                      @endif
                      name="referral_to_org" id="referral_to_org2" />
                    </td>
                  </tr>
                  <tr class="dor">
                    <td style="text-align: center" colspan="4">If Yes</td>
                  </tr>

                    <tr class="dor">
                    <td colspan="2">Date of referral</td>
                    <td colspan="2">
                        <input type="text" value="{{ $formmeta['date_of_referral'] ?? '' }}" class="datepicker" name="date_of_referral" id="date_of_referral" />
                    </td>
                    </tr>
                    <tr class="dor">
                    <td colspan="2">Name of the organization</td>
                    <td colspan="2">
                        <input type="text" value="{{ $formmeta['name_of_org'] ?? '' }}" name="name_of_org" id="name_of_org" />
                    </td>
                    </tr>
                    <tr class="dor">
                    <td colspan="2">Address</td>
                    <td colspan="2">
                        <input type="text" value="{{ $formmeta['address'] ?? '' }}" name="address" id="address" />
                    </td>
                    </tr>
                    <tr class="dor">
                    <td colspan="2">Contact no.</td>
                    <td colspan="2">
                        <input type="text" value="{{ $formmeta['contact_no'] ?? '' }}" name="contact_no" id="contact_no" />
                    </td>
                    </tr>

                </tbody>
              </table>

              <span>
                <label for=""
                  >Other services or support provided by AMKAS Nepal :</label
                >
                <textarea name="otherservices_amkas" id="otherservices_amkas" cols="30" rows="2">{{ $formmeta['otherservices_amkas'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >Changes of survivor after staying at AMKAS Nepal :</label
                >
                <textarea name="change_of_survivor" id="change_of_survivor" cols="30" rows="2">{{ $formmeta['change_of_survivor'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="">Period of stay at shelter :</label>
                <textarea name="period_of_stay" id="period_of_stay" cols="30" rows="2">{{ $formmeta['period_of_stay'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >Where did the Survivor return after being discharged from the
                  shelter?</label
                >
                <textarea name="where_did_survivor_return" id="where_did_survivor_return" cols="30" rows="2">{{ $formmeta['where_did_survivor_return'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >Survivor`s opinion towards AMKAS shelter home:</label
                >
                <textarea name="survivor_opinion" id="survivor_opinion" cols="30" rows="2">{{ $formmeta['survivor_opinion'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >Opinion of survivor toward going abroad again :</label
                >
                <textarea name="opinion_toward_goingabroad" id="opinion_toward_goingabroad" cols="30" rows="2">{{ $formmeta['opinion_toward_goingabroad'] ?? '' }}</textarea>
              </span>
              <span>
                <label for=""
                  >If not planning to go for foreign employment, what is the
                  survivor planning to do?</label
                >
                <textarea name="survivor_planning" id="survivor_planning" cols="30" rows="2">{{ $formmeta['survivor_planning'] ?? '' }}</textarea>
              </span>
              <span>
                <label for="">How is the survivor now?</label>
                <textarea name="how_is_survivor" id="how_is_survivor" cols="30" rows="2">{{ $formmeta['how_is_survivor'] ?? '' }}</textarea>
              </span>

              <label class="prepared_by">Case Study Prepared By :</label>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Name :</label>
                  <input name="case_study_name" id="case_study_name" value="{{ $formmeta['case_study_name'] ?? '' }}"/>

                </div>
                <div class="col-md-6">
                  <label for="">Designation :</label>
                  <input name="case_study_designation" id="case_study_designation" value="{{ $formmeta['case_study_designation'] ?? '' }}"/>
                </div>
              </div>
              <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
              />
              <input
                type="submit"
                class="action-button"
                value="Submit"
              />
            </fieldset>
          </form>
        </div>
    </div>
</div>
 <!-- MultiStep Form -->



@endsection

@push('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
</script>



<script>
//    const msForm = document.getElementById("msform");
//    msForm.addEventListener("submit", (e) => {
//      e.preventDefault();
//      console.log(e.target, "form submitted");
//    });
   //jQuery time
   $( document ).ready(function() {
        @if (isset($formmeta['referral_to_org']) && $formmeta['referral_to_org']== '0')
            $('.dor').hide();
        @endif


        $('body').on('click','#referral_to_org1',function(){
            $('.dor').show();
        });
        $('body').on('click','#referral_to_org2',function(){
            $('.dor').hide();
        });


    });


var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = now * 50 + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          transform: "scale(" + scale + ")",
          position: "relative",
        });
        next_fs.css({ left: left, opacity: opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );
});

$(".previous").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");

  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = (1 - now) * 50 + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({ left: left });
        previous_fs.css({
          transform: "scale(" + scale + ")",
          opacity: opacity,
        });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: "easeInOutBack",
    }
  );
});

$(".submit").click(function () {
  return false;
});

 </script>
 @endpush
