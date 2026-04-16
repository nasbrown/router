 <nav>
        <ul>
            <li><a href="/router/" style= "<?= urlIs('/router/') ? "background-color: grey;" : '' ?>">Home</a></li>
            <li><a href="/router/about" style= "<?= urlIs('/router/about') ? "background-color: grey;" : '' ?>">About Us</a></li>
            <li><a href="/router/notes" style= "<?= urlIs('/router/notes') ? "background-color: grey;" : '' ?>">Notes</a></li>
            <li><a href="/router/contact" style= "<?= urlIs('/router/contact') ? "background-color: grey;" : '' ?>">Contact</a></li>
        </ul>
    </nav>