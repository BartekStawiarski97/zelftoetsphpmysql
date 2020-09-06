<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    $employees = getAllEmployees();
    render('employee/index', ["employees" => $employees]);
}

function create(){
    render("employee/create");
}

function store(){
    $name = $_POST["name"];
    $date = $_POST["date"];
    createEmployee($name, $date);

    header("location: ".URL."employee/index");

}

function edit($id){
    $employee = getEmployee($id);
    render('employee/update', ["employee" => $employee]);
    

}

function update($id){
    updateEmployee($_POST, $id);
    header("location: ".URL."employee/index");


    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    //2. Bouw een url en redirect hierheen

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    deleteEmployee($id);
    header("location: ".URL."employee/index");
    //1. Delete een medewerker uit de database

	//2. Bouw een url en redirect hierheen
    
}
?>