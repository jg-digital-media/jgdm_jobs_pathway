`Last Updated: 17-09-2025 - 17:03`

# Jobs Pathway
  + Keep track of your way to your professional life

## Sections 

[Development](#development) | 
[TODOs](#todos) |
[Deployment](#deployment) |

## TODOs: 

### (Completed - `4`)

+ `COMPLETED: 16-09-2025` - Wireframe and static interface planning for 'Job's Pathway App'
+ `COMPLETED: 16-09-2025` - Add a footer and header template part of the project
+ `COMPLETED: 17-09-2025` - Change table cell background colour of Table cell when the child checkbox is checked
+ `COMPLETED: 17-09-2025` - Custom variable values where required for the different root templates
+ `TODO:` - Add some simulated form validation to the login and register pages
  + `TODO:` - Standard border: red  - Validated border: green:  focused border: blue - `border: solid 1px color;`
+ `TODO:` - add a logout link along with username, to the top banner
+ `TODO:` - Implement Edit functionality for `job-details.php`.

+ `TODO:` - Persist the changes to checkboxes and table cell backgrounds
+ `TODO:` - move header styles to `header.scss`
+ `TODO:` - move footer styles to `footer.scss`
+ `TODO:` - Build `stats-modal.php` template file/page
+ `TODO:` - Build `add-job-form.php` template file/page
+ `TODO:` - Finish styling the login and register pages
+ `TODO:` - Apply `stage---completed` class to table cells where the containing checkbox is checked
+ `TODO:` - list.php - build markup for the main list page of jobs
+ `TODO:` - Add responsiveness to Job list table - `list.php`
+ `TODO:` - "How to use" template file/page
+ `TODO:` - style "how to use" page
+ `TODO:` - body---add--job styles
+ `TODO:` - Actions column - `list.php`  Might be useful as a mechanism to edit job profiles 
+ `TODO:` - `button---job--edit` - Change text content from "Edit" to Saved" when  button is clicked.
+ `TODO:` - Add a favicon
+ `TODO:` - Swap out mini logo in `top---banner--container`

[Back to Top](#sections)

## Development

[0.0.1](#001) | [0.0.2](#002) | [0.0.3](#003) | [0.0.4](#004) | [0.0.5](#005) 

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

### `0.0.4`

  + Focused on building the Job listing screen today. This is going to be a challenging project to do, which is partly why I'm looking forward to doing it. I added 6 rows of default data to the markup to test in its various states. That is to say, when a checkbox for a table cell is checked, that table cell's background will turn green.

  + Elsewhere, I started building the other screen states, like the progress states page and the "how to use" page. I'm still at the back of my mind thinking whether it should be modals or popups. I'm not sure yet. It might be a better UX experience to be modals, but when this app is complete, persistence of data will not be an issue since changes will be saved at the backend.

  + I've tried my best to keep the CSS up with the markup as I go and keep it organised. But there's still a lot of work to do for the Stat and Add Job pages and to keep the SASS files easily maintainable. I'm hopeful that by the end of `17th` (tomorrow) I'll have a solid foundation for the app's look and feel. `15-09-2025`

  #### `0.0.5`

  + I wanted to achieve a couple of main things today. Sort out a first solid draft of the look and feel of the app - which means sorting out the SASS variables and selectors for most aspects of the UI. Now there's some styling for the main application states, like the login and register pages, the list page and the job details page.

  + I'm becoming more and more minded to switch to using modals for things like adding new jobs and the progress stats page.  But the major functionality achievement of the day is getting the checkbox for each table cell to change colour when the child checkbox is checked. This gives people a visual cue that this stage of the job application process has been completed. Of course, there isn't any backend persistence for this yet, so it all resets when you refresh the page.  

  + A big part of the app is the job listing page, and a large part of future database interactions will go there. But it all represents a good step towards completing the prototype of the app.

[Back to Top](#development)

## Deployment

+ [Heroku](https://www.heroku.com/)
+ [Rails Tutorial](https://www.railstutorial.org/book) as a guide.


[Back to Top](#sections)