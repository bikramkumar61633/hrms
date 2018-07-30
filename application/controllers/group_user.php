<?php 
class group_user extends frontend_controller{
    function index(){
        //list users for a group
        //validate the user should an active member of the group
        //params : group_id
        //get data from "group_users" by group_id join with "groups" table
        try{

        }
        catch(Exception $ex){
            
        }
    }
    function my_groups(){
        //list groups for user
        //param : user_id
        //get data from "group_users" by user_id join with "groups" table
        try{

        }
        catch(Exception $ex){
            
        }
    }
    function invite(){
        //post: invite user to join group
        //params : group_id, emailid
        //save data into "group_invitations"
        //trigger email with secret
        try{

        }
        catch(Exception $ex){
            
        }
    }
    function bulk_invite(){
        //post: invite user separated by comma(,) to join group
        //params : group_id, emailids
        //save data into "group_invitations"
        try{

        }
        catch(Exception $ex){
            
        }
    }
    function join(){
        //validate user login
        //params : user_id, group_id
        //validate the group type
        //if public
        //insert data into "group_users" table with status='ACCEPTED' and active=1
        //else
        //insert data into "group_users" table with status='PENDING' and active=0
        //trigger email to all the admins to approve the user to join
        try{

        }
        catch(Exception $ex){
            
        }
    }
}