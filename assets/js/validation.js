$(function () {
    function bindValidation(formSelector, rules, messages) {
        var $form = $(formSelector);
        if (!$form.length) {
            return;
        }

        $form.validate({
            rules: rules,
            messages: messages,
            errorElement: "small",
            errorClass: "error-text",
            highlight: function (element) {
                $(element).addClass("input-error");
            },
            unhighlight: function (element) {
                $(element).removeClass("input-error");
            }
        });
    }

    bindValidation("#loginForm", {
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
            minlength: 6
        }
    }, {
        email: {
            required: "Email is required.",
            email: "Enter a valid email address."
        },
        password: {
            required: "Password is required.",
            minlength: "Password must be at least 6 characters."
        }
    });

    bindValidation("#signupForm", {
        full_name: {
            required: true,
            minlength: 3
        },
        email: {
            required: true,
            email: true
        },
        department: {
            required: true
        },
        password: {
            required: true,
            minlength: 6
        }
    }, {
        full_name: {
            required: "Full name is required.",
            minlength: "Full name must be at least 3 characters."
        },
        email: {
            required: "Email is required.",
            email: "Enter a valid email address."
        },
        department: {
            required: "Department is required."
        },
        password: {
            required: "Password is required.",
            minlength: "Password must be at least 6 characters."
        }
    });

    bindValidation("#adminLoginForm", {
        admin_id: {
            required: true
        },
        password: {
            required: true
        }
    }, {
        admin_id: {
            required: "Admin ID is required."
        },
        password: {
            required: "Password is required."
        }
    });

    bindValidation("#lostFoundForm", {
        item_name: {
            required: true
        },
        status: {
            required: true
        },
        location: {
            required: true
        }
    }, {
        item_name: {
            required: "Item name is required."
        },
        status: {
            required: "Please select lost or found."
        },
        location: {
            required: "Location is required."
        }
    });

    bindValidation("#forumForm", {
        thread_title: {
            required: true,
            minlength: 5
        },
        thread_body: {
            required: true,
            minlength: 15
        }
    }, {
        thread_title: {
            required: "Thread title is required.",
            minlength: "Thread title must be at least 5 characters."
        },
        thread_body: {
            required: "Thread description is required.",
            minlength: "Write at least 15 characters."
        }
    });

    bindValidation("#librarySearchForm", {
        query: {
            required: true,
            minlength: 2
        }
    }, {
        query: {
            required: "Please enter a search keyword.",
            minlength: "Enter at least 2 characters."
        }
    });
});
