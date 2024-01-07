<!DOCTYPE html>
<html lang="en">
    <head>
        @include("partials.html-header",["title"=>"Alumni"])
        <link rel="stylesheet" href="cssFile/alumniPPstyle.css" />
    </head>

    <body>
        @include("partials.header",['isLogin' => false])

        <!-- navigation bar add -->

        @include("partials.nav-bar",['isLogin' => true])
        <!--auto insert Alumni profile pic and Summery-->

        <div class="d-flex">
            <div class="prfimage">
                <div>
                <div>
                 <div>
                    @if($alumni->Profile_picture)
                        <img src="{{ asset('storage/Profile_pictures/'.$alumni->Profile_picture)}}" alt="profileImage" class="profileImage">
                    @else
                        <img src="{{URL('image/img_avatar2.png')}}" alt="profileImage" class="profileImage">
                    @endif
                </div>
            </div>

                </div>

                <div class="sDtails">
                    <!-- </div> -->

                    <div style="display: flex; justify-content: center">
                        Name : {{$user->FullName}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        Gender : {{$user->gender}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        NIC Number : {{$user->NIC}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        Student id Number : {{$user->StudentLectureId}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        Contact Number : {{$user->Contact}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        Email Address : {{$user->email}}
                    </div>
                    <div style="display: flex; justify-content: center">
                        Role : {{$user->role}}
                    </div>

                    <div>
                        <a href="/alumniEditProfile">
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
                        Address : {{$alumni->Address}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        City : {{$alumni->City}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Country : {{$alumni->Country}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Date of Birth : {{$alumni->Date_of_birth}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Degree : {{$alumni->Degree}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        BCS Batch : {{$alumni->BCS_batch}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Graduation Year : {{$alumni->Graduation_year}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        GPA : {{$alumni->GPA}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Job Field : {{$alumni->job_field}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Current Position : {{$alumni->Current_position}}
                    </div>
                    <div style="margin-top: 10px; text-align: left">
                        Company : {{$alumni->Company}}
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
                                    Internship : {{$alumni->Internship}}
                                </div>
                            </div>
                            <div style="margin-top: 5px; text-align: left">
                                <div style="padding-top: 10px">
                                    Job 1 : {{$alumni->Job1}}
                                </div>
                            </div>
                            <div style="margin-top: 5px; text-align: left">
                                <div style="padding-top: 10px">
                                    Job 2 : {{$alumni->Job2}}
                                </div>
                            </div>
                            <div style="margin-top: 5px; text-align: left">
                                <div style="padding-top: 10px">
                                    Achievement 1 : {{$alumni->Achievement1}}
                                </div>
                            </div>
                            <div style="margin-top: 5px; text-align: left">
                                <div style="padding-top: 10px">
                                    Achievement 2 : {{$alumni->Achievement2}}
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
                            Degree : {{$alumni->Degree}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Bottom Left-->
        @include("partials.footer",["title"=>"Home"])
    </body>
</html>
