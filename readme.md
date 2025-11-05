`Last Updated: 05-11-2025 - 15:22`

# Jobs Pathway
  + Jobs Pathway is a project in PHP and WordPress. Sign in and add details of jobs applied for so you can keep track of your way to your professional life with this app.
    + App URL: https://projects.jonniegrieve.co.uk/jobs_pathway/
    + Prototype URL: https://projects.jonniegrieve.co.uk/jobs_pathway/
    + Repository URL: https://github.com/jg-digital-media/jgdm_jobs_pathway

## Sections 

[Requirements](#requirements) |
[TODOs](#todos) |
[Development](#development) | 
[User Flows](#user-flows) |
[Deployment](#deployment-and-installation)

## Requirements

+ Windows/Linux/MacOS |  <!-- Ruby `v3.4.6` | Ruby on Rails `v8.0.2.1` --> WordPress.org Installation | 
+ A server to host the app
+ Dynamic data driven by MySQL

### Pages

The following pages are assigned to templates in the `wp-content/themes/jobs_pathway_theme` directory.

+ Dashboard - assigned to `page-dashboard.php` "Job Dashboard" template `/dashboard/`
+ Add Job - assigned to `page-addjob.php` "Job Dashboard" template `add-job/`
+ How To - assigned to `page-howto.php` "How To" template `how-to/`
+ Job Stats - assigned to `page-jobstats.php` "Job Stats" template `job-stats/`
+ Job Info Page - assigned to `single-job_application.php` "Job Stats" template `job-info/`

### Plugins Used

+ "Maintenance" - `Version 4.18`  `WebFactory Ltd`
+ "ACF" - `Version 6.6.1` `WP Engine`

<!-- + []() - -->

[Back to Top](#sections)

## TODOs: 

### (Tasks: `124` - Completed - `93`)

+ `COMPLETED: 16-09-2025` - Wireframe and static interface planning for 'Job's Pathway App'
+ `COMPLETED: 16-09-2025` - Add a footer and header template part of the project
+ `COMPLETED: 17-09-2025` - Change table cell background colour of Table cell when the child checkbox is checked
+ `COMPLETED: 17-09-2025` - Custom variable values where required for the different root templates
+ `COMPLETED: 18-09-2025:` - Apply `stage---completed` class to table cells where the containing checkbox is checked
+ `COMPLETED: 18-09-2025` - add a logout link along with username, to the top banner
+ `COMPLETED: 18-09-2025` - build markup for the main list page of jobs. `list.php` 
+ `COMPLETED: 18-09-2025` - build markup for the main list page of jobs - simulated for no job situations added `list-empty.php` 
+ `COMPLETED: 18-09-2025` - Decided to use register form for the landing page. Add to it, a link to login form. `index.php`
+ `COMPLETED: 18-09-2025` - finish `.body---add--job` styles
+ `COMPLETED: 19-09-2025` - move header styles to `header.scss`
+ `COMPLETED: 19-09-2025` - move footer styles to `footer.scss`
+ `COMPLETED: 19-09-2025` - Add some simulated form validation to the login and register pages

+ `COMPLETED: 19-09-2025` - Finish styling the login and register pages
+ `COMPLETED: 19-09-2025` - body---job--details styles
+ `COMPLETED: 19-09-2025` - Build `stats-modal.php` page - increase font size, make more visible. 
+ `COMPLETED: 19-09-2025` - style .body---job--stats
+ `COMPLETED: 19-09-2025` - Not all form validation errors are showing - e.g. password validation on registration for passwords less than 6 characters
  + `COMPLETED: 19-09-2025` - Standard border: red  - Validated border: green:  focused border: blue - `border: solid 1px color;`
+ `COMPLETED: 19-09-2025` - Build `stats-modal.php` template file/page
+ `COMPLETED: 19-09-2025` - Build `add-job-form.php` template file/page
+ `COMPLETED: 23-09-2025` - Download Rails and check GitBash/Command Line for Ruby and Rails Gems
+ `COMPLETED: 23-09-2025` - Create a new Rails project
+ `COMPLETED: 23-09-2025` - Remove files and add them back in, in a directory called `prototype`

+ `COMPLETED: 20-10-2025` - IMPLEMENT TRANSFER OF PROTOTYPE TO THE WORDPRESS FRAMEWORK
  + `COMPLETED: 20-10-2025` - STAGE 1 — Set Up Your Development Environment
	  + `COMPLETED: 20-10-2025` - install WordPress
	  + `COMPLETED: 20-10-2025` - verify installation

  + `COMPLETED: 20-10-2025` - STAGE 2 - Build Custom Theme files
	  + `COMPLETED: 20-10-2025` - index.php
	  + `COMPLETED: 20-10-2025` - screenshot.php
	  + `COMPLETED: 20-10-2025` - style.css
	  + `COMPLETED: 20-10-2025` - functions.php

  + `COMPLETED: 27-10-2025 ` - STAGE 3 - Register Your "Job Application" Custom Post Type
	  + `COMPLETED: 27-10-2025` - Add section to dashboard called "Job Applications"

  + `COMPLETED: 27-10-2025 ` - STAGE 4 — Add Custom Fields with ACF (Advanced Custom Fields)
	  + `COMPLETED: 27-10-2025` - Install ACF Plugin
	
	  + `COMPLETED: 27-10-2025` - Use "Job Details" Field Group (Add field labels, field names and type.
	
	  + `COMPLETED: 27-10-2025` - Then set "Location → Post Type is equal to Job Application."

+ `COMPLETED: 27-10-2025` - Enqueue styles and scripts in `functions.php`
+ `COMPLETED: 27-10-2025` - Auto assign posts to logged in user - `functions.php`
+ `COMPLETED: 28-10-2025` - Link logout page to WordPress logout system (Logout) `.logout-link`"
+ `COMPLETED: 28-10-2025` - Fix bug on login pages preventing link to registration page from working `/login/` & `index.php`
+ `COMPLETED: 28-10-2025` - Welcome user to the app and then invite to register `register.php`.
+ `COMPLETED: 28-10-2025` - Style register and login buttons `register.php` and `login.php`
+ `COMPLETED: 28-10-2025` - STAGE 5 — Create a Front-End Dashboard Template  
+ `COMPLETED: 27-10-2025` - In WordPress → Pages → Add New → call it Dashboard, and assign the "Job Dashboard" template. `page-dashboard.php`
+ `COMPLETED: 28-10-2025` - STAGE 9 - Styling via css and js from protyotype
+ `COMPLETED: 28-10-2025 ` - STAGE 6 - Add a Front-end "Add Job" Form
+ `COMPLETED: 30-10-2025 ` - CV/Resume on dashboard page has no custom field on CPT
+ `COMPLETED: 30-10-2025 ` - Add contact detail field to add job form
+ `COMPLETED: 30-10-2025` - Page dashboard - implement delete button in actions column
+ `COMPLETED: 31-10-2025 ` - Implement progess stats dashboard page for logged in user `/job-stats/`
+ `COMPLETED: 31-10-2025 ` - Delete Jobs - button - users should be offered the chance to confirm their choice to delete all jobs.
+ `COMPLETED: 03-11-2025 ` - Remove inline styling of login and logout out error messages. Classes: -  `.login-error` `.login-success.` Slug: `/login/`.
+ `COMPLETED: 03-11-2025 ` - Page dashboard template has no login confirmation message.
+ `COMPLETED: 03-11-2025 ` - Page dashboard - remove job details from "job details" column. The idea being a page will be accessed that has this info.
  + `COMPLETED: 03-11-2025 ` - Keep job title in column above the button "open" for now.
+ `COMPLETED: 03-11-2025 ` - Page dashboard - remove edit link from actions Column. 
+ `COMPLETED: 03-11-2025 ` - Single Job page -  Style input elements in edit state to improve UX
+ `COMPLETED: 03-11-2025 ` - Persist the changes to checkboxes and table cell backgrounds
+ `COMPLETED: 03-11-2025 ` - Style input fields of job application details when in edit state `single-job_application.php`
+ `COMPLETED: 03-11-2025 ` - Use custom made login form with prototyped front end error messaging.
+ `COMPLETED: 03-11-2025 ` - Use custom made registration form with prototyped front end error messaging.
+ `COMPLETED: 03-11-2025 ` - `Error saving job profile: {success: false, data: {…}}` Error occurs when attempting to "save" when no changes have been made.
+ `COMPLETED: 03-11-2025 ` - add job form - Some fields should be required - Add message to check for Job Totle, company name and location `/add-job/`
+ `COMPLETED: 03-11-2025 ` - use the ACF Frontend Form Feature to create job application tracking details for a logged in user
+ `COMPLETED: 03-11-2025  ` - Implement Edit functionality for `job-details.php` (filename as per prototype).
  1. `COMPLETED: 03-11-2025  ` - Edit button will switch fields to an editable state where values can be changed.
  2. `COMPLETED: 03-11-2025  ` - `button---job--edit` - Change text content from "Edit" to Saved" when  button is clicked.
  3. `COMPLETED: 03-11-2025  ` - At this point, the edit button text content will change from "Edit" to "Save"
  4. `COMPLETED: 03-11-2025  ` - Save button will save the changes to the database and change text content back to "Edit"
  5. `COMPLETED: 03-11-2025  ` - "Tooltip" activated to show the user that the changes have been saved!
  6. `TODO: ` More graceful transition for successs tooltip `job-profile-status-message`

+ `COMPLETED: 04-11-2025 ` - "welcome jonniegrieve" - blue style on username to match buttons - colour scheme
+ `COMPLETED: 04-11-2025 ` - Extend style pattern on "back" link `single-job_application.php`
+ `COMPLETED: 04-11-2025 ` - Remove inline styling of registration error messages. Classes: -  `.registration-error` `.registration-success.` Slug: `/login/`.
+ `COMPLETED: 04-11-2025 ` - Style "Back to Dashboard" button - 
  + `COMPLETED: 04-11-2025 ` -  `single-job_application.php`
  + `COMPLETED: 04-11-2025 ` -  `/add-job/`
  + `COMPLETED: 04-11-2025 ` -  `page-howto.php`
  + `COMPLETED: 04-11-2025 ` -  `page-jobstats.php`
+ `COMPLETED: 04-11-2025 ` - Page dashboard Consider renaming "Actions" column to "Delete"
+ `COMPLETED: 04-11-2025 ` - Back-end password validation required - Check for the correct password `now dealt with via WordPress`
+ `COMPLETED: 05-11-2025 ` - Add background colour on hover for all form inputs `/add-job`
+ `COMPLETED: 05-11-2025 ` - Page dashboard - Style the "delete" button in actions column
+ `COMPLETED: 05-11-2025 ` - Description text area has no hover transition of background colour (filename as per prototype) `/add-job` `add-job-form.php`
+ `COMPLETED: 05-11-2025 ` - Modify hover colour for delete button `#ffd6d6`  line 784 `.button---job--delete:hover`
+ `COMPLETED: 05-11-2025 ` - Style Motivational Messages on dashboard - `#motivation---message`
+ `COMPLETED: 05-11-2025 ` - "Your Progress" could be "Progress Stats for [username]" slug: `/jobs-stats/`
+ `COMPLETED: 05-11-2025 ` - You're in work! Congratulations! Add Party Emoji `stats-modal.php`
+ `COMPLETED: 05-11-2025 ` - Apply flexbox to `app---navigation` on medium responsive breakpoint
+ `COMPLETED: 05-11-2025 ` - Consider Deleting Actions Column
+ `COMPLETED: 05-11-2025 ` - `motivation---message`- load a different message as its text content whenever the user loads the page.

+ `TODO: ` - Create and style "how to use" page
+ `TODO: ` - Add copy "How to use" template file/page `how-to.php`
+ `TODO: ` - loggedin flag  should only be present directly after user logs in. No redirects using the flag. `/?loggedin=true`
+ `TODO: ` - `login-handler.php` and `register-handler.php` are empty and should be ignored for the interim.
+ `TODO: ` - Sort `header.php` meta tags and social media sharing previews.
+ `TODO: ` - Reduce lines of code in Sass files where possible
  + `TODO: ` - May need to fill the dashboard table with classes to get the desired effect.
+ `TODO: ` - Add responsiveness to Job list table - `list.php` and `list-empty.php` (filenames as per prototype)
+ `TODO: ` - Implement overflow-x scrolling on table for smaller screens
+ `TODO: ` - Actions column - `list.php`  Might be useful as a mechanism to edit job profiles 
+ `TODO: ` - Add the final motivation messages on the dashboard page `motivation---message`
+ `TODO: ` - Add a favicon
+ `TODO: ` - Swap out mini logo in `top---banner--container`
+ `TODO: ` - Add a "How to use" template file/page
+ `TODO: ` - style "how to use" page
+ `TODO: ` - Delete job or jobs from the list page via the stats page/modal - `button button---delete--jobs`
+ `TODO: ` - input elements "do not have an autocomplete attribute" - add autocomplete="off" to all input elements
+ `TODO: ` - Give "Progress Stats" Button an #id `btn---progress--stats`
+ `TODO: ` - Give "How to Use Button" an #id `btn---how--to`
+ `TODO: ` - Customise validation and success error messages in app.js
+ `TODO: ` - Fade out custom validation messages after going out of element focus
+ `TODO: ` - Remove filenames and .filename class and selector from project at the appropriate time.
+ `TODO: ` - Future UX Feature: Require stronger passwords for the app - e.g. at least 8 characters (include special characters, uppercase, lowercase, numbers)
+ `TODO: ` - Add copy to explain how to use the app. `page-howto.php`
+ `TODO: ` - Implement modal areas for `job-details.php`,`add-job-form.php`, `stats-modal.php`,`how-to.php`.
+ `TODO: ` - modal styles
+ `TODO: ` - Future UX Feature: Tooltip, showing the job title and ID applied for above that row's (Open) button
+ `TODO: ` - Future UX Feature: Require stronger passwords for the app - e.g. at least 8 characters (include special characters, uppercase, lowercase, numbers)
+ `TODO: ` - Emoji styles have no effect - `img.emoji` in `in--work--tick`
+ `TODO: ` - Delete buttons for each row should have a confirmation modal

[Back to Top](#sections)

## Development

### Protoype Development
[0.0.1](#001) | [0.0.2](#002) | [0.0.3](#003) | [0.0.4](#004) | [0.0.5](#005) | [0.0.6](#006) | [0.0.7](#007)

### Rails Development
[1.0.0](#100) | [1.0.1](#101) | [1.0.2](#102)

### WordPress Development
[2.0.0](#200) | [2.0.1](#201) | [2.0.2](#202) | [2.0.3](#203) | [2.0.4](#204) | [2.0.5](#205) | [2.0.6](#206)| [2.0.7](#207)

### `0.0.1`
  
  + I came up with this idea a few weeks ago, in the same way as I have others - while I was on a walk. I've been looking for a reason to do a project, with Ruby on Rails for some time. And now I have one. Something that uses the CRUD operations of a dynamic project with the ability to log in and add your unique data

  + I'm inexperienced with Ruby on Rails, I'll say that from the outset. So this project may take some time. In this very first phase of the project, I will be spending a lot of time working on user flows, the UI, wireframes and making decisions about how the app will look. So I'll prototype all of this before bringing Rails into the picture.

  + In this app, users will be able to add details of jobs they have applied for, tick off the different stages of the process and track in real time what stage they are at with each vacancy. `12-09-2025`
  
[Back to Top](#development)

### `0.0.2` 

  + I've added a list page to the app along with other template files. Everything about this app is at its earliest stage, but I have some styling in place on the index.php and initial config sass variables in place. 
  + `12-09-2025`

[Back to Top](#development)

### `0.0.3` 

  + On the morning of this day, I focused on customising the UI of the login and register pages. Now, at some point, these 2 states will share the same part in the onboarding and outboarding process. So one of the measures I took was to separate these forms and their styling into their own template parts and `@extend` Sass partials. 

  + With this, I can customise different "states" of the app. Be that the login/register page, the main listing page, adding a job and the job details page. There is much more work still to be done, but this gives me a grounding on how the finished app will be structured. `15-09-2025`

[Back to Top](#development)

### `0.0.4`

  + Focused on building the Job listing screen today. This is going to be a challenging project to do, which is partly why I'm looking forward to doing it. I added 6 rows of default data to the markup to test in its various states. That is to say, when a checkbox for a table cell is checked, that table cell's background will turn green.

  + Elsewhere, I started building the other screen states, like the progress states page and the "how to use" page. I'm still at the back of my mind thinking whether it should be modals or popups. I'm not sure yet. It might be a better UX experience to be modals, but when this app is complete, persistence of data will not be an issue since changes will be saved at the backend.

  + I've tried my best to keep the CSS up with the markup as I go and keep it organised. But there's still a lot of work to do for the Stat and Add Job pages and to keep the SASS files easily maintainable. I'm hopeful that by the end of `17th` (tomorrow) I'll have a solid foundation for the app's look and feel. `15-09-2025`

[Back to Top](#development)

### `0.0.5`

  + I wanted to achieve a couple of main things today. Sort out a first solid draft of the look and feel of the app - which means sorting out the SASS variables and selectors for most aspects of the UI. Now there's some styling for the main application states, like the login and register pages, the list page and the job details page.

  + I'm becoming more and more minded to switch to using modals for things like adding new jobs and the progress stats page.  But the major functionality achievement of the day is getting the checkbox for each table cell to change colour when the child checkbox is checked. This gives people a visual cue that this stage of the job application process has been completed. Of course, there isn't any backend persistence for this yet, so it all resets when you refresh the page.  

  + A big part of the app is the job listing page, and a large part of future database interactions will go there. But it all represents a good step towards completing the prototype of the app.

[Back to Top](#development)

### `0.0.6`

  + I've added some form validation to the login and register pages. Emphasis on the word "some". There's no doubt the validation is in place and seems to be working but there are issues getting all of the UI feedback in place. I'm leaving this as it is for today, but it warrants further work.

  + I made other changes to the app, bringing it further towards a finished Prototype. Including simulated logging in and logging out. I've also added a delete jobs button to the progress stats page, which will allow users, when ready, or if necessary, to delete jobs they've added to their account and start again.

  + But it's a tricky moment in the development of this app. At some point, we have to declare the prototype stage of the app complete and start to build in Rails. This will probably be on Monday. A final look at what needs doing will be done tomorrow. `18-09-2025`

[Back to Top](#development)

### `0.0.7`

  + Form validation at the front-end has been added to the login and register pages. This appears to be a robust, interactive and real-time implementation which tells people what is wrong and how to put it right.  There's still validation for the backend to do, but that will come in time.

  + I've stalled out long enough.  We now have what I believe to be a good enough prototype to start working from. Over the weekend, I'd like to create a plan for integrating the app with Rails. The prototype will be kept as it is as a copy, and the Rails element will be built around these templates.

  + I won't lie. I've never used Rails before. I am daunted; there are many facets to this app, and it's a learning curve. I intend to go bit by bit and hopefully, it'll be done before I know it. `19-09-2025`
  
[Back to Top](#development)


### `1.0.0`

  + All weekend, I've been working on plans for integrating the app with Rails. While I was doing so, I realised just how much of an upheaval it is to use Rails compared to a PHP Prototype. Rails is an `MVC` framework (**M**odel **V**iew **C**ontroller), and recreating the visual interface of the app in Rails would be a massive undertaking - whether using AI or not. This almost caused enough jitters to change my plans for this project.
  
  + Plans and plans and plans. It's time to do. The purpose of this note is to try and nail down a solid plan for getting the app going and refining a development process.
    + Download Rails and check GitBash for Ruby and Rails Gems
    + Create a new Rails project - Now here's the nub of it. What Rails will do is put some directories and files into the project root. I'll probably need to empty the PHP prototype files while I do that, and then maybe add them back in, in a directory called `prototype`
    + Then, I need to learn how to rebuild the app using Rails syntax. And we'll need to create a functional Rails Schema for the backend database.
    + This will involve learning about adding gems for authentication and database management.
    + Putting all of this into a chat prompt in Cursor might do the trick to get me started on all of this.

[Back to Top](#development)


### `1.0.1`

+ I have Ruby and Rails now installed. I have a Rails project, but I'm feeling totally lost as to where I am with the dependencies required for authentication and database schemas. I probably spent a good hour or half hour looking at the work Cursor was doing to try to build the Rails project and work out issues getting the local server set up.

+ I'm going to have to look at this further. I might just have to start with a fresh installation and build things like the views, roots and controllers manually. Even with the aid of AI, this is a very, very steep learning curve. 

+ It'll be more worth my time pacing myself with this and finding a way to get to a foundation I can build on. So I'll take a pause, a bit of a breather while I work things out. It all doesn't have to be done in one go.

### `1.0.2`

+ All right!  I now have the application working to a point where I have a Rails Route pointing to a web page which is served on localhost (port 3000). I'd love to have done it without any friction or database compatability issues conflicts but I can't have everything :).

+ So I'm going to pause there and think about what the next step is. 

### `1.0.3`

+ What I wanted to do was to see if I could create the first 2 routes and views for the app; the login and register pages, which would be the first 2 pages the user would see. It took a couple of prompts to get something like the required solution.  The design of the first screen seems to be in place, with some hidden fields not rendering and therefore showing up non the page. But I'm taking that little win for now.  

+ The upshot is I now have a partial recreation for the login and register pages.

[Back to Top](#development)

### `2.0.0`

+  As of `13-10-2025`, I decided to take steps to switch the development of this app from Rails to WordPress. The learning curve was simply too steep owing to my lack of experience with Rails and the nature of the app. I am far more comfortable and experienced with WordPress. There's also the fact that a lot of the things I need for the app (authentication, authorisation, database management) are already built into WordPress. And I'd rather get (something) working with this app than not do it at all. I have another project in mind for Rails, which I might touch on in the future. So I'm not giving up on Rails, but for now, I'm implementing changes to this repository.

+ I spent some time today sorting out the repository, local location and server and getting WordPress installed.  Development on the app can now begin again in earnest. `20-10-2025`

[Back to Top](#development)

### `2.0.1`

+ This week, I'm working on finishing the app. Again, the scale of what I'm trying to build was slowly beginning to dawn on me. Even the job of copying code from the prototype was not a simple task, as you have to consider the hierarchy and how to make sure WordPress takes over correctly. That said, I am on much more solid ground with WordPress. Here's a summary of where I'm up as of today. (`27-10-2025`).

  + I have enqueued styles and scripts into the app so the app looks like it does in the prototype, even if it is not yet working like it does in the prototype. What I have done on that score is to mimic the applications' user flows which are in place until the app is further developed.

  + I have added a Custom Post Type to the app. This is the thing that drives the app. It will take input from a user where each person will have it's own base of data.
  
  + Have verified that the random motivation messages with `jt_random_motivation()` method are indeed working. I have already built a full implementation of this feature into the app.

  + I haven't yet customised the login and logout features. I'll look into doing that, hopefully within the next day. I'm pleased to say I've made a tremendous amount of progress already. A lot more work is ahead of me, and I'm looking forward to the challenge.

[Back to Top](#development)

### `2.0.2`

  + 2 things I've noticed today when trying to implement the login screens.  It's only when trying to implement a customised version of the WordPress login form did anything meaningful happen for me at all.  I tried a few implementations which don't "talk" to WordPress at all.

  + The second thing is that I've ended up writing some bad HTML, which breaks the styling when I try to adapt it. I said WordPress is my area, and it is, but right now I'm at an impasse for the above reasons. 

  + In the end, I decided to attempt the code again and lock in the changes so I could refine and debug where needed. I have been using AI to develop this. The truth is that the code I was trying (from consulting with ChatGPT) was too lightweight and wasn't connecting properly with WordPress' endpoints. (Sometimes AI makes mistakes)

  + It took Cursor AI to have a few goes at my codebase before we got somewhere with logging in. And I do now have logging in sorted out for one user.  There's also registration to implement next, so I can test more user flows.  Logging out (without the WordPress admin area)  is still to be implemented as well. 

  + I had thought and hoped that I'd be able to get this project done within a week.  That hope isn't over yet, and I'll keep working on it, but while today hasn't been a complete disaster, it also feels like a bit of a reality check for me. 
  
[Back to Top](#development)

### `2.0.3`

  + After a day of grind and uncertainty, yesterday today was a much more of a success which progress in finishing the registration and authentication workflows and adding and persisting job application data to the database.

  + Sorting out logout functionality was a case of using a simple method to log out the user natively, so users don't need to interact with the official WordPress admin bar. `<?php echo wp_logout_url( site_url('/login') ); ?>
 
  + This means right now we have a way to log registered users in and out of the app natively - using the WordPress authentication system.

  + AI helped me fix several issues that I hadn’t noticed myself. The main one was a redirect problem — it kept looking for a registration route even when users were already on the registration page, which caused an infinite redirect loop.

  + After that, I focused my attention on adding job application data to the database; handling dashboard states where the list is empty, when it has data; and persisting the data to the database. I got through more than I was expecting to today.. Including using Ajax and the WordPress database to persist changes to job status tracking via checkboxes. Which means I can add Ajax to the tech stack for this project.

  + 2 more big things to come that will require major development.  Editable job profile data for each job application, and a way to provide progress feedback to the user via a stats page.
  
[Back to Top](#development)

  ### `2.0.4`

  + The main success today is getting toggling between read only and edit modes of Job application profiles. A major app feature. It needs some UX refinement later, but it's functional and ready.

  + I learned a couple of things about my current method of project development. First, when you're coding with AI, it's not a case of telling the model, "do this" and expecting magic to happen the way you want it. You still have to have an understanding of good prompting and the code that you want to generate.

  + I probably could have done more to prototype the design when I was in that stage. For example, I could have easily simulated the switch between read-only and edit mode for the job profile templates, which may have helped with some chat prompts to the Claude AI model. Sometimes AI makes assumptions about what features you want built. This can be a hindrance as much as it can be a benefit.

  + Once the progress stats dashboard is completed, it'll be a case of having a good look at the UX, social sharing tags and markup to get the whole app fit for release.
  
[Back to Top](#development)

### `2.0.5`

Definitely some major challenges today collaborating with the AI becasue it simply didn't understand the brief over a few prompts. AI can make mistakes. Collaborate with it like it's a coding partner. Fix each other's mistakes.

+ I'm very pleased to have accomplished the building stage of my job application app. I have absolutely no doubt more enhancements and functionality will come. But the work to make it fit for public release starts next week!

+ I think at this point I've finished the main nuts and bolts of the development of the application.  Things work as they should.  What i've accomplished today is the progress page which now fully calculates the number of jobs applied for by a given user, and the percentage progress of stages of the job application process.

+ Users can also reset the stats by deleting all details of job applications if they need to do that for whatever reason.

+ That means the application is now fully working.  People can register.  People can log in and log out.  People can add details of jobs they are applying for. People can tick off when they have completed each stage of the job application process in real time. They can make any edits to individual jobs that they need to, and these changes all persist within the WordPress ecosystem.

+ These are all huge achievements that I am proud of. Even if it did take AI to help me out, it's all part of the learning process. It's now up to me to study the UX, the code and the markup to make it fit for public release. And I'm looking forward to doing that in the next week. `31-10-2025`

[Back to Top](#development)

### `2.0.6`

+ Today I managed to enhance the login and logout UX experience and implemented better form validation handling. `03-11-2025`

[Back to Top](#development)

### `2.0.7`

+ Today has been a little distruptive due to other thing sgetting in the way.  I was able to concentre on getting the colour scheme and application buttons sorted out though and some other enhancements.

+ This sounds less challenging it was.  I still need to have a proper look at the CSS and extend rules.  The idea was to have one extend diretive for the colours and multiple directives for other styles. Some of them wouldn't be selected by CSS which I'm guessing was due to cascading conflicts with my existing CSS.

[Back to Top](#development)

## User Flows

Planning the user flows for the app in its prototype form.

### Step 1 - User Registers for the app - `index.php`

+ User registers for the app (Form Inputs `Username`, `Email`, `Password`, `Confirm Password` - `.button---register`) `index.php`

Or

+ User logs in to the app via registration screen  ( `#registration a` -->  Form inputs `username`, `Email`, `Password` - `.button---login`) `login-screen.php`


### Step 2 - The list page is viewed in an empty state. - `list-empty.php`

+ Simulates the user being on the list page when they have no jobs listed - the start of their journey in the app.

+ Progress Stats (`Step [N]`)

+ How to Use! (`Step [N]`)

+ Random message from the data file as this element's text content `#motivation---message`

+ ID
+ Job Details
+ Application Sent
+ CV/Resume
+ Interview Secured
+ Interview Attended
+ References
+ Got the Job!!!
+ Actions

Contains a link to add a job in place of where the table would otherwise have data. `section---jobs--list--container table`

### Step 3 - A screen or modal area to allow users to add a new job to the app - `add-job-form.php`

+ User adds a new job to the app  - Button Click - `#btn---add---job`

  + (**Form Inputs** - `Name of Company/Organisation` - Text input, `Job Title` - Text Input, `Salary` - Text Input, `Location` - Text Input, `Contact Person` - Text Input, `Contact Info` - Text Input, `Description` - TextArea) `.button---job--add` 
    + `add-job-form.php`

Or

+ User adds a new job to the app  - Button Click - `#add---job--url`

  + (**Form Inputs** - `Name of Company/Organisation` - Text input, `Job Title` - Text Input, `Salary` - Text Input, `Location` - Text Input, `Contact Person` - Text Input, `Contact Info` - Text Input, `Description` - TextArea) `.add---job--url` 
    + `add-job-form.php`


### Step 4 - List page - simulated to include a list of jobs - `list.php`

.section---jobs--list--container

+ ID - `Text Content`
+ Job Details - `Link to page or modal`
+ Application Sent - `Checkbox`
+ CV/Resume - `Checkbox`
+ Interview Secured - `Checkbox`
+ Interview Attended - `Checkbox`
+ References - `Checkbox`
+ Got the Job!!! - `Checkbox`
+ Actions - `Checkbox`

Checkboxes mark a stage of the job application process as completed.

tr td a job-details link "open"

.stage---completed--checkbox - Checks the checkbox - parent TD element get a toggle class of `.stage---completed`

Or


### Step 5 - Progress Stats - `stats-modal.php`

A list of details for the selected job.

+ `Job Title:`	Text Input
+ `Salary Details:`	Text Input
+ `Job Location:`	Text Input
+ `Contact Person:`	Text Input
+ `Contact Detail`	Text Input
+ `Description:`	Text Area - Extra notes and important details about the job

A clickable button allows the user to edit the job details on the page/modal. - `button button---job--edit`

+ Clicking the button (`button---job--edit`) - changes the text content from "Edit" to "Saved" puts the fields above into an editable state.

+ Clicking the button again (`button---job--edit`) - changes the text content back to "Edit" and the fields above go back into a non-editable state and saves the changes as they are now to the database.

[Back to Top](#sections)

### Step 6 - 

Logout button to goes back to register - landing page.  `username---and--logout li a`

### Step 7 - `how-to.php`

No interaction on this page. Read the copy.

---

Login - View List State (empty) ----> Add Job Details ----> View List State (has content)

Login - View List State (empty) ----> Add Job Details ----> View Job Details State ----> Edit Job Details ----> View List State (has content) ----> Progress Stats   ----> Delete Jobs ----> View List State (empty)

## Deployment and Installation

This project will be deployed to a server. Location TBC.

[Back to Top](#sections)