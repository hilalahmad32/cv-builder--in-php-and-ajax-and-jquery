$(document).ready(function () {


    $("#register").on("click", function (e) {
        e.preventDefault();
        const name = $("#name").val();
        const email = $("#email").val();
        const password = $("#password").val();

        if (name === "" || email === "" || password === "") {
            alert("Please Fill the Field");
        } else {
            $.ajax({
                url: "php/register.php",
                type: "POST",
                data: { name: name, email: email, password: password },
                success: (data) => {
                    if (data == 1) {
                        alert("Registration successfully");
                        window.location.href = "/login.php";
                        $("#form-data").trigger("reset");
                    } else if (data == 2) {
                        alert("Email already Exist");
                    } else {
                        alert('Something woring');
                    }
                }
            })
        }
    });

    $("#login").on("click", function (e) {
        e.preventDefault();
        const email = $("#email").val();
        const password = $("#password").val();

        if (email === "" || password === "") {
            alert("Please Fill the Field");
        } else {
            $.ajax({
                url: "php/login.php",
                type: "POST",
                data: { email: email, password: password },
                success: (data) => {
                    console.log(data)

                    if (data == 1) {
                        alert("Login successfully");
                        window.location.href = "/dashboard.php";
                        $("#form-data").trigger("reset");
                    } else {
                        alert('Invalid Username and password');
                    }
                }
            })
        }
    });

    $("#c_name").on("keyup", function () {
        const c_name = $(this).val();
        $("#c_names").text(c_name);
    })
    $("#cr_name").on("keyup", function () {
        const cr_name = $(this).val();
        $("#cr_names").text(cr_name);
    })
    $("#profile").on("change", function (e) {
        const filename = $(this).get(0).files[0];
        if (filename) {
            const reader = new FileReader();
            reader.onload = function () {
                $("#profiles").attr("src", reader.result);
            }
            reader.readAsDataURL(filename);
        }

    })
    $("#name").on("keyup", function () {
        const name = $(this).val();
        $("#names").text(name);
    })
    $("#dob").on("keyup", function () {
        const dob = $(this).val();
        $("#dobs").text(dob);
    })
    $("#job").on("keyup", function () {
        const job = $(this).val();
        $("#jobs").text(job);
    })
    $("#email").on("keyup", function () {
        const email = $(this).val();
        $("#emails").text(email);
    })
    $("#skype").on("keyup", function () {
        const skype = $(this).val();
        $("#skypes").text(skype);
    })
    $("#about").on("keyup", function () {
        const about = $(this).val();
        $("#abouts").text(about);
    })
    $("#contact").on("keyup", function () {
        const contact = $(this).val();
        $("#contacts").text(contact);
    })
    $("#address").on("keyup", function () {
        const address = $(this).val();
        $("#addresss").text(address);
    })
    $("#education").on("keyup", function () {
        const education = $(this).val();
        $("#educations").text(education);
    })
    $("#exp").on("keyup", function () {
        const exp = $(this).val();
        $("#exps").text(exp);
    })
    $("#lang").on("keyup", function () {
        const lang = $(this).val();
        $("#langs").text(lang);
    })
    $("#edu").on("keyup", function () {
        const edu = $(this).val();
        $("#edus").text(edu);
    })
    $("#exp").on("keyup", function () {
        const exp = $(this).val();
        $("#exps").text(exp);
    })
    $("#photoshop").on("keyup", function () {
        const photoshop = $(this).val();
        if (photoshop <= 0 || photoshop > 100) {
            $("#photoshops").text("Value between 0 and 100");
            $("#photoshops").css({ color: "red" });

        } else {
            $("#photoshops").css({ width: photoshop + "%" });
            $("#photoshops").text(photoshop + "%");


        }
    })
    $("#figma").on("keyup", function () {
        const figma = $(this).val();
        if (figma <= 0 || figma > 100) {
            $("#figmas").text("Value between 0 and 100");

        } else {
            $("#figmas").css({ width: figma + "%" });
            $("#figmas").text(figma + "%");


        }
    })
    $("#xd").on("keyup", function () {
        const xd = $(this).val();
        if (xd <= 0 || xd > 100) {
            $("#xds").text("Value between 0 and 100");

        } else {
            $("#xds").css({ width: xd + "%" });
            $("#xds").text(xd + "%");


        }
    })
    $("#js").on("keyup", function () {
        const js = $(this).val();
        if (js <= 0 || js > 100) {
            $("#jss").text("Value between 0 and 100");

        } else {
            $("#jss").css({ width: js + "%" });
            $("#jss").text(js + "%");


        }
    })
    $("#lv").on("keyup", function () {
        const lv = $(this).val();
        if (lv <= 0 || lv > 100) {
            $("#lvs").text("Value between 0 and 100");

        } else {
            $("#lvs").css({ width: lv + "%" });
            $("#lvs").text(lv + "%");


        }
    })
    $("#re").on("keyup", function () {
        const re = $(this).val();
        if (re <= 0 || re > 100) {
            $("#res").text("Value between 0 and 100");

        } else {
            $("#res").css({ width: re + "%" });
            $("#res").text(re + "%");


        }
    });

    $("#download").on("click", function (e) {
        e.preventDefault();
        html2canvas(document.getElementById("content")).then(function (canvas) {
            var anchorTag = document.createElement("a");
            document.body.appendChild(anchorTag);
            // document.getElementById("previewImg").appendChild(canvas);
           var val="filename.jpg";
          anchorTag.download =val;
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();

            $.ajax({
                url:"php/insert-cv.php",
                type:"POST",
                data:{val:val},
                success:function(data){
                    console.log(data);
                }
            })
        });
    })




    // function show_message(action, text) {
    //     var message_box;
    //     if (action === "error") {
    //         message_box = $("#error");
    //     } else {
    //         message_box = $("#success");
    //     }
    //     message_box.css({display:"block"});
    //     message_box.text(text);
    //     setTimeout(() => {
    //         message_box.css({display:"none"});
    //     }, 3000);
    // }
})