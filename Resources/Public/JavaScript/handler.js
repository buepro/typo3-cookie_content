;(function () {
    document.querySelectorAll('.btn-ccp').forEach(el => {
        el.addEventListener('click', evt => {
            const ccid = evt.target.dataset.ccid;
            const template = document.getElementById('ccid-' + ccid);
            document.getElementById('ccpid-' + ccid).replaceWith(template.content.cloneNode(true));
        });
    });
})();
