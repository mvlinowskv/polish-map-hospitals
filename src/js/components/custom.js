let links = document.querySelectorAll('.ukryta li')
let cards = document.querySelectorAll('.row-card')
let status_text = document.getElementById('status-text')

// document.querySelectorAll('.ukryta li').classList.add('li-map')

// document.addEventListener

for (let link of links) {

    // console.log(link)
    let bg_link = link.children[0] //a href=""
        // let bg = link.children[0].children[1]
        // console.log(bg_link)
    bg_link.addEventListener('click', function() {
        // console.log("klik")

        for (let card of cards) {
            // console.log('klik')
            let link_card = "#" + card.getAttribute('id').toLowerCase()
                // console.log(bg_link.getAttribute('href'), link_card)

            if (bg_link.getAttribute('href') == link_card) {
                card.classList.add('card-visible')
                card.classList.remove('card-hidden')
                console.log('klikcard')
                status_text.innerHTML = ""
            } else {
                card.classList.remove('card-visible')
                card.classList.add('card-hidden')
                status_text.innerHTML = "Brak danych w tym województwie"
            }
        }

    })
}

let accordions = document.querySelectorAll('.accordion-item')
let cards_hospitals = document.querySelectorAll('.card')
let arrows = document.querySelectorAll('.arrow-svg')
for (let card of cards_hospitals) {
    card.addEventListener('click', function(e) {
        for (let acc of accordions) {
            let link_accordion = "#" + acc.getAttribute('data-text')
            let link_card = card.getAttribute('data-open')


            if (link_card == link_accordion) {
                console.log('takie same')
                acc.classList.add('accordion-open')
                acc.classList.remove('accordion-collapse')



            } else {
                acc.classList.add('accordion-collapse')
                acc.classList.remove('accordion-open')

            }
        }


    })

}