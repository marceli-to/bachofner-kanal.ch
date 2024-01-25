(function () {
 
  const init = () => {
    const collapsibles = document.querySelectorAll('details');
    collapsibles.forEach((item) => {
      item.addEventListener('toggle', (event) => {
        if (item.open) {
          collapsibles.forEach((item) => {
            if (item !== event.target) {
              item.open = false;
            }
            else if (item === event.target && item.open) {
              // get slug from event.target via data-collapsible-slug
              const slug = event.target.dataset.collapsibleSlug;
              // add slug to url
              window.history.pushState({}, '', `#${slug}`);

              // scroll to the corresponding collapsible
              event.target.scrollIntoView({behavior: 'smooth'});
            }
          });
        }
      });
    });

    // if there is a hash in the url, open the corresponding collapsible
    // and scroll to the corresponding collapsible
    if (window.location.hash) {
      const hash = window.location.hash.substring(1);
      const collapsible = document.querySelector(`details[data-collapsible-slug="${hash}"]`);
      collapsible.open = true;

      // scroll to the corresponding collapsible
      collapsible.scrollIntoView({behavior: 'smooth'});
    }
  };

  init();
  
})();