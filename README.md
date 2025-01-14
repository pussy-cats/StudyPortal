# Study Portal

![GitHub tag (latest by date)](https://img.shields.io/github/v/tag/WillTheDeveloper/StudyPortal) ![GitHub](https://img.shields.io/github/license/WillTheDeveloper/StudyPortal) ![Codecov](https://img.shields.io/codecov/c/github/WillTheDeveloper/StudyPortal) ![GitHub issues](https://img.shields.io/github/issues/WillTheDeveloper/StudyPortal) ![GitHub pull requests](https://img.shields.io/github/issues-pr/WillTheDeveloper/StudyPortal) ![GitHub commit activity](https://img.shields.io/github/commit-activity/m/WillTheDeveloper/StudyPortal)

Official Discord server - https://discord.gg/ZEkX2NPWVs

## About Study Portal

The idea behind Study Portal is to have one platform where students are able to work together on work where other people are doing similar subjects and help each other out.

## Project Roadmap

The full public roadmap is available to everyone. The link to it can be found here. [Study Portal Public Roadmap](https://github.com/orgs/Study-Portal/projects/2/views/1)

Development for this project can sometimes fall behind in regard to keeping up with the roadmap since essentially all the development is done by me and I have a full time job. I will try my best to keep up with the roadmap and keep it up to date. Occasionally people help but nothing significant.

| Q/Year  | Status         |
|---------|----------------|
| Q1 2022 | ✔️ Completed   |
| Q2 2022 | ✔ Completed    |
| Q3 2022 | ✔ Completed    |
| Q4 2022 | ✔️ In Progress |
| Q1 2023 | ❔ Planning     |
| Q2 2023 | ❔ Planning     |
| Q3 2023 | ❔ Planning     |
| Q4 2023 | ❔ Planning     |

## My goal and original idea

Before we get into the nifty-gritty of the project and my plans for the future, I first wanted to give a little back-story to how the idea came about and the situation that I was in at the time that I had come up with the idea. I am going to assume that you know nothing about me, so I will make sure to leave some pointers. During my time at college, I had to do a work placement and I had actually decided to take part of a work placement where we are all told that it was going to be really difficult, well long story short, it started with 12 people and finished with 2, including myself. During that project, I got exposed to Laravel which is an entire different story and quite a steep learning curve since I had never worked with any frameworks before. You can read about my experience with laravel up to yet [here](https://blog.willthedeveloper.co.uk/2022/02/13/laravel-one-year-later.html).

Anyway, if we fast-forward 12 months, I am finishing my work placement with over 700 hours of industry experience in the bag. At the time of writing this I can't remember what triggered it, but I had this idea to create a platform that allowed students to work together in one way or another. Teams is cool, but I feel like it's tailored more towards a business environment compared to a student environment which is one of the problems I was aiming to solve by developing this application.

But, long explanation, cut short, my primary goals were as follows;
* Create a platform that students could work together in some way to get work done more efficiently.
* Enable collaboration across all levels of study, ranging from college to university.
* Implement additional tools that other applications don't have to ensure that it tailors for students.
* Have something that is open source, so it can be developed over a long time.

## Study Portal features

*Tick means it has been finished*

- [X] Timetable - Place for students to create their own timetable and keep track of what lessons they have.
- [X] Assignments - This is where students can keep track of assignment work that they are doing.
- [X] Dashboard - Overview of all the stats that matter to students.
- [X] Community - Place where students can talk to each other with posts and support each other.
- [X] Kanban - Students being able to have their own personalised kanban to track progress of work or other stuff.
- [ ] Calendar - One place where meetings and events can be created and tracked.

If you want to see what is happening in more detail than follow this link: https://github.com/users/WillTheDeveloper/projects/5

More features will be added to this list soon. Progress has outpaced the documentation and roadmap a little.

## How to install/run server

### Prerequisites

- We recommend using [docker](https://www.docker.com/products/docker-desktop/) for hosting a local database.
- Have PHP 8 or later installed and setup.
- A database of some kind to develop on.
- Your favourite IDE

### Windows in-depth setup guide

1. Download [Docker](https://www.docker.com/products/docker-desktop/)
2. Setup [WSL2 kernel update](https://docs.microsoft.com/en-us/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package)
3. Setup your [IDE](https://code.visualstudio.com)
4. Download [PHP](https://windows.php.net/download#php-8.1) and place it inside the root of your ```C:``` drive extracted.
5. Enable the following PHP extensions inside the ```php.ini``` file (Further instructions can be found in the file itself):
    - bz2
    - curl
    - ftp
    - fileinfo
    - mbstring
    - mysqli
    - openssl
    - pdo_mysql
    - pdo_pgsql
    - pdo_sqlite
    - pgsql
    - shmop
6. Install [composer](https://getcomposer.org/download/) using the Windows installer found at the top of the page.
7. Download the ```.msi``` installer for windows, using the LTS version of [Node](https://nodejs.org/en/download/).
8. Decide what you want to call your project. We will refer to it now as ```$project```.
9. Initialise a project by running ```composer create-project laravel/laravel $project``` in powershell.
10. Enter the directory of your new project via powershell by running ```cd ./$project```
11. Install composer packages by running ```composer install```
12. Install NPM packages by running ```npm install```
13. Setup environment file by running ```cp .env.example .env```
14. Generate your application key: ```php artisan key:generate```
15. Open docker desktop and wait till it has initialised.
16. Run this command in command line: ```docker pull postgres``` then run ```docker pull dpage/pgadmin4```
17. Inside docker, navigate to ```images``` tab on the left and find postgres in the list.
18. Hover your mouse over ```postgres``` and press the ```run``` button located to the right of it.
19. In the menu, dropdown the section which says ```optional settings``` and enter the following information:
    - ```container name``` - Give the container a name, this can just be ```postgres```
    - ```ports``` - Give the container a port which you will use to access the container, this can just be ```5432``` which is the default.
    - In the environment variables section create the following:
        - ```POSTGRES_PASSWORD``` - Set this as the variable then in the value, create a no-space password which you will use to access the database.
20. Press ```run``` to start the postgres server.
21. If you are connecting your application to a database, add the URL and credentials to ```.env```:
    - ```DB_HOST``` - Using docker, this would just be ```localhost```.
    - ```DB_CONNECTION``` - In this example, we use postgres so ```pgsql``` would go here.
    - ```DB_PORT``` - This would be whatever you set as the port on docker when you created the container.
    - ```DB_DATABASE``` - Name of the database that we will be creating.
    - ```DB_USERNAME``` - For this example, this is simply ```postgres```.
    - ```DB_PASSWORD``` - Whatever you set the docker container environment variable to.
22. Run ```php artisan migrate``` to set up the database with any migrations that you might have.
23. Compile assets by ```npm run dev```
24. Start the server: ```php artisan serve```
25. Visit your server on http://localhost:8000

*You may get an error about a missing .env file which I do not source control since it has credentials in it.*

## Versioning

This repository follows semantic versioning: MAJOR . MINOR . PATCH.

The versioning has been introduced into the repository a bit late but has now been implemented and will be used from now on.

- [X] Alpha (Not part of versioning)
- [ ] Beta (Currently in Beta)
- [X] Public Beta Testing
- [ ] Initial release (Date TBD)

## Testing

Testing should be completed and successful before accepting any pull requests into the repository.

Tests can be run via the command line using the following command in the root directory of the project:

```
php artisan test
```

Tests can be located inside ```/tests/feature/``` directory.

## Notifications

Study Portal will have a lot of cross application notification integration that initially will be heavily based around JSON webhooks.

Below are a list of methods that you will be able to receive notifications:

- [ ] Microsoft Teams - This has been requested upon some feedback that I received and made it clear that it would be quite a good idea and an alternative way to get into contact with students regarding any new assignments that they may have.
- [ ] Email - This would be one of the main ways of notifying students of updates on the platform that would be targeted towards them.
- [ ] Text message - I aim for this to be one of the other notifying channels that most of the students would use since I am assuming that most students would have phones that they can check when they get a notification.
- [X] Discord - This is the main notification channel for testing initially but could be used on a wider scope on a per-person basis but would require webhook relationships with users which is not a thing yet. Further investigation is required for this.
- [ ] Twitter - This might not make it to the final release since I cannot see it being used.

*Suggestions are welcome for other notification channels but would need some sort of justification.*

## Issue tracking

*I am still yet to create the templates for issues*

If you come across any issues on the website that is causing you problems, please take a moment to either email me if you do not have a GitHub account and choose not to create one or feel free to create an issue on this repository which will be reviewed and looked into resolving. You may be asked for further details on it or how to recreate the issue so please make sure to check your GitHub notifications a few days after you submit the issue. You can email me at: *willthedeveloper13@gmail.com*.

You can do this in the issues tab. If you are not sure of where this is then here is a link - https://github.com/WillTheDeveloper/StudyPortal/issues

## Feature suggestions

- If you have the skills to build it yourself then you should create a pull request with it. If you need some information or anything that is database related then contact me directly.
- If you would just like to suggest something then, create a discussions page, and we can look into implementing it.

## Contribute to Study Portal

You can contribute to this repository by forking it, making the changes that you want and then placing a pull request with all the details of what you have changed/added/deleted. Any questions, please visit my profile and email me.

## What does it look like at the moment?

**PLEASE NOTE THAT THIS IS NOT THE FINAL DESIGN AND IS SUBJECT FOR A OVERHAUL REDESIGN AND IS JUST SHOWING A CONCEPT**

Here are some images of the fundamental structure of the application at the minute.

### Student Dashboard

**UPDATE - THIS PAGE IS CURRENTLY HAVING AN HEAVY REDESIGN**

You can preview this redesign on a different branch linked here - https://github.com/WillTheDeveloper/StudyPortal/tree/redesigned-backend

On this page, students will be able to get an overview of what is happening. Here they will be able to view an overview of key flags for that individual, which will include things such as the students attendance etc. Additionally, other information will be available here such as updates or notifications that the student may receive regarding anything that they may need updating on, such as assignment updates etc.

![image](https://user-images.githubusercontent.com/78596837/144643845-79159886-2273-4514-b8c7-34bc3d6a379c.png)

### Student Timetable

This is where students will be able to view their timetables and edit them if they need to. They will also be able to create their own if they have not been assigned one. **This image is due for an update as this has changed a lot.** Here they will be able to manage and view their timetable for the week. They will be able to click on the slot that they want to query and view extra information about it. I am also going to link the timetable to assignments so when they view it or look at the details, assignment pointers can be found there too as a subtle reminder.

![image](https://user-images.githubusercontent.com/78596837/144643904-054571a0-73e8-4a9c-8bbe-cca319096783.png)

### Student Assignments

This is where students will be able to view all the assignments they have. Which will be followed by an image of where students can view their assignment details. Here they are able to view details of assignments that tutors or staff have assigned to them. They will be able to hand in work and tutors will be able to see this on their own dashboard interface.

![image](https://user-images.githubusercontent.com/78596837/144643958-f0054008-a4eb-468e-a242-bb3586da5328.png)

### Student Kanban (New feature)

This is where students will be able to create their own kanban boards to allow them to organise tasks and work into groups for themselves. The idea behind this is to support them by giving them a tool where they can possibly time manage their tasks and other things they are doing by adding their own tasks and syncing it with assignments. Additional information will be able to be viewed when clicking on the task that you create. These tasks can be associated with other things such as subjects and assignments if they felt it was necessary. In the future, these will be sharable with other people with set permissions on each.

![image](https://user-images.githubusercontent.com/78596837/144643998-7114bbe2-199d-4b00-90db-be85ab0f098b.png)

Details view of the kanban board. **Still in early development.**

![image](https://user-images.githubusercontent.com/78596837/141192867-5e9e84ad-0ff1-497d-8c0a-05892b1b31b3.png)

### Student Community

This is where students will be able to collaborate on work and ask each other things related to their own subjects.

![image](https://user-images.githubusercontent.com/78596837/144644088-b891c412-3ad7-45d5-9ba0-10c6cd6c724b.png)

### Regarding tutors

In regard to tutor, the views will be similar with additional functionality. There are security measures in place to ensure that there is no access from a student to tutors tools.

### Tutors Group Management

On this page, tutors can create groups of students which could be different classes or such. Groups are groups of students that can be chosen to assign assignments to be tutors, this will be shown further down.

![image](https://user-images.githubusercontent.com/78596837/141193329-c4173e52-628b-46d0-a156-09fbc4f964b9.png)

This is where tutors can view who is in the group and edit anything they need to edit regarding the group.

![image](https://user-images.githubusercontent.com/78596837/141193570-1793e005-8623-4854-a01e-087584e5c51c.png)

Here is where tutors can select different students to add to the group.

![image](https://user-images.githubusercontent.com/78596837/141193639-76dd275f-a2c2-41a5-92e2-a1de050a91df.png)

### Tutors Assignment Management

Tutors will have additional options to assign work to students, this is where they will do it. Which can be located inside the assignments tab in the navigation bar.

![image](https://user-images.githubusercontent.com/78596837/141193793-9318ce3e-d6a4-4337-8331-909693797db5.png)

Finally, tutors can see who has seen the assignment and when they have submitted the students work along with editing the assignment information.

![image](https://user-images.githubusercontent.com/78596837/141193914-05bba580-b970-4ac0-9f58-78fe3b9c3dd4.png)
