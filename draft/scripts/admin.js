const users =document.getElementById("users").value;
const restaurants = document.getElementById("restaurants").value;
const comments = document.getElementById("omments").value; {
    

        let data = {
            users: users,
            restaurants : restaurants,
            reviews :reviews,
        }

        let url = 'http://localhost/zomato/backend/statistics.php';
        axios({
            method: 'GET',
            url: url,
            params: data,
        })     
        .then(function (response) {
            console.log(response)
            let result = response.data;
            let usersphp = result[0];
            let reviewsphp = result[1];
            let restaurantsphp = result[2];
            users.innerHtml=usersphp[1];
            restaurants.innerHtml=restaurantsphp[1];
            comments.innerHtml=commentsphp[1];

            
            window.location.href = "http://localhost/zomato/draft/profile.html";

        });
        
            
  }
