function doMath()
{

    var my_input1 = document.getElementById('ba').value;
    var my_input2 = document.getElementById('da').value;
    var my_input3 = document.getElementById('sa').value;
    var my_input4 = document.getElementById('ca').value;
    var my_input5 = document.getElementById('ma').value;
    var sum = parseInt(my_input1) + parseInt(my_input2) + parseInt(my_input3) + parseInt(my_input4) + parseInt(my_input5);
    document.getElementById('total').value = sum;
}
