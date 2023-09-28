window.addEventListener('load', function() {

    const  takaka= [
        {
            titulo: "sadasdasdsad", text: "zczxczxczxczxc",
        },
        {
            titulo: "sadasdasdsad", text: "zczxczxczxczxc",
        },
        {
            titulo: "sadasdasdsad", text: "zczxczxczxczxc",
        },
    ]

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

    const openButton = document.querySelector("[data-open-modal]")
    const closeButton = document.querySelector("[data-close-modal]")
    const modal = document.querySelector("[data-modal]")

    if (openButton) {
        openButton.addEventListener("click", () =>{
            modal.showModal()
        })
    }
    if (openButton) {
        closeButton.addEventListener("click", () =>{
            modal.close()
        })
    }
});
