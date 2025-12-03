// function toast (){

//     const toast = document.querySelector("#toast");

//     toast.textContent=message;
//     let message= toast.dataset.message;
//     let type=toast.dataset.type;

//     if(type==="succes") toast.className="bg-green-600 text-white px-6 py-3 rounded shadow fixed top-5 left-1/2 -translate-x-1/2";
//     if(type === "error") toast.className="bg-red-600 text-white px-6 py-3 rounded shadow fixed top-5 left-1/2 -translate-x-1/2";
//     toast.classList.remove("hidden");
    
//     setTimeout(()=>{
//         toast.classLists.add("hidden")
//     },3000);
// }
const form = document.querySelector("#formulaire");
const toast = document.querySelector("#toast");
form.addEventListener("submit",(e)=>{
    e.preventDefault();
    
})


