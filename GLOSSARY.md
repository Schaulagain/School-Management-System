# School Management Web System

A portal for a made-up college where admins, staff and students each see their own dashboard.

## People

**Admin**:
Someone who runs the college's records: people, modules, timetables and college-wide announcements.

**Staff**:
A teacher who leads one or more modules. Stored in the `module_leaders` table.
_Avoid_: module leader (in prose), teacher, lecturer

**Student**:
Someone enrolled in modules who sees their own timetable, grades and attendance.

## Teaching

**Module**:
One course a student takes, led by a member of staff.
_Avoid_: course, subject, class

**Assessment**:
A piece of work set in a module that gets a grade.
_Avoid_: assignment (in prose), task

**Discussion**:
A module's question-and-answer board, where students ask and staff reply.
_Avoid_: forum, chat

**Announcement**:
A notice posted to the whole college by an admin, or to one module by its staff.
_Avoid_: notice, post

**Archive**:
Hiding an old record from day-to-day lists while keeping it in the database.
_Avoid_: delete, deactivate
