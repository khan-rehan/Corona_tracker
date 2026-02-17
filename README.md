# Corona Tracker

[![Author - Rehan Khan](https://img.shields.io/badge/Author-Rehan%20Khan-blue)](https://rehankhan.netlify.app/)

A live COVID-19 tracking website that displays real-time coronavirus statistics worldwide and for India (state-wise and day-wise), along with information about symptoms, prevention, and a contact form for reporting symptoms.

## Features

- **World COVID-19 Live** — Global case statistics fetched from [COVID-19 API](https://api.covid19api.com/summary)
- **India State-wise** — State-level breakdown of confirmed, active, recovered, and deceased cases
- **India Day-wise** — Day-by-day progression of COVID-19 cases across India
- **Symptoms Section** — Visual guide to COVID-19 symptoms (cough, fever, breathing difficulty, etc.)
- **Prevention Section** — Illustrated preventive measures (hand washing, masks, social distancing, etc.)
- **Contact Form** — Submit symptoms and messages, stored in MySQL database
- Responsive design with Bootstrap
- Animated statistics counters

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript, jQuery 3.4.1, Bootstrap 4.4.1
- **APIs:**
  - [COVID-19 API](https://api.covid19api.com/summary) (global data)
  - [covid19india.org API](https://api.covid19india.org/data.json) (India data)
- **Libraries:** Font Awesome 4.7.0, jQuery Counter-Up, jQuery Waypoints

## Project Structure

```
Corona_tracker/
├── index.php              # Main page (hero, world stats, about, symptoms, prevention, contact)
├── indiacoronalive.php    # India state-wise statistics
├── indiadaywise.php       # India day-wise progression
├── dbcon.php              # Database connection config
├── coronadb.sql           # Database schema
├── css/
│   └── style.php          # Stylesheets
├── link/
│   └── links.php          # CDN links and meta tags
└── img/                   # Images (icons, symptoms, prevention)
```

## Installation & Setup

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)

### Steps

1. Clone the repository into your XAMPP `htdocs` folder

   ```sh
   cd /path/to/xampp/htdocs
   git clone https://github.com/khan-rehan/Corona_tracker.git
   ```

2. Start Apache and MySQL from the XAMPP control panel

3. Import the database

   - Open `http://localhost/phpmyadmin/`
   - Click **Import** and upload `coronadb.sql`
   - Click **Go**

4. Open `http://localhost/Corona_tracker/index.php` in your browser

## Screenshots

**Home Page & Worldwide Cases**

<img width="1679" alt="Home" src="https://user-images.githubusercontent.com/42263217/79424726-3e206880-7fde-11ea-822e-cdf9a8dad82c.png">

**India State-wise Cases**

<img width="1679" alt="Statewise" src="https://user-images.githubusercontent.com/42263217/79424732-3f519580-7fde-11ea-9048-b7a4edaffa3f.png">

**India Day-wise Cases**

<img width="1677" alt="Daywise" src="https://user-images.githubusercontent.com/42263217/79424737-411b5900-7fde-11ea-8309-fc11f83a69f5.png">

**Symptoms**

<img width="1672" alt="Symptoms" src="https://user-images.githubusercontent.com/42263217/79424751-47a9d080-7fde-11ea-9f45-bab115179a74.png">

**Prevention**

<img width="1674" alt="Prevention" src="https://user-images.githubusercontent.com/42263217/79424907-8a6ba880-7fde-11ea-8a9b-0f574834763a.png">

**Contact Form**

<img width="1671" alt="Contact" src="https://user-images.githubusercontent.com/42263217/79424763-4bd5ee00-7fde-11ea-9957-3f196d794c9f.png">
