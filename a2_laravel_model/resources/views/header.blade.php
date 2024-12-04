<style>
    *{
        font-family: sans-serif;
    }

    body, html {
        margin: 0;
    }
    h1{
        background-color: brown;
        padding: 1em;
        color: white;
    }

    .button {
        background: gray;
        text-decoration: none;
        padding: 0.4em;
        color: white;
    }

    .button:hover{
        background: rgb(61, 61, 61);

    }
     ul{
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 1em;
        list-style-type: none;
     }
     li{
        background: lightskyblue;
        padding: 0.4em;
        display: flex;
        flex-direction: column;
        gap: 0.8em;
        align-items: center;
     }
     form{
        display: flex;
        flex-direction: column;
        gap: 2em;
        align-items: center;
     }

     input{
        padding: 0.6em;

     }
     ul.error{
        background-color: red;
        display: flex;
        flex-direction: column;
        padding: 2em;
     }
     ul.error li{
        background: red;
        color: white;
     }

</style>