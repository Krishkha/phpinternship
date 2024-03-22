$(document).ready(function () {
    $("#student_register").submit(function (e) {
        var student_name = $("#student_name").val();
        var student_email = $("#student_email").val();
        var enrollment_no = $("#enrollment_no").val();
        var mobile_no = $("#mobile_no").val();
        var student_password = $("#student_password").val();

        $.ajax({
            url: 'register_post.php',
            data: {
                student_name: student_name,
                enrollment_no: enrollment_no,
                student_email: student_email,
                student_password: student_password,
                mobile_no: mobile_no
            },
            type: 'POST',
            success: function (response) {
                $("#response").html(response);
                resetForm();
            }
        });
        e.preventDefault();
    });

    $("#student_update").submit(function (e) {
        var student_name = $("#student_name").val();
        var student_email = $("#student_email").val();
        var enrollment_no = $("#enrollment_no").val();
        var mobile_no = $("#mobile_no").val();
        var student_password = $("#student_password").val();
        var id = $("#current_student_ids").val();

        $.ajax({
            url: 'edit_post.php',
            data: {
                student_name: student_name,
                enrollment_no: enrollment_no,
                student_email: student_email,
                student_password: student_password,
                mobile_no: mobile_no,
                id: id
            },
            type: 'POST',
            success: function (response) {
                $("#response").html(response);
                setTimeout(function(){
                    window.location.href = 'list.php';
                },3000)
            }
        });
        e.preventDefault();
    });

    function resetForm() {
        $(".forminputs").val('');
    }
});

function delete_record(id){
    
    $.ajax({
        url: "delete.php?id="+id,
        type: "GET",
        success: function(response){
            $("#response").html(response);
            $("#record_"+id).remove();
        }
    });
    return false;
}