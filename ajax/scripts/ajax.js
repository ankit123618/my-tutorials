// post method sending variable
const name1 = "ankit";

// // XML http request - GET
// const xhrget = new XMLHttpRequest();
// xhrget.onreadystatechange = () => {
//     if (xhrget.readyState == "4" && xhrget.status == "200");
//     document.getElementById("ajax").innerHTML = xhrget.responseText;
// }
// xhrget.open("GET", "back.php");
// xhrget.send();


// // fetch api get request
// const promiseget = fetch("back.php");
// promiseget.then(response => response.text()).then(data => console.log(data));



//  XML http request - POST
// create a new XMLHttpRequest object
const xhrpost = new XMLHttpRequest();

// define the request URL and method
let url = 'back.php';
let method = 'POST';

// prepare the data to send
let data = {
    name: "ankit sharma",
    email: 'as4808385@gmail.com',
    message: 'Hello, this is a ankit!'
};

// stringify the data
let json = JSON.stringify(data);
console.log(json);

// open the request and set the headers
xhrpost.open(method, url, true);
xhrpost.setRequestHeader('Content-Type', 'application/json');

// send the request with the data
xhrpost.send(json);


// fetch api post request
// const promisepost = fetch("back.php",{
// method: "POST",
//     headers: {
//     "Content-type": "application/json"
// },
// body: JSON.stringify({
//     name: name1
// })
//     });
// promisepost.then(response => {
//     return response.text()
// }).then(data => console.log(data));


