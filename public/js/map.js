var script = document.createElement('script');
script.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.289258185725!2d106.8200833!3d-6.2138079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f401bd149845%3A0xfab22c8daef828ee!2sMayapada%20Tower%2C%20Jl.%20Jenderal%20Sudirman%20No.Kav.28%2C%20RT.4%2FRW.2%2C%20Kuningan%2C%20Karet%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2012920!5e1!3m2!1sen!2sid!4v1656227117382!5m2!1sen!2sid';
script.async = true;

window.initMap = function () {
    console.log('Map is loaded')
}

document.head.appendChild(script);