<div align="center"><img src="/frontend/public/readme-img/logo.png" width="400"/></div>

----

## <div align="center"> Our motto: 'We share life with your local elders. Join the community!'</div>

We have developed this marketplace framed in the category of community services to the elderly, contributing to their wellness and their loved ones. Doing so we improve the support of this vulnerable collective.

During COVID-19 times our elders were a part of the population that suffered the most, due to isolation, lack of physical and emotional contact. All of this had a detrimental effect in their mental health and wellbeing overall. That's the main reason why we developed this marketplace. We would like to create a space for them where society will be spending their time with the elderly to give something in return for everything they did when they were younger.

***

This project is part of Hackathon F5 with 'Fundación La Caixa' as our client. We have 48 hours to create a marketplace with the following guidelines:
## 1. CHOOSE WHAT YOUR MARKETPLACE IS ABOUT
- What kind of content are you going to have in it?
- Who is your target audience?
- How are you going to improve people's lives?

## 2. CHOOSE A CATCHY NAME
## 3. SHAPE THE CONTENT OF YOUR CARDS
- Which attributes does your card have?
- Which values could those attributes take?
- Which attributes are mandatory and which ones aren't?

## 4. ADD BASIC FUNCTIONALITY
- Homepage with card lists
- Show view of a specific card

## 5. ADD EXTRA FUNCTIONALITIES
- Contact form to be in touch with the company
- Search bar
- About us
- Contact the client

***

## Table of contents
* [Team Members](#team-members)
* [Screenshots](#screenshots)
* [Technologies](#stacks)
* [Installation](#how-to-install-this-project)
* [Tests](#tests)
* [Methodology](#methodology)
* [Next Steps](#next-steps)

***

## Team Members

| Name | Role | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :---: | :---: | :---: |
| Paloma Babot |  Scrum Master | https://github.com/Uxoa |
| Guillem Martínez | Product Owner | https://github.com/guillemmj33 |
| Noa Trujillo | Developer| https://github.com/mintybubblegum |
| Mila Galiano | Developer | https://github.com/Beadeavila |
| Jaume Vidal | Developer | https://github.com/JaumeViBu |
| Alexander Romero | Developer| https://github.com/ChaanChanChan |
| Valery Suárez | Developer| https://github.com/ValerySuarez22 |
| Maricarmen Chueco | Developer| https://github.com/marchuovi |
| Maria Giménez | Developer | https://github.com/MeryGF |

***

## Screenshots

<div style="heigth:auto; display:flex; flex-wrap:wrap; justify-content:center; padding:1rem">

|   Mobile home view sketch   |   Mobile show view sketch   |   Mobile home mockup   |   Mobile show mockup   | 
| --- | --- | --- | --- |
  
| <img style="width:170px;" src="/frontend/public/readme-img/sketch-view.png" alt="Sketch Home view"/> | <img style="width:170px;" src="/frontend/public/readme-img/sketch-show.png" alt="Sketch Show view"/> | <img style="width:170px;" src="/frontend/public/readme-img/view.png" alt="Mockup Home view"/> | <img style="width:170px;" src="/frontend/public/readme-img/show.png" alt="Mockup Show view"/> |
| --- | --- | --- | --- |

| Desktop home view sketch | Desktop show view sketch | Desktop home view mockup | Desktop show view mockup |
| --- | --- | --- | --- |

| <img style="width:190px;" src="/frontend/public/readme-img/desktopHomeSkech.png" alt="Desktop home"/> | <img style="width:190px;" src="/frontend/public/readme-img/desktopShowSkech.png" alt="Desktop show"/> | <img style="width:190px;" src="/frontend/public/readme-img/desktopHome.png" alt="Desktop about"/>   | <img style="width:190px;" src="/frontend/public/readme-img/desktopShow.png" alt="Desktop show"/> |

</div>


***

## Stacks

- HTML 5
- CSS 3
- Tailwind CSS
- PHP 8.1.10
- React JS
- Laravel Framework 9.44.0
- MySQL
- Axios
***

## How to install this project

You will need a text editor and perform the following steps:

1. Clone the project
```bash
  https://github.com/kindtime-equipo-7/kindtime-equipo-7.git
```

2. Go to the project directory
```bash
  cd kindtime-equipo-7
```

3. Start MySQL service and create a MySQL database named "kindtime-equipo-7"

4. Create in the text editor an .env file by copying the contents of .env.example and modify the database name (kindtime-equipo-7 by kindtime-equipo-7)

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Migrate database
```bash
  php artisan migrate:fresh --seed
```

***

## Tests
To run the API tests, execute the following command(s)
```bash
  php artisan test
```
<img width="370" alt="Screenshot API test 01" src="/backend/public/img/test-api01.PNG">

```bash
  vendor/bin/phpunit tests
```

<img width="370" alt="Screenshot API test 02" src="/backend/public/img/test-api02.PNG">

***

## Methodology
- TDD
- Agile with SCRUM
- Pair and solo programming
***

## Next Steps
- Implement CRUD in the creation of new services.



