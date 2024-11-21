<html>
    <head>
        <title>Set Admission Details</title>
        <link rel="stylesheet" type="text/css" href="Styles.css">
    </head>
    <body>
        <div id="section3">
            <h2>Set Admission Details</h2>
        <form>
            <label for="eid">Patient ID</label>
            <input type="text" placeholder="Employee ID"><br>
            <label for="hid">Hospital ID</label>
            <input type="text" placeholder="Hospital ID"><br>
            <label for="Aid">Admission ID</label>
            <input type="text" placeholder="Appointment ID"><br>
            <label for="A_date">Admission date</label>
            <input type="date" placeholder="Admission Date"><br>
            <label for="D_date">Discharge Date</label>
            <input type="date" placeholder="Discharge date"><br>
            <label for="Wno">Ward Number</label>
            <input type="text" placeholder="Ward Number"><br>
            <label for="Bed_type">Bed Type</label>
            <select id="alterField" >
                <option value="none"></option>
                <option value="a">Manual</option>
                <option value="b">Semi Electric</option>
                <option value="c">Fully Electric</option>
            </select><br>
            <button type="submit">Set Admission Details</button>
        </form>
        </div>
    </body>
</html>