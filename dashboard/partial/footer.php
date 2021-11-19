    

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/dropify.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/chart.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/script.js"></script>
    <script>
   //Bar Graph
   //setup
   const data = {
       labels: ['BHM', 'BIT', 'MIT', 'BBA', 'BBS', 'ART'],
        datasets: [{
            label: 'Students',
            data: [100, 244, 333, 522, 266, 977],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            tension: 0.5
        }]
     };
    
//Line Graph
     // config
const config2 = {
   type: 'line',
    data,
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
};
//render init block
const lineChart = new Chart(
   document.getElementById('lineChart'),
   config2
);
//pie Chart
 // config
 const datapie = {
       labels: ['BHM', 'BIT', 'MIT', 'BBA', 'BBS', 'ART'],
        datasets: [{
            label: 'college',
            data: [1, 2, 3, 5, 2, 9],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            tension: 0.5
        }]
     };
     // config
const configpie = {
   type: 'doughnut',
    data: datapie,
    options: {
    }
};
//render init block
const pieChart = new Chart(
   document.getElementById('pieChart'),
   configpie
);



// SEARCH BOX
$('.user-info button .la-search').on('click', function (e) {
  $(this).toggleClass('open');
  $(".search-box").toggleClass('active');
  $(".l-header").toggleClass("z-index");
  $(".logo").toggleClass("z-indexx");
  $("body").toggleClass("overflow");
});

// Dropify
  $(".driving-dropify").dropify();
  $(".image-dropify").dropify();

// counter

$('.counter').counterUp({
  delay: 10,
  time: 2000
});


</script>
</body>
</html>