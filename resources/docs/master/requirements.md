# Requirements

- [Basic Requirements](#basic-requirements)
- [Optional Items](#optional-items)

<a name="basic-requirements"></a>
### Basic System Requirements:

**Raspberry Pi**
	- Raspberry Pi Model A, A+, B, B+, or v2 B Project Board (v2 B preferred)
	- At least a 8GB Class 4 or higher SD Card (micro-SD needed for B+ and v2 B)
	- At least a 4GB or higher USB Flash Drive
	- 5V 1A or higher Micro USB Power Supply (2A preferred)

**BeagleBone Black**
	- BeagleBone Black Rev C Project Board
	- At least a 8GB Class 4 or higher micro-SD Card
	- At least a 4GB or higher USB Flash Drive (if not running OS/FPP off internal eMMC memory on BBB)
	- 5V 1A or higher (2A preferred) Mini "USB B" Power Supply OR power supply with "USB type A" connector

With just the above items, your PI or BBB will be able to send out E.131 without any additional requirements.  You will still need hardware to receive E.131 at the other end and that is beyond this post.

<a name="optional-items"></a>
### Optional Items:

- Wireless N Nano USB Adapter
- External Powered USB Hub
- RGB LCD Display (Pi-only)
- Real Time Clock (a.k.a. RTC) - If you don't plan on having your Pi internet-connected and want to run schedules at proper times, you will need to add an RTC.  If your FPP system will be internet connected, you do not need an RTC.  The following options are available:
	- **Raspberry Pi**
		- DS1305-based RTC
		- PCF2127x-based RTC (RasClock is popular among FPP users)
		- MCP7941x-based RTC (PiFace is popular as well)
	- **BeagleBone Black**
		- Falcon F16-B controller w/ RTC
		- Falcon F4-B controller w/ RTC
		- Octoscroller w/ RTC option (the original Octoscroller did not support the RTC option)
- Any external powered USB hub on this list will work: http://elinux.org/RPi_Powered_USB_Hubs
- Wireless USB Adapters that are compatible: http://elinux.org/RPi_USB_Wi-Fi_Adapters

For the Raspberry Pi, the RGB or Blue LCD Display can be purchased here.  RGB http://www.adafruit.com/products/1109  Blue http://www.adafruit.com/products/1115

**The 2 official US Distributors of the Raspberry Pi Are:**
- [MCM Electronics](http://www.mcmelectronics.com/product/83-14421)
- [Newark](http://www.newark.com/jsp/bespoke/bespoke7.jsp?bespokepage=newark/en_US/landing/raspberry-pi/rasp-pi-accessories.jsp&ICID=HP-TP-Raspberry-pi-Accessories)
- [Amazon](http://www.amazon.com/Raspberry-Pi-Model-Revision-512MB/dp/B009SQQF9C/ref=lh_ni_t?ie=UTF8&psc=1&smid=A16YH1Z7RI96EN)

**The BeagleBone Black is available from the following:**
- [MCM Electronics](http://www.mcmelectronics.com/)


Any of the products MCM and Newark sell will be compatible with the Raspberry Pi.