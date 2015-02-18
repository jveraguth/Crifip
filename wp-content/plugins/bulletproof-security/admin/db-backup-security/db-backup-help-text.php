<?php
if ( !current_user_can('manage_options') ) { 
		header('Status: 403 Forbidden');
		header('HTTP/1.1 403 Forbidden');
		exit();
}
	
	/**	DB Backup **/
	$bps_modal_content1 = '<strong>'.__('This Read Me Help window is draggable (top) and resizable (bottom right corner)', 'bulletproof-security').'</strong><br><br><strong><font color="blue">'.__('Backup Job settings and other information about backups are logged in the DB backup Log. The sql dump backup file in the DB Backup zip file/archive also contains information about the Backup Job.', 'bulletproof-security').'</font></strong><br><br><strong>'.__('DB Backup & Security Guide & Troubleshooting: http://forum.ait-pro.com/forums/topic/database-backup-security-guide/', 'bulletproof-security').'</strong><br><br><strong>'.__('How To Create a Backup Job, Run a Backup Job, Download a Backup File and Delete a Backup File', 'bulletproof-security').'</strong><br><strong>'.__('NOTE: ', 'bulletproof-security').'</strong>'.__('Before creating a Scheduled Backup Job please read the - ', 'bulletproof-security').'<strong>'.__('Scheduled Backup Jobs General Information and Notes', 'bulletproof-security').'</strong>'.__(' help section.', 'bulletproof-security').'<br><br>'.__('1. Click the Create Backup Jobs accordion tab.', 'bulletproof-security').'<br>'.__('2. Enter a Description|Backup Job Name and select the Form option choices that you want.', 'bulletproof-security').'<br>'.__('3. Click the Create Backup Job|Save Settings button to save your Form option choices and create your Backup Job.', 'bulletproof-security').'<br>'.__('4. Click the Backup Jobs - Manual|Scheduled accordion tab, click on the Run checkbox for the Backup Job that you want to run and click the Run Job|Delete Job button.', 'bulletproof-security').'<br>'.__('5. Your Backup files are displayed under the Backup Files - Download|Delete accordion tab.', 'bulletproof-security').'<br>'.__('6. You can Download Backup files to your computer by clicking the Download link for that Backup file.', 'bulletproof-security').'<br>'.__('7. You can delete Backup files by clicking the checkbox for the Backup file that you want to delete and then click the Delete Files button.', 'bulletproof-security').'<br><br><strong>'.__('Backup Jobs - Manual|Scheduled Accordion Tab', 'bulletproof-security').'</strong><br>'.__('- Displays the Description|Job Name, Delete and Run Checkboxes, Job Type, Frequency, Last Backup, Next Backup, Email Backup and Job Created table columns.', 'bulletproof-security').'<br>'.__('- Job Type displays either Manual or Scheduled.', 'bulletproof-security').'<br>'.__('- Frequency displays either Manual, Hourly, Daily, Weekly or Monthly.', 'bulletproof-security').'<br>'.__('- Last Backup displays either Backup Job Created or a timestamp when the last backup job was run.', 'bulletproof-security').'<br>'.__('- Next Backup displays either Manual, Hourly or a combination of user-friendly next job run times: 5PM, Sunday 5PM, 30th 5PM.', 'bulletproof-security').'<br>'.__('- Email Backup displays either Manual, Yes, Yes & Delete, No or Send Email Only.', 'bulletproof-security').'<br>'.__('- Job Created displays the timestamp for when the Backup Job was created.', 'bulletproof-security').'<br><br><strong>'.__('Backup Files - Download|Delete Accordion Tab', 'bulletproof-security').'</strong><br>'.__('- Displays the Backup Filename, Delete Checkbox, Download Links, Backup Folder, Size and Date|Time table columns.', 'bulletproof-security').'<br>'.__('- Backup Filename displays the name of the backup zip file.', 'bulletproof-security').'<br>'.__('- Backup Folder displays the backup folder path.', 'bulletproof-security').'<br>'.__('- Size displays the size of the backup zip file.', 'bulletproof-security').'<br>'.__('- Date|Time displays the date and time that the backup zip file was created.', 'bulletproof-security').'<br><br><strong>'.__('Create Backup Jobs Accordion Tab', 'bulletproof-security').'</strong><br>'.__('- Displays a dynamic DB Table Name checkbox form used to select the database tables that you want to backup.', 'bulletproof-security').'<br>'.__('- Description|Backup Job Name textbox to enter a description for your Backup Job.', 'bulletproof-security').'<br>'.__('- DB Backup Folder Location textbox with a default Obfuscated & Secure BPS Backup Folder location.', 'bulletproof-security').'<br>'.__('- DB Backup File Download Link|URL textbox with a default download URL path.', 'bulletproof-security').'<br>'.__('- Backup Job Type: Manual or Scheduled select dropdown option to choose either a Manual or Scheduled Backup job type.', 'bulletproof-security').'<br>'.__('- Frequency of Scheduled Backup Job (recurring) select dropdown option to choose either N/A, Hourly, Daily, Weekly or Monthly backup job frequency.', 'bulletproof-security').'<br>'.__('- Hour When Scheduled Backup is Run (recurring) select dropdown option to choose a start time for a scheduled backup job: N/A and 12AM through 11PM.', 'bulletproof-security').'<br>'.__('- Day of Week When Scheduled Backup is Run (recurring) select dropdown option to choose a weekday day when a scheduled backup job is run: N/A and Sunday through Monday.', 'bulletproof-security').'<br>'.__('- Day of Month When Scheduled Backup is Run (recurring) select dropdown option to choose a day of the month for a start time when a backup job is run: N/A and 1st through 30th.', 'bulletproof-security').'<br>'.__('- Send Scheduled Backup Zip File Via Email or Just Email Only select dropdown option to choose either to email a zip backup file, do not email backup zip file, email and delete zip backup file or just send an email that backup job has completed/been run.', 'bulletproof-security').'<br>'.__('- Automatically Delete Old Backup Files select dropdown option to choose Never delete old backup files, delete backup files older than 1 day, 5 days, 10 days, 15 days, 30 days, 60 days, 90 days or 180 days. This is an independent option meaning that it can be set/changed/saved independently and is not specific to any created Backup Jobs.', 'bulletproof-security').'<br>'.__('- Turn On|Off All Scheduled Backups (override) select dropdown option to choose either turn on all scheduled backups or turn off all scheduled backups. This an override option that prevent any/all scheduled backup jobs from being run. This is an independent option meaning that it can be set/changed/saved independently and is not specific to any created Backup Jobs.', 'bulletproof-security').'<br><br><strong>'.__('Rename|Create|Reset Tool', 'bulletproof-security').'</strong><br>'.__('If you would like to change/rename the default BPS DB Backup folder name either use the automatically randomly generated new DB Backup folder name or you can edit the new DB Backup folder name in the Rename|Create|Reset DB Backup Folder Name: text box and click the Rename|Create|Reset button. Only use these valid characters: Letters A to Z uppercase or lowercase, Numbers 0-9 and/or a dash "-" or an underscore "_". If you have DB Backup files they will not be affected/changed. The DB Backup File Download Link|URL path will also be changed and have the new DB Backup folder name in the URL path.', 'bulletproof-security').'<br><br>'.__('The Rename|Create|Reset Tool can also be used for troubleshooting problems with the automatic BPS DB Backup folder creation. If the BPS DB Backup folder was not automatically created already then use this tool to try and create a new DB Backup folder. You will see an error message displayed with things to check that could be preventing the DB Backup folder from being successfully created.', 'bulletproof-security').'<br><br><strong>'.__('Scheduled Backup Jobs General Information and Notes', 'bulletproof-security').'</strong><br>'.__('- Scheduled Backup Cron Jobs are synchronized to run exactly on the hour: 5:00pm, 6:00pm, 7:00pm. The Backup Cron job actual run times may fluctuate slightly. That is just the normal nature of WordPress Crons. The DB Backup Cron is designed to resynchronize itself to the top of the hour on the hour.', 'bulletproof-security').'<br><br>'.__('- Today is 12AM to 11:59PM. If you want a Daily scheduled backup job to start running for the first time at 12AM tomorrow (which seems like today, but is actually tomorrow) then choose the Day of the Week that is tomorrow. 12AM tomorrow is the start time and the Daily scheduled backup job will continue to be run at 12AM every day after the start time that you choose.', 'bulletproof-security').'<br><br>'.__('- The Create Backup Jobs Form allows for the widest possible combinations of start times for scheduled backup jobs. The start time choices are: Frequency, Hour, Day of Week and Day of Month and have many different possible logical combinations that can be chosen. See this help section before creating any scheduled backup jobs - ', 'bulletproof-security').'<strong>'.__('Best Logical Choices For Start Times When Scheduling Backup Jobs With the Create Backup Jobs Form', 'bulletproof-security').'</strong><br><br>'.__('- You can schedule multiple backup jobs for the same frequency. Example: You can create/schedule a backup job to run Weekly at 8PM on Sunday and can create/schedule a backup job to run Weekly at 10PM on Wednesday. Scheduled backup jobs run based on the time the scheduled backup job is scheduled to run - there are no limitations with scheduling multiple backup jobs.', 'bulletproof-security').'<br><br><strong>'.__('Best Logical Choices For Start Times When Scheduling Backup Jobs With the Create Backup Jobs Form', 'bulletproof-security').'</strong><br>'.__('These are some common logical option choices for Creating/Scheduling Backup Jobs. There are other possible combinations of option settings/start times, but these are intended to be simple examples of common logical option setting choices.', 'bulletproof-security').'<br><br><strong>'.__('Hourly Backup Job', 'bulletproof-security').'</strong><br>'.__('- If you choose Hourly for the Frequency and you do not pick a start Time/Hour when the Backup Job is next run. The next Backup Job will be run at the top of the next hour. Example: If the time now is 4:30PM then the next backup job will be run at 5PM, then 6PM, then 7PM, etc.', 'bulletproof-security').'<br>'.__('- If you choose Hourly for the Frequency and pick a start Time/Hour when the Backup Job is next run. The next Backup Job will be run at the start Time/Hour that you chose. Example: If the time now is 4:30PM and you chose 8PM for the start Time/Hour then the next backup job will be run at 8PM, then 9PM, then 10PM, etc.', 'bulletproof-security').'<br><br><strong>'.__('Daily Backup Job', 'bulletproof-security').'</strong><br>'.__('- If today is Tuesday and you want to schedule a Backup Job to run at 12AM daily/every night. You would choose Daily for the Frequency, start Time/Hour of 12AM (12AM is tomorrow) and Wednesday for the day of the week for the start time when the Backup Job is next run. The next Backup Job will be run at 12AM Wednesday tonight/tomorrow and at 12AM every night/morning.', 'bulletproof-security').'<br><br><strong>'.__('Weekly Backup Job', 'bulletproof-security').'</strong><br>'.__('- If you want to schedule a Backup Job to run Weekly at 12AM every Sunday. You would choose Weekly for the Frequency, start Time/Hour of 12AM and Sunday for the day of the week for the start time when the Backup Job is next run. The next Backup Job will be run at 12AM next Sunday and every Sunday at 12AM.', 'bulletproof-security').'<br><br><strong>'.__('Monthly Backup Job', 'bulletproof-security').'</strong><br>'.__('- If you want to schedule a Backup Job to run Monthly on the 30th of each month at 11PM. You would choose Monthly for the Frequency, start Time/Hour of 11PM and 30th for the day of the month for the start time when the Backup Job is next run. The next Backup Job will be run on the 30th of this month at 11PM and each month on the 30th at 11PM.', 'bulletproof-security').'<br><br><strong>'.__('404 errors when trying to download zip files or if you have changed the DB Backup Folder Location', 'bulletproof-security').'</strong><br>'.__('On some web hosts (Go Daddy) if you have a WordPress subfolder website installation: Example: Main domain is example.com and Subfolder WordPress site is example.com/wordpress-subfolder-website/ then the download link will not work correctly and you will see 404 errors when trying to download zip backup files. Your options are to not change the default backup folder path for your subfolder site and download zip backup files via FTP or you can use/add the backup folder path for your main site instead of the default backup folder path for your subfolder site. You would also change the DB Backup File Download Link|URL to your main site\'s backup folder Link/URL path. What this means is that DB Backups for both your main site and your subfolder site will be saved/stored under your main site\'s backup folder.', 'bulletproof-security').'<br><br>'.__('If you are seeing 404 errors after changing the DB Backup File Download Link|URL and/or the DB Backup Folder Location then make sure that you have entered the correct folder path and also the correct link/URL paths for where your DB backup files are being saved/stored. The DB Backup File Download Link|URL path MUST end with/have a trailing slash. Example: http://www.example.com/wp-content/bps-backup/backups_xxxxxxxxxx/', 'bulletproof-security');
	
	/** DB Backup Log **/
	$bps_modal_content2 = '<strong>'.__('This Read Me Help window is draggable (top) and resizable (bottom right corner)', 'bulletproof-security').'</strong><br><br><strong>'.__('DB Backup Log General Information', 'bulletproof-security').'</strong><br>'.__('Your DB Backup Log file is a plain text static file and not a dynamic file or dynamic display to keep your website resource usage at a bare minimum and keep your website performance at a maximum. Log entries are logged in descending order by Date and Time. You can copy, edit and delete this plain text file.', 'bulletproof-security').'<br><br><strong>'.__('NOTE: ', 'bulletproof-security').'</strong>'.__('Email Alerting and Log file options are located in S-Monitor in BPS Pro instead of being on the Login Security page, Security Log & DB Backup Log pages. The Email Alerting & Log File Options Form is identical on the Login Security, Security Log & DB Backup Log pages in BPS free. You can change and save your email alerting and log file options on any of these pages.', 'bulletproof-security').'<strong><br><br>'.__('What is Logged in The DB Backup Log?', 'bulletproof-security').'</strong><br>'.__('Depending on your DB Backup settings, log entries will be logged anytime you run a Manual Backup Job or whenever a Scheduled Cron Backup Job is run. Logs Backup Job Settings, Completion Time, Memory Usage, Zip Backup File Name, Timestamp and other DB Backup information. If you have chosen the option to automatically delete old zip backup files then the zip backup file name and timestamp will be logged when old zip backup files are automatically deleted. When you create a new Backup Job your Backup Job Settings are logged/saved in the DB Backup Log.', 'bulletproof-security').'<strong><br><br>'.__('DB Backup Log File Size', 'bulletproof-security').'</strong><br>'.__('Displays the size of your DB Backup Log file. 500KB is the optimum recommended log file size setting that you should choose for your log file to be automatically zipped, emailed and replaced with a new blank DB Backup Log file.', 'bulletproof-security').'<br><br><strong>'.__('DB Backup Log Last Modified Time', 'bulletproof-security').'</strong><br>'.__('Displays the last time a DB Backup Log entry was logged.', 'bulletproof-security').'<br><br><strong>'.__('Delete Log Button', 'bulletproof-security').'</strong><br>'.__('Clicking the Delete Log button will delete the entire contents of your DB Backup Log File.', 'bulletproof-security');

	/** DB Table Prefix Changer **/
	$bps_modal_content3 = '<strong>'.__('This Read Me Help window is draggable (top) and resizable (bottom right corner)', 'bulletproof-security').'</strong><br><br><strong>'.__('Safety Precautions & Procedures', 'bulletproof-security').'</strong><br>'.__('Changing the DB Table Prefix name is a very simple thing to automate. This tool has been extensively tested and is safe and reliable, but anytime you are modifying your database you should ALWAYS perform a database backup as a safety precaution.', 'bulletproof-security').'<br><br><strong>'.__('Compatibility', 'bulletproof-security').'</strong><br>'.__('Works on all WordPress, BuddyPress and bbPress site types: Single standard WordPress installations and Network/Multisite installations.', 'bulletproof-security').'<br><br><strong><font color="blue">'.__('Note: The DB Table Names & Character Length Table needs to be a clickable Form button and is not displayed permanently open because that would cause the entire DB Backup & Security page (all Tab pages) to perform poorly/sluggishly on large websites.', 'bulletproof-security').'</font></strong><br><br><strong>'.__('Other Prefix Changes Explained', 'bulletproof-security').'</strong><br>'.__('In your WordPress xxxxxx_options DB Table there is 1 value that will be changed in the option_name Column: xxxxxx_user_roles. In your WordPress xxxxxx_usermeta DB Table there are several values that will be changed in the meta_key Column. These are user/user ID specific values based on individual user\'s Metadata stored in the xxxxxx_usermeta DB Table. Metadata is user specific saved settings, such as individual user\'s capabilities, permissions, saved screen options settings, etc.', 'bulletproof-security').'<br><br><strong>'.__('Security measure vs Anti-nuisance measure', 'bulletproof-security').'</strong><br>'.__('By changing your Database Table Prefix name you will probably stop a lot of random Bot probes from doing any further reconnaissance against your website and causing unnecessary slowness from those random Bot probes. Changing the DB Table Prefix name is not really a security measure since if a hacker wants to find/get your DB Table Prefix name he/she will be able to find/get that information.', 'bulletproof-security').'<br><br>'.__('The Anti-nuisance benefits alone are worth changing your DB Table Prefix name. BPS has many layers of security protection that protect your Database against SQL Injection attacks and the DB Monitor will alert you if somehow a hacker has made it past all the outer layers of BPS Database security protection and changed or modified your Database in any way.', 'bulletproof-security').'<br><br><strong>'.__('Correct Usage & Technical Info.', 'bulletproof-security').'</strong><br>'.__('If you want to create your own DB Table Prefix name or add additional characters to the randomly generated DB Table Prefix name then ONLY use lowercase letters, numbers and underscores in your DB Table Prefix name. The standard MySQL DB Table naming convention is xxxxxx_ where the x\'s should be ONLY lowercase letters and/or numbers and the DB Table Prefix name should end with an underscore.', 'bulletproof-security').'<br><br>'.__('The maximum length limitation of a DB Table name, including the table prefix is 64 characters. See the DB Table Names & Character Length Table for character lengths of your database table names.', 'bulletproof-security').'<br><br>'.__('If a plugin or theme is using "wp_" in its DB Table naming conventions, example: wp_wp_some_plugin_table_name, then the DB Table Prefix Changer tool will NOT change anything besides the first wp_ in the DB Table name - The DB Table Prefix Change will ONLY change the actual start/prefix of a DB Table name.', 'bulletproof-security').'<br><br>'.__('To change your DB Table Prefix name back to the WordPress default DB Table Prefix name, enter wp_ for the DB Table Prefix name.', 'bulletproof-security');

?>