@extends('app')

@section('content')

<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">

	<!-- Start Site Header -->
@include('cabeza')
	<!-- End Site Header -->


    <!-- Start Body Content -->
  	     <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 listing-form-wrapper">
                        <!-- SIDEBAR -->
                        <div class="listing-form-steps-wrapper tbssticky">
                            <!-- AD LISTING PROGRESS BAR -->
                            <div class="listing-form-progress">
                                <div class="progress-label"> <span>Ad Completeness</span> </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation=""></div>
                                </div>
                            </div>
                            <!-- AD LISTING FORM STEPS -->
                            <ul class="listing-form-steps">
                                <li class="active" data-target="#listing-add-form-one" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-car"></i></span>
                                        <strong class="step-title">Create Listing</strong>
                                        <span class="step-desc">Select your car</span>
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-list-alt"></i></span>
                                        <strong class="step-title">Select Features</strong>
                                        <span class="step-desc">Select features of your car</span>
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-three" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-edit"></i></span>
                                        <strong class="step-title">Add details</strong>
                                        <span class="step-desc">Your contact details &amp; more</span>
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-image"></i></span>
                                        <strong class="step-title">Add photos &amp; comments</strong>
                                        <span class="step-desc">Add some pics &amp; description</span>
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-five" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <strong class="step-title">Publish Listing</strong>
                                        <span class="step-desc">Pay &amp; publish your listing</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <!-- AD LISTING FORM -->
                        <form class="listing-add-form">
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">
                                    <h3>Enter your vehicle details</h3>
                                    <div class="lighter"><p>Listing can be added with a starting point of choosing your vehicle wither by searching listing using Make, Model, Year or can add a completely unique listing.</p></div>
                                    <div class="spacer-10"></div>
                                    <div class="tabs listing-step-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"> <a data-toggle="tab" href="#searchvehicle" aria-controls="searchvehicle" role="tab">Search vehicle by Make, Model, Year</a></li>
                                            <li> <a data-toggle="tab" href="#addcustom" aria-controls="addcustom" role="tab">Add custom vehicle details</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- VEHICLE SEARCH AD LISTING -->
                                            <div id="searchvehicle" class="tab-pane fade in active">
                                                <div class="alert alert-warning fade in">
                                                    <strong>Find</strong> your car using the dropdowns below. First select its Make, then Model and later select its year
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Select Make</label>
                                                        <select name="Vehicle Make" class="form-control selectpicker">
                                                            <option>Audi</option>
                                                            <option>BMW</option>
                                                            <option>Hyundai</option>
                                                            <option>Mazda</option>
                                                            <option>Mercedes</option>
                                                            <option>Toyota</option>
                                                        </select>
                                                        <label>Select Model</label>
                                                        <select name="Vehicle Model" class="form-control selectpicker" disabled>
                                                            <option>Select Model</option>
                                                        </select>
                                                        <label>Select Year</label>
                                                        <select name="Vehicle Year" class="form-control selectpicker" disabled>
                                                            <option>Select Year</option>
                                                        </select>
                                                        <button class="btn btn-primary pull-right disabled">Find</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="finded-results">
                                                            <!-- Result -->
                                                            <div class="search-find-results">
                                                                <h5>2010 BMW 125i E82 Coupe 2dr Auto 6sp 3.0i [MY10]</h5>
                                                                <ul class="inline">
                                                                    <li>2 door Coupe</li>
                                                                    <li>6 cyl, 3.0 L Petrol</li>
                                                                    <li>6 speed Automatic</li>
                                                                    <li>Rear Wheel Drive</li>
                                                                </ul>
                                                                <button class="btn btn-info btn-sm">Select &amp; continue</button>
                                                            </div>
                                                            <!-- Result -->
                                                            <div class="search-find-results">
                                                                <h5>2010 BMW 125i E88 Convertible 2dr Auto 6sp 3.0i [MY10] </h5>
                                                                <ul class="inline">
                                                                    <li>2 door Coupe</li>
                                                                    <li>6 cyl, 3.0 L Petrol</li>
                                                                    <li>6 speed Automatic</li>
                                                                    <li>Rear Wheel Drive</li>
                                                                </ul>
                                                                <button class="btn btn-info btn-sm">Select &amp; continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- CUSTOM VEHICLE LISTING -->
                                            <div id="addcustom" class="tab-pane fade">
                                                <div class="alert alert-warning fade in">
                                                    Custom vehicle ad listing can take more days to review as compared to searched vehicle listing. <a data-toggle="tab" href="#searchvehicle">Try search again</a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Enter Make*</label>
                                                        <input type="text" class="form-control" placeholder="Enter your car make" required>
                                                        <label>Select Manufacture Year*</label>
                                                        <select name="Vehicle Year" class="form-control selectpicker" required>
                                                            <option>Select</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                            <option value="1919">1919</option>
                                                            <option value="1918">1918</option>
                                                            <option value="1917">1917</option>
                                                            <option value="1916">1916</option>
                                                            <option value="1915">1915</option>
                                                            <option value="1914">1914</option>
                                                            <option value="1913">1913</option>
                                                            <option value="1912">1912</option>
                                                            <option value="1911">1911</option>
                                                            <option value="1910">1910</option>
                                                            <option value="1909">1909</option>
                                                            <option value="1908">1908</option>
                                                            <option value="1907">1907</option>
                                                            <option value="1906">1906</option>
                                                            <option value="1905">1905</option>
                                                            <option value="1904">1904</option>
                                                            <option value="1903">1903</option>
                                                            <option value="1902">1902</option>
                                                            <option value="1901">1901</option>
                                                            <option value="1900">1900</option>
                                                        </select>
                                                        <label>Select Seats*</label>
                                                        <select name="Seats" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>20+</option>
                                                        </select>
                                                        <label>Select No. of Gears*</label>
                                                        <select name="Gears" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8+</option>
                                                        </select>
                                                        <label>Select Drive Type*</label>
                                                        <select name="Drive Type" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>4x4</option>
                                                            <option>AWD</option>
                                                            <option>Front</option>
                                                            <option>Rear</option>
                                                            <option>Other</option>
                                                        </select>
                                                        <label>Select No. of Cylinders*</label>
                                                        <select name="Cylinders" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>Unknown</option>
                                                        </select>
                                                        <label>Select Fuel Type*</label>
                                                        <select name="Fuel Type" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>Diesel</option>
                                                            <option>AWD</option>
                                                            <option>Dual Fuel</option>
                                                            <option>Electric</option>
                                                            <option>Gas</option>
                                                            <option>Hybrid</option>
                                                            <option>Leaded Petrol</option>
                                                            <option>Premium Unleaded Petrol</option>
                                                            <option>Unleaded Petrol</option>
                                                            <option>Unknown</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Enter Model of your car*</label>
                                                        <input type="text" class="form-control" placeholder="Model*" required>
                                                        <label>Select Body Type*</label>
                                                        <select name="Body Style" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>Convertible</option>
                                                            <option>Coupe</option>
                                                            <option>Hatchback</option>
                                                            <option>Heavy Commercials</option>
                                                            <option>Sedan</option>
                                                            <option>Ute</option>
                                                            <option>Van</option>
                                                            <option>Tray</option>
                                                            <option>Cab Chassis</option>
                                                            <option>Wagon</option>
                                                            <option>Other</option>
                                                        </select>
                                                        <label>Select No. of Doors*</label>
                                                        <select name="Doors" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                        <label>Select Transmission Type*</label>
                                                        <select name="Transmission" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>Manual</option>
                                                            <option>Automatic</option>
                                                        </select>
                                                        <label>Select Engine Type</label>
                                                        <select name="Engine Type" class="form-control selectpicker">
                                                            <option selected>Select</option>
                                                            <option>Electric Motor</option>
                                                            <option>Hybrid</option>
                                                            <option>Piston In-Line</option>
                                                            <option>Piston Horizontal Opposed</option>
                                                            <option>Piston V</option>
                                                            <option>Piston W</option>
                                                            <option>Rotary</option>
                                                            <option>Unknown</option>
                                                        </select>
                                                        <label>Enter Engine Capacity*</label>
                                                        <input type="text" class="form-control" placeholder="Engine Capacity" required>
                                                        <label>Enter VIN/Chassis Number*</label>
                                                        <input type="text" class="form-control" placeholder="VIN/Chassis Number" required>
                                                        <button class="btn btn-info pull-right">Save &amp; continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">
                                    <h3>Select additional features your car have</h3>
                                    <div class="lighter"><p>Features selected can either factory fitted or after market features.</p></div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <ul class="optional-features-list">
                                                <li class="checkbox"><label><input type="checkbox"> 14" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 15" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 16" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 17" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 18" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 19" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 20" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> 22" Alloy Wheels</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Alarm</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Audio - MP3 Decoder</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Body Kit</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Bonnet Protector</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Bull Bar</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Cargo Barrier</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Carpet Mats</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> CD Player</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Central Locking</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Central Locking - Keyless</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Colour Display Screen - Front</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Colour Display Screen - Rear</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Control - Park Distance Rear</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Cruise Control</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Driving Lamps</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> DVD Player</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Engine Immobiliser</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Fog Lamps - Front</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> GPS (Satellite Navigation)</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Headlight Covers</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Leather Seats</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Leather Trim</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> LPG (Dual Fuel)</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Roof Deflector</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Spoiler - Rear</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Sunroof</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Sunroof - Electric</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Tinted Windows</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Tow Bar</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Weather Shields</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Wheelchair Access</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Ski bag</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Electric Front Seats</label></li>
                                                <li class="checkbox"><label><input type="checkbox"> Paint - Metallic</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn btn-info pull-right">Save &amp; continue</button>
                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    <h3>Tell us more about your car specific details</h3>
                                    <div class="lighter"><p>Be specific and clear about this details to make your listing selling quickly.</p></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Enter Mileage*</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" required>
                                                <span class="input-group-addon">kms</span>
                                            </div>
                                            <label>Select Exterior Color*</label>
                                            <select name="Exterior Color" class="form-control selectpicker" required>
                                                <option selected>Select</option>
                                                <option value="Beige">Beige</option>
                                                <option value="Black">Black</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Bronze">Bronze</option>
                                                <option value="Brown">Brown</option>
                                                <option value="Gold">Gold</option>
                                                <option value="Green">Green</option>
                                                <option value="Grey">Grey</option>
                                                <option value="Magenta">Magenta</option>
                                                <option value="Maroon/Burgundy">Maroon/Burgundy</option>
                                                <option value="Orange">Orange</option>
                                                <option value="Pink">Pink</option>
                                                <option value="Purple">Purple</option>
                                                <option value="Red">Red</option>
                                                <option value="Silver">Silver</option>
                                                <option value="White">White</option>
                                                <option value="Yellow">Yellow</option>
                                            </select>
                                            <label>Enter Interior Color*</label>
                                            <input type="text" class="form-control" placeholder="" required>
                                            <div class="input-group">
                                                <label>Is your car registered?</label><br>
                                                <label class="checkbox-inline registeredv"><input type="radio" name="If Registered" checked> Yes</label>
                                                <label class="checkbox-inline noregisteredv"><input type="radio" name="If Registered"> No</label>
                                            </div>
                                            <div class="registration-details">
                                                <label>Enter Registerarion Plate Number*</label>
                                                <input type="text" class="form-control" placeholder="" required>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Select Registration Expiry Month*</label>
                                                        <select name="Select" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>August</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Select Registration Expiry Year*</label>
                                                        <select name="Registration Expiry Year" class="form-control selectpicker" required>
                                                            <option selected>Select</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Enter Vehicle Registration Number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="">
                                                <span class="input-group-addon"><a href="#" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="<img src='images/vin_locations.png' alt='' width='428' height='361'>"><i class="fa fa-info-circle"></i></a></span>
                                            </div>
                                            <hr class="fw">
                                            <h3>How can buyers contact you?</h3>
                                            <div class="lighter"><p>Make sure to enter them right as your Ad listing depends on this only.</p></div>
                                            <label>Enter Your Phone Number*</label>
                                            <input type="text" class="form-control" placeholder="000-00-0000" required>
                                            <label>Enter Your Email Address</label>
                                            <input type="email" class="form-control" placeholder="mail@example.com">
                                            <button class="btn btn-info pull-right">Save &amp; continue</button>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="panel panel-info price-suggestion">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Enter your expected price</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-addon">$</span>
                                                    </div>
                                                    <p class="small">Price guide between: $20000 - $28000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- AD LISTING FORM STEP FOUR -->
                                <div id="listing-add-form-four" class="tab-pane fade">
                                    <h3>Upload your car photos</h3>
                                    <div class="lighter"><p>Registered car owners should include a picture which shows a clear registeration plate.</p></div>
                                    <input type="file">
                                    <hr class="fw">
                                    <h3>Provide a hosted video URL of your car</h3>
                                    <div class="lighter"><p>As per our experience and selling stats we found that listings with video available sell more faster than the one which do not have any video.</p></div>
                                    <input type="text" class="form-control" placeholder="Youtube/Video URL">
                                    <hr class="fw">
                                    <h3>Add some comments about your car</h3>
                                    <div class="lighter"><p>Enter here some impressive wording about your car to attract more buyers ineterest in your Ad listing. this will appear on the search results page as well.</p></div>
                                    <textarea class="form-control" rows="10"></textarea>
                                    <button class="btn btn-info pull-right">Save &amp; continue</button>
                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-five" class="tab-pane fade">
                                    <h3>Choose how you would like to sell your car</h3>
                                    <div class="lighter"><p>We offer two ways to sell you car, one is to to public where any user of our website can contact you to buy and another way is to sell directly to out dealers network which will get you offers from our verified dealers directly.</p></div>
                                    <div class="btn-group selling-choice" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="Loan Tenure" id="option1" autocomplete="off" checked> <i class="fa fa-group"></i> <strong>Sell Your car publicaly</strong>
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="Loan Tenure" id="option2" autocomplete="off">  <i class="fa fa-user"></i><strong>Sell Your car to dealers</strong>
                                        </label>
                                    </div>
                                    <hr class="fw">
                                    <h3>Enter your billing info</h3>
                                    <div class="lighter"><p>Payment are accepted using Paypal secure payment gateway and you will be redirected to Paypal payment page.</p></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>First name*</label>
                                                    <input type="text" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email*</label>
                                                    <input type="text" class="form-control" placeholder="mail@example.com" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="000-00-0000">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>City*</label>
                                                    <input type="text" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Zip*</label>
                                                    <input type="text" class="form-control" placeholder="" required>
                                                </div>
                                            </div>
                                            <label>Select State*</label>
                                            <select name="State" class="form-control selectpicker" required>
                                                <option selected>Select</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <button class="btn btn-info btn-block">Pay &amp; Publish</button>
                                            <p class="small">You will be redirected to Paypal secure payment page for the payment which can be done using your Paypal account or via Credit Card</p>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="panel panel-info selected-price-plan">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Your advert plan</h3>
                                                </div>
                                                <div class="panel-body">
                                                <span class="plan-blocked">Basic</span>
                                                <a href="#" class="basic-link">Change</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->



    <!-- Start site footer -->
		@include('pie')
    <!-- End site footer -->


@endsection