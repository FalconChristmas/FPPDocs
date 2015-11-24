# Frequently Asked Questions

- [What is FPP?](#what-is-fpp)
- [Who dropped the Pi and why?](#who-dropped-pi)
- [Why isn't the acronym just FP for Falcon Player](#why-not-fp)
- [How much does the Falcon Player cost?](#fpp-cost)
- [What hardware do I need?](#what-hardware)
- [Where can I get the hardware?](#where-hardware)

<a name="what-is-fpp"></a>
## What is FPP?

The Falcon Player (FPP) is a lightweight, optimized, feature-rich sequence player designed to run on low-cost SBC's (Single Board Computers). It was originally created to run on the $35 Raspberry Pi, hence the middle 'P' in the short name. FPP is a software solution that you download and install on hardware which can be purchased from numerous sources around the internet. FPP aims to be controller agnostic, it can talk E1.31, DMX, Pixelnet, and Renard to hardware from multiple hardware vendors, including controller hardware from Falcon Christmas available via COOPs or in the store on FalconChristmas.com.

<a name="who-dropped-pi"></a>
## Who dropped the Pi and why?

The Falcon Player was originally created to run on the Raspberry Pi but it became clear early on during the Falcon Player's lifetime that there was a desire to support running FPP on hardware other than the Pi to give user's a choice of hardware and to ensure the project could go on if a single hardware vendor were to disappear or break compatibility. The decision was made to change from calling the application the 'Falcon Pi Player' to now calling it the 'Falcon Player'.

<a name="why-not-fp"></a>
## Why isn't the acronym just 'FP' for 'Falcon Player' after you dropped the 'Pi'?

Because it was too many links to go back and change from 'FPP' to 'FP'. We are a victim of our own success. We could revisit this decision and call it 'FP' at a later time, but for some, 'FPP' just rolls off the tongue better than 'FP'.

<a name="fpp-cost"></a>
## How much does the Falcon Player cost?

The software is free and always will be free. You just need to purchase the hardware. We do not sell the Raspberry Pi or other hardware necessary to run the Falcon Player itself. Falcon Christmas does offer COOPs of our controller hardware which FPP can talk to, but you do not need to use Falcon controllers with the FPP and vice versa you do not need to use FPP with Falcon controller hardware.

<a name="what-hardware"></a>
## What hardware do I need?

Required Items:
Raspberry Pi Model B or B+
SD memory card for FPP OS image
USB flash drive for sequences, audio and video media files, event scripts, logs, etc.
Power Supply for the Pi (Don't skimp on this. It needs a 5vdc 2A microUSB)
Optional Items:
Wireless USB dongle
RasClock Real Time Clock Module
USB Hub
USB HDD
USB serial dongles
FPD - Falcon Pixelnet/DMX (/Renard) adapter

<a name="where-hardware"></a>
## Where can I get the hardware?

Here is an incomplete list of vendors you can purchase a Raspberry Pi from. SD cards, USB flash drives, and USB power supplies can be purchased from several of them as well, including packages deals which include nearly everything you need to get up and running except for a USB flash drive. This is not an exhaustive list and the fact that a vendor is listed here does not express any endorsement by Falcon Christmas.
Amazon
MCM Electronics
Creatron Inc (for those people North of the border)

<a name="whats-on-usb"></a>
## Other than the network settings, sequence files, and music/videos, what is on the USB stick? Is there anything tying the USB stick to the SD Card or the physical Pi?

No

## How do I check for the latest player code?

If you are connected to the net, each boot up will pull the latest code (unless disabled in the settings). You can always check on the about page, if there is an update you can use the manual button without rebooting. Click on Help and then About or click on the blue version number after the word Version at the top of the page. If the Local Git Version and the Remote Git Version are different you can click the manual update button. The Player will download the latest version and restart automatically.

## The name of the PCM audio file in my sequencer is one thing.....the audio file I have on my PI is different..... Does that matter or, as I think, the FPP doesn't care which audio is matched with a given .fseq file?

The filename does not matter currently, you can pick any audio or video file to go with any sequence file.

## How do I setup my Edimax Wifi adapter?

Assuming you have connected the Pi via Ethernet cable, Open a web browser and enter FPP\ (on a Macintosh: http://fpp.local/) as the the web page you want. Once in the the FPP on the status/control drop down, select Network. At the top in the Interface drop down select wlan0 and then enter the SSID and network password. Select update Interface and restart network. You should then connect to your wifi network. There usually is no need to enter any other information.

## My Pi won’t connect, I may have messed up the Ethernet connection.

On the USB drive in the media/config folder is a file named interface.eth0. You can delete that file, it won’t break anything. You can also remove the USB drive and reboot. The system will go to default system settings. Then you can insert the USB drive and go back into the network config section and change your settings.

## How does one use the FPP in 'Bridge Mode'.

Bridge mode only supports passing network data to a Falcon Pixelnet/DMX dongle or USB ports (Renard/DMX).

## What USB Wireless adapters will work with the Pi?

Here is a website that shows supported usb wifi adapters. It may not be the only list on the web, but it is one you can use.
http://elinux.org/RPi_USB_Wi-Fi_Adapters

## When we download a new software version, do we need to reformat the SD card, or just write over existing version?

Always reformat the SD card, takes less time to format than to do the copy.

## When we download a new software version, do we need to reformat the USB stick?

You can just leave it in place. Should be no problem. However, it would be a good idea to make sure you have a backup of the data on the stick. Some folks have found that with the Pi connected to the same network as a computer can see the Pi share folder and copy the "media" folder to their computer for backup of all the data and configuration info.

## How can we tell if a RTC (real time clock) module is working

From a shell prompt, you should be able to run the following to confirm it is working:
   ```
   sudo hwclock -r
   ```
That will read and display the current time from the RTC.

## I need to remotely administer my FPP; can I have it on the public Internet?

If you absolutely need to put a FPP instance on the internet, here are the minimum recommended changes:
Change the pi user's password
Disable FTP
Disable Samba
Add iptables rules to only allow connections from a limited set of IPs (your house and a backup IP somewhere else)
Change Apache to only listen on localhost
Setup a SSH key for the pi user and change OpenSSH to not allow password authentication and require SSH keys.
With these changes, you can administer the system by ssh-ing to the Pi and tunnelling port 80. When you open a ssh connection with Putty, you can specify to tunnel any local port (8080, 8888, etc.) to remote IP 127.0.0.1 port 80 and then you point your web browser at http://127.0.0.1:8888/ to get to the FPP web interface.

## What do the Log Level and Log Mask settings control?

The Falcon Player has an extensive amount of logging to aid in troubleshooting issues with FPP itself and users' configurations. Turning all of this logging on at the same time would cause performance issues so the developers have created a log system that is controlled by two settings: Log Level and Log Mask. Details of the various levels and mask values are accessible in FPP by pressing F1 or clicking the 'Press F1 for Help' link under the right side of the menu. The help pages are context sensitive, so you must be on the FPP Settings page to view help information on the Log Level and Log Mask settings

## What is the Logs ZIP and how do I get it?

To aid in troubleshooting issues, you may be asked to get a copy of the Logs ZIP and attach it to a forum post or email it to a developer. The Logs ZIP contains a copy of all of the FPP log files and a few system log files that are useful in debugging system startup or network connectivity issues. Certain config files are also rolled into the Logs ZIP to allow developers to copy them onto a development system to try to reproduce an issue related to the configuration. To generate the Logs ZIP, you will need to go to the Logs tab on the File Manager page in the FPP UI. At the bottom of the page is a button labeled "ZIP". When you click the button, FPP will create a ZIP file of the logs and config and your browser should popup a window asking you to download the ZIP file. Attach the ZIP to a forum post or email it to the developer as requested. If you are asked to run a specific test before generating the Logs ZIP, you may need to turn on a specific Log Level and Log Mask as requested. This can be done via the FPP Settings page.

## What is the procedure for running a test and collecting logs?

Log Collection Procedure:
Go to the "FPP Settings" page and configure the requested Log Level and Log Mask.
Restart FPPD using the restart button at the bottom of the page.
Run any tests requested
Revert Log Level and Log Mask back to the 'Info' Level and 'Most' mask.
Download Logs ZIP using the 'ZIP' button on the Logs tab in the FPP File Manager UI and attach the log zip package to a forum post or email it to the developer.

## I uploaded a Perl script, how do I trigger an event?

Scripts have to be uploaded and then setup in the "events" pulldown under the Status/Control section. Then when you are done there they show up when you create your playlist.
## How can we copy files (playlist) to another FPP ?

The media drive is network mounted with samba. Connect with Samba and copy file. (other option is scp)

## How do I ssh into my FPP ?

The default username is "fpp" and the password is "falcon" From the command line type " ssh YOUR.FPP.IP.ADDY -l fpp ".
Or from the web interface look under help and you will see an entry for SSH shell. Click that and you can login and do your thing.

## What ntp server is my pi looking at?

From an SSH session, type: ntpq -p
This shows you the servers your Pi sees. An asterisk indicates the server your Pi is synced to. The + entries are ones it could sync with if the one with an asterisk fails.

## What are major and minor in the event setup window?

These are control channels, major/minor should normally be set to 0.
The control channels define a set of channels which can be used to fire events using your sequence data. If you set the channels to 1 and 2 then in your sequencer you put a 10 in channel one and a 40 in channel two that will cause event ID 1/4 to fire. The values you set in your sequencer are 10x the desired event ID. This is done because some sequencers store values 0-100 internally when displaying 0-255 so we can't do a one for one mapping because the data might get munges in the background.

## How do I set up multiple pis to sync?

Using FPP's MultiSync capability is easy. Just setup multiple Pi's as normal, change one to 'master' on the status page. Change the rest to 'remote'. On the master go to the MultiSync config page and select the Remotes you want to sync to and restart the master fppd. Now just upload sequences and videos to the master and remotes. Whenever you play a sequence or video on the master, that same Filename will be played on the remotes if the file exists there.

## What are the drop down options in setting up the pixel matrix overlay?

There are 4 options in the dropdown:
- Disabled - the overlay for this model is disabled, the matrix/tree shows what is in the running sequence - Enabled - the overlay is enabled and shows what the plugin tells it to show. this will give you the clean blank text, no sequence data will show through until you switch either back to Disabled or one of the Transparent options. - Transparent - the overlay is enabled and when a channel is overlayed as non-zero, it overrides the sequence data - Transparent RGB - the overlay is enabled and when any channel in a RGB triplet of channels is non-zero the whole RGB triplet will come from the overlay instead of the sequence.
When using the Pixel Overlay for RGB pixels, you want to use Enabled or Transparent RGB. If you use Transparent, you will get very odd colors on your display since it only copies single channels from the overlay data insteaed of all 3. If the overlay color for a pixel is red and the sequence is blue, then you will get purple since the blue is not zeroed out. If you use Transparent RGB, the blue from the sequence data would get zeroed out as the whole RGB triplet of channels is copied from the overlay data.
When you change the setting back to 'Disabled' then the sequence data is allowed to show through again.

## How do you setup the Pixel Overlay Matrix?

You need to tell FPP about your display item by creating a Pixel Overlay Model (under the 'Input/Output Setup' main menu item). The model defines the start channel, the total channels, the orientation (which way the strings run), the number of nodes per string, and the number of strands per string (if a string folds over once and runs across your matrix twice, then it has 2 strands per string.
Once you create a model, you can use the Matrix Tools Plugin to test the model, but to get fancy and do things like SMS, you will need to dive into Perl a little and use one of the sample Pixel Overlay scripts provided in the FPP Script Repository. There are examples for scrolling text including a Christmas countdown and a few others.

## Can you run the FPP detached from a network?

You can run the Pi detached from a network. The best way is to give it a static IP on your home network and fill in the gateway and DNS servers. This will prevent a DHCP timeout on eth0 from taking it down preventing E1.31 from going out.
If you want to run a playlist as soon as the Pi powers on, then setup a schedule that starts at 00:00 and runs to 24:00. Internally, FPP will subtract one second from the end time, so it will be 23:59:59. Check the 'repeat' checkbox to allow the playlist to repeat. Once you have done that, whenever the Pi boots, FPP will see that it should be playing a playlist and that the playlist should repeat until midnight and it will start the playlist. When midnight rolls around, the playlist will end, but start right back up again.

## How do I install my RASClock?

Skip the instructions for the RASClock, FPP install has taken care of all the grunt work, but do the following
Shut your pi off using the shut-down option in the FPP web-page UI
Pull power once only the red LED is on, which is how you know it is done shutting down
Physically install the rasclock
Boot FPP
Navigate to the "Config/Set Time" page under "Status/Control" in the UI
In the "Real Time Clock" drop-down select "RasClock"
Disable NTP
Select your timezone
Check the Manually Set Date/Time boxes and click Submit
This configures your RTC for use (basically does some of the stuff in the links others have posted).
In order for the RTC to have the time programmed into it, you need to fill out the "Manually Set Date/Time" boxes and click "Submit". This will program that time into the RTC, which keeps time until your battery dies (years from now). When the Pi boots, it will read the time from the RTC and set it's internal clock.
If you are running a master and slave Pi configuration you only require the rasclock on the master Pi.
IMPORTANT: Before putting the raspberry pi away for a long period of time please make sure to remove the battery from the rasclock. If you don't do this you will likely have to replace the battery for next years show!

## Why/When would I need to use multiple Pi players and the multisync feature?

when your channel count gets too high
when your physical layout is too spread apart
when physical obstacles make it difficult to run a lot of wires or even one wire
to control diverse elements like a video projector
to keep my audio equipment (like in the house) in a separate location from my show elements in the yard

## How to reset your volume control by Alan Dahl.

All: Use these steps at your own risk please. I am not sure why the setting was corrupted but we can overwrite the volume setting in the settings file.
1. Browse to the FPP web page.
2. Choose the help tab, SSH Shell Menu
3. Your browser may complain about security, Allow or continue as needed.
4. A new window will open up with a login prompt.
FPP login: (or similar if you have change the FPP's hostname)
5. At the login prompt type: fpp <return>
6. At the password prompt type: falcon <return>
7. upon successful login the MOTD will scroll and you will have a cursor sitting at a prompt similar to
pi@FPP - $
8. At this prompt type: ls <return>
You should see: media an then a new prompt. The ls command is list of the current directory.
9.Now type: cd media <return>
This is a change directory command to enter into the media folder or directory.
10. Once in the Media directory type: ls <return>
You will see quite a few more files and folders. The only file we are interested in is the file called: settings We want to edit the file called settings. My editor of choice is the vi editor.
11. at the prompt type: vi settings <return>
This command will open the settings file in the editor. Use the j key to move down, k key to move up, l key to move right, and the h key to move left. Again this is the lower case J, K, L, and H keys for movement. You may also use the arrow keys if your keyboard has them.
12.  Using the above keys and only the above keys move the cursor over the entry to the right of the "volume =" line in the settings file.
I believe last night yours was set to "nan" In this particular case you want the cursor sitting on the first n in nan.
13. Once your cursor is in the proper place. type: cw
This command means change word and it does two things. It change the editor to edit mode and prepares the entire word or string "nan" for replacement. nan will now look like this na$
14. type: 75 <esc>
This command replaces the first two characters of nan with 75 and the esc key truncates the rest of the word and exits the edit mode of the editor.
15: now type:   :wq!
Notice the moment you type : that the colon appears at the bottom of the screen. This is the command line of the editor. The : tells the editor we wish to enter a command on the command line. The command we are issuing is: w write my changes out to the file, q quit the editor and return me to the command prompt of the FPP, ! force this action (probably not necessary here but old habits die hard)
16. Go back to the FPP web page, refresh, and check that you can now adjust the FPP volume.
If while in the editor you get confused and start to mess up the file: Stop - type <esc> :q! Escape key to get me out of whatever mode I have gotten into.  :q! command line mode, quit, force. Notice we did not write our output to the file so no changes have been saved. The force is needed here because if changes have been made the system is going to want to warn you that your changes will be lost.

## How do I switch modes?

You should see a set of 4 example scripts under the 'Control' section now.
Control/SwitchToBridgeMode.sh Control/SwitchToMasterMode.sh Control/SwitchToPlayerMode.sh Control/SwitchToRemoteMode.sh
These switch FPP to the indicated mode and restart the fppd daemon for the change to take effect.

## Where are the rest of the questions and answers?

They are still being asked or haven't been documented yet. Click 'edit' at the top of the page and you can help us document to help the next user down the road.