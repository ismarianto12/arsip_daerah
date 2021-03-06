"use strict";
! function(a) {
    function b(b) {
        var c, d, e;
        if ((c = b.text) && !b.id) return c;
        d = b.element.value.toLowerCase(), e = "img/flags/4x3/" + d + ".svg";
        var f = a("<span/>", {
            text: c
        });
        return a("<img>", {
            class: "img-flag",
            src: e
        }).prependTo(f), f
    }

    function c(a, b) {
        var c = ["active", "success", "info", "warning", "danger"];
        return {
            classes: b % 2 == 0 ? c[b % 10 / 2] : ""
        }
    }

    function d(a, b, c) {
        return '<label class="custom-control custom-control-primary custom-checkbox"><input class="custom-control-input" type="checkbox" name="btSelectItem" data-index="' + c + '"><span class="custom-control-indicator"></span></label>'
    }

    function e(a, b, c) {
        return '<label class="switch switch-primary"><input class="switch-input" type="checkbox" name="btSelectItem" data-index="' + c + '"><span class="switch-track"></span><span class="switch-thumb"></span></label>'
    }

    function f(a, b) {
        return b.flag.length && (a = '<img class="img-flag" src="' + b.flag + '">' + a), a
    }

    function g(a, b) {
        return a = parseInt(a.replace(/[.,%]/g, "")), b = parseInt(b.replace(/[.,%]/g, "")), a < b ? 1 : a > b ? -1 : 0
    }

    function h() {
        var a;
        Cookies.get("shareMessage") || (a = "If you like Elephant, please share it with your friends and followers, this way you will help the elephant grow.", toastr.info(a, void 0, {
            progressBar: !0,
            timeOut: 15e3,
            extendedTimeOut: 5e3
        }), Cookies.set("shareMessage", !0, 1))
    }
    var i = function(a, b) {
            return Math.random() * (b - a) + a
        },
        j = function(a, b) {
            return Math.round(i(a, b))
        },
        k = function(a) {
            var b = [];
            return b.push(j(0, 255)), b.push(j(0, 255)), b.push(j(0, 255)), b.push(a || "0.3"), "rgba(" + b.toString() + ")"
        };
    ! function() {
        a("#demo-badges").find(".badge").waypoint({
            handler: function(b) {
                var c = a(this.element),
                    d = ["animated", "bounceInUp"];
                if ("up" !== b) {
                    c.addClass(d.join(" "));
                    var e = function() {
                        c.removeClass(d.join(" "))
                    };
                    a.support.animation ? c.one("bsAnimationEnd", e) : e()
                }
            },
            offset: "bottom-in-view"
        })
    }(),
    function() {
        var b, c;
        b = a("#demo-show-toast"), b.on("click", function(b) {
            var c = {},
                d = ["Toastr is a Javascript library for non-blocking notifications.", "Progress Bar - Visually indicate how long before a toast expires.", "Timeouts - Control how toastr interacts with users by setting timeouts appropriately.", "Animation Method - Use the jQuery show/hide method of your choice.", "Easings - Optionally override the animation easing to show or hide the toasts.", "Callbacks - Define a callback for when the toast is shown/hidden", "Close Button - Optionally enable a close button."];
            a(":input").each(function(b) {
                var d = a(this),
                    e = d.attr("id"),
                    f = d.val();
                d.is("input[type='checkbox']") && (f = d.prop("checked")), e && f && (c[e] = f)
            });
            var e = c.title || "",
                f = c.message || d[Math.floor(Math.random() * d.length)];
            toastr[c.type](f, e, c)
        }), c = a("#demo-clear-toasts"), c.click(function(a) {
            toastr.clear()
        })
    }(),
    function() {
        var b, c;
        b = a("#demo-cropper"), b.on("change", "input", function(b) {
            var d = a(this),
                e = d.attr("name"),
                f = {};
            c.data("cropper") && (f[e] = d.val(), c.cropper("destroy").cropper(f))
        }), b.on("click", "[data-method]", function(b) {
            var d = a(this),
                e = d.data();
            c.data("cropper") && e.method && (c.cropper(e.method, e.option), "scaleX" !== e.method && "scaleY" !== e.method || d.data("option", -e.option))
        }), c = a("#demo-cropper-img"), c.cropper()
    }(),
    function() {
        a("#demo-form-wizard-1").bootstrapWizard({
            nextSelector: ".btn-next",
            tabClass: "steps"
        })
    }(),
    function() {
        var b = a("#demo-form-wizard-2");
        b.bootstrapWizard({
            nextSelector: ".btn-next",
            tabClass: "steps",
            onNext: function(a, c, d) {
                return b.valid()
            },
            onTabClick: function(a, c, d) {
                return b.valid()
            }
        })
    }(),
    function() {
        a("#demo-inputmask").find(":input").each(function(b, c) {
            a(this).inputmask()
        })
    }(),
    function() {
        var b = a("#demo-datepicker-1"),
            c = a("#demo-datepicker-1-btn");
        b.datepicker({
            autoclose: !0,
            orientation: "top",
            showOnFocus: !1
        }), c.on("click", function(a) {
            b.datepicker("show")
        })
    }(),
    function() {
        var b = a("#demo-datepicker-2"),
            c = a("#demo-datepicker-2-btn");
        b.datepicker({
            autoclose: !0,
            orientation: "top",
            showOnFocus: !1
        }), c.on("click", function(a) {
            b.datepicker("show")
        })
    }(),
    function() {
        a("#demo-timepicker-1").timepicker()
    }(),
    function() {
        var b = a("#demo-timepicker-2"),
            c = a("#demo-timepicker-2-btn");
        b.timepicker(), c.on("click", function() {
            b.timepicker("setTime", new Date)
        })
    }(),
    function() {
        var b = a("#demo-timepicker-3");
        b.find(".time").timepicker({
            showDuration: !0,
            timeFormat: "g:ia"
        }), b.datepair()
    }(),
    function() {
        a("#demo-timepicker-4").timepicker({
            disableTimeRanges: [
                ["12am", "9am"],
                ["6:01pm", "11:31pm"]
            ]
        })
    }(),
    function(b) {
        a("#demo-timepicker-5").timepicker({
            timeFormat: "H:i:s"
        })
    }(),
    function() {
        var b = a("#demo-timepicker-6"),
            c = b.find(".time"),
            d = b.find(".date");
        c.timepicker({
            showDuration: !0,
            timeFormat: "g:ia"
        }), d.datepicker({
            format: "MM d, yyyy",
            autoclose: !0
        }), b.datepair()
    }(),
    function(b) {
        a("#demo-timepicker-7").timepicker({
            noneOption: [{
                label: "Board meeting",
                className: "ui-timepicker-pm",
                value: "6:00pm"
            }]
        })
    }(),
    function() {
        a("#demo-timepicker-8").timepicker({
            step: 15
        })
    }(),
    function() {
        a("#demo-select2-1").select2({
            dir: "ltr"
        })
    }(),
    function() {
        a("#demo-select2-2").select2({
            dir: "ltr"
        })
    }(),
    function() {
        a("#demo-select2-3").select2({
            tags: !0,
            tokenSeparators: [",", " "],
            dir: "ltr"
        })
    }(),
    function() {
        a("#demo-select2-4").select2({
            templateResult: b,
            templateSelection: b,
            dir: "ltr"
        })
    }(),
    function() {
        var c = a("#demo-select2-5"),
            d = a("#demo-select2-5-input");
        c.select2({
            templateResult: b,
            templateSelection: b,
            dir: "ltr"
        }), c.on("change", function(b) {
            var c = a(this).find(":selected").data("countryCode");
            d.val(c + " "), d.focus()
        })
    }(),
    function() {
        var b = a("#demo-slider-1");
        b.slider({
            slider: "danger",
            start: 5,
            step: 5,
            direction: "ltr",
            tooltips: [wNumb({
                decimals: 2,
                prefix: "$"
            })],
            pips: {
                mode: "steps",
                filter: function(a, b) {
                    return a % 10 ? 2 : 1
                },
                format: wNumb({
                    decimals: 2,
                    prefix: "$"
                })
            }
        }), b = b.slider("instance"), b.on("change", function(a, c, d) {
            b.get() > 5 || (b.set(5), toastr.warning("The minimum amount a donor can make is $5."))
        })
    }(),
    function() {
        var b = a("#demo-slider-2"),
            c = a("#demo-slider-2-img");
        b.slider({
            direction: "rtl",
            orientation: "vertical",
            slider: "danger",
            start: 170,
            tooltips: [wNumb({
                decimals: 0,
                postfix: "cm"
            })],
            range: {
                min: 0,
                "20%": 50,
                "40%": 100,
                "60%": 150,
                "80%": 200,
                max: 250
            },
            pips: {
                mode: "steps",
                filter: function(a, b) {
                    return a % 100 ? 2 : 1
                },
                format: wNumb({
                    decimals: 0
                })
            }
        }), b = b.slider("instance"), b.on("update", function(a, d, e) {
            b.get() < 170 && (b.set(170), toastr.warning("The minimum height in order to become a model in our agency is currently 170 cm in height (without heels).")), c.height(1.6 * b.get())
        })
    }(),
    function() {
        a("#demo-uploader").fileupload({
            autoUpload: !0,
            filesContainer: ".file-list"
        })
    }(),
    function() {
        var b = a("#demo-bootstrap-table-1");
        b.length && (b.bootstrapTable({
            columns: [{
                field: "name",
                title: "Name"
            }, {
                field: "position",
                title: "Position"
            }, {
                field: "salary",
                title: "Salary"
            }],
            height: 265,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-2");
        b.length && (b.bootstrapTable({
            columns: [{
                align: "left",
                field: "name",
                title: "Name"
            }, {
                align: "center",
                field: "position",
                title: "Position"
            }, {
                align: "right",
                field: "salary",
                title: "Salary"
            }],
            height: 265,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-3");
        b.length && (b.bootstrapTable({
            columns: [{
                align: "left",
                field: "name",
                title: "Name"
            }, {
                align: "left",
                field: "position",
                title: "Position"
            }, {
                align: "right",
                field: "salary",
                title: "Salary"
            }],
            height: 265,
            striped: !0,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-4");
        b.length && (b.bootstrapTable({
            columns: [{
                align: "left",
                field: "name",
                title: "Name"
            }, {
                align: "left",
                field: "position",
                title: "Position"
            }, {
                align: "right",
                field: "salary",
                title: "Salary"
            }],
            height: 265,
            rowStyle: c,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-5");
        b.length && (b.bootstrapTable({
            columns: [{
                field: "state",
                formatter: d
            }, {
                field: "name",
                title: "Name"
            }, {
                field: "position",
                title: "Position"
            }],
            height: 265,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-6");
        b.length && (b.bootstrapTable({
            classes: "table",
            columns: [{
                field: "name",
                title: "Name"
            }, {
                field: "position",
                title: "Position"
            }, {
                field: "state",
                formatter: e
            }],
            height: 265,
            url: "/employees.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        var b = a("#demo-bootstrap-table-7");
        b.bootstrapTable({
            columns: [{
                align: "right",
                field: "rank",
                sortable: !1,
                title: "Rank"
            }, {
                field: "country",
                formatter: f,
                sortable: !1,
                title: "Country"
            }, {
                align: "right",
                field: "continent",
                sortable: !0,
                title: "Continent"
            }, {
                align: "right",
                field: "region",
                sortable: !0,
                title: "Region"
            }, {
                align: "right",
                field: "year2016",
                sortable: !0,
                sorter: g,
                title: "2016"
            }, {
                align: "right",
                field: "year2015",
                sortable: !0,
                sorter: g,
                title: "2015"
            }, {
                align: "right",
                field: "change",
                sortable: !0,
                sorter: g,
                title: "Change"
            }],
            height: 411,
            striped: !0,
            url: "/population.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        })
    }(),
    function() {
        var b = a("#demo-bootstrap-table-8");
        b.length && (b.bootstrapTable({
            buttonsClass: "primary",
            columns: [{
                align: "right",
                field: "rank",
                sortable: !1,
                title: "Rank"
            }, {
                field: "country",
                formatter: f,
                sortable: !1,
                title: "Country"
            }, {
                align: "right",
                field: "continent",
                sortable: !0,
                title: "Continent"
            }, {
                align: "right",
                field: "region",
                sortable: !0,
                title: "Region"
            }, {
                align: "right",
                field: "year2016",
                sortable: !0,
                sorter: g,
                title: "2016"
            }, {
                align: "right",
                field: "year2015",
                sortable: !0,
                sorter: g,
                title: "2015"
            }, {
                align: "right",
                field: "change",
                sortable: !0,
                sorter: g,
                title: "Change"
            }],
            icons: {
                columns: "icon-list-ul",
                paginationSwitchDown: "icon-expand",
                paginationSwitchUp: "icon-compress",
                refresh: "glyphicon-refresh icon-refresh",
                toggle: "icon-columns"
            },
            iconsPrefix: "icon",
            minimumCountColumns: 2,
            pageList: [],
            pagination: !0,
            search: !0,
            showColumns: !0,
            showFooter: !1,
            showPaginationSwitch: !0,
            showRefresh: !0,
            showToggle: !0,
            striped: !0,
            url: "/population.json"
        }), a(window).on("resize", function(a) {
            b.bootstrapTable("resetView")
        }))
    }(),
    function() {
        a("#demo-datatables-1").DataTable({
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [5, "desc"]
            ]
        })
    }(),
    function() {
        a("#demo-datatables-2").DataTable({
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [2, "desc"]
            ]
        })
    }(),
    function() {
        var b = a("#demo-datatables-3");
        if (b.length) {
            var c = a.fn.dataTable;
            a.extend(!0, c.ext.classes, {
                sWrapper: "dataTables_wrapper dt-bootstrap"
            }), a("#demo-datatables-3 tfoot th").each(function() {
                var b = a(this).text();
                a(this).html('<input class="form-control input-sm" type="text" placeholder="Search ' + b + '" />')
            });
            var b = b.DataTable({
                dom: "<'row'<'col-sm-12'i>><'table-responsive'tr><'row'<'col-sm-6'l><'col-sm-6'p>>",
                language: {
                    paginate: {
                        previous: "&laquo;",
                        next: "&raquo;"
                    },
                    search: "_INPUT_",
                    searchPlaceholder: "Searchâ€¦"
                },
                order: [
                    [2, "desc"]
                ]
            });
            b.columns().every(function() {
                var b = this;
                a("input", this.footer()).on("keyup change", function() {
                    b.search() !== this.value && b.search(this.value).draw()
                })
            })
        }
    }(),
    function() {
        var b = a("#demo-datatables-4");
        if (b.length) {
            var c = a.fn.dataTable;
            a.extend(!0, c.ext.classes, {
                sWrapper: "dataTables_wrapper dt-bootstrap"
            }), b.DataTable({
                dom: "<'row'<'col-sm-12'i>><'table-responsive'tr><'row'<'col-sm-6'l><'col-sm-6'p>>",
                language: {
                    paginate: {
                        previous: "&laquo;",
                        next: "&raquo;"
                    }
                },
                initComplete: function() {
                    this.api().columns().every(function() {
                        var b = this,
                            c = b.header(),
                            d = a('<select class="demo-select2"><option value="">' + a(c).text() + "</option></select>").appendTo(a(b.footer()).empty()).on("change", function() {
                                var c = a.fn.dataTable.util.escapeRegex(a(this).val());
                                b.search(c ? "^" + c + "$" : "", !0, !1).draw()
                            });
                        b.data().unique().sort().each(function(a, b) {
                            d.append('<option value="' + a + '">' + a + "</option>")
                        })
                    })
                }
            }), a(".demo-select2").select2()
        }
    }(),
    function() {
        a("#demo-datatables-5").DataTable({
            dom: "<'row'<'col-sm-6'l><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-12'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            pagingType: "full_numbers",
            order: [
                [2, "desc"]
            ]
        })
    }(),
    function() {
        var b = a.fn.dataTable;
        a.extend(!0, b.Buttons.defaults, {
            dom: {
                button: {
                    className: "btn btn-primary btn-sm"
                }
            }
        }), a("#demo-datatables-buttons-1").DataTable({
            buttons: ["print", "copy", "pdf", "excel", "colvis"],
            lengthChange: !1,
            responsive: !0,
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [6, "desc"]
            ]
        }).buttons().container().appendTo("#demo-datatables-buttons-1_wrapper .col-sm-6:eq(0)")
    }(),
    function() {
        var b = a.fn.dataTable;
        a.extend(!0, b.Buttons.defaults, {
            dom: {
                button: {
                    className: "btn btn-outline-primary btn-sm"
                }
            }
        }), a("#demo-datatables-buttons-2").DataTable({
            buttons: ["print", "copy", "pdf", "excel", "colvis"],
            lengthChange: !1,
            responsive: !0,
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [6, "desc"]
            ]
        }).buttons().container().appendTo("#demo-datatables-buttons-2_wrapper .col-sm-6:eq(0)")
    }(),
    function() {
        a("#demo-datatables-colreorder-1").DataTable({
            colReorder: !0,
            responsive: !0,
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        })
    }(),
    function() {
        a("#demo-datatables-colreorder-2").DataTable({
            colReorder: !0,
            responsive: !0,
            stateSave: !0,
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        })
    }(),
    function() {
        var b = a("#demo-datatables-fixedheader-1");
        if (b.length) {
            b = b.DataTable({
                fixedHeader: !0,
                responsive: !0,
                dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'l><'col-sm-6'p>>",
                language: {
                    paginate: {
                        previous: "&laquo;",
                        next: "&raquo;"
                    },
                    search: "_INPUT_",
                    searchPlaceholder: "Searchâ€¦"
                }
            });
            var c, d = function() {
                c && clearTimeout(c), c = setTimeout(function() {
                    b.columns.adjust().responsive.recalc().fixedHeader.adjust()
                }, 300)
            };
            a(window).on("resize", d), a("button.sidenav-toggler").on("click", d), d()
        }
    }(),
    function() {
        var b = a("#demo-datatables-fixedheader-2");
        if (b.length) {
            b = b.DataTable({
                fixedHeader: !0,
                responsive: !0,
                dom: "<'row'<'col-sm-6'l><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'i><'col-sm-6'p>>",
                language: {
                    paginate: {
                        previous: "&laquo;",
                        next: "&raquo;"
                    },
                    search: "_INPUT_",
                    searchPlaceholder: "Searchâ€¦"
                }
            });
            var c, d = function() {
                c && clearTimeout(c), c = setTimeout(function() {
                    b.columns.adjust().responsive.recalc().fixedHeader.adjust()
                }, 300)
            };
            a(window).on("resize", d), a("button.sidenav-toggler").on("click", d), d()
        }
    }(),
    function() {
        a("#demo-datatables-responsive-1").DataTable({
            responsive: !0,
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [6, "desc"]
            ]
        })
    }(),
    function() {
        a("#demo-datatables-responsive-2").DataTable({
            responsive: !0,
            dom: "<'row'<'col-sm-6 col-sm-push-6'i><'col-sm-6 col-md-pull-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            },
            order: [
                [6, "desc"]
            ]
        })
    }(),
    function() {
        a("#demo-datatables-rowreorder-1").DataTable({
            rowReorder: !0,
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-6'><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        })
    }(),
    function() {
        var b = a.fn.dataTable;
        a.extend(!0, b.Buttons.defaults, {
            dom: {
                button: {
                    className: "btn btn-primary btn-sm"
                }
            }
        }), a("#demo-datatables-rowreorder-2").DataTable({
            buttons: ["print", "copy", "pdf"],
            rowReorder: !0,
            dom: "<'row'<'col-sm-6'><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-6'i><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        }).buttons().container().appendTo("#demo-datatables-rowreorder-2_wrapper .col-sm-6:eq(0)")
    }(),
    function() {
        var b = a("#demo-datatables-scroller-1");
        b.length && (b = b.DataTable({
            deferRender: !0,
            scrollY: 370,
            scrollCollapse: !0,
            scroller: !0,
            responsive: !0,
            dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'l><'col-sm-6'p>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        }), a(window).on("resize", function(a) {
            setTimeout(function() {
                b.columns.adjust().responsive.recalc()
            }, 150)
        }))
    }(),
    function() {
        var b = a("#demo-datatables-scroller-2");
        b.length && (b = b.DataTable({
            deferRender: !0,
            scrollY: 369,
            scrollCollapse: !0,
            scroller: !0,
            responsive: !0,
            dom: "<'row'<'col-sm-6 col-sm-push-6'i><'col-sm-6 col-md-pull-6'f>><'row'<'col-sm-12'tr>>",
            language: {
                paginate: {
                    previous: "&laquo;",
                    next: "&raquo;"
                },
                search: "_INPUT_",
                searchPlaceholder: "Searchâ€¦"
            }
        }), a(window).on("resize", function(a) {
            setTimeout(function() {
                b.columns.adjust().responsive.recalc()
            }, 150)
        }))
    }(),
    function() {
        var b = a("#demo-map-1");
        b.length && new GMaps({
            div: b[0],
            height: "300px",
            lat: 37.77,
            lng: -122.447,
            zoom: 12
        })
    }(),
    function() {
        var b = a("#demo-map-2");
        if (b.length) {
            var c = new GMaps({
                div: b[0],
                height: "300px",
                lat: 37.77,
                lng: -122.447,
                zoom: 11
            });
            c.addMarker({
                title: "Walk Over the Golden Gate Bridge",
                content: "The Golden Gate Bridge is a suspension bridge spanning the Golden Gate strait, the one-mile-wide, three-mile-long channel between San Francisco Bay and the Pacific Ocean.",
                lat: 37.819929,
                lng: -122.478255,
                click: function(a) {
                    toastr.info(a.content, a.title)
                }
            }), c.addMarker({
                title: "RIde a Cable Car",
                content: "The San Francisco cable car system is the world's last manually operated cable car system. An icon of San Francisco, the cable car system forms part of the intermodal urban transport network operated by the San Francisco Municipal Railway.",
                lat: 37.805755,
                lng: -122.414127,
                click: function(a) {
                    toastr.info(a.content, a.title)
                }
            }), c.addMarker({
                title: "Visit the Rock",
                content: "Alcatraz Island is located in the San Francisco Bay, 1.25 miles offshore from San Francisco, California, United States.",
                lat: 37.826977,
                lng: -122.422956,
                click: function(a) {
                    toastr.info(a.content, a.title)
                }
            }), c.addMarker({
                title: "Shop in Union Square",
                content: "Union Square is a 2.6-acre public plaza bordered by Geary, Powell, Post and Stockton Streets in downtown San Francisco, California.",
                lat: 37.787994,
                lng: -122.407437,
                click: function(a) {
                    toastr.info(a.content, a.title)
                }
            }), c.addMarker({
                title: "Explore North Beach",
                content: "North Beach is a neighborhood in the northeast of San Francisco adjacent to Chinatown, Fisherman's Wharf and Russian Hill. The neighborhood is San Francisco's \"Little Italy\", and has historically been home to a large Italian American population.",
                lat: 37.806053,
                lng: -122.410331,
                click: function(a) {
                    toastr.info(a.content, a.title)
                }
            })
        }
    }(),
    function() {
        var b = a("#demo-map-3");
        if (b.length) {
            var c = new GMaps({
                    div: b[0],
                    height: "300px",
                    lat: 0,
                    lng: -180,
                    zoom: 2
                }),
                d = [
                    [37.772, -122.214],
                    [21.291, -157.821],
                    [-18.142, 178.431],
                    [-27.467, 153.027]
                ];
            c.drawPolyline({
                path: d,
                strokeColor: "#ff0000",
                strokeOpacity: 1,
                strokeWeight: 3
            })
        }
    }(),
    function() {
        var b = a("#demo-map-4");
        if (b.length) {
            var c = new GMaps({
                    div: b[0],
                    height: "300px",
                    lat: 24.886,
                    lng: -70.268,
                    zoom: 4
                }),
                d = [
                    [25.774, -80.19],
                    [18.466, -66.118],
                    [32.321, -64.757],
                    [25.774, -80.19]
                ];
            c.drawPolygon({
                fillColor: "#ff0000",
                fillOpacity: .35,
                paths: d,
                strokeColor: "#ff0000",
                strokeOpacity: .8,
                strokeWeight: 2
            })
        }
    }(),
    function() {
        var b = a("#demo-map-5");
        b.length && new GMaps({
            div: b[0],
            height: "300px",
            lat: 37.76904,
            lng: -122.483519,
            zoom: 12
        }).drawRoute({
            destination: [37.819929, -122.478255],
            origin: [37.76904, -122.483519],
            strokeColor: "#ff0000",
            strokeOpacity: .75,
            strokeWeight: 6,
            travelMode: "driving"
        })
    }(),
    function() {
        var b = a("#demo-map-6"),
            c = a("#demo-map-6-btn");
        if (b.length) {
            var d = new GMaps({
                div: b[0],
                height: "300px",
                lat: 37.76904,
                lng: -122.483519,
                zoom: 12
            });
            c.on("click", function(a) {
                d.cleanRoute(), d.travelRoute({
                    destination: [37.819929, -122.478255],
                    origin: [37.76904, -122.483519],
                    travelMode: "driving",
                    step: function(a) {
                        var b = 1e3 * a.step_number;
                        setTimeout(function() {
                            toastr.info(a.instructions), d.setCenter(a.end_location.lat(), a.end_location.lng()), d.drawPolyline({
                                path: a.path,
                                strokeColor: "#ff0000",
                                strokeOpacity: .6,
                                strokeWeight: 6
                            })
                        }, b)
                    }
                }), a.preventDefault()
            })
        }
    }(),
    function() {
        var b = a("#demo-map-7");
        if (b.length) {
            var c = new GMaps({
                div: b[0],
                height: "300px",
                lat: 37.77,
                lng: -122.447,
                zoom: 12,
                mapTypeControlOptions: {
                    mapTypeIds: ["hybrid", "osm", "roadmap", "satellite", "terrain"]
                }
            });
            c.addMapType("osm", {
                getTileUrl: function(a, b) {
                    return "https://a.tile.openstreetmap.org/" + b + "/" + a.x + "/" + a.y + ".png"
                },
                maxZoom: 18,
                name: "OpenStreetMap",
                tileSize: new google.maps.Size(256, 256)
            }), c.setMapTypeId("osm")
        }
    }(),
    function() {
        var b, c, d, e, f, g, h, l;
        b = a("#demo-chart-1"), b.length && (f = ["Cellphones", "Accessories", "Cameras", "Computers", "Tablets", "Vehicle Electronics", "Video Games", "TV", "Audio", "Surveillance"], g = function() {
            return j(1e6, 2e6)
        }, h = function() {
            return i(-.1, .1)
        }, l = function() {
            return i(5, 25)
        }, e = {
            type: "bubble",
            data: {
                datasets: []
            },
            options: {
                maintainAspectRatio: !1,
                legend: {
                    display: !0,
                    position: "right"
                },
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: !0,
                            labelString: "The difference with the previous year."
                        },
                        ticks: {
                            userCallback: function(a) {
                                return numeral(a).format("0 %")
                            }
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: !0,
                            labelString: "This Year Electronic Sales"
                        },
                        ticks: {
                            userCallback: function(a) {
                                return numeral(a).format("$ 0.00 a")
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(a, b) {
                            var c = b.datasets[a.datasetIndex].label,
                                d = b.datasets[a.datasetIndex].data[a.index];
                            return c + ": " + numeral(d.y).format("$0,0.00")
                        }
                    }
                }
            }
        }, a.each(f, function(a, b) {
            var c, d;
            c = {}, d = k(1), c.label = b, c.borderColor = d, c.backgroundColor = d, c.pointBorderColor = d, c.pointBackgroundColor = d, c.pointBorderWidth = 1, c.data = [{
                x: h(),
                y: g(),
                r: l()
            }], e.data.datasets.push(c)
        }), c = new Chart(b, e), d = window.matchMedia("(max-width: 992px)"), d.addListener(function(a) {
            var b = a.matches ? "bottom" : "right";
            e.options.legend.position = b, c.update()
        }))
    }(),
    function() {
        var b, c, d, e, f, g;
        b = a("#demo-chart-2"), b.length && (d = ["January", "February", "March", "April", "May", "June", "July"], e = ["Questions", "Incidents", "Problems", "Tasks"], f = function() {
            return j(1e3, 2e3)
        }, g = function() {
            return j(5, 25)
        }, c = {
            type: "line",
            data: {
                labels: d,
                datasets: []
            },
            options: {
                maintainAspectRatio: !1,
                legend: {
                    position: "bottom"
                },
                hover: {
                    mode: "label"
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        scaleLabel: {
                            display: !0,
                            labelString: "Month"
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        scaleLabel: {
                            display: !0,
                            labelString: "Number of tickets"
                        }
                    }]
                },
                title: {
                    display: !0,
                    text: "Monthly Report"
                }
            }
        }, a.each(e, function(b, e) {
            var h, i, j, l;
            h = [], i = [], a.each(d, function(a, b) {
                h.push(f()), i.push(g())
            }), j = k(.5), l = {}, l.backgroundColor = j, l.borderColor = j, l.data = h, l.fill = !1, l.label = e, l.pointBackgroundColor = j, l.pointBorderColor = j, l.pointBorderWidth = 1, l.pointHoverRadius = i, l.pointRadius = i, b % 2 == 0 && (l.borderDash = [5, 5]), c.data.datasets.push(l)
        }), new Chart(b, c))
    }(),
    function() {
        var b, c, d;
        b = a("#demo-chart-3"), b.length && (c = function() {
            return (Math.random() > .5 ? 1 : -1) * Math.round(100 * Math.random())
        }, d = {
            type: "bar",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    label: "Dataset 1",
                    type: "bar"
                }, {
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    label: "Dataset 2",
                    type: "bar"
                }, {
                    borderDash: [5, 5],
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    fill: !1,
                    label: "Dataset 3",
                    type: "line"
                }]
            },
            options: {
                maintainAspectRatio: !1,
                title: {
                    display: !0,
                    text: "Bar Line Combination Chart"
                },
                animation: {
                    onComplete: function() {
                        var a = this.chart,
                            b = a.ctx;
                        b.textAlign = "center", Chart.helpers.each(this.data.datasets.forEach(function(c, d) {
                            var e = a.controller.getDatasetMeta(d);
                            Chart.helpers.each(e.data.forEach(function(a, d) {
                                b.fillText(c.data[d], a._model.x, a._model.y - 10)
                            }), this)
                        }), this)
                    }
                },
                legend: {
                    display: !1
                }
            }
        }, a.each(d.data.datasets, function(a, b) {
            var c = k(.5);
            b.borderColor = c, b.backgroundColor = c, b.pointBorderColor = c, b.pointBackgroundColor = c, b.pointBorderWidth = 2
        }), new Chart(b, d))
    }(),
    function() {
        var b, c, d;
        b = a("#demo-chart-4"), b.length && (c = function() {
            return (Math.random() > .5 ? 1 : -1) * Math.round(100 * Math.random())
        }, d = {
            type: "bar",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    backgroundColor: "rgba(151,187,205,0.5)",
                    borderColor: "white",
                    borderWidth: 2,
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    label: "Dataset 1",
                    type: "bar"
                }, {
                    backgroundColor: "rgba(151,187,205,0.5)",
                    borderColor: "white",
                    borderWidth: 2,
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    label: "Dataset 2",
                    type: "line"
                }, {
                    backgroundColor: "rgba(220,220,220,0.5)",
                    data: [c(), c(), c(), c(), c(), c(), c()],
                    label: "Dataset 3",
                    type: "bar"
                }]
            },
            options: {
                maintainAspectRatio: !1,
                title: {
                    display: !0,
                    text: "Bar Line Combination Chart"
                },
                animation: {
                    onComplete: function() {
                        var a = this.chart,
                            b = a.ctx;
                        b.textAlign = "center", Chart.helpers.each(this.data.datasets.forEach(function(c, d) {
                            var e = a.controller.getDatasetMeta(d);
                            Chart.helpers.each(e.data.forEach(function(a, d) {
                                b.fillText(c.data[d], a._model.x, a._model.y - 10)
                            }), this)
                        }), this)
                    }
                },
                legend: {
                    display: !1
                }
            }
        }, new Chart(b, d))
    }(),
    function() {
        var b = a("#demo-peity-chart");
        b.length && (b.peity("line", {
            width: 64
        }), setInterval(function() {
            var a = Math.round(10 * Math.random()),
                c = b.text().split(",");
            c.shift(), c.push(a), b.text(c.join(",")).change()
        }, 1e3))
    }(), a("button.theme-panel-toggler").one("click", h)
}(jQuery);