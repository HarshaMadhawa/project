<!DOCTYPE html>
<html lang="en">

<head>
    @include("partials.html-header",["title"=>"Lecturer"])
    <link rel="stylesheet" href="cssFile/alumniPPstyle.css">
</head>

<body>
    @include("partials.header",['isLogin' => false])

<!-- navigation bar add -->

@include("partials.nav-bar",['isLogin' => true])

<!--auto insert Staff profile pic and Summery-->

<div class="d-flex">
    <div class="prfimage">
             <div>
                 <div>
                    @if($lecture->Profile_picture)
                        <img src="{{ asset('storage/Profile_pictures/'.$lecture->Profile_picture)}}" alt="profileImage" class="profileImage">
                    @else
                        <img src="{{URL('image/img_avatar2.png')}}" alt="profileImage" class="profileImage">
                    @endif
                </div>
            </div>

        <div class="sDtails">
            <!-- </div> -->

            <div style="display: flex; justify-content: center">
                Name : {{$user->FullName}}
            </div>
            <div style="display: flex; justify-content: center">
                Possition : {{$lecture->possition}}
            </div>
            <div style="display: flex; justify-content: center">
                Work Place Address : {{$lecture->Work_Place_Address}}
            </div>
            <div style="display: flex; justify-content: center">
                Email Address : {{$user->email}}
            </div>
        
            <div>
                <a href="/LecturerEditProfile">
                    <button class="btn btn-primary">
                        Edit Profile
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!--auto insert Staff details-->

    <div
        class="right"
        style="
            background-color: rgb(229, 190, 225);
            border: solid 1px white;
        "
    >
        <div
            style="
                background-color: rgb(229, 190, 225);
                padding: 5px;
                border: solid 1px white;
            "
        >
            <div style="text-align: left">
                Address : {{$lecture->Address}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Gender : {{$user->gender}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                NIC Number : {{$user->NIC}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Date Of Birth : {{$lecture->Date_of_Birth}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Staff Id Number : {{$user->StudentLectureId}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Contact Number : {{$user->Contact}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Role : {{$user->role}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Current Living District : {{$lecture->Current_Living_Distric}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                Specialised Subjects : {{$lecture->Specialised_Subjects}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                {{-- Current Position : {{$alumni->Current_position}} --}}
            </div>
            <div style="margin-top: 10px; text-align: left">
                {{-- Company : {{$alumni->Company}} --}}
            </div>
        </div>
        <div class="d-flex">
            <div class="bleft">
                <div>
                    <p
                        style="
                            padding-top: 10px;
                            text-align: left;
                            font-weight: bold;
                        "
                    >
                        Work Experiance :
                    </p>
                    <div style="margin-top: 5px; text-align: left">
                        <div style="padding-top: 10px">
                            Internship : {{$lecture->Internship}}
                        </div>
                    </div>
                    <div style="margin-top: 5px; text-align: left">
                        <div style="padding-top: 10px">
                            Job 1 : {{$lecture->Job1}}
                        </div>
                    </div>
                    <div style="margin-top: 5px; text-align: left">
                        <div style="padding-top: 10px">
                            Job 2 : {{$lecture->Job2}}
                        </div>
                    </div>
                    <div style="margin-top: 5px; text-align: left">
                        <div style="padding-top: 10px">
                            Achievement 1 : {{$lecture->Achievement1}}
                        </div>
                    </div>
                    <div style="margin-top: 5px; text-align: left">
                        <div style="padding-top: 10px">
                            Achievement 2 : {{$lecture->Achievement2}}
                        </div>
                    </div>
                </div>
            </div>

            <!--Bottom Right-->

            <div class="bright">
                <div
                    style="
                        text-align: left;
                        padding-top: 10px;
                        font-weight: bold;
                    "
                >
                    Education qualifications:
                </div>
                <div style="margin-top: 10px; text-align: left">
                    {{$lecture->possition}}                 
                </div>
                <div style="margin-top: 10px; text-align: left">
                    {{$lecture->Degree1}}                 
                </div>
                <div style="margin-top: 10px; text-align: left">
                    {{$lecture->Degree2}}                 
                </div>
                <div style="margin-top: 10px; text-align: left">
                    {{$lecture->Degree3}}                 
                </div>
            </div>
        </div>
    </div>
</div>

        




   
@include("partials.footer",["title"=>"Home"])

      @include("partials.scripts")
</body>
</html>