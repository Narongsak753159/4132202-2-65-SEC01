
    var num = 10;
    let name = "Nueng";
    // let Array = [10,15,"Nueng"];
    const obj = {name:"Nueng",age:22 };
    const objMix = {
        date: [
            {name: "Dang", gpa:4.3},
            {name: "Dum", gpa:4.8},
        ],
    };

    console.log(num);
    console.log(Array);
    console.log(objMix);

    let string = num + name;
    console.log(string);

    string = objMix.date[1].name + Array[0];
    console.log(string);

    string = "<p>"+ Array[2] +"</p>";
    string = `<p>${Array}</p>`;
console.log(string);

function Add(a,b) {
    return a + b;
}

console.log(Add(3, 5));

document.getElementById("div1").innerHTML = name;

$(function(){
    // alert("Hello");
    $("div1").html("Nueng");

    $("#bt1").click(function(){
        $("#div1").html("I love IT");

    });
   
    $("#bt3").click(() => { 
        $(".in1").val("BRU");
    })
    $("#bt4").click(() =>{
        $(".in1:odd").addClass("red");
    });

    $("#div_about").load("./pages/about.html");

});

