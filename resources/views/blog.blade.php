<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/blog.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- icon links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--=============== HEADER ===============-->
    @include('layouts.header')

    <!-- 4 images -->
    <section class="image-section">
      <div class="image-wrapper">
        <div class="left-Site">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
          /></a>
          <div class="child-warpper">
            <div class="R">
              <a href="#"
                ><img
                  src="./assets/images/pexels-andrea-piacquadio-840996.jpg"
                  alt=""
                />
              </a>
            </div>

            <div class="R">
              <a href="#">
                <img
                  src="./assets/images/pexels-lex-photography-1109543.jpg"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
        <div class="right-img">
          <a href="#"
            ><img
              src="./assets/images/pexels-moose-photos-1586973.jpg"
              alt="right-image"
            />
          </a>
        </div>
      </div>
    </section>

    <!-- 6 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">The latest content <i class="fa-solid fa-clock"></i></a>
        <hr />
      </div>
      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#">
            <img
              src="./assets/images/pexels-andrea-piacquadio-927022.jpg"
              alt=""
            />
            <h3>
              Relationship Between Stress Management And MBTI Personality
            </h3></a
          >

          <p>
            Coping with stress using MBTI personality types Millions of ways to
            manage stress
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-lex-photography-1109543.jpg"
              alt=""
            />
            <h3>A Guide To Writing A Scientific Representative's Resume</h3></a
          >
          <p>
            A comprehensive and practical guide to writing a resume of a
            scientific representative.
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-roxanne-minnish-4486796.jpg"
              alt=""
            />
            <h3>Find A Digital Marketing Job In 6 Steps</h3></a
          >
          <p>
            if 6 golden tips for getting hired in a digital marketing job.you
            are new to the online marketing job.
          </p>
          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-august-de-richelieu-4427431.jpg"
              alt=""
            />
            <h3>Why Can A Great Salesperson Be A Bad Sales Manager?</h3></a
          >
          <p>
            One of the reasons for the lack of success of many who are hired as
            a sales manager is that
          </p>
          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
            />
            <h3>
              Job Interview Semiotics Of Personality Types According To The
              Amount Of
            </h3></a
          >
          <p>
            Which personality types (MBTI) are more successful in job
            interviews? Do you know
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img src="./assets/images/pexels-pixabay-267350.jpg" alt="" />
            <h3>How To Become An Instagram Admin?</h3></a
          >
          <p>
            How to become an Instagram admin? One of the new jobs that has
            gained many audiences in recent years is admin...
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>
      </div>
      <div id="bouttom-btn">
        <a href="#"
          ><i class="ri-arrow-down-s-line dropdown__arrow"></i> Show More
          content</a
        >
      </div>
    </section>

    <!-- 3 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">Most Popular</a>
        <hr />
      </div>
      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#">
            <img
              src="./assets/images/pexels-photomix-company-106341.jpg"
              alt=""
            />
            <h3 id="phagraph-id">RESUME WRITING</h3></a
          >
          <p id="phagraph-id">
            how is the process of hiring and reviwing resume at google?
          </p>
          <a id="link-btn" href="#">RESUME WRITING</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-vlad-bagacian-1228396.jpg"
              alt=""
            />
            <h3 id="phagraph-id">..IDUAL DEVELOPMENT</h3>
          </a>
          <p id="phagraph-id">
            what is emotional intelligence and How it is importent in workplace?
          </p>
          <a id="link-btn" href="#">..IDUAL DEVELOPMENT</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-lex-photography-1109543.jpg"
              alt=""
            />
            <h3 id="phagraph-id">RESUME WRITING</h3>
          </a>
          <p id="phagraph-id">
            what is resume and how to write a propessional resume?
          </p>
          <a id="link-btn" href="#">RESUME WRITING </a>
        </div>
      </div>
    </section>

    <!-- second 3 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">Employees</a>
        <hr />
      </div>

      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-francesco-ungaro-998641.jpg"
              alt=""
            />
            <h3>What Exactly Does Gen Z Expect From Their Workplace?</h3></a
          >

          <p>
            If you are a manager, you need to know how Gen Z, as the first
            generation of digital natives, is about
          </p>
          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-andrea-piacquadio-3779409.jpg"
              alt=""
            />
            <h3>Why Do Employees Want To Work For A Small Business?</h3></a
          >

          <p>
            Join us in this article to take a look at some of the best small and
            medium businesses on the list of the best
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img src="./assets/images/pexels-fauxels-3184418.jpg" alt="" />
            <h3>
              Reasons For The Effectiveness Of The Work Team In The Growth Of 6
              Businesses
            </h3></a
          >

          <p>
            Having an effective work team will play an important role in
            business..
          </p>

          <a id="link-btn" href="#">READ THE ARTICLE </a>
        </div>
      </div>
    </section>

    <section class="last-C-section">
      <div class="last-bor">
        <hr />
        <a href="#">Job Interview</a>
        <hr />
        <a href="#">Resume Writing</a>
        <hr />
        <a href="#">Individual Development </a>
      </div>

      <div class="last-card-Warpper">
        <div class="three-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
            />
            <h3>Sales Manager Job Interview Cheat Sheet!</h3></a
          >
          <p>
            Before entering the sales manager job interview, it is better to
            familiarize yourself a little with the questions they will ask you.
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
                alt="small-images"
              />25 questions that are asked in the job interview of a scientific
              representative</a
            >
          </div>

          <div class="small-images">
            <a href="#"
              ><img src="./assets/images/pi1.png" alt="small-images" />The first
              five minutes of a job interview are very important</a
            >
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-andrea-piacquadio-3779409.jpg"
                alt="small-images"
              />10 questions you should ask in an internship interview
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-6693655.jpg"
                alt="small-images"
              />How to answer the question "How much is your desired salary?"
              answer?
            </a>
          </div>
        </div>

        <div class="three-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-moose-photos-1586973.jpg"
              alt=""
            />
            <h3>A Guide To Writing A Scientific Representative's Resume</h3></a
          >
          <p>
            A comprehensive and practical guide to writing a resume of a
            scientific representative. Having a resume of a scientific .
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-lex-photography-1109543.jpg"
                alt="small-images"
              />How to write a professional resume for the job of sales manager?
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-photomix-company-106341.jpg"
                alt="small-images"
              />Signs that the resume was created with the help of artificial
              intelligence
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-pixabay-267350.jpg"
                alt="small-images"
              />How to put an internship on a resume
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-christina-morillo-1181534.jpg"
                alt="small-images"
              />5 ways to use information to increase the effectiveness of your
              resume
            </a>
          </div>
        </div>

        <div class="three-cards">
          <a href="#"
            ><img src="./assets/images/pexels-pixabay-267350.jpg" alt="" />
            <h3>Introducing 22 Instagram Admin Skills here</h3></a
          >
          <p>
            Introduction of 22 Instagram admin skills If you are looking for
            Instagram admin recruitment advertisa, it is better to know...
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-roxanne-minnish-4486796.jpg"
                alt="small-images"
              />Find a digital marketing job in 6 steps
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-andrea-piacquadio-840996.jpg"
                alt="small-images"
              />Relationship between stress management and MBTI personality
              types
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
                alt="small-images"
              />Job interview semiotics of personality types according to the
              amount of stress
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-vlad-bagacian-1228396.jpg"
                alt="small-images"
              />Why can a great salesperson be a bad sales manager?
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--=============== FOOTER ===============-->
   @include('layouts.footer')
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
