window.onload = () => {
    const pushers = document.querySelectorAll( '[data-menu]' );

    for ( const pusher of pushers ) {
        const id_menu = pusher.dataset.menu;
        const menu = document.querySelector( id_menu );

        window.onresize = () => {
            if ( window.innerWidth > 1024 && Array.from( menu.classList ).includes( 'show' ) ) {
                menu.classList.remove( 'show' );
            }
        };

        pusher.addEventListener( 'click', () => {
            menu.classList.toggle( 'show' );
        });
    }
}