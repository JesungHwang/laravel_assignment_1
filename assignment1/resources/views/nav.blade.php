<style>
.nav-item {
    color: white;
    padding: 10px;
    margin: 5px 10px;
    border-radius: 6px;
    text-decoration: none;
    border: solid white 2px;
    transition: color 0.2s ease, background 0.2s ease;
    display:flex;
    justify-content:center;
}

.nav-item span{
    display:inline-block;
}

.nav-item:hover {
    color:black;
    backdrop-filter: blur(10px);
    background-color:white;
    background-image: radial-gradient(circle, rgba(0,0,0,0.25) 1px, transparent 1px);
    background-size:6px 6px;
}

.nav-item:hover span{
    animation: wave .2s ease;
}

@keyframes wave{
    0%{transform:translateY(0)}
    50%{transform:translateY(-6px)}
    100%{transform:translateY(0)}
}
</style>

<hr>

<nav style="display:flex;text-align:center;">
<a class="nav-item" style="flex:1;" href="/home"><strong>Home</strong></a>
<a class="nav-item" style="flex:1;" href="/manage"><strong>Manage</strong></a>
<a class="nav-item" style="flex:1;" href="/search"><strong>Search</strong></a>
<a class="nav-item" style="flex:1;" href="/about"><strong>About</strong></a>
</nav>

<hr>

<script>
document.querySelectorAll(".nav-item strong").forEach(el=>{
    const text = el.textContent;
    el.innerHTML = [...text].map((l,i)=>
        `<span style="animation-delay:${i*0.05}s">${l}</span>`
    ).join("");
});
</script>