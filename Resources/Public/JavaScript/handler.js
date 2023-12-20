;(function () {
    function setCookie () {
        const domain = window.location.hostname;
        const exdate = new Date();
        exdate.setHours(exdate.getHours() + (365 * 24));
        document.cookie = 'cookieconsent_status=allow' +
            ';expires=' + exdate.toUTCString() +
            ';path=/' +
            ( domain ? ';domain=' + domain : '' );
    }
    document.querySelectorAll('.btn-ccp').forEach(el => {
        el.addEventListener('click', evt => {
            setCookie();
            const event = new Event('bk2k.cookie.enable', { bubbles: true, cancelable: true });
            window.dispatchEvent(event);
        });
    });
    window.addEventListener('bk2k.cookie.enable', function () {
        document.querySelectorAll('.btn-ccp').forEach(btn => {
            const reload = btn.dataset.reload;
            if (reload) location.reload();
            const ccid = btn.dataset.ccid;
            const template = document.getElementById('ccid-' + ccid);
            document.getElementById('ccpid-' + ccid).replaceWith(template.content.cloneNode(true));
        });
    });
})();
