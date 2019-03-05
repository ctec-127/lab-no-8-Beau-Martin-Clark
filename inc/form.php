<?php // Filename: form.php ?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="container">

<div class="row">

	<div class="col-md-6 pl-0">
    <fieldset class="form-group bg-info text-white p-4 mb-4">
    <div class="form-group">
        <label for="temp">Origin Temperature</label>
        <input type="number" class="form-control w-50" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" id="temp">
    </div>

    <div class="form-group">
        <label for="originalunit">Select unit</label>
        <select name="originalunit" class="form-control w-50" id="originalunit">
            <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
            <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
            <option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
            <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
        </select>
    </div>
    </fieldset>
    </div>

    <div class="col-md-6 pr-0">
    <fieldset class="form-group bg-info text-white p-4 mb-4">
    <div class="form-group">
        <label for="convertedtemp">Converted Temperature</label>
        <input type="number" class="form-control w-50" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
        name="convertedtemp" id="convertedtemp">
    </div>

    <div class="form-group">
        <label for="conversionunit">Select unit</label>
        <select class="form-control w-50" name="conversionunit" id="conversionunit">
            <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
            <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
            <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
            <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
        </select>
    </div>
    </fieldset>

    <input type="submit" value="Convert" class="btn btn-primary"/> 
    </div>

</div>
</div>
</form>