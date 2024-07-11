function showFlash()
{
    let flashDiv = document.querySelector(".flash")
    let contactForm = document.querySelector("#contact-form")
    let wrapperForm = document.querySelector('#true-form')
    wrapperForm.classList.remove('hidden')
    contactForm.addEventListener('submit', function(event)
    {
        event.preventDefault()
        let xhr = new XMLHttpRequest()
        xhr.open('POST', "submit.php", true)
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        console.log(xhr.onload,"before")
        xhr.onreadystatechange = function() 
        {
            if (xhr.readyState == 4 && xhr.status == 200) //Good response 
            {
                let result = xhr.responseText
                flashDiv.classList.remove("hack-hidden")
                flashDiv.innerHTML = result
                setTimeout(function(){
                    flashDiv.classList.add('hack-hidden')
                },3000)
            }
        }
        xhr.send("subject=" +  encodeURIComponent(document.getElementById('subject').value) 
        +  "&content=" + encodeURIComponent(document.getElementById('content').value)
        +  "&email=" + encodeURIComponent(document.getElementById('email').value))
    })
}

showFlash()