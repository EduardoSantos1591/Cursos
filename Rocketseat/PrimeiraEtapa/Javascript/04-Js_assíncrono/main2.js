axios.get('https://api.github.com/users/EduardoSantos1591')
    .then(function(response) {
        console.log(response);
    })

    .catch(function(error) {
        console.warn(Error);
    });