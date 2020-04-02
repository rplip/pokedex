var app = {
  init: function() {
    console.log('app init');
  },
  changeOrder: function(value) {
    document.location = value;
  }
};


document.addEventListener('DOMContentLoaded', app.init);
