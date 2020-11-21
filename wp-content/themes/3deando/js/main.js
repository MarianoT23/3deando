// Navbar Active
document.addEventListener('scroll', function() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector('.js-nav').classList.add('active')
    } else {
        document.querySelector('.js-nav').classList.remove('active')
    }
} )

// Animate on scroll
AOS.init({
    animatedClassName: 'aos-animate',
});

// Slider
window.addEventListener('load', function(){
    new Glider(document.querySelector('.nuestro-trabajo__slider'), {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: '.nuestro-trabajo__glider-dots',
        arrows: {
            prev: '.nuestro-trabajo__glider-left',
            next: '.nuestro-trabajo__glider-right'
        }
    })
})

// Form Modal
var formOpener = document.querySelectorAll('.js-form-open')
var formCloser = document.querySelector('.js-form-close')
var form = document.querySelector('.js-form')
formOpener.forEach(function(formOpenerX) {
    formOpenerX.addEventListener('click', function() {
        form.classList.add('active')
    })

})
formCloser.addEventListener('click', function(){
    form.classList.add('closing')
    setTimeout(function(){
        form.classList.remove('active');
        form.classList.remove('closing')
    }, 600);
})

// FAQ
var faqQuestion = document.querySelectorAll('.js-question-container')
var faqAnswer = document.querySelectorAll('.js-question-container')

faqQuestion.forEach(function(faqQuestionX) {
    faqQuestionX.addEventListener('click', function() {
        console.log()
    })
})

console.log(faqQuestion)

console.log("JS is loading fine")

