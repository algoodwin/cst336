<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Device Search</title>
    </head>
    <body>
            <h1> Technology Center: cehck out system</h1>
            
            <form>
                Device: <input type="text" name ="deviceName" placeholder=" Device Name"/>
                type:
                <select name ="deviceName">
                    <?=getDeviceTypes()?>
                </select>
            </form>
    </body>
</html>