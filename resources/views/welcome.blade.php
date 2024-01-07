<!DOCTYPE html>
<html lang="en">

<head>
    @include("partials.html-header",["title"=>"Home"])
    <link rel="stylesheet" href="cssFile/newWelcom.css" />
</head>

<body>
    <!--header -->
    @include("partials.header",['isLogin' => false])
    @include("partials.nav-bar",['isLogin' => false])

    <!-- body -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active img1">
                <img src="image/s5.jpg" class="d-block w-100" alt="s5.jpg" />
            </div>

            <div class="carousel-item img1">
                <img src="image/s1.jpg" class="d-block w-100" alt="s1.jpg" />
            </div>
            <div class="carousel-item img1">
                <img src="image/img3.jpg" class="d-block w-100" alt="img3.jpg" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="content">
        <div class="text-center pt-5">
            <h2 style="color: rgb(207, 95, 238);">Legacy and Innovation</h2>
            <h5>The University of Ruhuna's Computer Science Alumni Network</h3>
        </div>
        <p class="decription">
            <span style="font-size: 32px; color: rgb(207, 95, 238);">E</span>mbarking on a journey through the dynamic
            realm of computer
            science, the University of Ruhuna's Department of Computer Science
            Alumni Network warmly welcomes all alumni who have traversed the
            path of innovation and technological advancement. Our story unfolds
            in the corridors of learning, where a passion for technology unites
            us and propels us forward into the exciting future that awaits.
        </p>
        <p class="decription">
            Our alumni network stands as a testament to the achievements we have
            collectively attained, serving as a beacon of inspiration for
            current students and budding computer scientists. We take pride in
            the diverse paths our alumni have taken, carving out successful
            careers, pioneering research, and contributing to society in
            profound ways.
        </p>
        <p class="decription">
            In this network, we foster connections that transcend the boundaries
            of time and distance. We cherish the memories and experiences that
            shaped us during our time at the University of Ruhuna and beyond.
            Through networking events, workshops, seminars, and collaborative
            projects, we strive to strengthen these connections, nurturing a
            sense of camaraderie and a strong community spirit.
        </p>
        <p class="decription">
            But our mission extends beyond reminiscing about the past. We are
            committed to supporting the next generation of computer scientists,
            offering mentorship, guidance, and opportunities for growth. We aim
            to provide a platform for knowledge sharing and professional
            development, ensuring that our legacy thrives and continues to
            evolve with each passing generation.
        </p>
        <p class="decription">
            Join us as we celebrate the incredible achievements of our fellow
            alumni, preserve the rich legacy we have built, and embrace the
            boundless potential that our alumni community possesses. Together,
            we can shape a future where technology continues to transform the
            world and where the University of Ruhuna remains at the forefront of
            computer science education and innovation.
        </p>
        <div class="text-center">
            <button type="button" onclick="myFunction()" class="btn btn-primary button1 ">
                More details
            </button>
        </div>

        <div style="display: flex;justify-content: center;">
            <div style="width: 600px;border-radius: 20px;overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.4099440831033!2d80.5735594742124!3d5.938097429690831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1702380309232!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>


    @include("partials.footer",["title"=>"Home"])

    @include("partials.scripts")
    <script>
        function myFunction() {
            window.open("https://www.sci.ruh.ac.lk/computer/", "_blank");
        }
    </script>
</body>

</html>