<?php 
class group_admin extends frontend_controller{
    function index(){
        //list admins for a group
        //params : group_id
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function my_groups(){
        //list groups for admin user
        //param : user_id
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function admin_assign(){
        //post: assign new admin for a group 
        //params : group_id, user_id (insert data into group_admin_invitations[id, user_id, group_user_id, secret])
        //trigger email to the user for assign admin accept
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function admin_assign_accept(){
        //params : secret and user_id
        //if data exist update "group_users" with group_admin=1
        //update "group_admin_invitations" table with status='ACCEPTED'
        //trigger email to the sender of acceptance
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function admin_assign_reject(){
        //params : secret and user_id
        //if data exist update "group_users" with group_admin=0
        //update "group_admin_invitations" table with status='REJECTED'
        //trigger email to the sender of acceptance
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function admin_unassign(){
        //post: unassign admin for group
        //params : group_user_id
        //trigger email to the group admin user of unassigning admin role
        //update "group_users" table with group_admin=0
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function private_join_requests(){
        //validate the user should group admin
        //list all private joining request by group_id
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function private_join_requests_approve(){
        //validate the loggedin user should admin of the requested group
        //post : group_user_id 
        //update "group_users" table make status='APPROVED' and active=1
        //trigger email to the user
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    function private_join_requests_reject(){
        //validate the loggedin user should admin of the requested group
        //post : group_user_id 
        //update "group_users" table make status='REJECTED'
        //trigger email to the user
        try{

        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
}