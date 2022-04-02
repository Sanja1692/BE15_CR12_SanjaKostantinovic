var destinations = [

    {
        id: 1,
        name: "Paris",
        description: "Paris is a city unlike any other. It is overflowing with culture, history, and beauty. And while people travel to Paris to see the Louvre, climb the Eiffel Tower, or see Notre-Dame, the real magic is found in the streets. Here, the ins and outs of daily life play out - chic women on bikes pedal their children to school, artists post up in cafés with a notebook, and both young and old line up morning and evening for a fresh baguette from the neighborhood boulangerie",
        picture: "pictures/paris.jpg",
        price: 200,

    },
    {
        id: 2,
        name: "Budapest",
        description: "The modern-day Budapest results from the amalgamation of two historic cities lying right opposite each other over the Danube river. Buda is the western (left) bank side, with the high hill atop which the Buda castle sits. Pest is the relatively flat eastern (right) bank side, with the Parliament, numerous other stately buildings, and busy streets retaining all their 19th century architectural heritage.",
        picture: "pictures/budapest.jpg",
        price: 111,

    },
    {
        id: 3,
        name: "Belgrade",
        description: "Though it may come as a surprise to some, Belgrade has a plethora of places to visit. The Belgrade Fortress, one of the most important historical monuments in Serbia, sits on the best location in town: overlooking the confluence of both rivers. Everyone in Belgrade comes to walk around the fortress and Kalemegdan Park. The entire city was inside the fortress for centuries. Thus, the fortress's history reflects that of Belgrade. The Celts founded the fortress in the 3rd century BC. It was later Roman, Byzantine, Bulgarian, Serbian, Hungarian, Turkish, and Austrian. As you can see, everybody who was somebody wanted Belgrade!",
        picture: "pictures/beograd.jpg",
        price: 130,

    },
    {
        id: 4,
        name: "London",
        description: "London's iconic skyline is an eclectic combination of instantly recognisable landmarks, from the historic Tower of London to the ultra-modern skyscrapers of The Shard and 20 Fenchurch. A walk through the Square Mile immerses you in the original Roman settlement, with parts of the ancient defensive wall still visible. You'll also find some of the London's cosiest pubs around there, such as Ye Olde Cheshire Cheese, a former haunt of Charles Dickens and Mark Twain. For lovers of the arts, look no further than the world-class theatres of London's West End and the live music venues of Camden, Soho and Shoreditch. You'll also find endless galleries and museums dotted around, such as the free-to-visit British Museum, Natural History Museum and the National Gallery.",
        picture: "pictures/624788e81819d.jpg",
        price: 110,

    },
    {
        id: 5,
        name: "Moscow",
        description: "The city is home to several UNESCO World Heritage Sites, and is well known for its display of Russian architecture, particularly its historic Red Square, and buildings such as the Saint Basil's Cathedral and the Moscow Kremlin, of which the latter serves as the seat of power of the Government of Russia.",
        picture: "pictures/moskow.jpg",
        price: 220,

    },
    {
        id: 6,
        name: "Bratislava",
        description: "In the Old Town you can't miss the main square Hlavne Namestie including the courtyard of the old town hall (Stara Radnica) as well as the national theatre and St. Martin's Cathedral. Towering above the Old Town and Danube river Bratislava castle might have a spectacular location. UFO Bridge is officially the SNP Bridge (SNP standing for Slovenské národné povstanie - Slovak National Uprising) and the most recognizable symbol of Bratislava",
        picture: "pictures/bratislava.jpg",
        price: 50,

    },
    {
        id: 7,
        name: "Prague",
        description: "Prague is known for its diverse architecture and museums, along with its abundant and cheap nightlife, and extensive shopping options. It is also famous for its hearty food and cheap beer, along with its well maintained UNESCO World Heritage city Centre.",
        picture: "pictures/praha.jpg",
        price: 80,
    },
    {
        id: 8,
        name: "Madrid",
        description: "Madrid is home to a collection of the world's best art galleries, and the three most famous are handily located close to each other in a triangle. The Prado (classical paintings), The Reina Sofia (modern art) and the Thyssen-Bornemisza (a little bit of everything) are full of artistic riches well worth exploring.",
        picture: "pictures/madrid.jpg",
        price: 215,
    },
    {
        id: 9,
        name: "Zurich",
        description: "This half-day guided excursion takes you on a luxury coach to see top attractions, such as the old town, Swiss National Museum, Fraumunster Church, and Bahnhofstrasse, and includes a scenic ferry ride across Lake Zurich.",
        picture: "pictures/zurich.jpg",
        price: 220,
    }


];


for (let val of destinations) {
    document.getElementById("result").innerHTML += `
     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card m-1 mx-3 pb-2 cards-style ">
            <figure class="imghvr-hinge-left">
            <img src="${val.picture}" class="card-img-top" alt="${val.name}"> 
            
            <figcaption>
            <img src="${val.picture}" class="card-img-top" alt="${val.name}"> 
            
             
            </figcaption>
          </figure>
            <h3 class="card-text text-light bg-dark text-center fs-5 p-2">${val.name}</h3>
            <p class="card-text text-dark fs-6 m-2"><b>Description: ${val.description}</b></p>
            <p class="card-text btn-danger fs-6 m-2 p-1 w-25 rounded"><b> ${val.price}€</b></p>
            <i class="carts bi bi-cart-plus-fill text-primary p-4 fa-3x"></i>
            </div>
        </div>    
            `
}

var cart = [];

function addToCart(destination) {
    let item = cart.find((val) => val.name == destination.name);
    if (item) {
        item.qtty++;
    } else {
        cart.push(destination);

    }


    createRows();
    Total();
    console.table(cart);

}

let cartBtn = document.getElementsByClassName("carts");

for (let i = 0; i < cartBtn.length; i++) {
    cartBtn[i].addEventListener("click", function() {
        addToCart(pets[i]);
    })
}



function createRows() {


    var result = "";

    `<h2 class="title">Your Cart</h2>`
    for (let val of cart) {

        result += `
            <div class="card-container row  summary-section g-3">
            <div class="col">
                <!-- Card with default left text alignment -->
                <div class="card">
                    <div class="card-body">
                        
                        <img src="${val.picture}" class="summary-image" alt="${val.name}">  
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Card with center text alignment -->
                <div class="card ">
                    <div class="card-body">
                       
                        <h5 class="card-title">${val.name}</h5>
                      
                      
                    </div>
                </div>
            </div>
            <div class="col">
            <!-- Card with right text alignment -->
                <div class="card text-end">
                    <div class="card-body">
                       
                        <h5 class="card-title">Price: €${val.price}</h5>
                     
                    </div>
                </div>
                
        </div>
            <!-- Card with center text alignment -->
            <div class="col">
            description          
            
                        <i class="plus fa fa-plus-circle fa-2x text-success"></i>
                        <i class="fa-solid fa-circle-trash fa-2x text-danger"></i> 
                        
                        
                       
                        </span>
                        </div>
                    </div>
                    
            </div> 
        </div>
        
        `;

    }

    document.getElementById("cart-items").innerHTML = result;


    let plus = document.getElementsByClassName("plus");
    let minus = document.getElementsByClassName("minus");
    let del = document.getElementsByClassName("del");
    for (let i = 0; i < plus.length; i++) {
        plus[i].addEventListener("click", function() {
            plusQtty(i);
            Total();
        });
        minus[i].addEventListener("click", function() {
            minusQtty(i);
            Total();
        });
        del[i].addEventListener("click", function() {

            deleteItem(i);

            Total();

        });
    }
}

function Total() {
    let total = 0;
    for (let val of cart) {
        total = total + (val.price * val.qtty);
    }


    document.getElementById("total").innerHTML = total.toFixed(2) + "€";

}

function plusQtty(i) {
    cart[i].qtty++;
    document.getElementsByClassName("cart-quantity")[i].innerHTML = cart[i].qtty;
}

function minusQtty(i) {
    if (cart[i].qtty == 1) {
        cart.splice(i, 1);
        createRows();
    } else {
        cart[i].qtty -= 1;
        document.getElementsByClassName("cart-quantity")[i].innerHTML = cart[i].qtty
    }
}

function deleteItem(i) {

    cart[i].qtty = 1;

    cart.splice(i, 1);

    createRows();

}