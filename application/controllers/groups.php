<?php 
class groups extends frontend_controller{
    function index(){
        //list of active groups available
    }
    function create(){
        //post: create new group 
        //params : group_name, type(private/public)
        ///insert data into "groups" table
        //insert data into "group_users" table as group_id, user_id, group_admin=1, group_owner=1
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function update(){
        //post: update existing group
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function delete(){
        //delete: delete existing group
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function deactive(){
        //post: update active = 0
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
}