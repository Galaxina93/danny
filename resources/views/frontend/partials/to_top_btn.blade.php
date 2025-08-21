{{--To Top Btn--}}
<div class="right-2 bottom-8 mb-12 fixed z-50" onclick="topFunction()" id="toTopBtn" title="Nach oben">
    <svg xmlns="http://www.w3.org/2000/svg"
         class="text-white cursor-pointer h-10 w-10 transform hover:scale-105 duration-300 rounded-full bg-primary border border-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
    </svg>
</div>

<script>

    //Get the button:
    mybutton = document.getElementById("toTopBtn");

    // When the user scrolls down from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

</script>
