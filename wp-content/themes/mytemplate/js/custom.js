window.addEventListener('DOMContentLoaded', () => {

  var options = {

    url: "depo-locations.json",
  
    getValue: "Suburb",
  
    list: {
      match: {
        enabled: true
      }
    },
  
    theme: "square"
  };

  document.querySelector("#single-product-autocomplete").easyAutocomplete(options);
})