<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wykres</title>
</head>
<body>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>

    <div style="height: 500px;width:1000px;margin:auto;">
        <canvas id="wykres"></canvas>
    </div>

    <script>
        $(function(){
            var datas = <?php echo json_encode($datas); ?>;
            var barCanvas = $("#wykres");
            var barChart = new Chart(barCanvas, {
                type:'bar',
                data:{
                    labels:['Styczen','Luty','Marzec','Kwiecien','Maj','Czerwiec','Lipec','Sierpien','Wrzesien','Pazdziernik','Listopad','Grudzien'],
                    datasets:[
                        {
                            label:'Sprzedaz produktow w 2020 roku',
                            data:datas,
                            backgroundColor:['red','orange','yellow','green','blue','purple','pink','grey','brown','black','teal','magenta']
                        }
                    ]
                },
                options:{
                    scales:{
                        yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                        }]
                    }
                }

            });
        
        })
    </script>

</body>
</html>