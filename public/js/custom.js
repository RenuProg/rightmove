$(document).ready(function () {

    // Type It - Slider
    new TypeIt('#type-effect', {
        strings: ["Let's make your brand matter!"],
        speed: 100,
        nextStringDelay: 3000,
        loopDelay: 5000,
        startDelay: 5000,
        breakLines: false,
        waitUntilVisible: true,
        loop: true
    }).go();

    // More or less

    // Configure/customize these variables.
    var showChar = 50; // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";


    $('.career-desc').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

    // Ajax Single service Data
    $('.offset-side-bar').on('click', function (e) {
        var id = this.getAttribute('data-id');
        $.ajax({
            type: "GET",
            url: "/service/" + id,
            success: function (data) {
                var parsed = jQuery.parseJSON(data)
                $('#xs_service_id').val(parsed.id);
                $('.cart-group .main-title').html(parsed.title);
                // $('.cart-group .service-desc').html(parsed.desc);
                // $('#meta_keywords').val(parsed.meta_keywords);
            }
        })
    });

    // Ajax single Career Data
    $('.careers-side-bar').on('click', function (e) {
        var id = this.getAttribute('data-id');
        $.ajax({
            type: "GET",
            url: "career/" + id,
            success: function (data) {
                var parsed = jQuery.parseJSON(data)
                console.log(parsed.id);
                $('#xs_career_id').val(parsed.id);
                // $('.career-group .main-title').html(parsed.name);
                // $('.career-group .career-desc').html(parsed.desc);
            }
        })
    });

    // Ajax single Case Data
    $('.case-study-side-bar').on('click', function (e) {
        $('#case-images').html('')
        $('#case-parallax').html('')
        var id = this.getAttribute('data-id');
        // for(var i =1; i<= 3; i++){
        //     $('#points-3').append($('<div class="col-md-4 mx-auto"><h3>1.5 million</h3><p>Unique contest impressions</p></div>',))
        // }
        $.ajax({
            type: "GET",
            url: "case-study/" + id,
            success: function (data) {
                var parsed = jQuery.parseJSON(data)
                // console.log(parsed.id)

                var myImages = jQuery.parseJSON(parsed.images)
                // console.log(myObj)

                var myParallax = jQuery.parseJSON(parsed.scroll_images)
                // console.log(myObj)

                $('.case-study-group .main-title').html(parsed.title);
                $('.case-study-group .main-logo').attr("alt", parsed.title);
                $('.case-study-group .result-head-1').html(parsed.result_head_1);
                $('.case-study-group .result-text-1').html(parsed.result_text_1);
                $('.case-study-group .result-head-2').html(parsed.result_head_2);
                $('.case-study-group .result-text-2').html(parsed.result_text_2);
                $('.case-study-group .result-head-3').html(parsed.result_head_3);
                $('.case-study-group .result-text-3').html(parsed.result_text_3);
                $('.case-study-group .service-desc').html(parsed.desc);
                $('.case-study-group .main-logo').attr("src", "/storage/" + parsed.logo + "");

                $.each(myImages, function (index, value) {
                    // console.log(index + ": " + value);
                    $('#case-images').append($('<div class="col-md-6 mx-auto"><img class="case-image" src="storage/' + value + '" alt=""></div>', ))
                });
                $.each(myParallax, function (index, value) {
                    // console.log(index + ": " + value);
                    var res = value.replace(/\\/g, "//")
                    console.log(res)
                    $('#case-parallax').append($('<section class="agency-parallax-area shuffle-title"><div class="container-fluid"><div class="row no-gutters"><div class="col-lg-12"><div class="parallax-case"style="background-image: url(\'storage/' + res + '\')"></div></div></div></div></section>', ))
                });

                for (var i = 1; i <= 3; i++) {

                }
            }
        })
    });

    // Email Expression
    function email_pattern(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    // Career Form Submit

    $('#xs-career-form').on('submit', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_career_name = $('#xs_career_name'),
            xs_career_last_name = $('#xs_career_last_name'),
            xs_career_number = $('#xs_career_number'),
            xs_career_email = $('#xs_career_email'),
            xs_career_submit = $('#xs_career_submit'),
            xs_career_error = false;

        $('.xpeedStudio_success_message').remove();

        if (xs_career_name.length > 0) {
            if (xs_career_name.val().trim() === '') {
                xs_career_name.addClass('invaild');
                xs_career_error = true;
                xs_career_name.focus();
                return false;
            } else {
                xs_career_name.removeClass('invaild');
            }
        }

        if (xs_career_last_name.length > 0) {
            if (xs_career_last_name.val().trim() === '') {
                xs_career_last_name.addClass('invaild');
                xs_career_error = true;
                xs_career_last_name.focus();
                return false;
            } else {
                xs_career_last_name.removeClass('invaild');
            }
        }

        if (xs_career_number.length > 0) {
            if (xs_career_number.val().trim() === '') {
                xs_career_number.addClass('invaild');
                xs_career_error = true;
                xs_career_number.focus();
                return false;
            } else {
                xs_career_number.removeClass('invaild');
            }
        }

        if (xs_career_email.length > 0) {
            if (xs_career_email.val().trim() === '') {
                xs_career_email.addClass('invaild');
                xs_career_error = true;
                xs_career_email.focus();
                return false;
            } else if (!email_pattern(xs_career_email.val().toLowerCase())) {
                xs_career_email.addClass('invaild');
                xs_career_error = true;
                xs_career_email.focus();
                return false;
            } else {
                xs_career_email.removeClass('invaild');
            }
        }

        if (xs_career_error === false) {
            xs_career_submit.before().hide().fadeIn();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "/careerform",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data, textStatus, jqXHR) {
                    xs_career_submit.after('<p class="xpeedStudio_success_message">' + data + '</p>').hide().fadeIn();
                    setTimeout(function () {
                        $(".xpeedStudio_success_message").fadeOut(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#xs-career-form')[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        } else {
            xs_career_submit.after('<p class="xpeedStudio_success_message">Error Occurred</p>').hide().fadeIn();
        }
    });

    // Service Form Submit

    $('#xs-service-form').on('submit', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_service_name = $('#xs_service_name'),
            xs_service_last_name = $('#xs_service_last_name'),
            xs_service_number = $('#xs_service_number'),
            xs_service_email = $('#xs_service_email'),
            xs_service_subject = $('#xs_service_subject'),
            xs_service_submit = $('#xs_service_submit'),
            xs_service_error = false;

        $('.xpeedStudio_success_message').remove();

        if (xs_service_name.length > 0) {
            if (xs_service_name.val().trim() === '') {
                xs_service_name.addClass('invaild');
                xs_service_error = true;
                xs_service_name.focus();
                return false;
            } else {
                xs_service_name.removeClass('invaild');
            }
        }

        if (xs_service_last_name.length > 0) {
            if (xs_service_last_name.val().trim() === '') {
                xs_service_last_name.addClass('invaild');
                xs_service_error = true;
                xs_service_last_name.focus();
                return false;
            } else {
                xs_service_last_name.removeClass('invaild');
            }
        }

        if (xs_service_number.length > 0) {
            if (xs_service_number.val().trim() === '') {
                xs_service_number.addClass('invaild');
                xs_service_error = true;
                xs_service_number.focus();
                return false;
            } else {
                xs_service_number.removeClass('invaild');
            }
        }

        if (xs_service_email.length > 0) {
            if (xs_service_email.val().trim() === '') {
                xs_service_email.addClass('invaild');
                xs_service_error = true;
                xs_service_email.focus();
                return false;
            } else if (!email_pattern(xs_service_email.val().toLowerCase())) {
                xs_service_email.addClass('invaild');
                xs_service_error = true;
                xs_service_email.focus();
                return false;
            } else {
                xs_service_email.removeClass('invaild');
            }
        }

        if (xs_service_subject.length > 0) {
            if (xs_service_subject.val().trim() === '') {
                xs_service_subject.addClass('invaild');
                xs_service_error = true;
                xs_service_subject.focus();
                return false;
            } else {
                xs_service_subject.removeClass('invaild');
            }
        }

        if (xs_service_error === false) {
            xs_service_submit.before().hide().fadeIn();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "/serviceform",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data, textStatus, jqXHR) {
                    xs_service_submit.after('<p class="xpeedStudio_success_message">' + data + '</p>').hide().fadeIn();
                    setTimeout(function () {
                        $(".xpeedStudio_success_message").fadeOut(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#xs-service-form')[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        } else {
            xs_service_submit.after('<p class="xpeedStudio_success_message">Error Occurred</p>').hide().fadeIn();
        }
    });

    //Download Form
    $('#xs-download-form').on('submit', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_download_first_name = $('#xs_download_first_name'),
            xs_download_last_name = $('#xs_download_last_name'),
            xs_download_phone_number = $('#xs_download_phone_number'),
            xs_download_email = $('#xs_download_email'),
            xs_download_company = $('#xs_download_company'),
            xs_download_designation = $('#xs_download_designation'),
            xs_download_submit = $('#xs_download_submit'),
            xs_download_error = false;


        $('.xpeedStudio_success_message').remove();

        xs_download_submit.after('<p class="xpeedStudio_success_message">' + "Loading...." + '</p>').hide().fadeIn();

        if (xs_download_first_name.length > 0) {
            if (xs_download_first_name.val().trim() === '') {
                xs_download_first_name.addClass('invaild');
                xs_download_error = true;
                xs_download_first_name.focus();
                return false;
            } else {
                xs_download_first_name.removeClass('invaild');
            }
        }

        if (xs_download_last_name.length > 0) {
            if (xs_download_last_name.val().trim() === '') {
                xs_download_last_name.addClass('invaild');
                xs_download_error = true;
                xs_download_last_name.focus();
                return false;
            } else {
                xs_download_last_name.removeClass('invaild');
            }
        }

        if (xs_download_phone_number.length > 0) {
            if (xs_download_phone_number.val().trim() === '') {
                xs_download_phone_number.addClass('invaild');
                xs_download_error = true;
                xs_download_phone_number.focus();
                return false;
            } else {
                xs_download_phone_number.removeClass('invaild');
            }
        }

        if (xs_download_email.length > 0) {
            if (xs_download_email.val().trim() === '') {
                xs_download_email.addClass('invaild');
                xs_download_error = true;
                xs_download_email.focus();
                return false;
            } else if (!email_pattern(xs_download_email.val().toLowerCase())) {
                xs_download_email.addClass('invaild');
                xs_download_error = true;
                xs_download_email.focus();
                return false;
            } else {
                xs_download_email.removeClass('invaild');
            }
        }

        if (xs_download_company.length > 0) {
            if (xs_download_company.val().trim() === '') {
                xs_download_company.addClass('invaild');
                xs_download_error = true;
                xs_download_company.focus();
                return false;
            } else {
                xs_download_company.removeClass('invaild');
            }
        }

        if (xs_download_designation.length > 0) {
            if (xs_download_designation.val().trim() === '') {
                xs_download_designation.addClass('invaild');
                xs_download_error = true;
                xs_download_designation.focus();
                return false;
            } else {
                xs_download_designation.removeClass('invaild');
            }
        }

        /* Helper function */
        function download_file(fileURL, fileName) {
            var anchor = document.createElement('a');
            anchor.href = fileURL;
            anchor.target = '_blank';
            anchor.download = fileName;
            anchor.click();
        }

        if (xs_download_error === false) {
            xs_download_submit.before().hide().fadeIn();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/downloadform",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data, textStatus, jqXHR) {
                    var reply = jQuery.parseJSON(data);
                    $('.xpeedStudio_success_message').remove();
                    xs_download_submit.after('<p class="xpeedStudio_success_message">' + reply['message'] + '</p>').hide().fadeIn();
                    setTimeout(function () {
                        $(".xpeedStudio_success_message").fadeOut(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#xs-download-form')[0].reset();
                    if (reply['link']) {
                        try {
                            download_file(reply['link'], reply['name']);
                        } catch (err) {
                            xs_download_submit.after('<p class="xpeedStudio_success_message">' + "Error Downloading file.  Try again" + '</p>').hide().fadeIn();
                        }
                    } else {
                        xs_download_submit.after('<p class="xpeedStudio_success_message">' + "Error Downloading file.  Try again" + '</p>').hide().fadeIn();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        } else {
            xs_download_submit.after('<p class="xpeedStudio_success_message">Error Occurred</p>').hide().fadeIn();
        }
    });

    $(document).on('submit', '#xs-contact-form', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_contact_name = $('#xs_contact_name'),
            xs_contact_last_name = $('#xs_contact_last_name'),
            xs_contact_number = $('#xs_contact_number'),
            xs_contact_email = $('#xs_contact_email'),
            xs_contact_subject = $('#xs_contact_subject'),
            x_contact_massage = $('#x_contact_massage'),
            xs_contact_submit = $('#xs_contact_submit'),
            xs_contact_error = false;

        $('.xpeedStudio_success_message').remove();

        if (xs_contact_name.length > 0) {
            if (xs_contact_name.val().trim() === '') {
                xs_contact_name.addClass('invaild');
                xs_contact_error = true;
                xs_contact_name.focus();
                return false;
            } else {
                xs_contact_name.removeClass('invaild');
            }
        }

        if (xs_contact_last_name.length > 0) {
            if (xs_contact_last_name.val().trim() === '') {
                xs_contact_last_name.addClass('invaild');
                xs_contact_error = true;
                xs_contact_last_name.focus();
                return false;
            } else {
                xs_contact_last_name.removeClass('invaild');
            }
        }

        if (xs_contact_number.length > 0) {
            if (xs_contact_number.val().trim() === '') {
                xs_contact_number.addClass('invaild');
                xs_contact_error = true;
                xs_contact_number.focus();
                return false;
            } else {
                xs_contact_number.removeClass('invaild');
            }
        }

        if (xs_contact_email.length > 0) {
            if (xs_contact_email.val().trim() === '') {
                xs_contact_email.addClass('invaild');
                xs_contact_error = true;
                xs_contact_email.focus();
                return false;
            } else if (!email_pattern(xs_contact_email.val().toLowerCase())) {
                xs_contact_email.addClass('invaild');
                xs_contact_error = true;
                xs_contact_email.focus();
                return false;
            } else {
                xs_contact_email.removeClass('invaild');
            }
        }

        if (xs_contact_subject.length > 0) {
            if (xs_contact_subject.val().trim() === '') {
                xs_contact_subject.addClass('invaild');
                xs_contact_error = true;
                xs_contact_subject.focus();
                return false;
            } else {
                xs_contact_subject.removeClass('invaild');
            }
        }

        if (x_contact_massage.length > 0) {
            if (x_contact_massage.val().trim() === '') {
                x_contact_massage.addClass('invaild');
                xs_contact_error = true;
                x_contact_massage.focus();
                return false;
            } else {
                x_contact_massage.removeClass('invaild');
            }
        }

        if (xs_contact_error === false) {
            xs_contact_submit.before().hide().fadeIn();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/contactform",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data, textStatus, jqXHR) {
                    xs_contact_submit.after('<p class="xpeedStudio_success_message">' + data + '</p>').hide().fadeIn();
                    setTimeout(function () {
                        $(".xpeedStudio_success_message").fadeOut(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#xs-contact-form')[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        } else {
            xs_contact_submit.after('<p class="xpeedStudio_success_message">Error Occurred</p>').hide().fadeIn();
        }
    });

    $(document).on('submit', '#xs-subscribe-form', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_subscribe_email = $('#xs_subscribe_email'),
            xs_subscribe_submit = $('#xs_subscribe_submit'),
            xs_subscribe_error = false;

        if (xs_subscribe_email.length > 0) {
            if (xs_subscribe_email.val().trim() === '') {
                xs_subscribe_email.addClass('invaild');
                xs_subscribe_error = true;
                xs_subscribe_email.focus();
                return false;
            } else if (!email_pattern(xs_subscribe_email.val().toLowerCase())) {
                xs_subscribe_email.addClass('invaild');
                xs_subscribe_error = true;
                xs_subscribe_email.focus();
                return false;
            } else {
                xs_subscribe_email.removeClass('invaild');
            }
        }

        if (xs_subscribe_error === false) {
            xs_subscribe_submit.before().hide().fadeIn();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/subscribeform",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data, textStatus, jqXHR) {
                    $('#xs-subscribe-form').after('<p class="xpeedStudio_success_message">' + data + '</p>').hide().fadeIn();
                    setTimeout(function () {
                        $(".xpeedStudio_success_message").fadeOut(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);
                    $('#xs-subscribe-form')[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        } else {
            $('#xs-subscribe-form').after('<p class="xpeedStudio_success_message">Error Occurred</p>').hide().fadeIn();
        }
    });

    var scrolltotop = {
        setting: {
            startline: 100,
            scrollto: 0,
            scrollduration: 1e3,
            fadeduration: [500, 100]
        },
        controlHTML: '<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow201.png" />',
        controlattrs: {
            offsetx: 10,
            offsety: 10
        },
        anchorkeyword: "#top",
        state: {
            isvisible: !1,
            shouldvisible: !1
        },
        scrollup: function () {
            this.cssfixedsupport || this.$control.css({
                opacity: 0
            });
            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({
                scrollTop: t
            }, this.setting.scrollduration)
        },
        keepfixed: function () {
            var t = jQuery(window),
                o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
                s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
            this.$control.css({
                left: o + "px",
                top: s + "px"
            })
        },
        togglecontrol: function () {
            var t = jQuery(window).scrollTop();
            this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
                opacity: 1
            }, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
                opacity: 0
            }, this.setting.fadeduration[1]), this.state.isvisible = !1)
        },
        init: function () {
            jQuery(document).ready(function (t) {
                var o = scrolltotop,
                    s = document.all;
                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
                    position: o.cssfixedsupport ? "fixed" : "absolute",
                    bottom: o.controlattrs.offsety,
                    right: o.controlattrs.offsetx,
                    opacity: 0,
                    cursor: "pointer"
                }).attr({
                    title: "Scroll to Top"
                }).click(function () {
                    return o.scrollup(), !1
                }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({
                    width: o.$control.width()
                }), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function () {
                    return o.scrollup(), !1
                }), t(window).bind("scroll resize", function (t) {
                    o.togglecontrol()
                })
            })
        }
    };
    scrolltotop.init();

    timeLineHeightCalculate();

    // Read the cookie and if it's defined scroll to id
    var scroll = $.cookie('scroll');
    if (scroll) {
        scrollToID(scroll, 1000);
        $.removeCookie('scroll');
    }

    // Handle event onclick, setting the cookie when the href != #
    $('.scroll-link').click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var href = $(this).attr('href');
        if (href === '#') {
            scrollToID(id, 1000);
        } else {
            $.cookie('scroll', id);
            window.location.href = href;
        }
    });

    // scrollToID function
    function scrollToID(id, speed) {
        var offSet = 70;
        var obj = $('#' + id);
        if (obj.length) {
            var offs = obj.offset();
            var targetOffset = offs.top - offSet;
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
        }
    }

    //Isotope-link Click
    $('.isotope-link').click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var href = $(this).attr('href');
        $.cookie('isotope', id);
        window.location.href = href;
    });

    // Read the cookie and if it's defined click on isotope
    var isotope_id = $.cookie('isotope');
    if (isotope_id) {
        var obj = document.getElementById(isotope_id) ? document.getElementById(isotope_id) : null;
        if (obj != null) {
            setTimeout(function () {
                document.getElementById(isotope_id).click();
            }, 1000);
            $.removeCookie('isotope');
        } else {
            $.removeCookie('isotope');
        }
    }

    $('.contact-side-bar').on('click', function (e) {
        var id = this.innerText;
        // console.log(id);
        $('#xs_contact_from').attr('value', id)
    });

});

var timeLineHeightCalculate = function timeLineHeightCalculate() {
    $('.agency-parallax-area').each(function (index, element) {
        $(this).find('.parallax-timeline').addClass('parallax-class-' + index);
        // element == this
        var child = $(this).find('.parallax-timeline').children(),
            // var child = $('.parallax-timeline').children(),
            childLength = child.length - 1,
            childHeight = child.outerHeight(),
            total = childLength * childHeight;
        $('parallax-class-' + index).append('<style>.parallax-timeline::before{height: ' + total + 'px}</style>');
        child.last().css("paddingBottom", "0");
    });

};
