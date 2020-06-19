<div class="container-fluid">
    <img style="width: 100%; height: 250px;"
        src="https://image.freepik.com/free-vector/coronavirus-2019-ncov-virus-background-with-disease-cells-covid-19-corona-virus-outbreaking-pandemic-medical-health-risk-concept_139523-181.jpg"
        alt="Covid-19 image" />
    <h1 class="text-greyblue text-capitalize" style="text-align: center; margin: 2% 0;">
        COVID-19 Impact Assessment Tracker
    </h1>
    <p style="text-align: center; margin-bottom: 2%; font-size: large;">
        <strong>
            COVID-19 Impact Assessment Tracker provides latest insights on the
            potential impact of this crisis on your industry. Our revised and updated
            reports now feature detailed analysis that will help you make critical
            decisions with clarity.
        </strong>
    </p>
    <div class="row">
        <div class="col-md-6">
            <p style="font-size: medium;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore
                magnam aliquam quaerat voluptatem.
            </p>
        </div>
        <div class="col-md-6">
            <form id="contactus" action="{{url('contactUs-submit')}}" method="post"
                enctype="multipart/form-data" role="form" autocomplete="off">
                <div class="input mb-3">
                    <div class="input-prepend">
                        <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="name" placeholder="Full Name*" required />
                </div>
                <div class="input mb-3">
                    <div class="input-prepend">
                        <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                    </div>
                    <input type="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="email" placeholder="Business Email*"
                        required />
                </div>
                <div class="input mb-3">
                    <div class="input-group-prepend">
                        <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="company" placeholder="Your Company*"
                        required />
                </div>
                <div class="input mb-3">
                    <div class="input-group-prepend">
                        <!--<select name="" id="" class="btn-outline-secondary" required>-->
                        <!--    <option value="">Country</option>-->
                        <!--    <option value="0">Country 1</option>-->
                        <!--    <option value="1">Country 2</option>-->
                        <!--    <option value="2">Country 3</option>-->
                        <!--</select>-->
                        <!-- <div class="dropdown-menu"> -->
                        <!-- <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> -->
                        <!-- </div> -->
                    </div>
                    <input type="number" name="mobileNumber" class="form-control h-auto"
                        aria-label="Text input with dropdown button" placeholder="Phone*" />
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input mb-3">
                                <input class="w-100 p-0" type="date" name="date" placeholder="Select Date" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input mb-3">
                                <select name="hours" id="" class="btn-outline-secondary" style="padding: 13px;">
                                    <option value="" selected disabled="disabled">Hours</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input mb-3">
                                <select name="minute" id="" class="btn-outline-secondary" style="padding: 13px;">
                                    <option value="" selected disabled="disabled">Minutes</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input mb-3">
                    <div class="input-group-prepend"></div>
                    <textarea name="comments" rows="4" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" placeholder="Comments"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-mdf-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h4 class="my-sm-4 my-md-2 text-greyblue text-capitalize">
        Covid-19 Reports
    </h4>
</div>