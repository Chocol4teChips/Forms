<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>

</head>

<body style="background-color: #2d2d30;">
    <form class="was-validated">
        <div class="container col-5 my-5 pb-3 rounded bg-white ">

            <p class="h1 p-3 text-center">แบบฟอร์ม</p>
            <div class="form-floating mb-3 mt-3 ">
                <input type="text" class="form-control" id="CitizenID" placeholder="Enter" required>
                <label for="CitizenID">เลขบัตรประชาชน</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating">
                <select class="form-select" id="Prefix">
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                    <option>เด็กชาย</option>
                    <option>เด็กหญิง</option>
                </select>
                <label for="Prefix" class="form-label">คำนำหน้า (เลือกเพียง 1 อย่าง)</label>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="fname" placeholder="Enter" required>
                <label for="fname">ชื่อ</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="lname" placeholder="Enter" required>
                <label for="lname">นามสกุล</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating  mt-3 mb-3">
                <select class="form-select" id="gender" name="religigenderon">
                    <option>ชาย</option>
                    <option>หญิง</option>
                    <option>ไม่ระบุ</option>
                </select>
                <label for="gender" class="form-label">ศาสนา (เลือกเพียง 1 อย่าง)</label>
            </div>

            <div class="form-floating  mt-3 mb-3">
                <select class="form-select" id="religion" name="religion">
                    <option>พุทธ</option>
                    <option>อิสลาม</option>
                    <option>คริสต์</option>
                </select>
                <label for="religion" class="form-label">ศาสนา (เลือกเพียง 1 อย่าง)</label>
            </div>

            <div id="accordion">

                <div class="card">
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                            สาขาที่สนใจ
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="ITD">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ITD
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="IMI">
                                <label class="form-check-label" for="flexCheckDefault">
                                    IMI
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="MTA">
                                <label class="form-check-label" for="flexCheckDefault">
                                    MTA
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="DCM">
                                <label class="form-check-label" for="flexCheckDefault">
                                    DCM
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="DCA">
                                <label class="form-check-label" for="flexCheckDefault">
                                    DCA
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="homeNO" placeholder="Enter" required>
                <label for="homeNO">บ้านเลขที่</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="moo" placeholder="Enter" required>
                <label for="homeNO">หมู่ที่</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="street" placeholder="Enter" required>
                <label for="street">ถนน</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3  ">
                <input type="text" class="form-control" id="tumbon" placeholder="Enter" required>
                <label for="tumbon">ตำบล/แขวง</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="aumpur" placeholder="Enter" required>
                <label for="aumpur">อำเภอ</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating">
                <select class="form-select" id="province">
                </select>
                <label for="province" class="form-label">จังหวัด (เลือกเพียง 1 อย่าง)</label>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="postalCode" placeholder="Enter" required>
                <label for="postalCode">รหัสไปรษณีย์</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>

            <div class="form-floating mt-3 mb-3 ">
                <input type="text" class="form-control" id="PhoneNb" placeholder="Enter" required>
                <label for="PhoneNb">โทรศัพท์บ้าน</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>

            </div>

            <div class="form-floating mt-3 mb-4 ">
                <input type="text" class="form-control" id="TelephoneNb" placeholder="Enter" required>
                <label for="TelephoneNb">โทรศัพท์มือถือ</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">ต้องการข้อมูล</div>
            </div>
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto" id="btnSummit">Summit</button>
        </div>
    </form>
</body>

</html>

<script>

    function LoadProvinces() {
        var url = "https://thaiaddressapi-thaikub.herokuapp.com/v1/thailand/provinces"
        $.getJSON(url)
            .done((data) => {
                $.each(data, (i, item) => {
                    $.each(item, (j, prov) => {
                        var line = "<option>";
                            line += prov.province;
                            line += "</option>";
                        $("#province").append(line);
                    })
                })
            })
            .fail((xhr, err, status) => { })
    }

    function getData() {
        const Interesting = [];
        var CitizenID = $("#CitizenID").val();
        var Prefix = $("#Prefix").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var religion = $("#religion").val();
        var homeNO = $("#homeNO").val();
        var moo = $("#moo").val();
        var street = $("#street").val();
        var tumbon = $("#tumbon").val();
        var aumpur = $("#aumpur").val();
        var province = $("#province").val();
        var postalCode = $("#postalCode").val();
        var PhoneNb = $("#PhoneNb").val();
        var TelephoneNb = $("#TelephoneNb").val();

        $("input:checked").each(function () {
            Interesting.push($(this).val());
        });

        // for (let j = 0; j < Interesting.length; j++)
        // {
        //     console.log(Interesting[j])
        // }

        var data = "{";
        data += '"Idcardnumber":"' + CitizenID + '",';
        data += '"Prefix":"' + Prefix + '",';
        data += '"sex":"' + gender + '",';
        data += '"FristName":"' + fname + '",';
        data += '"LastName":"' + lname + '",';
        data += '"Religion":"' + religion + '",';
        data += '"HomeNumber":"' + homeNO + '",';
        data += '"Village":"' + moo + '",';
        data += '"Road":"' + street + '",';
        data += '"District":"' + tumbon + '",';
        data += '"City":"' + aumpur + '",';
        data += '"Province":"' + province + '",';
        data += '"PostNumber":"' + postalCode + '",';
        data += '"HomePhone":"' + PhoneNb + '",';
        data += '"PhoneNumber":"' + TelephoneNb + '",';
        data += '"InterestMajor":["' + Interesting + '"]';
        data += "}";
        console.log(JSON.parse(data));
    }



    $(() => {
        LoadProvinces();
        $("#btnSummit").click(getData);
    });

</script>
