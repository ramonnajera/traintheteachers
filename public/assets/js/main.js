window.addEventListener('load', function() {

    const toogleBtn = document.querySelector(".toggle-button");
    const dropdown = document.querySelector(".dropdown-menu");

    toogleBtn.addEventListener("click", ()=>{
        dropdown.classList.toggle('hidden');
    })

    setTimeout(() => {
        const box = document.getElementById('notification');
       
        if(box){
            box.classList.add('fade-out-right');
            box.classList.remove('fade-in-right');
        }
      
    }, 3000)

    // const openButton = document.querySelector("[data-open-modal]")
    // const closeButton = document.querySelector("[data-close-modal]")
    // const modal = document.querySelector("[data-modal]")

    // if (openButton) {
    //     openButton.addEventListener("click", () =>{
    //         console.log("clic");
    //         modal.showModal()
    //     })
    // }
    // if (openButton) {
    //     closeButton.addEventListener("click", () =>{
    //         modal.close()
    //     })
    // }

    // const openButtons = document.querySelectorAll("[data-open-modal]");
    // const closeButton = document.querySelector("[data-close-modal]");
    // const modal = document.querySelector("[data-modal]");

    // openButtons.forEach(button => {
    // button.addEventListener("click", () => {
    //     modal.showModal();
    // });
    // });

    // closeButton.addEventListener("click", () => {
    // modal.close();
    // });

    const openButtons = document.querySelectorAll("[data-open-modal]");
    const closeButtons = document.querySelectorAll("[data-close-modal]");
    const modals = document.querySelectorAll("[data-modal]");

    openButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        modals[index].showModal();
    });
    });

    closeButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        modals[index].close();
    });
    });

});