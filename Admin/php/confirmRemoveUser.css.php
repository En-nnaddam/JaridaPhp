<style>
.confirmation {
    display: none;
    position: fixed;
    inset: 0;
    color: black;
    background-color: rgba(0, 0, 0, 0.212);
    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    z-index: 1;
}

.confirmation div {
    background-color: rgb(206, 205, 205);
    padding: 2em 1em;
    box-shadow: 0em 0.1em 0.8em black;
}

.confirmation button{
    cursor: pointer;
    padding: 0.1em 2em;
}

.confirmation input {
    display: none;
}
</style>