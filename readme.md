`Last Updated: 21-09-2025 - 17:57`

# Jobs Pathway
  + Keep track of your way to your professional life
    + Prototype URL: https://projects.jonniegrieve.co.uk/jobs_pathway/
    + Repository URL: https://github.com/jg-digital-media/jgdm_jobs_pathway

## Sections 

[Development](#development) | 
[TODOs](#todos) |
[User Flows](#user-flows) |
[Deployment](#deployment) |

## TODOs: 

### (Tasks: `64` - Completed - `21`)

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


+ `TODO:` Download Rails and check GitBash/Command Line for Ruby and Rails Gems
+ `TODO:` Create a new Rails project
+ `TODO:` Remove files and add them back in, in a directory called `prototype`
+ `TODO:` Get a feel for development process with Rails. 
+ `TODO:` Create a functional Rails Schema for the backend database.


+ `TODO:` - Implement modal areas for `job-details.php`,`add-job-form.php`, `stats-modal.php`,`how-to.php`.
+ `TODO:` - modal styles
+ `TODO:` -  style "how to use" page
+ `TODO:` - Implement Edit functionality for `job-details.php`.
  1. `TODO:` - Edit button will switch fields to an editable state where values can be changed.
  2. `TODO:` - `button---job--edit` - Change text content from "Edit" to Saved" when  button is clicked.
  3. `TODO:`  At this point, the edit button text content will change from "Edit" to "Save"
  4. `TODO:`  Save button will save the changes to the database and change text content back to "Edit"
  5. `TODO:`  "Tooltip" activated to show the user that the changes have been saved!
+ `TODO:` - Persist the changes to checkboxes and table cell backgrounds
+ `TODO:` - Reduce lines of code in Sass files where possible
  + `TODO:` - May need to fill table with classes to get the desired effect.
+ `TODO:` - Add responsiveness to Job list table - `list.php` and `list-empty.php`
+ `TODO:` - Actions column - `list.php`  Might be useful as a mechanism to edit job profiles 
  + `TODO:` - Consider Deleting Actions Column
+ `TODO:` - `motivation---message`- load a different message as its text content whenever the user loads the page.
+ `TODO:` - Add a favicon
+ `TODO:` - Swap out mini logo in `top---banner--container`
+ `TODO:` - Add copy "How to use" template file/page `how-to.php`
+ `TODO:` - Add a "How to use" template file/page
+ `TODO:` - style "how to use" page
+ `TODO:` - Plan a Ruby Rails database schema
+ `TODO:` - Integrate Ruby on Rails into the project (Ruby Templates)
  + `TODO:` - Plan Screen States - login, register, list (no jobs listed at first), add job, job details, stats dashboard, how to use
+ `TODO:` - `add-job-form.php` sync up placeholder and input text in form elements
+ `TODO:` - Tooltips throughout the app
+ `TODO:` - Delete job or jobs from the list page via the stats page/modal - `button button---delete--jobs`
+ `TODO:` - Welcome user to the app and then invite to register `register.php`.
+ `TODO:` - Style register and login buttons `register.php` and `login.php`
+ `TODO:` - input elements "do not have an autocomplete attribute" - add autocomplete="off" to all input elements
+ `TODO:` - Progress Stats Button an #id `btn---progress--stats`
+ `TODO:` - How to Use Button an #id `btn---how--to`
+ `TODO:` - Rails: Check for existing usernames and email addresses when registering and logging in
+ `TODO:` - Back-end password validation required - Check for the correct password
+ `TODO:` - Customise validation and success error messages in app.js
+ `TODO:` - Fade out custom validation messages after going out of element focus
+ `TODO:` - Remove filenames and .filename class and selector from project at the appropriate time.
+ `TODO:` - Require stronger passwords for the app - e.g. at least 8 characters (include special characters, uppercase, lowercase, numbers)

[Back to Top](#sections)

## Development

[0.0.1](#001) | [0.0.2](#002) | [0.0.3](#003) | [0.0.4](#004) | [0.0.5](#005) | [0.0.6](#006) | [0.0.7](#007)

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

### `1.0.0`

  + All weekend, I've been working on plans for integrating the app with Rails. While I was doing so, I realised just how much of an upheaval it is to use Rails compared to a PHP Prototype. Rails is an `MVC` framework (**M**odel **V**iew **C**ontroller), and recreating the visual interface of the app in Rails would be a massive undertaking - whether using AI or not. This almost caused enough jitters to change my plans for this project.
  
  + Plans and plans and plans. It's time to do. The purpose of this note is to try and nail down a solid plan for getting the app going and refining a development process.
    + Download Rails and check GitBash for Ruby and Rails Gems
    + Create a new Rails project - Now here's the nub of it. What Rails will do is put some directories and files into the project root. I'll probably need to empty the PHP prototype files while I do that, and then maybe add them back in, in a directory called `prototype`
    + Then, I need to learn how to rebuild the app using Rails syntax. And we'll need to create a functional Rails Schema for the backend database.
    + This will involve learning about adding gems for authentication and database management.
    + Putting all of this into a chat prompt in Cursor might do the trick to get me started on all of this.


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

## Deployment

+ [Heroku](https://www.heroku.com/)
+ [Rails Tutorial](https://www.railstutorial.org/book) as a guide.


[Back to Top](#sections)