function asd() {
    const input = document.getElementById("Search").value;
    fetch(
      "https://api.spoonacular.com/recipes/complexSearch?apiKey=3d9d722b5c59445bb2b992f459f99e09&addRecipeInformation=true&number=100&query=" +
        input
    )
      .then((response) => response.json())
      .then((data) => {
        console.log("data", data);
        displayData(data);
      });
  
    async function displayData(data) {
      let tab = "";
      let results = data.results;
      await results.forEach((results) => {
        tab += "<tr>";
        tab += `<td>${results.title}</td>
                <td>${results.glutenFree}</td>
                <td>${results.dairyFree}</td>
                <td>${results.servings}</td>
                <td>${results.readyInMinutes}</td>
                <td><img src="${results.image}" style = "width: 50px; height: 50px; border-radius:50%"></td>`;
        tab += "</tr>";
      });
      document.querySelector("tbody").innerHTML = await tab;
  
      $(document).ready(function () {
        $("#example").DataTable();
      });
    }
}