function datedujour(){
var date = new Date()
alert( 'Nous sommes le ' + ('0'+date.getDate()).slice(-2)+"/"+('0'+(date.getMonth()+1)).slice(-2)+"/"+date.getFullYear());
}