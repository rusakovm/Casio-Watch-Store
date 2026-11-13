function navText(id) {
    console.log(id)
    if(id == "specifications"){
       
       
        

        let title = document.getElementById("title").innerHTML = 
        
        `<span class = "specifications__text">Механизм ${name} </span>
        <span class = "specifications__text">Бренд ${name} </span>
        <span class = "specifications__text">Корпус ${name} </span>
        <span class = "specifications__text">сталь ${name} </span>
        <span class = "specifications__text">Водозащита ${name} </span>
        <span class = "specifications__text">Пол ${name} </span>
        <span class = "specifications__text">Функции ${name} </span>
        <span class = "specifications__text">Размер ${name} </span>`
        console.log(name)
    }
    if(id == "discription"){
        let title = document.getElementById("title").innerHTML = 
        
        `<span class = "specifications__text">Механизм ${name} </span>`
    }

}

function onFavorite(){
    document.getElementById('favorite')
}

