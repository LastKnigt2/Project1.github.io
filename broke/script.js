var routes = [
    {
        region: "Регион 1",
        name: "Маршрут 1",
        difficulty: "Сложность 1",
        dates: "01.01.2022 - 07.01.2022",
        zones: 5
    },
    {
        region: "Регион 2",
        name: "Маршрут 2",
        difficulty: "Сложность 2",
        dates: "15.02.2022 - 21.02.2022",
        zones: 8
    },
    {
        region: "Регион 3",
        name: "Маршрут 3",
        difficulty: "Сложность 3",
        dates: "10.03.2022 - 16.03.2022",
        zones: 3
    }
];

function displayRoutes() {
    var routesDiv = document.getElementById("routes");
    routesDiv.innerHTML = "";

    for (var i = 0; i < routes.length; i++) {
        var route = routes[i];
        
        var routeDiv = document.createElement("div");
        routeDiv.classList.add("route");

        var region = document.createElement("h2");
        region.innerText = route.region;
        routeDiv.appendChild(region);

        var name = document.createElement("p");
        name.innerText = "Название маршрута: " + route.name;
        routeDiv.appendChild(name);

        var difficulty = document.createElement("p");
        difficulty.innerText = "Сложность маршрута: " + route.difficulty;
        routeDiv.appendChild(difficulty);

        var dates = document.createElement("p");
        dates.innerText = "Предполагаемые даты похода: " + route.dates;
        routeDiv.appendChild(dates);

        var zones = document.createElement("p");
        zones.innerText = "Количество интересных зон для посещения: " + route.zones;
        routeDiv.appendChild(zones);

        routesDiv.appendChild(routeDiv);
    }
}

function selectRoute() {
    // Код для перехода к выбору конкретных зон для посещения
    console.log("Выбран маршрут");
}

displayRoutes()