# Installation

- [Installation on Raspberry Pi](#installation-pi)
	- [SD Image Download](#pi-image)
- [Installation on BeagleBone](#installation-bbb)
	- [SD Image Download](#bbb-image)

<a name="installation-pi"></a>
## Installing the Falcon Player (FPP) on your Raspberry Pi

<a name="pi-image"></a>
**The latest FPP release for the Raspberry Pi is FPP v1.5 and is available for download at the following location:**
[FPP v1.5 Release Pi SD image](https://github.com/FalconChristmas/fpp/releases/download/1.5/FPP-v1.5-Pi.zip)

The Falcon Player is designed to be treated like a software appliance.  To make FPP installation easier on the Raspberry Pi, the player is distributed in a ZIP file which contains the Pi NOOBs installer.  This installer will install the Raspbian Linux Operating System and the FPP software onto the SD card.  You will need to copy the contents of the FPP .zip file onto a SD card and boot the Pi using the SD card.  Upon boot, the NOOBs installer will take over and install Raspbian and the Falcon Player.

These instructions will guide you through installing the NOOBs image on your SD card that will allow you to easily install the OS and FPP as well as recover your card if the OS becomes corrupted.

Insert an SD card that is 8GB or greater in size into your computer and ormat the SD card so that the Pi can read it
> **NOTE**: This is a change from previous versions, FPP v1.0 required only a 4GB SD card.  We are working on reducing this requirement back down for the next FPP SD image.


### Windows
1. Download the SD Association's Formatting Tool from https://www.sdcard.org/downloads/formatter_4/eula_windows/
2. Install and run the Formatting Tool on your machine.  We recommend using the SD Card Association utility because the built-in Windows format utility will only format the first partition that Windows recognizes which will not properly re-format some USB drives or drives that have previously been used with the NOOBs installer.
3. Set "FORMAT SIZE ADJUSTMENT" option to "ON" in the "Options" menu
4. Check that the SD card you inserted matches the one selected by the Tool
5. Click the "Format" button
   
### Mac

1. Download the SD Association's Formatting Tool from https://www.sdcard.org/downloads/formatter_4/eula_mac/
2. Install and run the Formatting Tool on your machine.  We recommend using the SD Card Association utility because the built-in format utility may only format the first partition that the OS recognizes which will not properly re-format some USB drives or drives that have previously been used with the NOOBs installer.
3. Select "Overwrite Format"
4. Check that the SD card you inserted matches the one selected by the Tool
5. Click the "Format" button
   
### Linux

We recommend using gparted (or the command line version parted)
Format the entire disk as a single vFAT partition
A command-line script called formatSD.sh is available in the git repository for those who prefer the command-line.
   
1. Download the latest release of the Falcon Player image for the Pi from the link at the top of this article.
2. Extract the contents of the downloaded FPP .zip file onto the formatted SD card.  The 'OS' and 'default' subdirectories should be visible in the top level directory on the SD card.
3. Insert a USB flash drive into the Pi.  This will be used for sequences, media, FPP configuration, and logs once FPP is running.
4. Insert the SD card into your Pi and connect the power supply to boot the Pi and install FPP. Your Pi will now boot into NOOBS and will automatically start installing the FPP image onto your SD card.
5. Once the install is complete, the Pi will automatically reboot into Linux, and start FPP.  All further interaction with FPP will be via the web UI accessible via http://fpp/

If you have a monitor connected and the display is not visible during the NOOBs install, you may need to select the correct output mode for your display by pressing one of the following number keys on your keyboard;
1. HDMI mode this is the default display mode.
2. HDMI safe mode select this mode if you are using the HDMI connector and cannot see anything on screen when the Pi has booted.
3. Composite PAL mode select either this mode or composite NTSC mode if you are using the composite RCA video connector
4. Composite NTSC mode

<a name="installation-bbb"></a>
## Installing the Falcon Player (FPP) on your BeagleBone Black (BBB) and BeagleBone Green (BBG)

The latest FPP release for the BeagleBone Black is FPP v1.5 and is available for download at the following locations:
<a name="bbb-image"></a>
FPP v1.5 BBB SD image: https://github.com/FalconChristmas/fpp/releases/download/1.5/FPP-v1.5-BBB-SD.img.zip
FPP v1.5 BBB eMMC image: https://github.com/FalconChristmas/fpp/releases/download/1.5/FPP-v1.5-BBB-eMMC.img.zip

The Falcon Player is designed to be treated like a software appliance.  To make FPP installation easier on the BeagleBone Black, the player is distributed as a pair of ZIP files which both contain a disk image containing an Operating System with FPP pre-installed.  The "SD" image is for running FPP off of the micro-SD card on the BBB.  The "eMMC" image will install the OS and FPP onto the onboard eMMC on the BBB.  NOTE: You do not need to download or install both images.  The image you use will be determined by whether you choose to run FPP off the micro-SD card or the onboard eMMC drive on the BBB.

These instructions will guide you through installing the BBB images on your micro-SD card to easily get FPP up and running on the BBB.

### Running FPP on BBB micro-SD

Using the micro-SD card for the FPP OS means that the USB slot must be used for either a USB flash drive or you must connect a USB hub if you need to attach other USB devices.

Write FPP BBB SD disk image to micro-SD card using "Win32 Disk Imager"
Download and install the Win32 Disk Imager from the following link:
        http://sourceforge.net/projects/win32diskimager/files/latest/download
Extract the .img file from the FPP BBB SD image .zip file
Insert a 2GB or larger micro-SD card into your computer
Run the Win32 Disk Imager application
Select the correct disk drive letter for the micro-SD card.  NOTE: Double-check that this is the correct drive letter as the Win32 Disk Imager will overwrite any data if you select the incorrect drive letter
Select the extracted .img file
Press "Write" and wait for the image to be written to the micro-SD
Disconnect power from the BBB if it is powered up
Insert micro-SD card into the BBB
Insert a USB flash drive for FPP storage.
Hold the Boot Button (S2) on the top of the BBB (near the micro-SD slot) and while holding the button, connect power to the BBB.  Continue holding the S2 button until the blue LED's start to flash. (Some users have reported not being required to do this step if they have been using the BBB already booting off the micro-SD card)
The BBB should boot up running FPP off the micro-SD.  The boot process will automatically resize the main disk partition to fill up the micro-SD card, and this will automatically reboot.  The whole process should take under a minute and then FPP will be up and running.
Once the BBB has rebooted, FPP will be automatically started.  All further interaction with FPP will be via the web UI accessible via http://fpp/

### Running FPP on BBB eMMC

Using the onboard eMMC on the BBB to run FPP eliminates the need to use a micro-SD for FPP OS storage.  The micro-SD can be used for media storage which frees up the USB slot for other use.

Write FPP BBB eMMC disk image to micro-SD card using "Win32 Disk Imager"
Download and install the Win32 Disk Imager from the following link:
        http://sourceforge.net/projects/win32diskimager/files/latest/download
Extract the .img file from the FPP BBB SD image .zip file
Insert a 2GB or larger micro-SD card into your computer
Run the Win32 Disk Imager application
Select the correct disk drive letter for the micro-SD card.  NOTE: Double-check that this is the correct drive letter as the Win32 Disk Imager will overwrite any data if you select the incorrect drive letter
Select the extracted .img file
Press "Write" and wait for the image to be written to the micro-SD
Disconnect power from the BBB if it is powered up
Insert micro-SD card into the BBB
Do NOT have a USB flash drive plugged in.  If there is a flash drive plugged in, the BeagleBone eMMC installer will try to copy the contents of the USB drive to the eMMC along with the OS.
Remove any Capes installed on the BBB as recommended by Beagleboard.
Hold the Boot Button (S2) on the top of the BBB (near the micro-SD slot) and while holding the button, connect power to the BBB.  NOTE: BeagleBoard recommends powering the BBB via the USB power input when installing to the eMMC.  We have had one report of possible bricking of a BBB but are not certain yet what caused it, so we feel it is best to follow their recommendation.
Continue holding the S2 button until the blue LED's start to flash. (Some users have reported not being required to do this step if they have been using the BBB already booting off the micro-SD card)
NOTE: The blue LEDs should flash in sequence and continue to flash for the next 5-25 minutes depending on micro-SD speed.
Wait until the LED's stop flashing and turn off.  NOTE: This may take 5-25 minutes depending on the speed of the micro-SD card.
Disconnect power from the BBB
Remove the micro-SD card.
Insert a formatted micro-SD card or USB flash drive for FPP storage.  If you need to reformat a SD card for use as FPP storage, you can follow the instructions in the FPP Raspberry Pi Install Notes to use the SD card Association tool to reformat the card.  NOTE: if you want to use micro-SD for storage, then once FPP is up you will need to configure the storage device on the settings page in FPP and reboot.  FPP will not automatically use the micro-SD instead of the USB flash.
Re-apply power to the BBB and it should boot up running FPP off the eMMC.
Once the BBB has booted, FPP will be automatically started.  All further interaction with FPP will be via the web UI accessible via http://fpp/
