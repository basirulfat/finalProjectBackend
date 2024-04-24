<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/FAQ.css">
    <title>FAQ Questions</title>
  </head>

  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')
     <!--=============== faq heading ===============-->
    <section class="faq__heading">
      <h1>Frequently Asked Questions</h1>
      <h4>everything you need to know</h4>
    </section>
     <!--=============== faq question ===============-->
    <section class="faq-container">
      <h2>FAQ</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title"> 1 : What is AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              AfghanTalent.com is the leading job site and online recruitment
              service in , Afghanistan a database of over 2,000,000
              professionals, specialists and managers across all industries and
              job categories. The company specializes in matching top candidates
              with attractive career opportunities through its website. It
              serves as the primary recruitment channel for many leading Afghani
              companies and virtually all the international firms operating in
              Afghanistan.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">
              2 : Which companies do you work with and what kind of jobs do you
              have?</span
            >
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Our clients are typically international firms operating in
              Afghanistan and their subsidiaries, or leading Afghans firms. The
              vacancies advertised on our website come from a wide range of
              industries and job categories. Whatever your field of expertise
              is, we encourage you to register and complete your CV, and sooner
              or later you are likely to find job opportunities matching your
              interests. The main functions we cover include (but are not
              limited to):
              <ul>
                <li> • Accounting & finance</li>
                <li> • Sales & marketing </li>
                <li> • Administration and secretarial</li>
                <li> • Commercial & procurement </li>
                <li> • Strategy & business development</li>
                <li> • General management</li>
                <li> • IT & systems </li>
                <li> • Engineering & manufacturing</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title"> 3 : How secure is the personal data I submit to AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              We do not disclose your personal data to any third parties except
              for the purpose of introducing you to an employer.
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title"> 4 : Do I need to pay AfghanTalent for this service?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              No! Whether candidates find a job or not, they would not be charged
              for this service.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 5 : How can I send my feedbacks to AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Candidates are able to send their feedbacks through following
              routes: * Click on 'Home' and send the feedback from 'contact us'
              section at the bottom of website feedbacks and suggestions will be
              reviewed in our steering committee meetings.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 6 :  What if I do not look for job opportunities for a period of time?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              If you are not willing to be contacted, You could set your 'Account Status' on 'Sleep Mode' in 'Account Setting' section, so that even employers may not view your contact details.
              But make sure that you turn your 'Account Status' to 'Active' when you tend to look for opportunities again.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 7 : What happens after I register and complete my profile online??</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Your details are stored on our database and you will periodically receive updates on jobs in your field of interest. When you apply for a specific position, the employer advertising the vacancy will receive your application instantly. They will then have a chance to review your CV and may decide to contact you by telephone or email, or to invite you for an interview.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 8 : How can I log in if I've already registered?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              The candidates are able to log in on the website by entering their provided username and password in the 'Candidate Login' section. The login details will be sent to candidate's email address after registration.
              To login, please make sure you enter your correct username and password in candidate login on the left side of IranTalent.com homepage, kindly note that you must enter your login details with no space character, 'caps lock' is off and other such cautions.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 9 :  How can I recover my password if it is forgotten?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              You may click 'Forgot password' in the candidate log in section to receive a password recovery link in your registered email address.
              You'd better mention a secondary email in your 'Account Setting' section so that in case you lose access to you primary email for any reason, you can receive the password recovery link in your secondary email.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 10 :  How can I unsubscribe from AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              In order to unsubscribe, candidates should send their request through an email to info@afghantalent.com. The result will be sent Subsequently.
              By the way, we would appreciate if you could provide us with your feedback and the reason behind your un subscription request.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">11 :  I don't know how to write a CV or Resume. Can I still apply?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Our 'online CV' tool is all you need to put together your profile. Simply answer all the questions on the form and you can then apply for any positions advertised on our website. Note that the online CV MUST be filled in English and if you fill it in Persian, employers will not view it and you lose the chance of being selected.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">12 :  What if I update my CV after applying for a job?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Since AfghanTalent.com provides online services, you have the chance to update the CV at any time you want and the companies will review your updated online CV. Also consider that if the employer prints or saves your CV as PDF before your update, they may not view the changes. Therefore, you'd better make sure that your CV is updated, before you apply for a job.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">13 : How much shall I complete my CV to be able to apply for a job?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              In order to be able to apply for a position, you need to complete your CV at least by 40%.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> 14 : Are there also job opportunities for fresh graduates on AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Yes, employers post their required vacancies in different levels from fresh graduate to top manager. Fresh graduates with at least 40% completed CV are able to apply for job opportunities which are appropriate for.In case you are a fresh graduate and do not have work experience, you can mention the projects you have done.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">15 : Why my education is not shown on my CV?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              All required information in 'education' section should be completed so it could be shown on CVs. In case you do not view your education on your CV, make sure you have filled all the required information in the education section.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">16 : What happens if I set my CV status as 'Private'?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Employers can view your CV without name and contact details. This decreases the chance of being selected for contacting by employers.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">17 : What happens if I set my CV status as 'Hidden'?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              In this case employers cannot view any part of your CV. This feature should be used carefully because your CV will not be viewed by employers if it is 'Hidden'!
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">18 : How can I find jobs in a specific category, location, company type & seniority?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Candidates are able to find jobs in specific category, location or industry by entering intended job in the 'latest jobs' section at the left side of homepage. The jobs are classified by category, location, company type & seniority.
              All of the process is online and performed on the
              www.irantalent.com website.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">19 : How often are job opportunities updated on AfghanTalent website? ?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Job opportunities on AfghanTalent.com are updated on short-term basis. You can visit our “Find jobs” pages regularly to review/ view new opportunities.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">20 : Can I apply for jobs outside Iran through AfghanTalent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              If you have registered and fulfilled your CV on the website, this would be possible for you to apply for the suitable vacancies through AfghanTalent.com whether it is inside or outside of Iran.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">21 :  How can I improve the chance of my CV to be viewed by employers?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Candidates who are more active show up first in employers CV search results. So, if you log in frequently and are more active by updating your CV and searching for jobs, your CV will be one of the first ones showing up in searches.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">22 : What is the minimum I need to apply?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              You are preferred to be a university graduate, fluent in Persian (Farsi) and have reasonable command of English. Work experience in your field of interest is often required, except for the opportunities for fresh graduates & trainee programs. You must be of Afghan nationality or, if not, should have a work permit for working in Afghanistan.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">23 : Can I just send you my CV by email?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              We cannot accept CV's attached to emails as this will place you outside our candidate database and destroy your chances of being considered for any jobs. To apply, you must register on our website and submit your resume either by completing the online CV tool (recommended) or uploading your CV as a separate file on your account. If you submit your CV as a separate file, we would still encourage you to fully complete your online CV, as it will increase your chances of being matched to a specific position.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">24 : How can I apply for a job?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              To apply for a position, first login with your username and password, then enter the find job page, review the details of the vacancy and click the apply button. Before applying for a job, make sure that your qualifications match the position's requirements, especially the ones mentioned as 'Applicants must be'. If not, your application will automatically be directed to the employer's rejected CVs folder.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">25 : What happens next, after I apply for a job?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              If you apply for a job through our website, you are automatically being considered for the opening through AfghanTalent. In case your background matches that position, you will be contacted for the next steps of the hiring process and will be provided with more information that you are interested.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">26 : How long should I expect to wait before I am contacted by an employer?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              After you apply for a position, it may take some time from a few days to several weeks for employers to get in touch with you. In some cases, if your application is not short-listed by the employer/recruiter, or if the position is already filled, you may not be contacted at all. Do not be disappointed; do keep reviewing the jobs that come up and if you come across another position that you believe you are qualified for, do apply.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">27 : Why I did not receive any feedbacks on my applications?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Your job applications are recorded and instantly delivered to the company advertising the vacancy. The responsible person in the company will then review the applications and if your CV/background matches their requirements, they will contact you for an interview. Please note that the companies receive hundreds of CVs for each vacancy and may not provide individual notification or feedback on unsuccessful applications. However, you may track on-line whether your chosen vacancy is still open or has been closed.
              Having said the above, due to our experience, most employers call their shortlisted candidates within 2 months.
              
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">28 : Can I delete a sent application?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Applications which have already been sent to employers could not be deleted.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">29 : For what reasons may my application be declined?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              The applications may be declined for any number of professional and demographic reasons, including the location where you are based, language skills, as well as your academic and professional background. Also the requirements indicated as 'Must Be' in the job postings must be met by the applicant's qualifications; otherwise the application will automatically be rejected.
            </p>
          </div>

        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">30 : How can I have information about the company who has posted a job opportunity?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              You may find a description of the company advertising the vacancy at the end of each job posting. Also, you may get more information from the company website.Reviewing the company's information helps candidates perform more professionally in interviews.
            </p>
          </div>
         </div>
        <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false">
              <span class="accordion-title">31 : What shall I do in case I cannot participate in a previously set interview session?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                In today's professional world, it is required that you contact the employer and inform him/her as soon as possible and try to set another date if possible.
              </p>
            </div>
         
        </div>
          <p style="color: var(--blue); font-weight: 600;">More Help:🤔</p>
          <p>if the answer you're looking for is not listed above <br> 
            <strong>Use This Contact Number:📞+93798425895</strong>
          <span style="color: var(--success);">We will answer in mainite😂</span>
          </p>
      </div>
    </section> 
  <!--=================== FOOTER ====================-->
  @include('layouts.footer')
    <!-- <script src="./assets/js/FAQ.js"></script> -->
    <script defer type="module" src="./assets/js/main.js"></script>
  </body>
</html>
