$("body").on("click", ".modal-show", function(event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title"),
        course = me.attr("data-course");

    $("#modal-title").text(title);
    $("#modal-btn-save")
        .removeClass("d-none")
        .text(me.hasClass("edit") ? "Update" : "Create");

    $.ajax({
        url: url,
        dataType: "html",
        success: function(response) {
            $("#modal-body").html(response);
            $("#course_id").val(course);
        }
    });

    $("#modal").modal("show");
});

$("#modal-btn-save").click(function(event) {
    event.preventDefault();

    var form = $("#modal-body form"),
        url = form.attr("action"),
        method = $("input[name=_method]").val() == undefined ? "POST" : "PUT";
    form.find(".help-block").remove();
    form.find(".has-error").remove();
    form.find(".form-group").removeClass("is-invalid");

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        success: function(response) {
            form.trigger("reset");
            $("#modal").modal("hide");
            $("#datatable")
                .DataTable()
                .ajax.reload();

            Swal.fire({
                type: "success",
                title: "Success!",
                text: "Data has been saved!"
            });
        },
        error: function(xhr) {
            var res = xhr.responseJSON;
            if ($.isEmptyObject(res) == false) {
                $.each(res.errors, function(key, value) {
                    $("#" + key)
                        .closest(".form-control")
                        .addClass("is-invalid");
                    $("#" + key)
                        .closest(".form-group")
                        .append(
                            '<span class="has-error alert-danger"><strong>' +
                                value +
                                "</strong></span>"
                        );
                });
            }
        }
    });
});

$("body").on("click", ".btn-delete", function(event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title"),
        csrf_token = $('meta[name="csrf-token"]').attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then(result => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    _method: "DELETE",
                    _token: csrf_token
                },
                success: function(response) {
                    $("#datatable")
                        .DataTable()
                        .ajax.reload();
                    Swal.fire({
                        type: "success",
                        title: "Success!",
                        text: "Data has been deleted!"
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        type: "error",
                        title: "Oops...",
                        text: "Something went wrong!"
                    });
                }
            });
        }
    });
});

$("body").on("click", ".btn-show", function(event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title");

    $("#modal-title").text(title);
    $("#modal-btn-save").addClass("d-none");

    $.ajax({
        url: url,
        dataType: "html",
        success: function(response) {
            $("#modal-body").html(response);
        }
    });

    $("#modal").modal("show");
});
