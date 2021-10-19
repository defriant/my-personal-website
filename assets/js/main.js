// ===== Page Loaded =====
window.onload = function(){
    document.body.classList.remove('loading')
    document.querySelector('#c47hlug7ogg').remove()
    document.querySelector('.home_social').classList.add('show')
    document.querySelector('.home_img').classList.add('show')
    document.querySelector('.home_text').classList.add('show')
}

window.onscroll = function(){
    // ===== Header active shadow =====
    if (this.scrollY >= 99) {
        document.querySelector('#header').classList.add('active')
        document.querySelector('#nav').classList.add('active')
        document.querySelector('#theme-button').classList.add('hide')
    }else{
        document.querySelector('#header').classList.remove('active')
        document.querySelector('#nav').classList.remove('active')
        document.querySelector('#theme-button').classList.remove('hide')
    }

    // ===== Show scroll up =====
    if (this.scrollY >= 750) {
        document.querySelector('#scroll-up').classList.add('show')
    }else{
        document.querySelector('#scroll-up').classList.remove('show')
    }

    // ===== Sections Animation =====
    // About
    const aboutTitle = document.querySelector('#about-title').offsetTop
    if (scrollY > aboutTitle - 650) {
        document.querySelector('#about-title').classList.add('show')
    }else{
        document.querySelector('#about-title').classList.remove('show')
    }

    const aboutImgAndDesc = document.querySelector('#about-img').offsetTop
    if (scrollY > aboutImgAndDesc - 650) {
        document.querySelector('#about-img').classList.add('show')
        document.querySelector('#about-description').classList.add('show')
    }else{
        document.querySelector('#about-img').classList.remove('show')
        document.querySelector('#about-description').classList.remove('show')
    }

    const aboutPersonalJourney = document.querySelector('#personal-journey').offsetTop
    if (scrollY > aboutPersonalJourney - 650) {
        document.querySelector('#personal-journey').classList.add('show')
    }else{
        document.querySelector('#personal-journey').classList.remove('show')
    }

    const aboutDownloadCv = document.querySelector('#download-cv').offsetTop
    if (scrollY > aboutDownloadCv - 650) {
        document.querySelector('#download-cv').classList.add('show')
    }else{
        document.querySelector('#download-cv').classList.remove('show')
    }

    // Skills
    const skillsTitle = document.querySelector('#skills-title').offsetTop
    if (scrollY > skillsTitle - 650) {
        document.querySelector('#skills-title').classList.add('show')
    }else{
        document.querySelector('#skills-title').classList.remove('show')
    }

    const skillsContent1 = document.querySelector('#skills-content-1').offsetTop
    const programingLanguage = document.querySelectorAll('.programing-language')
    if (scrollY > skillsContent1 - 650) {
        document.querySelector('#skills-content-1').classList.add('show')
        programingLanguage.forEach(function(pl, i){
            setTimeout(function() {
                pl.classList.add('show')
            }, 300 * i);
        })
    }else{
        document.querySelector('#skills-content-1').classList.remove('show')
        programingLanguage.forEach(function(pl, i){
            setTimeout(function() {
                pl.classList.remove('show')
            }, 300 * i);
        })
    }

    const skillsContent2 = document.querySelector('#skills-content-2').offsetTop
    const frameworkSystem = document.querySelectorAll('.framework-system')
    if (scrollY > skillsContent2 - 650) {
        document.querySelector('#skills-content-2').classList.add('show')
        frameworkSystem.forEach(function(fs, i) {
            setTimeout(function() {
                fs.classList.add('show')
            }, 300 * i);
        });
    }else{
        document.querySelector('#skills-content-2').classList.remove('show')
        frameworkSystem.forEach(function(fs, i) {
            setTimeout(function() {
                fs.classList.remove('show')
            }, 300 * i);
        });
    }

    // Services
    const servicesTitle = document.querySelector('#services-title').offsetTop
    if (scrollY > servicesTitle - 650) {
        document.querySelector('#services-title').classList.add('show')
    }else{
        document.querySelector('#services-title').classList.remove('show')
    }

    const servicesContent = document.querySelector('#services1').offsetTop
    if (scrollY > servicesContent - 650) {
        document.querySelector('#services1').classList.add('show')
        document.querySelector('#services2').classList.add('show')
    }else{
        document.querySelector('#services1').classList.remove('show')
        document.querySelector('#services2').classList.remove('show')
    }

    // Portfolio
    const portfolioTitle = document.querySelector('#portfolio-title').offsetTop
    if (scrollY > portfolioTitle - 650) {
        document.querySelector('#portfolio-title').classList.add('show')
    }else{
        document.querySelector('#portfolio-title').classList.remove('show')
    }

    const portfolioContent = document.querySelector('#portfolio-content').offsetTop
    if (scrollY > portfolioContent - 650) {
        document.querySelector('#portfolio-content').classList.add('show')
    }else{
        document.querySelector('#portfolio-content').classList.remove('show')
    }

    // Contact
    const contactTitle = document.querySelector('#contact-title').offsetTop
    if (scrollY > contactTitle - 650) {
        document.querySelector('#contact-title').classList.add('show')
    }else{
        document.querySelector('#contact-title').classList.remove('show')
    }

    const contactContent = document.querySelector('#contact1').offsetTop
    if (scrollY > contactContent - 650) {
        document.querySelector('#contact1').classList.add('show')
        document.querySelector('#contact2').classList.add('show')
    }else{
        document.querySelector('#contact1').classList.remove('show')
        document.querySelector('#contact2').classList.remove('show')
    }
}

const scrollUp = document.querySelector('#scroll-up')
scrollUp.addEventListener('click', function(e){
    e.preventDefault()
    const page = document.querySelector('html')
    page.scrollTop = 0
})


// ===== Nav link =====
const desktopLink = document.querySelectorAll('.nav_link')
desktopLink.forEach(desktopLink =>{
    desktopLink.addEventListener('click', function(e){
        e.preventDefault()
        let targetLink = this.getAttribute('href')
        let targetContent = document.querySelector(targetLink)
        let page = document.querySelector('html')

        page.scrollTop = targetContent.offsetTop - 150
    })
})

const mobileLink = document.querySelectorAll('.mobile_nav_link')
mobileLink.forEach(mobileLink =>{
    mobileLink.addEventListener('click', function(e){
        e.preventDefault()
        let targetLink = this.getAttribute('href')
        let targetContent = document.querySelector(targetLink)
        let page = document.querySelector('html')
        page.scrollTop = targetContent.offsetTop - 50
    })
})

const footerLink = document.querySelectorAll('.footer_link a')
footerLink.forEach(footerLink =>{
    footerLink.addEventListener('click', function(e){
        e.preventDefault()
        let targetLink = this.getAttribute('href')
        let targetContent = document.querySelector(targetLink)
        let page = document.querySelector('html')

        page.scrollTop = targetContent.offsetTop - 150
    })
})

// ===== Sroll section nav active =====
const sections = document.querySelectorAll('section[id]')
window.addEventListener('scroll', function(){
    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight - 75
        const sectionTop = current.offsetTop - 200;
        const sectionId = current.getAttribute('id')
        
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_link[href*="#'+sectionId+'"]').classList.add('active')
            document.querySelector('.mobile_nav_link[href*="#'+sectionId+'"]').classList.add('active')
        }else{
            document.querySelector('.nav_link[href*="#'+sectionId+'"]').classList.remove('active')
            document.querySelector('.mobile_nav_link[href*="#'+sectionId+'"]').classList.remove('active')
        }
    })
})

// ===== Change dark/light theme =====
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark'
const lightTheme = 'light'
let iconDark = 'fa-sun'
let iconLight = 'fa-moon-stars'

// Previously selected theme (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// Validate if the user previously chose a theme
if (selectedTheme == 'dark') {
    document.body.classList.replace(lightTheme, darkTheme)
    themeButton.classList.replace(iconLight, iconDark)
}else if (selectedTheme == 'light') {
    document.body.classList.replace(darkTheme, lightTheme)
    themeButton.classList.replace(iconDark, iconLight)
}

themeButton.addEventListener('click', function(){
    let currentTheme = document.body.classList.value

    if (currentTheme == 'dark') {
        document.body.classList.replace(darkTheme, lightTheme)
        themeButton.classList.replace(iconDark, iconLight)
    }else if (currentTheme == 'light') {
        document.body.classList.replace(lightTheme, darkTheme)
        themeButton.classList.replace(iconLight, iconDark)
    }

    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

// Set up user selected theme
function getCurrentTheme() {
    if (document.body.classList.contains(darkTheme)) {
        return 'dark'
    }else if (document.body.classList.contains(lightTheme)) {
        return 'light'
    }
}

function getCurrentIcon() {
    if (document.body.classList.contains(darkTheme)) {
        return 'fa-sun'
    }else if (document.body.classList.contains(lightTheme)) {
        return 'fa-moon-stars'
    }
}


// ===== Journey Tabs =====
const journeyTab = document.querySelectorAll('.journey_button'),
    journeyContent = document.querySelectorAll('.journey_content')

journeyTab.forEach(tab =>{
    tab.addEventListener('click', function(){
        const target = document.querySelector(tab.dataset.target)
        
        journeyTab.forEach(tabs =>{
            tabs.classList.remove('journey_active')
        })
        tab.classList.add('journey_active')

        journeyContent.forEach(content =>{
            content.classList.remove('journey_active')
        })
        target.classList.add('journey_active')
    })
})

// ===== Portfolio Swiper =====
let swiper = new Swiper('.swiper-container', {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});


