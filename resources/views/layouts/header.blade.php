<nav class="top-menu-container">
    <div class="logo-header">
        <a href="">
            <img 
            src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png" 
            alt="Logo personal portfolio"
            title="Logo personal portfolio"
            />
        </a>
    </div>
    
    <ul>
        <li>
            <a href="/"
            class="{{ request() -> is('/') ? 'active' : '' }}">
            Home</a>
        </li>
        <li>
            <a href="portofolio"
            class="{{ request() -> is ('portofolio') ? 'active' : '' }}">
            Portfolio</a>
        </li>
        <li>
            <a href="contact"
            class="{{ request() -> is ('contact') ? 'active' : '' }}">
            Contact</a>
        </li>
        <li>
            <a href="about"
            class="{{ request() -> is ('about/*') ? 'active' : '' }}">
            About</a>
        </li>
    </ul>
</nav>