<!DOCTYPE html>

<html lang="en">

<head>
    @include("partials.html-header",["title"=>"AluminiRegisterForm"])

    <link rel="stylesheet" href="{{ asset('cssFile/graduatePF.css') }}" />
</head>

<body>
<!--header -->

@include("partials.header",['isLogin' => false])

<!--nav-bar -->

@include("partials.nav-bar",['isLogin' => false])
@if(session('success'))
    <div class="alert alert-success">
        {{ session("success") }}
    </div>

@endif
<div>
<form class="profile-form" method="POST" action="<?=url('/alumniEditProfile')?>" enctype="multipart/form-data">
    @csrf 
    {{csrf_field()}}
   
    <div class="personal-info">
        <h2>Personal Info</h2>
        <!-- profile picture upload -->
        <div>
            Upload Your Image:    <input type="file"  name="img" value="{{old('img')}}" />
        </div><br>
        <!-- profile picture upload end-->

        <input name="Id_no" value="{{$alumni->id}}" style="display: none" />

            <div>
            Name with Initials:<input type="text" placeholder="A.B.C.Ilankoon" name="initials" value="{{$user->Initial}}"/>
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('initials')
                The  Name with Initials field is required.
                @enderror
            </span>
            {{-- end error --}}
            
        <div>
            Full Name:<input type="text" placeholder="Enter our Full Name" name="fullName" value="{{$user->FullName}}" />
        </div>
          {{-- To display an error msg when input is empty --}}
          <span class="text-danger">
            @error('fullName')
            The  Full Name field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>
            Contact Number:

            <input type="int" placeholder="+947193519123" name="contactNumber" value="{{$user->Contact}}" />
        </div>
             {{-- To display an error msg when input is empty --}}
             <span class="text-danger">
                @error('contactNumber')
                The  Contact Number field is required.
                @enderror
            </span>
            {{-- end error --}}

        <div>
            Address:
            <input type="text" placeholder="ABC Rd, Matara" name="address" value="{{$alumni->Address}}" />
        </div>
           {{-- To display an error msg when input is empty --}}
           <span class="text-danger">
            @error('address')
            The  Address field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>
            NIC No:
            <input type="text" placeholder="########v" name="idno" value="{{$user->NIC}}" />
        </div>
         {{-- To display an error msg when input is empty --}}
         <span class="text-danger">
            @error('idno')
            The  NIC field is required.
            @enderror
        </span>
        {{-- end error --}}
        <div>
            Email:
            <input type="text" placeholder="########@gmail.com" name="email" value="{{$user->email}}" />
        </div>
         {{-- To display an error msg when input is empty --}}
         <span class="text-danger">
            @error('email')
            The  Email field is required.
            @enderror
        </span>
        {{-- end error --}}
       

        <div>Country:</div>

        <select class="country" id="country" name="country">
            <option>--select country--</option>

            <option value="Afghanistan"  {{$alumni->Country==="Afghanistan"?"selected":''}}>Afghanistan</option>

            <option value="Aland Islands" {{$alumni->Country==="Aland Islands"?"selected":''}}>Aland Islands</option>

            <option value="Albania" {{$alumni->Country==="Albania"?"selected":''}}>Albania</option>

            <option value="Algeria" {{$alumni->Country==="Algeria"?"selected":''}}>Algeria</option>

            <option value="American Samoa" {{$alumni->Country==="American Samoa"?"selected":''}}>American Samoa</option>

            <option value="Andorra" {{$alumni->Country==="Andorra"?"selected":''}}>Andorra</option>

            <option value="Angola" {{$alumni->Country==="Angola"?"selected":''}} >Angola</option>

            <option value="Anguilla" {{$alumni->Country==="Anguilla"?"selected":''}} >Anguilla</option>

            <option value="Antarctica" {{$alumni->Country==="Antarctica"?"selected":''}} >Antarctica</option>

            <option value="Antigua and Barbuda" {{$alumni->Country==="Antigua and Barbuda"?"selected":''}} >Antigua and Barbuda</option>

            <option value="Argentina" {{$alumni->Country==="Argentina"?"selected":''}} >Argentina</option>

            <option value="Armenia" {{$alumni->Country==="Armenia"?"selected":''}} >Armenia</option>

            <option value="Aruba" {{$alumni->Country==="Aruba"?"selected":''}} >Aruba</option>

            <option value="Australia" {{$alumni->Country==="Australia"?"selected":''}} >Australia</option>

            <option value="Austria" {{$alumni->Country==="Austria"?"selected":''}} >Austria</option>

            <option value="Azerbaijan" {{$alumni->Country==="Azerbaijan"?"selected":''}} >Azerbaijan</option>

            <option value="Bahamas" {{$alumni->Country==="Bahamas"?"selected":''}} >Bahamas</option>

            <option value="Bahrain" {{$alumni->Country==="Bahrain"?"selected":''}} >Bahrain</option>

            <option value="Bangladesh" {{$alumni->Country==="Bangladesh"?"selected":''}} >Bangladesh</option>

            <option value="Barbados" {{$alumni->Country==="Barbados"?"selected":''}} >Barbados</option>

            <option value="Belarus" {{$alumni->Country==="Belarus"?"selected":''}} >Belarus</option>

            <option value="Belgium" {{$alumni->Country==="Belgium"?"selected":''}} >Belgium</option>

            <option value="Belize" {{$alumni->Country==="Belize"?"selected":''}} >Belize</option>

            <option value="Benin" {{$alumni->Country==="Benin"?"selected":''}} >Benin</option>

            <option value="Bermuda" {{$alumni->Country==="Bermuda"?"selected":''}} >Bermuda</option>

            <option value="Bhutan" {{$alumni->Country==="Bhutan"?"selected":''}} >Bhutan</option>

            <option value="Bolivia" {{$alumni->Country==="Bolivia"?"selected":''}} >Bolivia</option>

            <option value="Bonaire, Sint Eustatius and Saba" {{$alumni->Country==="Bonaire, Sint Eustatius and Saba"?"selected":''}} >Bonaire, Sint Eustatius and Saba</option>

            <option value="Bosnia and Herzegovina" {{$alumni->Country==="Bosnia and Herzegovina"?"selected":''}} >Bosnia and Herzegovina</option>

            <option value="Botswana" {{$alumni->Country==="Botswana"?"selected":''}} >Botswana</option>

            <option value="Bouvet Island" {{$alumni->Country==="Bouvet Island"?"selected":''}} >Bouvet Island</option>

            <option value="Brazil" {{$alumni->Country==="Brazil"?"selected":''}} >Brazil</option>

            <option value="British Indian Ocean Territory" {{$alumni->Country==="British Indian Ocean Territory"?"selected":''}} >British Indian Ocean Territory</option>

            <option value="Brunei Darussalam" {{$alumni->Country==="Brunei Darussalam"?"selected":''}} >Brunei Darussalam</option>

            <option value="Bulgaria" {{$alumni->Country==="Bulgaria"?"selected":''}} >Bulgaria</option>

            <option value="Burkina Faso" {{$alumni->Country==="Burkina Faso"?"selected":''}} >Burkina Faso</option>

            <option value="Burundi" {{$alumni->Country==="Burundi"?"selected":''}} >Burundi</option>

            <option value="Cambodia" {{$alumni->Country==="Cambodia"?"selected":''}} >Cambodia</option>

            <option value="Cameroon" {{$alumni->Country==="Cameroon"?"selected":''}} >Cameroon</option>

            <option value="Canada" {{$alumni->Country==="Canada"?"selected":''}} >Canada</option>

            <option value="Cape Verde" {{$alumni->Country==="Cape Verde"?"selected":''}} >Cape Verde</option>

            <option value="Cayman Islands" {{$alumni->Country==="Cayman Islands"?"selected":''}} >Cayman Islands</option>

            <option value="Central African Republic" {{$alumni->Country==="Central African Republic"?"selected":''}} >Central African Republic</option>

            <option value="Chad" {{$alumni->Country==="Chad"?"selected":''}} >Chad</option>

            <option value="Chile" {{$alumni->Country==="Chile"?"selected":''}} >Chile</option>

            <option value="China" {{$alumni->Country==="China"?"selected":''}} >China</option>

            <option value="Christmas Island" {{$alumni->Country==="Christmas Island"?"selected":''}} >Christmas Island</option>

            <option value="Cocos (Keeling) Islands" {{$alumni->Country==="Cocos (Keeling) Islands"?"selected":''}} >Cocos (Keeling) Islands</option>

            <option value="Colombia" {{$alumni->Country==="Colombia"?"selected":''}} >Colombia</option>

            <option value="Comoros" {{$alumni->Country==="Comoros"?"selected":''}} >Comoros</option>

            <option value="Congo" {{$alumni->Country==="Congo"?"selected":''}} >Congo</option>

            <option value="Congo, Democratic Republic of the Congo" {{$alumni->Country==="Congo, Democratic Republic of the Congo"?"selected":''}} >
                Congo, Democratic Republic of the Congo
            </option>

            <option value="Cook Islands" {{$alumni->Country==="Cook Islands"?"selected":''}} >Cook Islands</option>

            <option value="Costa Rica" {{$alumni->Country==="Costa Rica"?"selected":''}} >Costa Rica</option>

            <option value="Cote D'Ivoire" {{$alumni->Country==="Cote D'Ivoire"?"selected":''}} >Cote D'Ivoire</option>

            <option value="Croatia" {{$alumni->Country==="Croatia"?"selected":''}} >Croatia</option>

            <option value="Cuba" {{$alumni->Country==="Cuba"?"selected":''}} >Cuba</option>

            <option value="Curacao" {{$alumni->Country==="Curacao"?"selected":''}} >Curacao</option>

            <option value="Cyprus" {{$alumni->Country==="Cyprus"?"selected":''}} >Cyprus</option>

            <option value="Czech Republic" {{$alumni->Country==="Czech Republic"?"selected":''}} >Czech Republic</option>

            <option value="Denmark" {{$alumni->Country==="Denmark"?"selected":''}} >Denmark</option>

            <option value="Djibouti" {{$alumni->Country==="Djibouti"?"selected":''}} >Djibouti</option>

            <option value="Dominica" {{$alumni->Country==="Dominica"?"selected":''}} >Dominica</option>

            <option value="Dominican Republic" {{$alumni->Country==="Dominican Republic"?"selected":''}} >Dominican Republic</option>

            <option value="Ecuador" {{$alumni->Country==="Ecuador"?"selected":''}} >Ecuador</option>

            <option value="Egypt" {{$alumni->Country==="Egypt"?"selected":''}} >Egypt</option>

            <option value="El Salvador" {{$alumni->Country==="El Salvador"?"selected":''}} >El Salvador</option>

            <option value=">Equatorial Guinea" {{$alumni->Country===">Equatorial Guinea"?"selected":''}} >Equatorial Guinea</option>

            <option value="Eritrea" {{$alumni->Country==="Eritrea"?"selected":''}} >Eritrea</option>

            <option value="Estonia" {{$alumni->Country==="Estonia"?"selected":''}} >Estonia</option>

            <option value="Ethiopia" {{$alumni->Country==="Ethiopia"?"selected":''}} >Ethiopia</option>

            <option value="Falkland Islands (Malvinas)" {{$alumni->Country==="Falkland Islands (Malvinas)"?"selected":''}} >Falkland Islands (Malvinas)</option>

            <option value="Faroe Islands" {{$alumni->Country==="Faroe Islands"?"selected":''}} >Faroe Islands</option>

            <option value="Fiji" {{$alumni->Country==="Fiji"?"selected":''}} >Fiji</option>

            <option value="Finland" {{$alumni->Country==="Finland"?"selected":''}} >Finland</option>

            <option value="France" {{$alumni->Country==="France"?"selected":''}} >France</option>

            <option value="French Guiana" {{$alumni->Country==="French Guiana"?"selected":''}} >French Guiana</option>

            <option value="French Polynesia" {{$alumni->Country==="French Polynesia"?"selected":''}} >French Polynesia</option>

            <option value="French Southern Territories" {{$alumni->Country==="French Southern Territories"?"selected":''}} >French Southern Territories</option>

            <option value="Gabon" {{$alumni->Country==="Gabon"?"selected":''}} >Gabon</option>

            <option value="Gambia" {{$alumni->Country==="Gambia"?"selected":''}} >Gambia</option>

            <option value="Georgia" {{$alumni->Country==="Georgia"?"selected":''}} >Georgia</option>

            <option value="DE" {{$alumni->Country==="DO"?"selected":''}} >Germany</option>

            <option value="GH" {{$alumni->Country==="DO"?"selected":''}} >Ghana</option>

            <option value="GI" {{$alumni->Country==="DO"?"selected":''}} >Gibraltar</option>

            <option value="GR" {{$alumni->Country==="DO"?"selected":''}} >Greece</option>

            <option value="GL" {{$alumni->Country==="DO"?"selected":''}} >Greenland</option>

            <option value="GD" {{$alumni->Country==="DO"?"selected":''}} >Grenada</option>

            <option value="GP" {{$alumni->Country==="DO"?"selected":''}} >Guadeloupe</option>

            <option value="GU" {{$alumni->Country==="DO"?"selected":''}} >Guam</option>

            <option value="GT" {{$alumni->Country==="DO"?"selected":''}} >Guatemala</option>

            <option value="GG" {{$alumni->Country==="DO"?"selected":''}} >Guernsey</option>

            <option value="GN" {{$alumni->Country==="DO"?"selected":''}} >Guinea</option>

            <option value="GW" {{$alumni->Country==="DO"?"selected":''}} >Guinea-Bissau</option>

            <option value="GY" {{$alumni->Country==="DO"?"selected":''}} >Guyana</option>

            <option value="HT" {{$alumni->Country==="DO"?"selected":''}} >Haiti</option>

            <option value="HM" {{$alumni->Country==="DO"?"selected":''}} >
                Heard Island and Mcdonald Islands
            </option>

            <option value="VA" {{$alumni->Country==="DO"?"selected":''}} >Holy See (Vatican City State)</option>

            <option value="HN" {{$alumni->Country==="DO"?"selected":''}} >Honduras</option>

            <option value="HK" {{$alumni->Country==="DO"?"selected":''}} >Hong Kong</option>

            <option value="HU" {{$alumni->Country==="DO"?"selected":''}} >Hungary</option>

            <option value="IS" {{$alumni->Country==="DO"?"selected":''}} >Iceland</option>

            <option value="IN" {{$alumni->Country==="DO"?"selected":''}} >India</option>

            <option value="ID" {{$alumni->Country==="DO"?"selected":''}} >Indonesia</option>

            <option value="IR" {{$alumni->Country==="DO"?"selected":''}} >Iran, Islamic Republic of</option>

            <option value="IQ" {{$alumni->Country==="DO"?"selected":''}} >Iraq</option>

            <option value="IE" {{$alumni->Country==="DO"?"selected":''}} >Ireland</option>

            <option value="IM" {{$alumni->Country==="DO"?"selected":''}} >Isle of Man</option>

            <option value="IL" {{$alumni->Country==="DO"?"selected":''}} >Israel</option>

            <option value="IT" {{$alumni->Country==="DO"?"selected":''}} >Italy</option>

            <option value="JM" {{$alumni->Country==="DO"?"selected":''}} >Jamaica</option>

            <option value="JP" {{$alumni->Country==="DO"?"selected":''}} >Japan</option>

            <option value="JE" {{$alumni->Country==="DO"?"selected":''}} >Jersey</option>

            <option value="JO" {{$alumni->Country==="DO"?"selected":''}} >Jordan</option>

            <option value="KZ" {{$alumni->Country==="DO"?"selected":''}} >Kazakhstan</option>

            <option value="KE" {{$alumni->Country==="DO"?"selected":''}} >Kenya</option>

            <option value="KI" {{$alumni->Country==="DO"?"selected":''}} >Kiribati</option>

            <option value="KP" {{$alumni->Country==="DO"?"selected":''}} >
                Korea, Democratic People's Republic of
            </option>

            <option value="KR" {{$alumni->Country==="DO"?"selected":''}} >Korea, Republic of</option>

            <option value="XK" {{$alumni->Country==="DO"?"selected":''}} >Kosovo</option>

            <option value="KW" {{$alumni->Country==="DO"?"selected":''}} >Kuwait</option>

            <option value="KG" {{$alumni->Country==="DO"?"selected":''}} >Kyrgyzstan</option>

            <option value="LA" {{$alumni->Country==="DO"?"selected":''}} >Lao People's Democratic Republic</option>

            <option value="LV" {{$alumni->Country==="DO"?"selected":''}} >Latvia</option>

            <option value="LB" {{$alumni->Country==="DO"?"selected":''}} >Lebanon</option>

            <option value="LS" {{$alumni->Country==="DO"?"selected":''}} >Lesotho</option>

            <option value="LR" {{$alumni->Country==="DO"?"selected":''}} >Liberia</option>

            <option value="LY" {{$alumni->Country==="DO"?"selected":''}} >Libyan Arab Jamahiriya</option>

            <option value="LI" {{$alumni->Country==="DO"?"selected":''}} >Liechtenstein</option>

            <option value="LT" {{$alumni->Country==="DO"?"selected":''}} >Lithuania</option>

            <option value="LU" {{$alumni->Country==="DO"?"selected":''}} >Luxembourg</option>

            <option value="MO" {{$alumni->Country==="DO"?"selected":''}} >Macao</option>

            <option value="MK" {{$alumni->Country==="DO"?"selected":''}} >
                Macedonia, the Former Yugoslav Republic of
            </option>

            <option value="MG" {{$alumni->Country==="DO"?"selected":''}} >Madagascar</option>

            <option value="MW" {{$alumni->Country==="DO"?"selected":''}} >Malawi</option>

            <option value="MY" {{$alumni->Country==="DO"?"selected":''}} >Malaysia</option>

            <option value="MV" {{$alumni->Country==="DO"?"selected":''}} >Maldives</option>

            <option value="ML" {{$alumni->Country==="DO"?"selected":''}} >Mali</option>

            <option value="MT" {{$alumni->Country==="DO"?"selected":''}} >Malta</option>

            <option value="MH" {{$alumni->Country==="DO"?"selected":''}} >Marshall Islands</option>

            <option value="MQ" {{$alumni->Country==="DO"?"selected":''}} >Martinique</option>

            <option value="MR" {{$alumni->Country==="DO"?"selected":''}} >Mauritania</option>

            <option value="MU" {{$alumni->Country==="DO"?"selected":''}} >Mauritius</option>

            <option value="YT" {{$alumni->Country==="DO"?"selected":''}} >Mayotte</option>

            <option value="MX" {{$alumni->Country==="DO"?"selected":''}} >Mexico</option>

            <option value="FM" {{$alumni->Country==="DO"?"selected":''}} >Micronesia, Federated States of</option>

            <option value="MD" {{$alumni->Country==="DO"?"selected":''}} >Moldova, Republic of</option>

            <option value="MC" {{$alumni->Country==="DO"?"selected":''}} >Monaco</option>

            <option value="MN" {{$alumni->Country==="DO"?"selected":''}} >Mongolia</option>

            <option value="ME" {{$alumni->Country==="DO"?"selected":''}} >Montenegro</option>

            <option value="MS" {{$alumni->Country==="DO"?"selected":''}} >Montserrat</option>

            <option value="MA" {{$alumni->Country==="DO"?"selected":''}} >Morocco</option>

            <option value="MZ" {{$alumni->Country==="DO"?"selected":''}} >Mozambique</option>

            <option value="MM" {{$alumni->Country==="DO"?"selected":''}} >Myanmar</option>

            <option value="NA" {{$alumni->Country==="DO"?"selected":''}} >Namibia</option>

            <option value="NR" {{$alumni->Country==="DO"?"selected":''}} >Nauru</option>

            <option value="NP" {{$alumni->Country==="DO"?"selected":''}} >Nepal</option>

            <option value="NL" {{$alumni->Country==="DO"?"selected":''}} >Netherlands</option>

            <option value="AN" {{$alumni->Country==="DO"?"selected":''}} >Netherlands Antilles</option>

            <option value="NC" {{$alumni->Country==="DO"?"selected":''}} >New Caledonia</option>

            <option value="NZ" {{$alumni->Country==="DO"?"selected":''}} >New Zealand</option>

            <option value="NI" {{$alumni->Country==="DO"?"selected":''}} >Nicaragua</option>

            <option value="NE" {{$alumni->Country==="DO"?"selected":''}} >Niger</option>

            <option value="NG" {{$alumni->Country==="DO"?"selected":''}} >Nigeria</option>

            <option value="NU" {{$alumni->Country==="DO"?"selected":''}} >Niue</option>

            <option value="NF" {{$alumni->Country==="DO"?"selected":''}} >Norfolk Island</option>

            <option value="MP" {{$alumni->Country==="DO"?"selected":''}} >Northern Mariana Islands</option>

            <option value="NO" {{$alumni->Country==="DO"?"selected":''}} >Norway</option>

            <option value="OM" {{$alumni->Country==="DO"?"selected":''}} >Oman</option>

            <option value="PK" {{$alumni->Country==="DO"?"selected":''}} >Pakistan</option>

            <option value="PW" {{$alumni->Country==="DO"?"selected":''}} >Palau</option>

            <option value="PS" {{$alumni->Country==="DO"?"selected":''}} >Palestinian Territory, Occupied</option>

            <option value="PA" {{$alumni->Country==="DO"?"selected":''}} >Panama</option>

            <option value="PG" {{$alumni->Country==="DO"?"selected":''}} >Papua New Guinea</option>

            <option value="PY" {{$alumni->Country==="DO"?"selected":''}} >Paraguay</option>

            <option value="PE" {{$alumni->Country==="DO"?"selected":''}} >Peru</option>

            <option value="PH" {{$alumni->Country==="DO"?"selected":''}} >Philippines</option>

            <option value="PN" {{$alumni->Country==="DO"?"selected":''}} >Pitcairn</option>

            <option value="PL" {{$alumni->Country==="DO"?"selected":''}} >Poland</option>

            <option value="PT" {{$alumni->Country==="DO"?"selected":''}} >Portugal</option>

            <option value="PR" {{$alumni->Country==="DO"?"selected":''}} >Puerto Rico</option>

            <option value="QA" {{$alumni->Country==="DO"?"selected":''}} >Qatar</option>

            <option value="RE" {{$alumni->Country==="DO"?"selected":''}} >Reunion</option>

            <option value="RO" {{$alumni->Country==="DO"?"selected":''}} >Romania</option>

            <option value="RU" {{$alumni->Country==="DO"?"selected":''}} >Russian Federation</option>

            <option value="RW" {{$alumni->Country==="DO"?"selected":''}} >Rwanda</option>

            <option value="BL" {{$alumni->Country==="DO"?"selected":''}} >Saint Barthelemy</option>

            <option value="SH" {{$alumni->Country==="DO"?"selected":''}} >Saint Helena</option>

            <option value="KN" {{$alumni->Country==="DO"?"selected":''}} >Saint Kitts and Nevis</option>

            <option value="LC" {{$alumni->Country==="DO"?"selected":''}} >Saint Lucia</option>

            <option value="MF" {{$alumni->Country==="DO"?"selected":''}} >Saint Martin</option>

            <option value="PM" {{$alumni->Country==="DO"?"selected":''}} >Saint Pierre and Miquelon</option>

            <option value="VC" {{$alumni->Country==="DO"?"selected":''}} >Saint Vincent and the Grenadines</option>

            <option value="WS" {{$alumni->Country==="DO"?"selected":''}} >Samoa</option>

            <option value="SM" {{$alumni->Country==="DO"?"selected":''}} >San Marino</option>

            <option value="ST" {{$alumni->Country==="DO"?"selected":''}} >Sao Tome and Principe</option>

            <option value="SA" {{$alumni->Country==="DO"?"selected":''}} >Saudi Arabia</option>

            <option value="SN" {{$alumni->Country==="DO"?"selected":''}} >Senegal</option>

            <option value="RS" {{$alumni->Country==="DO"?"selected":''}} >Serbia</option>

            <option value="CS" {{$alumni->Country==="DO"?"selected":''}} >Serbia and Montenegro</option>

            <option value="SC" {{$alumni->Country==="DO"?"selected":''}} >Seychelles</option>

            <option value="SL" {{$alumni->Country==="DO"?"selected":''}} >Sierra Leone</option>

            <option value="SG" {{$alumni->Country==="DO"?"selected":''}} >Singapore</option>

            <option value="SX" {{$alumni->Country==="DO"?"selected":''}} >Sint Maarten</option>

            <option value="SK" {{$alumni->Country==="DO"?"selected":''}} >Slovakia</option>

            <option value="SI" {{$alumni->Country==="DO"?"selected":''}} >Slovenia</option>

            <option value="SB" {{$alumni->Country==="DO"?"selected":''}} >Solomon Islands</option>

            <option value="SO" {{$alumni->Country==="DO"?"selected":''}} >Somalia</option>

            <option value="ZA" {{$alumni->Country==="DO"?"selected":''}} >South Africa</option>

            <option value="GS" {{$alumni->Country==="DO"?"selected":''}} >
                South Georgia and the South Sandwich Islands
            </option>

            <option value="SS" {{$alumni->Country==="DO"?"selected":''}} >South Sudan</option>

            <option value="ES" {{$alumni->Country==="DO"?"selected":''}} >Spain</option>

            <option value="LK" {{$alumni->Country==="DO"?"selected":''}} >Sri Lanka</option>

            <option value="SD" {{$alumni->Country==="DO"?"selected":''}} >Sudan</option>

            <option value="SR" {{$alumni->Country==="DO"?"selected":''}} >Suriname</option>

            <option value="SJ" {{$alumni->Country==="DO"?"selected":''}} >Svalbard and Jan Mayen</option>

            <option value="SZ" {{$alumni->Country==="DO"?"selected":''}} >Swaziland</option>

            <option value="SE" {{$alumni->Country==="DO"?"selected":''}} >Sweden</option>

            <option value="CH" {{$alumni->Country==="DO"?"selected":''}} >Switzerland</option>

            <option value="SY" {{$alumni->Country==="DO"?"selected":''}} >Syrian Arab Republic</option>

            <option value="TW" {{$alumni->Country==="DO"?"selected":''}} >Taiwan, Province of China</option>

            <option value="TJ" {{$alumni->Country==="DO"?"selected":''}} >Tajikistan</option>

            <option value="TZ" {{$alumni->Country==="DO"?"selected":''}} >Tanzania, United Republic of</option>

            <option value="TH" {{$alumni->Country==="DO"?"selected":''}} >Thailand</option>

            <option value="TL" {{$alumni->Country==="DO"?"selected":''}} >Timor-Leste</option>

            <option value="TG" {{$alumni->Country==="DO"?"selected":''}} >Togo</option>

            <option value="TK" {{$alumni->Country==="DO"?"selected":''}} >Tokelau</option>

            <option value="TO" {{$alumni->Country==="DO"?"selected":''}} >Tonga</option>

            <option value="TT" {{$alumni->Country==="DO"?"selected":''}} >Trinidad and Tobago</option>

            <option value="TN" {{$alumni->Country==="DO"?"selected":''}} >Tunisia</option>

            <option value="TR" {{$alumni->Country==="DO"?"selected":''}} >Turkey</option>

            <option value="TM" {{$alumni->Country==="DO"?"selected":''}} >Turkmenistan</option>

            <option value="TC" {{$alumni->Country==="DO"?"selected":''}} >Turks and Caicos Islands</option>

            <option value="TV" {{$alumni->Country==="DO"?"selected":''}} >Tuvalu</option>

            <option value="UG" {{$alumni->Country==="DO"?"selected":''}} >Uganda</option>

            <option value="UA" {{$alumni->Country==="DO"?"selected":''}} >Ukraine</option>

            <option value="AE" {{$alumni->Country==="DO"?"selected":''}} >United Arab Emirates</option>

            <option value="GB" {{$alumni->Country==="DO"?"selected":''}} >United Kingdom</option>

            <option value="US" {{$alumni->Country==="DO"?"selected":''}} >United States</option>

            <option value="UM" {{$alumni->Country==="DO"?"selected":''}} >
                United States Minor Outlying Islands
            </option>

            <option value="UY" {{$alumni->Country==="DO"?"selected":''}} >Uruguay</option>

            <option value="UZ" {{$alumni->Country==="DO"?"selected":''}} >Uzbekistan</option>

            <option value="VU" {{$alumni->Country==="DO"?"selected":''}} >Vanuatu</option>

            <option value="VE" {{$alumni->Country==="DO"?"selected":''}} >Venezuela</option>

            <option value="VN" {{$alumni->Country==="DO"?"selected":''}} >Viet Nam</option>

            <option value="VG" {{$alumni->Country==="DO"?"selected":''}} >Virgin Islands, British</option>

            <option value="VI" {{$alumni->Country==="DO"?"selected":''}} >Virgin Islands, U.s.</option>

            <option value="WF" {{$alumni->Country==="DO"?"selected":''}} >Wallis and Futuna</option>

            <option value="EH" {{$alumni->Country==="DO"?"selected":''}} >Western Sahara</option>

            <option value="YE" {{$alumni->Country==="DO"?"selected":''}} >Yemen</option>

            <option value="ZM" {{$alumni->Country==="DO"?"selected":''}} >Zambia</option>

            <option value="ZW" {{$alumni->Country==="DO"?"selected":''}} >Zimbabwe</option>
        </select>
           {{-- To display an error msg when input is empty --}}
           <span class="text-danger">
            @error('country')
            The  Country field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>
            City: <input type="text" placeholder="Matara" name="city" value="{{$alumni->City}}"/>
        </div>
         {{-- To display an error msg when input is empty --}}
         <span class="text-danger">
            @error('city')
            The  City field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>Date of Birth: <input type="date" name="dateOfBirth" value="{{$alumni->Date_of_birth}}"/></div>
          {{-- To display an error msg when input is empty --}}
          <span class="text-danger">
            @error('dateOfBirth')
            The  Date Of Birth field is required.
            @enderror
        </span>
        {{-- end error --}}
        <div>
            Gender:
            <input type="radio" name="gender" value="Male"  {{$user->gender=="Male"?"checked":""}}/> Male

            <input type="radio" name="gender" value="Female" {{$user->gender=="Female"?"checked":""}}/> Female
        </div>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('gender')
            The  Gender field is required.
            @enderror
        </span>
        {{-- end error --}}
    </div>

    <div class="university-Background">
        <h2>University Background</h2>

        <div>Degree:</div>

        <select class="degree" id="degree" name="degree">

            <option></option>

            <option value="BCS(Special)" {{$alumni->Degree==="BCS(Special)"?"selected":''}}>BCS(Special)</option>

            <option value="BCS(General)" {{$alumni->Degree==="BCS(General)"?"selected":''}}>BCS(General)</option>

            <option value="BSc(Special)" {{$alumni->Degree==="BSc(Special)"?"selected":''}}>BSc(Special)</option>

            <option value="BSc(General)" {{$alumni->Degree==="BSc(General)"?"selected":''}}>BSc(General)</option>
        </select>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('degree')
            The  Degree field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>BCS batch:</div>

        <select class="BCS-batch" id="BCS-batch" name="BCS-batch">
            <option>  </option>

            <option value="SC/2010" {{$alumni->BCS_batch==="SC/2010"?"selected":''}}>SC/2010</option>

            <option value="SC/2011" {{$alumni->BCS_batch==="SC/2011"?"selected":''}}>SC/2011</option>

            <option value="SC/2012" {{$alumni->BCS_batch==="SC/2012"?"selected":''}}>SC/2012</option>

            <option value="SC/2013" {{$alumni->BCS_batch==="SC/2013"?"selected":''}}>SC/2013</option>

            <option value="SC/2014" {{$alumni->BCS_batch==="SC/2014"?"selected":''}}>SC/2014</option>

            <option value="SC/2015" {{$alumni->BCS_batch==="SC/2015"?"selected":''}}>SC/2015</option>

            <option value="SC/2016" {{$alumni->BCS_batch==="SC/2016"?"selected":''}}>SC/2016</option>

            <option value="SC/2017" {{$alumni->BCS_batch==="SC/2017"?"selected":''}}>SC/2017</option>

            <option value="SC/2018" {{$alumni->BCS_batch==="SC/2018"?"selected":''}}>SC/2018</option>

            <option value="SC/2019" {{$alumni->BCS_batch==="SC/2019"?"selected":''}}>SC/2019</option>

            <option value="SC/2020" {{$alumni->BCS_batch==="SC/2020"?"selected":''}}>SC/2020</option>

            <option value="SC/2021" {{$alumni->BCS_batch==="SC/2021"?"selected":''}}>SC/2021</option>

            <option value="SC/2022" {{$alumni->BCS_batch==="SC/2022"?"selected":''}}>SC/2022</option>

            <option value="SC/2023" {{$alumni->BCS_batch==="SC/2023"?"selected":''}}>SC/2023</option>

            <option value="SC/2024" {{$alumni->BCS_batch==="SC/2024"?"selected":''}}>SC/2024</option>
        </select>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('BCS-batch')
            The  BCS Batch field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>
            Student ID Number:

            <input type="text" placeholder="SC/2017/10772" name="studentIdNumber"  value="{{$user->StudentLectureId}}"/>
        </div>
          {{-- To display an error msg when input is empty --}}
          <span class="text-danger">
            @error('studentIdNumber')
            The  Student ID Number field is required.
            @enderror
        </span>
        {{-- end error --}}

        <div>
            Graduation Year:
            <input type="text" placeholder="2012" name="graduationYear" value="{{$alumni->Graduation_year}}"/>
        </div> 
         {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
          @error('graduationYear')
          The  Graduation Year field is required.
          @enderror
      </span>
      {{-- end error --}}

        <div>GPA: <input type="text" placeholder="3.8" name="gpa"  value="{{$alumni->GPA}}"/></div>
  {{-- To display an error msg when input is empty --}}
  <span class="text-danger">
    @error('gpa')
    The  GPA is required and Maximum GPA value is 4.0.
    @enderror
</span>
{{-- end error --}}

    </div>

    <h2>Professional Information</h2>

    <div>Job field:</div>

    <select class="job-field" id="job-field" name="job-field">
        <option>--Select Field--</option>

        <option value="Software_Developer" {{$alumni->job_field==="Software_Developer"?"selected":''}}>Software Developer</option>

        <option value="Database Administrator">
            Database Administrator
        </option>

        <option value="Information Security Analysts">
            Information Security Analysts
        </option>

        <option value="Computer security">Computer security</option>

        <option value="Data analysis">Data analysis</option>

        <option value="Acadamic">Acadamic</option>

        <option value="Systems architect">Systems architect</option>

        <option value="Web Developer">Web Developer</option>

        <option value="Computer Systems Analyst">
            Computer Systems Analyst
        </option>

        <option value="Analyst">Analyst</option>

        <option value="User experience design">
            User experience design
        </option>

        <option value="Computer hardware engineer">
            Computer hardware engineer
        </option>

        <option value="Computer scientist">Computer scientist</option>

        <option value="Systems analyst">Systems analyst</option>

        <option value="Video game developer">
            Video game developer
        </option>

        <option value="Data science">Data science</option>

        <option value="Computers and information technology">
            Computers and information technology
        </option>

        <option value="Software engineering">
            Software engineering
        </option>

        <option value="Web design">Web design</option>

        <option value="Artificial intelligence">
            Artificial intelligence
        </option>

        <option value="Computer Support Specialists">
            Computer Support Specialists
        </option>

        <option value="Network Engineer">Network Engineer</option>

        <option value="Project manager">Project manager</option>

        <option value="Other">Other</option>

        <!-- Add more options as needed -->
    </select>
    {{-- To display an error msg when input is empty --}}
  <span class="text-danger">
    @error('job-field')
    The  Job field is required.
    @enderror
</span>
{{-- end error --}}

    <div>
        Current Position:<input type="text"  name="Current_position" placeholder="Senior Software Engineer" value="{{$alumni->Current_position}}" />
    </div>
     {{-- To display an error msg when input is empty --}}
  <span class="text-danger">
    @error('Current_position')
    The   Current Position is required.
    @enderror
</span>
{{-- end error --}}

    <div>Company:
        <input type="text" name="company" placeholder="ABC Company" value="{{$alumni->Company}}"/>
    </div>
        {{-- To display an error msg when input is empty --}}
  <span class="text-danger">
    @error('company')
    The   Company is required.
    @enderror
</span>
{{-- end error --}}
    <!-- Add more professional info fields as needed -->

    <h2>Work History</h2>

    <label for="internship">Internship:</label>

    <input type="text" placeholder="Software Engineering Intern at XYZ Company" id="internship"
           name="internship"  value="{{$alumni->Internship}}"/><br />
    {{-- To display an error msg when input is empty --}}
    <span class="text-danger">
    @error('internship')
    The   Internship is required.
    @enderror
    </span>
    {{-- end error --}}
    <label>Mention Last Two Jobs</label>
    <br>
    <label for="job1">Job 1:</label>

    <input type="text" placeholder="Software Engineer at PQR Company" id="job1" name="job1" value="{{$alumni->Job1}}"/><br />
    

    <label for="job2">Job 2:</label>

    <input type="text" placeholder="Software Engineer at PQR Company" id="job2" name="job2"  value="{{$alumni->Job2}}"/><br />
    
    <!-- Add more work history fields as needed -->

    <h2>Achievements</h2>

    <label for="achievement1">Achievement 1:</label>

    <input type="text" placeholder="Awarded- Employee of the Year in 2020." id="achievement1"
           name="achievement1" value="{{$alumni->Achievement1}}"/><br />
   


    <label for="achievement2">Achievement 2:</label>

    <input type="text" placeholder="Published a paper on Advanced Software Development in 2018" id="achievement2"
           name="achievement2" value="{{$alumni->Achievement2}}"/><br />
    


    <!-- Add more achievement fields as needed -->

    <input class="common-button" type="submit" value="Save Changes" />
    <a href="/dashboards" class="common-button">
            
        Back
    
 </a>
</form>
</div>
@include("partials.footer",["title"=>"Home"])
@include("partials.scripts")
</body>

</html>
