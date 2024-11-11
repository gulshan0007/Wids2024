window.addEventListener("load", event => {

    var swiperWrapper = document.querySelector('.swiper-wrapper');

    /* The Team */
    var team = [{
        name: "Aaditi Thete",
        role: "DRC - ESED",
        desc: "",
        photo: "team2021/aaditi_esed.jpeg",
        website: "",
        email: "mailto:theteaaditi@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Bhavya Jain",
        role: "DRC - Humanities and Social Science",
        desc: "",
        photo: "team2021/IMG-20210509-WA0108.jpg",
        website: "",
        email: "mailto:jainbhavya52@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Dhruv Patwa",
        role: "DRC - Mechanical Engineering",
        desc: "",
        photo: "team2021/dhruv.jpg",
        website: "",
        email: "mailto:patwadhruv@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Ishaan Najeeb",
        role: "DRC - Industrial Design Centre",
        desc: "",
        photo: "team2021/Ishaan.png",
        website: "",
        email: "mailto:nejeeb.ishaan@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Tirthankar Adhikari",
        role: "DRC - Mathematics",
        desc: "",
        photo: "team2021/Tirthankar_Mathematics_DRC.jpg",
        website: "",
        email: "mailto:tirthankar196@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Prathami Kamath ",
        role: "DRC - MEMS",
        desc: "",
        photo: "team2021/Prathami_Kamath_ DRC MEMS.jpeg",
        website: "",
        email: "mailto:prathamikamath@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Liza Dahiya",
        role: "DRC - Computer Science ",
        desc: "",
        photo: "team2021/Liza Dahiya_CSE.jpeg",
        website: "",
        email: "mailto:lizadahiya23@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Pawan Kumar Jahajpuriya",
        role: "DRC - Energy Science and Engineering",
        desc: "",
        photo: "team2021/Pawan Kumar Jahajpuriya_ Energy DRC.jpg",
        website: "",
        email: "mailto:pkj297@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Joshitha",
        role: "DRC - Civil Engineering",
        desc: "",
        photo: "team2021/Joshitha_Civil DRC.jpg",
        website: "",
        email: "mailto:joshitharam810@gmail.com",
        linkedin: "h",
        dribbble: "",
    },
    {
        name: "Sanaa Sharma",
        role: "DRC - Chemistry",
        desc: "",
        photo: "team2021/Sanaa_Chemistry.jpg",
        website: "",
        email: "mailto:sanaasharma951@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Drishti Baruah",
        role: "DRC - Physics",
        desc: "",
        photo: "team2021/Drishti Baruah_ Physics DRC.jpg",
        website: "",
        email: "mailto:drishtibaruah1@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Shruti Satish",
        role: "DRC - Chemical Engineering",
        desc: "",
        photo: "team2021/ShrutiSatish_Chemical_DRC.jpg",
        website: "",
        email: "mailto:shrutisatish00@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Pranjal Gupta",
        role: "DRC - Aerospace Engineering",
        desc: "",
        photo: "team2021/pranjal_Aerospace DRC.png",
        website: "",
        email: "mailto:pranjalgupta2507@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Arif Ahmad",
        role: "DRC - Electrical Engineering",
        desc: "",
        photo: "team2021/Arif_Ahmad_EE_DRC.jpg",
        website: "",
        email: "mailto:arifahmadpeace@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Sachin Kumar",
        role: "Web Nominee",
        desc: "",
        photo: "team2021/sk.jpg",
        website: "",
        email: "mailto:sksachin28sep@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Ramyasri Palti",
        role: "Web Nominee",
        desc: "",
        photo: "team2021/temp.jpg",
        website: "",
        email: "mailto:ramyapalti123@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    {
        name: "Unnatee Pawar",
        role: "Design Nominee",
        desc: "",
        photo: "team2021/Unnatee.jpeg",
        website: "",
        email: "mailto:udpawar19nsk@gmail.com",
        linkedin: "",
        dribbble: "",
    },
    ];

    /* Social Icons */
    var icons = [{
        iWebsite: "https://rafaelalucas.com/dailyui/6/assets/link.svg",
        iEmail: "https://rafaelalucas.com/dailyui/6/assets/email.svg",
        iLinkedin: "https://rafaelalucas.com/dailyui/6/assets/linkedin.svg",
        iDribbble: "https://rafaelalucas.com/dailyui/6/assets/dribbble.svg",
    }];

    var iWebsite = icons[0].iWebsite,
        iEmail = icons[0].iEmail,
        iLinkedin = icons[0].iLinkedin,
        iDribbble = icons[0].iDribbble;


    /* Function to populate the team members */
    function addTeam() {
        for (let i = 0; i < team.length; i++) {

            /* Variables for the team */
            var name = team[i].name,
                role = team[i].role,
                desc = team[i].desc,
                photo = team[i].photo,
                website = team[i].website,
                email = team[i].email,
                linkedin = team[i].linkedin,
                dribbble = team[i].dribbble;

            /* Template for the Team Cards */
            var template = `
                <div class="swiper-slide">
                <div class="card">
                    <span class="bg"></span>
                    
                    <figure class="photo"><img src="${photo}"></figure>
                        <article class="text">
                        <br>
                            <p class="name">${name}</p>
                            <p class="role">${role}</p> 
                           <br>
                            <a class="icon" href="${email}" target="_blank" data-index="1"><img src="${iEmail}"></a>
                        </article>                       
                    </div>
                </div>`;

            swiperWrapper.insertAdjacentHTML('beforeend', template);
        }
    };


    addTeam();



    /* Swiper Settings */

    var mySwiper = new Swiper(".swiper-container", {
        // Optional parameters
        direction: "horizontal",
        loop: true,
        centeredSlides: false,
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 40,
        threshold: 5,


        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            1180: {
                slidesPerView: 2,
                spaceBetween: 40,
                centeredSlides: false,
            },
            799: {
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: true,
                loop: true,
            },
        }
    });

    /* Show More */

    var btnShow = document.querySelectorAll('.more');



    btnShow.forEach(function (el) {
        el.addEventListener('click', showMore);
    });

    function showMore(event) {
        var card = event.target.closest(".swiper-slide");

        if (card.classList.contains('show-more')) {
            card.classList.remove('show-more');
        } else {
            card.classList.add('show-more')
        }

    }


    /* Social Hover */
    var icon = document.querySelectorAll('.icon');

    icon.forEach(function (el) {
        el.addEventListener("mouseenter", followCursor);

    });


    function followCursor(event) {
        var pointer = event.currentTarget.closest(".swiper-slide").querySelector('.pointer'),
            index = event.currentTarget.dataset.index,
            sizeIcon = (60 * index) + 25;

        pointer.style.transform = `translateX(${sizeIcon}px)`;
    }


    /* end */
});