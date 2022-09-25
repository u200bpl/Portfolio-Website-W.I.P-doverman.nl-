@include('layout.header')

<section id="home">
    <div class="hero-fixed">
        <div class="hero">
            <div class="wrapper">
                <div class="hero-info">
                    <h1><span>D</span>ennis Overman<span>.</span></h1>
                    <p>I'm a <span>Web</span> developer<span>,</span> and a <span>pc</span>/<span>setup</span> builder<span>.</span></p>
                    <a id="sec-3" href="#skills">Skills</a>
                    <a id="sec-4" href="#projects">Projects</a>
                </div>
            </div>
        </div>
        @include('layout.animated-bg')
    </div>
</section>

<main>
    <section id="about" class="sctn-white">
        <div class="wrapper2">
            <div class="about-flex">
                <div class="about-left">
                    <h2>About Me<span>.</span></h2>
                    <h3>Hello! I'm <span>D</span>ennis Overman<span>.</span></h3>
                    <p>Hello<span>,</span> my name is <span>Dennis Overman</span> and I'm a front-end Web Developer for over 5 years of experience<span>.</span> Also I'm helping people with building there <span>PC's</span> and <span>Setups</span> for over 3 years now!</p>
                    <br>
                    <p>I started discovering the online world when I was 14 years old<span>.</span> A few years later I discovered the world of making websites<span>,</span> My first few websites were still with wordpress. Only I missed a lot of customizable things<span>.</span> So I went looking for alternatives and I discovered the world of <span>html</span>, <span>css</span> and <span>php.</span></p>
                    <div class="info-flex">
                        <div class="hobby">
                            <h5>My Hobby<span>'</span>s<span>.</span></h5>
                            <ul>
                                <li> Programming<span>.</span></li>
                                <li> Themeparks<span>.</span></li>
                                <li> Gaming<span>.</span></li>
                            </ul>
                        </div>

                        <div class="prjts">
                            <h5>My Projects<span>.</span></h5>
                            <ul>
                                <li> Project 1<span>.</span></li>
                                <li> Project 2<span>.</span></li>
                                <li> Project 3<span>.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="socials">
                        <a href="https://www.instagram.com/geitjoch/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/dennis-overman-1724b3136/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/u200bpl"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
        
                <div class="about-right">
                    <img src="{{asset('img/persoon.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="skill">
                <h2>My Program Skills<span>.</span></h2>
                <div class="skill-block">
                    <p>HTML</p>
                    <div class="container">
                        <div class="skills html">90%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>CSS</p>
                    <div class="container">
                        <div class="skills css">75%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Javascript</p>
                    <div class="container">
                        <div class="skills js">10%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>PHP</p>
                    <div class="container">
                        <div class="skills php">65%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>MySQL</p>
                    <div class="container">
                        <div class="skills mysql">45%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Laravel</p>
                    <div class="container">
                        <div class="skills laravel">5%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Java</p>
                    <div class="container">
                        <div class="skills java">15%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="sctn-black">
        <div class="project-1">
            <div class="project">
                <div class="wrapper">
                    <h5>Project-1<span>.</span></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et provident maxime nesciunt id exercitationem, quos modi molestias ex fugiat dolorem placeat? Eveniet voluptates natus quam nesciunt dignissimos sint, beatae repellendus magni quo tenetur velit fugit cupiditate illo fugiat ut harum sed iure asperiores molestias! Reiciendis explicabo possimus aliquam ad qui doloremque sint cumque provident fugit odio, mollitia veritatis repellat saepe officia ducimus ex iste magni nobis obcaecati voluptates voluptatem. Sed pariatur praesentium error dolorem.</p>
                    <a href="">Click here</a>
                </div>
            </div>
        </div>

        <div class="project-2">
            <div class="project">
                <div class="wrapper">
                    <h5>Project-2<span>.</span></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et provident maxime nesciunt id exercitationem, quos modi molestias ex fugiat dolorem placeat? Eveniet voluptates natus quam nesciunt dignissimos sint, beatae repellendus magni quo tenetur velit fugit cupiditate illo fugiat ut harum sed iure asperiores molestias! Reiciendis explicabo possimus aliquam ad qui doloremque sint cumque provident fugit odio, mollitia veritatis repellat saepe officia ducimus ex iste magni nobis obcaecati voluptates voluptatem. Sed pariatur praesentium error dolorem.</p>
                    <a href="">Click here</a>
                </div>
            </div>
        </div>

        <div class="project-3">
            <div class="project">
                <div class="wrapper">
                    <h5>Project-3<span>.</span></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et provident maxime nesciunt id exercitationem, quos modi molestias ex fugiat dolorem placeat? Eveniet voluptates natus quam nesciunt dignissimos sint, beatae repellendus magni quo tenetur velit fugit cupiditate illo fugiat ut harum sed iure asperiores molestias! Reiciendis explicabo possimus aliquam ad qui doloremque sint cumque provident fugit odio, mollitia veritatis repellat saepe officia ducimus ex iste magni nobis obcaecati voluptates voluptatem. Sed pariatur praesentium error dolorem.</p>
                    <a href="">Click here</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layout.footer')
</body>
</html>