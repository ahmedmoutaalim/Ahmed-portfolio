 const spans =document.querySelectorAll('h1 span');
 spans.forEach(span => span.addEventListener('mouseover',function(e){

    span.classList.add('animated','rubberBand')
 }))

spans.forEach(span=>span.addEventListener('mouseout', function(e){

    span.classList.remove('animated','rubberBand')
}))




function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }



// const htmlBar = document.querySelector('.progressbar')
// const cssBar = document.querySelector('.bar-css')
// const jsBar = document.querySelector('.bar-javascript')


// htmlBar.addEventListener('mouseover',(number)=>{

//     const addNumber =number+ 1;
//     htmlBar.style.width= `calc(${addNumber}*calc(100%/100))`
// })

// const htmlBar = document.querySelector(".bar-html")
// const cssBar = document.querySelector('.bar-css')
// const jsBar = document.querySelector('.bar-javascript')

// const sectionSkills = document.getElementById('skills')


// sectionSkills.addEventListener('mouseover',()=>{

//     htmlBar.style.width = ' calc(70*calc(100%/100))' 
//     cssBar.style.width = ' calc(75*calc(100%/100))' 
//     jsBar.style.width = ' calc(50*calc(100%/100))'
    
//     jsBar.style.animation = ' 5s'


// })



const button1 = document.getElementById('designing')
const button2 = document.getElementById('animation')
const button3 = document.getElementById('project')
const sectionWork = document.querySelectorAll('.selectAll div')


button1.addEventListener('click',()=>{

    button1.classList.add('active')
    button2.classList.remove('active')
    button3.classList.remove('active')
    sectionWork[0].classList.remove('hideCategory')
    sectionWork[1].classList.add('hideCategory')
    sectionWork[2].classList.add('hideCategory')
})

button2.addEventListener('click',()=>{

    button2.classList.add('active')
    button3.classList.remove('active')
    button1.classList.remove('active')
    sectionWork[0].classList.add('hideCategory')
    sectionWork[1].classList.remove('hideCategory')
    sectionWork[2].classList.add('hideCategory')
})

button3.addEventListener('click',()=>{

    button3.classList.add('active')
    button2.classList.remove('active')
    button1.classList.remove('active')
    sectionWork[0].classList.add('hideCategory')
    sectionWork[1].classList.add('hideCategory')
    sectionWork[2].classList.remove('hideCategory')
})


 
 
console.log('omar')


const menu = document.getElementById('menu');
const hiding =  document.getElementById('list');


menu.addEventListener('click',()=>{

  hiding.classList.toggle('hide')
})

