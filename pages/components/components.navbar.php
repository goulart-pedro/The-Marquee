    <nav class="navbar" mq-nav-hidden="false">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="?page=home" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                        <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg>
                    <span class="link-text">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="?page=filmes" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm6 10h-4V5h4v14zm4-2h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z" />
                        <path d="M10 5h4v14h-4z" opacity=".3" />
                    </svg>
                    <span class="link-text">Filmes</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="?page=contato" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12.72 2.03C6.63 1.6 1.6 6.63 2.03 12.72 2.39 18.01 7.01 22 12.31 22H16c.55 0 1-.45 1-1s-.45-1-1-1h-3.67c-3.73 0-7.15-2.42-8.08-6.03-1.49-5.8 3.91-11.21 9.71-9.71C17.58 5.18 20 8.6 20 12.33v1.1c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57v-1.25c0-2.51-1.78-4.77-4.26-5.12-3.4-.49-6.27 2.45-5.66 5.87.34 1.91 1.83 3.49 3.72 3.94 1.84.43 3.59-.16 4.74-1.33.89 1.22 2.67 1.86 4.3 1.21 1.34-.53 2.16-1.9 2.16-3.34v-1.09c0-5.31-3.99-9.93-9.28-10.29zM12 15c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" /></svg>
                    <span class="link-text">Contato</span>
                </a>
            </li>

            <li class="nav-item" id="theme-button">
                <a class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M6.05 4.14l-.39-.39c-.39-.39-1.02-.38-1.4 0l-.01.01c-.39.39-.39 1.02 0 1.4l.39.39c.39.39 1.01.39 1.4 0l.01-.01c.39-.38.39-1.02 0-1.4zM3.01 10.5H1.99c-.55 0-.99.44-.99.99v.01c0 .55.44.99.99.99H3c.56.01 1-.43 1-.98v-.01c0-.56-.44-1-.99-1zm9-9.95H12c-.56 0-1 .44-1 .99v.96c0 .55.44.99.99.99H12c.56.01 1-.43 1-.98v-.97c0-.55-.44-.99-.99-.99zm7.74 3.21c-.39-.39-1.02-.39-1.41-.01l-.39.39c-.39.39-.39 1.02 0 1.4l.01.01c.39.39 1.02.39 1.4 0l.39-.39c.39-.39.39-1.01 0-1.4zm-1.81 15.1l.39.39c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41l-.39-.39c-.39-.39-1.02-.38-1.4 0-.4.4-.4 1.02-.01 1.41zM20 11.49v.01c0 .55.44.99.99.99H22c.55 0 .99-.44.99-.99v-.01c0-.55-.44-.99-.99-.99h-1.01c-.55 0-.99.44-.99.99zM12 5.5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-.01 16.95H12c.55 0 .99-.44.99-.99v-.96c0-.55-.44-.99-.99-.99h-.01c-.55 0-.99.44-.99.99v.96c0 .55.44.99.99.99zm-7.74-3.21c.39.39 1.02.39 1.41 0l.39-.39c.39-.39.38-1.02 0-1.4l-.01-.01c-.39-.39-1.02-.39-1.41 0l-.39.39c-.38.4-.38 1.02.01 1.41z" />
                    </svg>
                    <span class="link-text" id="theme-label">Tema:</span>
                </a>
            </li>

            <?php if (isset($_COOKIE['USER_SESSION'])) : ?>
                <li class="nav-item" id="theme-button">
                    <a href="?page=admin" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" />
                        </svg>
                        <span class="link-text">Admin</span>
                    </a>
                </li>

            <?php endif ?>
        </ul>
    </nav>