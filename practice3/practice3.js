function Check_Passwords()

{

    let password1 = document.getElementById("password1").value;

    let password2 = document.getElementById("password2").value;


    if (password1.length>=8 && password1==password2)

    {

        alert("Correct! Your passwords match and fit the criteria!");

    }

    else

    {

        if (password1.length<8)

        {

            alert("First password is too short.");

        }

        else if (password2.length<8)

        {

            alert("Second password is too short.");

        }

        else if (password1!=password2)

        {

            alert("Passwords do not match.");

        }

        

    }

}