<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotomania</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            background-color: lightgray;
        }

        .corpo{
            margin: 0px 250px 0px 250px;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding-bottom: 500px;
            
        }

        .titulo{
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        table{
            display: flex;
            justify-content: center;
        }
        .numeros{
            font-size: 30px;
            padding: 20px;
            height: 20px;
            width: 20px;
        }
        .num{
            height: 30px;
            margin-left: 15px;
            margin-right: 15px;
        }

        fieldset{
           display: flex;
           justify-content: center;
        }

        .volante{
            display: flex;
            justify-content: center;
        }

        .enviar{
            display: flex;
            margin: 15px;
            justify-content: center;
            flex-direction: column;
        }

        .resultado{
            margin-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
        }
        
    </style>
</head>
<body>
    <div class="corpo">
        <div id="cabecalhos">
    <h1>
        <p class="titulo">Formulário Lotomania</p> <br><br>
    </h1>
    <br> <p class="volante">Volante 1</p> <br>
    <form action="lotomania.php" method="post" enctype="multipart/form-data">
        <fieldset>
    <table>
        <tr class="numeros"> 
           <th><p>1</p><input type="checkbox" name="numeros[]" value="1" class="num"></th>
            <th><p>2</p><input type="checkbox" name="numeros[]" value="2" class="num"></th>
            <th><p>3</p><input type="checkbox" name="numeros[]" value="3" class="num"></th>
            <th><p>4</p><input type="checkbox" name="numeros[]" value="4" class="num"></th>
            <th><p>5</p><input type="checkbox" name="numeros[]" value="5" class="num"></th>
            <th><p>6</p><input type="checkbox" name="numeros[]" value="6" class="num"></th>
            <th><p>7</p><input type="checkbox" name="numeros[]" value="7" class="num"></th>
            <th><p>8</p><input type="checkbox" name="numeros[]" value="8" class="num"></th>
            <th><p>9</p><input type="checkbox" name="numeros[]" value="9" class="num"></th>
            <th><p>10</p><input type="checkbox" name="numeros[]" value="10" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>11</p><input type="checkbox" name="numeros[]" value="11" class="num"></th>
            <th><p>12</p><input type="checkbox" name="numeros[]" value="12" class="num"></th>
            <th><p>13</p><input type="checkbox" name="numeros[]" value="13" class="num"></th>
            <th><p>14</p><input type="checkbox" name="numeros[]" value="14" class="num"></th>
            <th><p>15</p><input type="checkbox" name="numeros[]" value="15" class="num"></th>
            <th><p>16</p><input type="checkbox" name="numeros[]" value="16" class="num"></th>
            <th><p>17</p><input type="checkbox" name="numeros[]" value="17" class="num"></th>
            <th><p>18</p><input type="checkbox" name="numeros[]" value="18" class="num"></th>
            <th><p>19</p><input type="checkbox" name="numeros[]" value="19" class="num"></th>
            <th><p>20</p><input type="checkbox" name="numeros[]" value="20" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>21</p><input type="checkbox" name="numeros[]" value="21" class="num"></th>
        <th><p>22</p><input type="checkbox" name="numeros[]" value="22" class="num"></th>
        <th><p>23</p><input type="checkbox" name="numeros[]" value="23" class="num"></th>
        <th><p>24</p><input type="checkbox" name="numeros[]" value="24" class="num"></th>
        <th><p>25</p><input type="checkbox" name="numeros[]" value="25" class="num"></th>
        <th><p>26</p><input type="checkbox" name="numeros[]" value="26" class="num"></th>
        <th><p>27</p><input type="checkbox" name="numeros[]" value="27" class="num"></th>
        <th><p>28</p><input type="checkbox" name="numeros[]" value="28" class="num"></th>
        <th><p>29</p><input type="checkbox" name="numeros[]" value="29" class="num"></th>
        <th><p>30</p><input type="checkbox" name="numeros[]" value="30" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>31</p><input type="checkbox" name="numeros[]" value="31" class="num"></th>
        <th><p>32</p><input type="checkbox" name="numeros[]" value="32" class="num"></th>
        <th><p>33</p><input type="checkbox" name="numeros[]" value="33" class="num"></th>
        <th><p>34</p><input type="checkbox" name="numeros[]" value="34" class="num"></th>
        <th><p>35</p><input type="checkbox" name="numeros[]" value="35" class="num"></th>
        <th><p>36</p><input type="checkbox" name="numeros[]" value="36" class="num"></th>
        <th><p>37</p><input type="checkbox" name="numeros[]" value="37" class="num"></th>
        <th><p>38</p><input type="checkbox" name="numeros[]" value="38" class="num"></th>
        <th><p>39</p><input type="checkbox" name="numeros[]" value="39" class="num"></th>
        <th><p>40</p><input type="checkbox" name="numeros[]" value="40" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>41</p><input type="checkbox" name="numeros[]" value="41" class="num"></th>
        <th><p>42</p><input type="checkbox" name="numeros[]" value="42" class="num"></th>
        <th><p>43</p><input type="checkbox" name="numeros[]" value="43" class="num"></th>
        <th><p>44</p><input type="checkbox" name="numeros[]" value="44" class="num"></th>
        <th><p>45</p><input type="checkbox" name="numeros[]" value="45" class="num"></th>
        <th><p>46</p><input type="checkbox" name="numeros[]" value="46" class="num"></th>
        <th><p>47</p><input type="checkbox" name="numeros[]" value="47" class="num"></th>
        <th><p>48</p><input type="checkbox" name="numeros[]" value="48" class="num"></th>
        <th><p>49</p><input type="checkbox" name="numeros[]" value="49" class="num"></th>
        <th><p>50</p><input type="checkbox" name="numeros[]" value="50" class="num"></th>
</tr><tr class="numeros"> 
           <th><p>51</p><input type="checkbox" name="numeros[]" value="51" class="num"></th>
            <th><p>52</p><input type="checkbox" name="numeros[]" value="52" class="num"></th>
            <th><p>53</p><input type="checkbox" name="numeros[]" value="53" class="num"></th>
            <th><p>54</p><input type="checkbox" name="numeros[]" value="54" class="num"></th>
            <th><p>55</p><input type="checkbox" name="numeros[]" value="55" class="num"></th>
            <th><p>56</p><input type="checkbox" name="numeros[]" value="56" class="num"></th>
            <th><p>57</p><input type="checkbox" name="numeros[]" value="57" class="num"></th>
            <th><p>58</p><input type="checkbox" name="numeros[]" value="58" class="num"></th>
            <th><p>59</p><input type="checkbox" name="numeros[]" value="59" class="num"></th>
            <th><p>60</p><input type="checkbox" name="numeros[]" value="60" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>61</p><input type="checkbox" name="numeros[]" value="61" class="num"></th>
            <th><p>62</p><input type="checkbox" name="numeros[]" value="62" class="num"></th>
            <th><p>63</p><input type="checkbox" name="numeros[]" value="63" class="num"></th>
            <th><p>64</p><input type="checkbox" name="numeros[]" value="64" class="num"></th>
            <th><p>65</p><input type="checkbox" name="numeros[]" value="65" class="num"></th>
            <th><p>66</p><input type="checkbox" name="numeros[]" value="66" class="num"></th>
            <th><p>67</p><input type="checkbox" name="numeros[]" value="67" class="num"></th>
            <th><p>68</p><input type="checkbox" name="numeros[]" value="68" class="num"></th>
            <th><p>69</p><input type="checkbox" name="numeros[]" value="69" class="num"></th>
            <th><p>70</p><input type="checkbox" name="numeros[]" value="70" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>71</p><input type="checkbox" name="numeros[]" value="71" class="num"></th>
        <th><p>72</p><input type="checkbox" name="numeros[]" value="72" class="num"></th>
        <th><p>73</p><input type="checkbox" name="numeros[]" value="73" class="num"></th>
        <th><p>74</p><input type="checkbox" name="numeros[]" value="74" class="num"></th>
        <th><p>75</p><input type="checkbox" name="numeros[]" value="75" class="num"></th>
        <th><p>76</p><input type="checkbox" name="numeros[]" value="76" class="num"></th>
        <th><p>77</p><input type="checkbox" name="numeros[]" value="77" class="num"></th>
        <th><p>78</p><input type="checkbox" name="numeros[]" value="78" class="num"></th>
        <th><p>79</p><input type="checkbox" name="numeros[]" value="79" class="num"></th>
        <th><p>80</p><input type="checkbox" name="numeros[]" value="80" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>81</p><input type="checkbox" name="numeros[]" value="81" class="num"></th>
        <th><p>82</p><input type="checkbox" name="numeros[]" value="82" class="num"></th>
        <th><p>83</p><input type="checkbox" name="numeros[]" value="83" class="num"></th>
        <th><p>84</p><input type="checkbox" name="numeros[]" value="84" class="num"></th>
        <th><p>85</p><input type="checkbox" name="numeros[]" value="85" class="num"></th>
        <th><p>86</p><input type="checkbox" name="numeros[]" value="86" class="num"></th>
        <th><p>87</p><input type="checkbox" name="numeros[]" value="87" class="num"></th>
        <th><p>88</p><input type="checkbox" name="numeros[]" value="88" class="num"></th>
        <th><p>89</p><input type="checkbox" name="numeros[]" value="89" class="num"></th>
        <th><p>90</p><input type="checkbox" name="numeros[]" value="90" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>91</p><input type="checkbox" name="numeros[]" value="91" class="num"></th>
        <th><p>92</p><input type="checkbox" name="numeros[]" value="92" class="num"></th>
        <th><p>93</p><input type="checkbox" name="numeros[]" value="93" class="num"></th>
        <th><p>94</p><input type="checkbox" name="numeros[]" value="94" class="num"></th>
        <th><p>95</p><input type="checkbox" name="numeros[]" value="95" class="num"></th>
        <th><p>96</p><input type="checkbox" name="numeros[]" value="96" class="num"></th>
        <th><p>97</p><input type="checkbox" name="numeros[]" value="97" class="num"></th>
        <th><p>98</p><input type="checkbox" name="numeros[]" value="98" class="num"></th>
        <th><p>99</p><input type="checkbox" name="numeros[]" value="99" class="num"></th>
        <th><p>00</p><input type="checkbox" name="numeros[]" value="0+0" class="num"></th>
</tr>
    </table>
</fieldset>
  
    <br><br> <p class="volante">Volante 2</p> <br>
        <fieldset>
        <table>
        <tr class="numeros"> 
           <th><p>1</p><input type="checkbox" name="numeros2[]" value="1" class="num"></th>
            <th><p>2</p><input type="checkbox" name="numeros2[]" value="2" class="num"></th>
            <th><p>3</p><input type="checkbox" name="numeros2[]" value="3" class="num"></th>
            <th><p>4</p><input type="checkbox" name="numeros2[]" value="4" class="num"></th>
            <th><p>5</p><input type="checkbox" name="numeros2[]" value="5" class="num"></th>
            <th><p>6</p><input type="checkbox" name="numeros2[]" value="6" class="num"></th>
            <th><p>7</p><input type="checkbox" name="numeros2[]" value="7" class="num"></th>
            <th><p>8</p><input type="checkbox" name="numeros2[]" value="8" class="num"></th>
            <th><p>9</p><input type="checkbox" name="numeros2[]" value="9" class="num"></th>
            <th><p>10</p><input type="checkbox" name="numeros2[]" value="10" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>11</p><input type="checkbox" name="numeros2[]" value="11" class="num"></th>
            <th><p>12</p><input type="checkbox" name="numeros2[]" value="12" class="num"></th>
            <th><p>13</p><input type="checkbox" name="numeros2[]" value="13" class="num"></th>
            <th><p>14</p><input type="checkbox" name="numeros2[]" value="14" class="num"></th>
            <th><p>15</p><input type="checkbox" name="numeros2[]" value="15" class="num"></th>
            <th><p>16</p><input type="checkbox" name="numeros2[]" value="16" class="num"></th>
            <th><p>17</p><input type="checkbox" name="numeros2[]" value="17" class="num"></th>
            <th><p>18</p><input type="checkbox" name="numeros2[]" value="18" class="num"></th>
            <th><p>19</p><input type="checkbox" name="numeros2[]" value="19" class="num"></th>
            <th><p>20</p><input type="checkbox" name="numeros2[]" value="20" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>21</p><input type="checkbox" name="numeros2[]" value="21" class="num"></th>
        <th><p>22</p><input type="checkbox" name="numeros2[]" value="22" class="num"></th>
        <th><p>23</p><input type="checkbox" name="numeros2[]" value="23" class="num"></th>
        <th><p>24</p><input type="checkbox" name="numeros2[]" value="24" class="num"></th>
        <th><p>25</p><input type="checkbox" name="numeros2[]" value="25" class="num"></th>
        <th><p>26</p><input type="checkbox" name="numeros2[]" value="26" class="num"></th>
        <th><p>27</p><input type="checkbox" name="numeros2[]" value="27" class="num"></th>
        <th><p>28</p><input type="checkbox" name="numeros2[]" value="28" class="num"></th>
        <th><p>29</p><input type="checkbox" name="numeros2[]" value="29" class="num"></th>
        <th><p>30</p><input type="checkbox" name="numeros2[]" value="30" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>31</p><input type="checkbox" name="numeros2[]" value="31" class="num"></th>
        <th><p>32</p><input type="checkbox" name="numeros2[]" value="32" class="num"></th>
        <th><p>33</p><input type="checkbox" name="numeros2[]" value="33" class="num"></th>
        <th><p>34</p><input type="checkbox" name="numeros2[]" value="34" class="num"></th>
        <th><p>35</p><input type="checkbox" name="numeros2[]" value="35" class="num"></th>
        <th><p>36</p><input type="checkbox" name="numeros2[]" value="36" class="num"></th>
        <th><p>37</p><input type="checkbox" name="numeros2[]" value="37" class="num"></th>
        <th><p>38</p><input type="checkbox" name="numeros2[]" value="38" class="num"></th>
        <th><p>39</p><input type="checkbox" name="numeros2[]" value="39" class="num"></th>
        <th><p>40</p><input type="checkbox" name="numeros2[]" value="40" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>41</p><input type="checkbox" name="numeros2[]" value="41" class="num"></th>
        <th><p>42</p><input type="checkbox" name="numeros2[]" value="42" class="num"></th>
        <th><p>43</p><input type="checkbox" name="numeros2[]" value="43" class="num"></th>
        <th><p>44</p><input type="checkbox" name="numeros2[]" value="44" class="num"></th>
        <th><p>45</p><input type="checkbox" name="numeros2[]" value="45" class="num"></th>
        <th><p>46</p><input type="checkbox" name="numeros2[]" value="46" class="num"></th>
        <th><p>47</p><input type="checkbox" name="numeros2[]" value="47" class="num"></th>
        <th><p>48</p><input type="checkbox" name="numeros2[]" value="48" class="num"></th>
        <th><p>49</p><input type="checkbox" name="numeros2[]" value="49" class="num"></th>
        <th><p>50</p><input type="checkbox" name="numeros2[]" value="50" class="num"></th>
</tr><tr class="numeros"> 
           <th><p>51</p><input type="checkbox" name="numeros2[]" value="51" class="num"></th>
            <th><p>52</p><input type="checkbox" name="numeros2[]" value="52" class="num"></th>
            <th><p>53</p><input type="checkbox" name="numeros2[]" value="53" class="num"></th>
            <th><p>54</p><input type="checkbox" name="numeros2[]" value="54" class="num"></th>
            <th><p>55</p><input type="checkbox" name="numeros2[]" value="55" class="num"></th>
            <th><p>56</p><input type="checkbox" name="numeros2[]" value="56" class="num"></th>
            <th><p>57</p><input type="checkbox" name="numeros2[]" value="57" class="num"></th>
            <th><p>58</p><input type="checkbox" name="numeros2[]" value="58" class="num"></th>
            <th><p>59</p><input type="checkbox" name="numeros2[]" value="59" class="num"></th>
            <th><p>60</p><input type="checkbox" name="numeros2[]" value="60" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>61</p><input type="checkbox" name="numeros2[]" value="61" class="num"></th>
            <th><p>62</p><input type="checkbox" name="numeros2[]" value="62" class="num"></th>
            <th><p>63</p><input type="checkbox" name="numeros2[]" value="63" class="num"></th>
            <th><p>64</p><input type="checkbox" name="numeros2[]" value="64" class="num"></th>
            <th><p>65</p><input type="checkbox" name="numeros2[]" value="65" class="num"></th>
            <th><p>66</p><input type="checkbox" name="numeros2[]" value="66" class="num"></th>
            <th><p>67</p><input type="checkbox" name="numeros2[]" value="67" class="num"></th>
            <th><p>68</p><input type="checkbox" name="numeros2[]" value="68" class="num"></th>
            <th><p>69</p><input type="checkbox" name="numeros2[]" value="69" class="num"></th>
            <th><p>70</p><input type="checkbox" name="numeros2[]" value="70" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>71</p><input type="checkbox" name="numeros2[]" value="71" class="num"></th>
        <th><p>72</p><input type="checkbox" name="numeros2[]" value="72" class="num"></th>
        <th><p>73</p><input type="checkbox" name="numeros2[]" value="73" class="num"></th>
        <th><p>74</p><input type="checkbox" name="numeros2[]" value="74" class="num"></th>
        <th><p>75</p><input type="checkbox" name="numeros2[]" value="75" class="num"></th>
        <th><p>76</p><input type="checkbox" name="numeros2[]" value="76" class="num"></th>
        <th><p>77</p><input type="checkbox" name="numeros2[]" value="77" class="num"></th>
        <th><p>78</p><input type="checkbox" name="numeros2[]" value="78" class="num"></th>
        <th><p>79</p><input type="checkbox" name="numeros2[]" value="79" class="num"></th>
        <th><p>80</p><input type="checkbox" name="numeros2[]" value="80" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>81</p><input type="checkbox" name="numeros2[]" value="81" class="num"></th>
        <th><p>82</p><input type="checkbox" name="numeros2[]" value="82" class="num"></th>
        <th><p>83</p><input type="checkbox" name="numeros2[]" value="83" class="num"></th>
        <th><p>84</p><input type="checkbox" name="numeros2[]" value="84" class="num"></th>
        <th><p>85</p><input type="checkbox" name="numeros2[]" value="85" class="num"></th>
        <th><p>86</p><input type="checkbox" name="numeros2[]" value="86" class="num"></th>
        <th><p>87</p><input type="checkbox" name="numeros2[]" value="87" class="num"></th>
        <th><p>88</p><input type="checkbox" name="numeros2[]" value="88" class="num"></th>
        <th><p>89</p><input type="checkbox" name="numeros2[]" value="89" class="num"></th>
        <th><p>90</p><input type="checkbox" name="numeros2[]" value="90" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>91</p><input type="checkbox" name="numeros2[]" value="91" class="num"></th>
        <th><p>92</p><input type="checkbox" name="numeros2[]" value="92" class="num"></th>
        <th><p>93</p><input type="checkbox" name="numeros2[]" value="93" class="num"></th>
        <th><p>94</p><input type="checkbox" name="numeros2[]" value="94" class="num"></th>
        <th><p>95</p><input type="checkbox" name="numeros2[]" value="95" class="num"></th>
        <th><p>96</p><input type="checkbox" name="numeros2[]" value="96" class="num"></th>
        <th><p>97</p><input type="checkbox" name="numeros2[]" value="97" class="num"></th>
        <th><p>98</p><input type="checkbox" name="numeros2[]" value="98" class="num"></th>
        <th><p>99</p><input type="checkbox" name="numeros2[]" value="99" class="num"></th>
        <th><p>00</p><input type="checkbox" name="numeros2[]" value="0+0" class="num"></th>
</tr>
    </table>
</fieldset>

    

   <br> <br> <p class="volante">Volante 3</p> <br>
        <fieldset>
        <table>
        <tr class="numeros"> 
           <th><p>1</p><input type="checkbox" name="numeros3[]" value="1" class="num"></th>
            <th><p>2</p><input type="checkbox" name="numeros3[]" value="2" class="num"></th>
            <th><p>3</p><input type="checkbox" name="numeros3[]" value="3" class="num"></th>
            <th><p>4</p><input type="checkbox" name="numeros3[]" value="4" class="num"></th>
            <th><p>5</p><input type="checkbox" name="numeros3[]" value="5" class="num"></th>
            <th><p>6</p><input type="checkbox" name="numeros3[]" value="6" class="num"></th>
            <th><p>7</p><input type="checkbox" name="numeros3[]" value="7" class="num"></th>
            <th><p>8</p><input type="checkbox" name="numeros3[]" value="8" class="num"></th>
            <th><p>9</p><input type="checkbox" name="numeros3[]" value="9" class="num"></th>
            <th><p>10</p><input type="checkbox" name="numeros3[]" value="10" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>11</p><input type="checkbox" name="numeros3[]" value="11" class="num"></th>
            <th><p>12</p><input type="checkbox" name="numeros3[]" value="12" class="num"></th>
            <th><p>13</p><input type="checkbox" name="numeros3[]" value="13" class="num"></th>
            <th><p>14</p><input type="checkbox" name="numeros3[]" value="14" class="num"></th>
            <th><p>15</p><input type="checkbox" name="numeros3[]" value="15" class="num"></th>
            <th><p>16</p><input type="checkbox" name="numeros3[]" value="16" class="num"></th>
            <th><p>17</p><input type="checkbox" name="numeros3[]" value="17" class="num"></th>
            <th><p>18</p><input type="checkbox" name="numeros3[]" value="18" class="num"></th>
            <th><p>19</p><input type="checkbox" name="numeros3[]" value="19" class="num"></th>
            <th><p>20</p><input type="checkbox" name="numeros3[]" value="20" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>21</p><input type="checkbox" name="numeros3[]" value="21" class="num"></th>
        <th><p>22</p><input type="checkbox" name="numeros3[]" value="22" class="num"></th>
        <th><p>23</p><input type="checkbox" name="numeros3[]" value="23" class="num"></th>
        <th><p>24</p><input type="checkbox" name="numeros3[]" value="24" class="num"></th>
        <th><p>25</p><input type="checkbox" name="numeros3[]" value="25" class="num"></th>
        <th><p>26</p><input type="checkbox" name="numeros3[]" value="26" class="num"></th>
        <th><p>27</p><input type="checkbox" name="numeros3[]" value="27" class="num"></th>
        <th><p>28</p><input type="checkbox" name="numeros3[]" value="28" class="num"></th>
        <th><p>29</p><input type="checkbox" name="numeros3[]" value="29" class="num"></th>
        <th><p>30</p><input type="checkbox" name="numeros3[]" value="30" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>31</p><input type="checkbox" name="numeros3[]" value="31" class="num"></th>
        <th><p>32</p><input type="checkbox" name="numeros3[]" value="32" class="num"></th>
        <th><p>33</p><input type="checkbox" name="numeros3[]" value="33" class="num"></th>
        <th><p>34</p><input type="checkbox" name="numeros3[]" value="34" class="num"></th>
        <th><p>35</p><input type="checkbox" name="numeros3[]" value="35" class="num"></th>
        <th><p>36</p><input type="checkbox" name="numeros3[]" value="36" class="num"></th>
        <th><p>37</p><input type="checkbox" name="numeros3[]" value="37" class="num"></th>
        <th><p>38</p><input type="checkbox" name="numeros3[]" value="38" class="num"></th>
        <th><p>39</p><input type="checkbox" name="numeros3[]" value="39" class="num"></th>
        <th><p>40</p><input type="checkbox" name="numeros3[]" value="40" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>41</p><input type="checkbox" name="numeros3[]" value="41" class="num"></th>
        <th><p>42</p><input type="checkbox" name="numeros3[]" value="42" class="num"></th>
        <th><p>43</p><input type="checkbox" name="numeros3[]" value="43" class="num"></th>
        <th><p>44</p><input type="checkbox" name="numeros3[]" value="44" class="num"></th>
        <th><p>45</p><input type="checkbox" name="numeros3[]" value="45" class="num"></th>
        <th><p>46</p><input type="checkbox" name="numeros3[]" value="46" class="num"></th>
        <th><p>47</p><input type="checkbox" name="numeros3[]" value="47" class="num"></th>
        <th><p>48</p><input type="checkbox" name="numeros3[]" value="48" class="num"></th>
        <th><p>49</p><input type="checkbox" name="numeros3[]" value="49" class="num"></th>
        <th><p>50</p><input type="checkbox" name="numeros3[]" value="50" class="num"></th>
</tr><tr class="numeros"> 
           <th><p>51</p><input type="checkbox" name="numeros3[]" value="51" class="num"></th>
            <th><p>52</p><input type="checkbox" name="numeros3[]" value="52" class="num"></th>
            <th><p>53</p><input type="checkbox" name="numeros3[]" value="53" class="num"></th>
            <th><p>54</p><input type="checkbox" name="numeros3[]" value="54" class="num"></th>
            <th><p>55</p><input type="checkbox" name="numeros3[]" value="55" class="num"></th>
            <th><p>56</p><input type="checkbox" name="numeros3[]" value="56" class="num"></th>
            <th><p>57</p><input type="checkbox" name="numeros3[]" value="57" class="num"></th>
            <th><p>58</p><input type="checkbox" name="numeros3[]" value="58" class="num"></th>
            <th><p>59</p><input type="checkbox" name="numeros3[]" value="59" class="num"></th>
            <th><p>60</p><input type="checkbox" name="numeros3[]" value="60" class="num"></th>

        </tr>
        <tr class="numeros"> 
            <th><p>61</p><input type="checkbox" name="numeros3[]" value="61" class="num"></th>
            <th><p>62</p><input type="checkbox" name="numeros3[]" value="62" class="num"></th>
            <th><p>63</p><input type="checkbox" name="numeros3[]" value="63" class="num"></th>
            <th><p>64</p><input type="checkbox" name="numeros3[]" value="64" class="num"></th>
            <th><p>65</p><input type="checkbox" name="numeros3[]" value="65" class="num"></th>
            <th><p>66</p><input type="checkbox" name="numeros3[]" value="66" class="num"></th>
            <th><p>67</p><input type="checkbox" name="numeros3[]" value="67" class="num"></th>
            <th><p>68</p><input type="checkbox" name="numeros3[]" value="68" class="num"></th>
            <th><p>69</p><input type="checkbox" name="numeros3[]" value="69" class="num"></th>
            <th><p>70</p><input type="checkbox" name="numeros3[]" value="70" class="num"></th>
        </tr>
        <tr class="numeros">
        <th><p>71</p><input type="checkbox" name="numeros3[]" value="71" class="num"></th>
        <th><p>72</p><input type="checkbox" name="numeros3[]" value="72" class="num"></th>
        <th><p>73</p><input type="checkbox" name="numeros3[]" value="73" class="num"></th>
        <th><p>74</p><input type="checkbox" name="numeros3[]" value="74" class="num"></th>
        <th><p>75</p><input type="checkbox" name="numeros3[]" value="75" class="num"></th>
        <th><p>76</p><input type="checkbox" name="numeros3[]" value="76" class="num"></th>
        <th><p>77</p><input type="checkbox" name="numeros3[]" value="77" class="num"></th>
        <th><p>78</p><input type="checkbox" name="numeros3[]" value="78" class="num"></th>
        <th><p>79</p><input type="checkbox" name="numeros3[]" value="79" class="num"></th>
        <th><p>80</p><input type="checkbox" name="numeros3[]" value="80" class="num"></th>
    </tr>
        </tr>
        <tr class="numeros">
        <th><p>81</p><input type="checkbox" name="numeros3[]" value="81" class="num"></th>
        <th><p>82</p><input type="checkbox" name="numeros3[]" value="82" class="num"></th>
        <th><p>83</p><input type="checkbox" name="numeros3[]" value="83" class="num"></th>
        <th><p>84</p><input type="checkbox" name="numeros3[]" value="84" class="num"></th>
        <th><p>85</p><input type="checkbox" name="numeros3[]" value="85" class="num"></th>
        <th><p>86</p><input type="checkbox" name="numeros3[]" value="86" class="num"></th>
        <th><p>87</p><input type="checkbox" name="numeros3[]" value="87" class="num"></th>
        <th><p>88</p><input type="checkbox" name="numeros3[]" value="88" class="num"></th>
        <th><p>89</p><input type="checkbox" name="numeros3[]" value="89" class="num"></th>
        <th><p>90</p><input type="checkbox" name="numeros3[]" value="90" class="num"></th>
        </tr>
        </tr>
        <tr class="numeros">
        <th><p>91</p><input type="checkbox" name="numeros3[]" value="91" class="num"></th>
        <th><p>92</p><input type="checkbox" name="numeros3[]" value="92" class="num"></th>
        <th><p>93</p><input type="checkbox" name="numeros3[]" value="93" class="num"></th>
        <th><p>94</p><input type="checkbox" name="numeros3[]" value="94" class="num"></th>
        <th><p>95</p><input type="checkbox" name="numeros3[]" value="95" class="num"></th>
        <th><p>96</p><input type="checkbox" name="numeros3[]" value="96" class="num"></th>
        <th><p>97</p><input type="checkbox" name="numeros3[]" value="97" class="num"></th>
        <th><p>98</p><input type="checkbox" name="numeros3[]" value="98" class="num"></th>
        <th><p>99</p><input type="checkbox" name="numeros3[]" value="99" class="num"></th>
        <th><p>00</p><input type="checkbox" name="numeros3[]" value="0+0" class="num"></th>
</tr>
    </table>
</fieldset>
<br>
<hr>
<div class="enviar">
<p>Selecione os números</p><br>
<br><input type="text" name="resultado"><br><br>

<input type="submit" name="enviar">
<br><br>
</div>
<hr>
    </form>
    <?php
    
    if(isset($_POST['enviar'])){

    $numeros1=$_POST['numeros'];
    $numeros2=$_POST['numeros2'];
    $numeros3=$_POST['numeros3'];
    $resultado=($_POST['resultado']);
    
    //NUMEROS CORRETOS
$resultarray=explode(' ', $resultado);
    sort($resultarray);

    $pontuação1=0;
    $pontuação2=0;
    $pontuação3=0;
    $numeroscertos=array();
    
   
/*if($numeros1[0] = $resultarray[0] or
 $numeros1[0] = $resultarray[1] or
 $numeros1[0] = $resultarray[2] or
 $numeros1[0] = $resultarray[3] or
 $numeros1[0] = $resultarray[4] or 
 $numeros1[0] = $resultarray[5] or 
 $numeros1[0] = $resultarray[6] or 
 $numeros1[0] = $resultarray[7] or

 if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
if(array_key_exists($numeros1[], $resultarray)){$pontuação ++;}
 )
 {$pontuacao++;}
}*/

//conferencia do numero de acertos
if(array_key_exists($numeros1[0], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[0]);}
if(array_key_exists($numeros1[1], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[1]);}
if(array_key_exists($numeros1[2], $resultarray)){$pontuação1++;$numeroscertos[]=($numeros1[2]);}
if(array_key_exists($numeros1[3], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[3]);}
if(array_key_exists($numeros1[4], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[4]);}
if(array_key_exists($numeros1[5], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[5]);}
if(array_key_exists($numeros1[6], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[6]);}
if(array_key_exists($numeros1[7], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[7]);}
if(array_key_exists($numeros1[8], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[8]);}
if(array_key_exists($numeros1[9], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[9]);}
if(array_key_exists($numeros1[10], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[10]);}
if(array_key_exists($numeros1[11], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[11]);}
if(array_key_exists($numeros1[12], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[12]);}
if(array_key_exists($numeros1[13], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[13]);}
if(array_key_exists($numeros1[14], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[14]);}
if(array_key_exists($numeros1[15], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[15]);}
if(array_key_exists($numeros1[16], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[16]);}
if(array_key_exists($numeros1[17], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[17]);}
if(array_key_exists($numeros1[18], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[18]);}
if(array_key_exists($numeros1[19], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[19]);}
if(array_key_exists($numeros1[20], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[20]);}
if(array_key_exists($numeros1[21], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[21]);}
if(array_key_exists($numeros1[22], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[22]);}
if(array_key_exists($numeros1[23], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[23]);}
if(array_key_exists($numeros1[24], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[24]);}
if(array_key_exists($numeros1[25], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[25]);}
if(array_key_exists($numeros1[26], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[26]);}
if(array_key_exists($numeros1[27], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[27]);}
if(array_key_exists($numeros1[28], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[28]);}
if(array_key_exists($numeros1[29], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[29]);}
if(array_key_exists($numeros1[30], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[30]);}
if(array_key_exists($numeros1[31], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[31]);}
if(array_key_exists($numeros1[32], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[32]);}
if(array_key_exists($numeros1[33], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[33]);}
if(array_key_exists($numeros1[34], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[34]);}
if(array_key_exists($numeros1[35], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[35]);}
if(array_key_exists($numeros1[36], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[36]);}
if(array_key_exists($numeros1[37], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[37]);}
if(array_key_exists($numeros1[38], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[38]);}
if(array_key_exists($numeros1[39], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[39]);}
if(array_key_exists($numeros1[40], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[40]);}
if(array_key_exists($numeros1[41], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[41]);}
if(array_key_exists($numeros1[42], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[42]);}
if(array_key_exists($numeros1[43], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[43]);}
if(array_key_exists($numeros1[44], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[44]);}
if(array_key_exists($numeros1[45], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[45]);}
if(array_key_exists($numeros1[46], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[46]);}
if(array_key_exists($numeros1[47], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[47]);}
if(array_key_exists($numeros1[48], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[48]);}
if(array_key_exists($numeros1[49], $resultarray)){$pontuação1 ++;$numeroscertos[]=($numeros1[49]);}

if(array_key_exists($numeros2[0], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[0]);}
if(array_key_exists($numeros2[1], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[1]);}
if(array_key_exists($numeros2[2], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[2]);}
if(array_key_exists($numeros2[3], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[3]);}
if(array_key_exists($numeros2[4], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[4]);}
if(array_key_exists($numeros2[5], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[5]);}
if(array_key_exists($numeros2[6], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[6]);}
if(array_key_exists($numeros2[7], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[7]);}
if(array_key_exists($numeros2[8], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[8]);}
if(array_key_exists($numeros2[9], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[9]);}
if(array_key_exists($numeros2[10], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[10]);}
if(array_key_exists($numeros2[11], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[11]);}
if(array_key_exists($numeros2[12], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[12]);}
if(array_key_exists($numeros2[13], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[13]);}
if(array_key_exists($numeros2[14], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[14]);}
if(array_key_exists($numeros2[15], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[15]);}
if(array_key_exists($numeros2[16], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[16]);}
if(array_key_exists($numeros2[17], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[17]);}
if(array_key_exists($numeros2[18], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[18]);}
if(array_key_exists($numeros2[19], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[19]);}
if(array_key_exists($numeros2[20], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[20]);}
if(array_key_exists($numeros2[21], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[21]);}
if(array_key_exists($numeros2[22], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[22]);}
if(array_key_exists($numeros2[23], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[23]);}
if(array_key_exists($numeros2[24], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[24]);}
if(array_key_exists($numeros2[25], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[25]);}
if(array_key_exists($numeros2[26], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[26]);}
if(array_key_exists($numeros2[27], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[27]);}
if(array_key_exists($numeros2[28], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[28]);}
if(array_key_exists($numeros2[29], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[29]);}
if(array_key_exists($numeros2[30], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[30]);}
if(array_key_exists($numeros2[31], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[31]);}
if(array_key_exists($numeros2[32], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[32]);}
if(array_key_exists($numeros2[33], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[33]);}
if(array_key_exists($numeros2[34], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[34]);}
if(array_key_exists($numeros2[35], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[35]);}
if(array_key_exists($numeros2[36], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[36]);}
if(array_key_exists($numeros2[37], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[37]);}
if(array_key_exists($numeros2[38], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[38]);}
if(array_key_exists($numeros2[39], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[39]);}
if(array_key_exists($numeros2[40], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[40]);}
if(array_key_exists($numeros2[41], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[41]);}
if(array_key_exists($numeros2[42], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[42]);}
if(array_key_exists($numeros2[43], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[43]);}
if(array_key_exists($numeros2[44], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[44]);}
if(array_key_exists($numeros2[45], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[45]);}
if(array_key_exists($numeros2[46], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[46]);}
if(array_key_exists($numeros2[47], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[47]);}
if(array_key_exists($numeros2[48], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[48]);}
if(array_key_exists($numeros2[49], $resultarray)){$pontuação2 ++;$numeroscertos2[]=($numeros2[49]);}

if(array_key_exists($numeros3[0], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[0]);}
if(array_key_exists($numeros3[1], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[1]);}
if(array_key_exists($numeros3[2], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[2]);}
if(array_key_exists($numeros3[3], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[3]);} 
if(array_key_exists($numeros3[4], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[4]);}
if(array_key_exists($numeros3[5], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[5]);}
if(array_key_exists($numeros3[6], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[6]);}
if(array_key_exists($numeros3[7], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[7]);}
if(array_key_exists($numeros3[8], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[8]);}
if(array_key_exists($numeros3[9], $resultarray)){$pontuação3 ++; $numeroscertos3[]=($numeros3[9]);}
if(array_key_exists($numeros3[10], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[10]);}
if(array_key_exists($numeros3[11], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[11]);}
if(array_key_exists($numeros3[12], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[12]);}
if(array_key_exists($numeros3[13], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[13]);}
if(array_key_exists($numeros3[14], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[14]);}
if(array_key_exists($numeros3[15], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[15]);}
if(array_key_exists($numeros3[16], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[16]);}
if(array_key_exists($numeros3[17], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[17]);}
if(array_key_exists($numeros3[18], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[18]);}
if(array_key_exists($numeros3[19], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[19]);}
if(array_key_exists($numeros3[20], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[20]);}
if(array_key_exists($numeros3[21], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[21]);}
if(array_key_exists($numeros3[22], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[22]);}
if(array_key_exists($numeros3[23], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[23]);}
if(array_key_exists($numeros3[24], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[24]);}
if(array_key_exists($numeros3[25], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[25]);}
if(array_key_exists($numeros3[26], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[26]);}
if(array_key_exists($numeros3[27], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[27]);}
if(array_key_exists($numeros3[28], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[28]);}
if(array_key_exists($numeros3[29], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[29]);}
if(array_key_exists($numeros3[30], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[30]);}
if(array_key_exists($numeros3[31], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[31]);}
if(array_key_exists($numeros3[32], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[32]);}
if(array_key_exists($numeros3[33], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[33]);}
if(array_key_exists($numeros3[34], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[34]);}
if(array_key_exists($numeros3[35], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[36]);}
if(array_key_exists($numeros3[37], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[37]);}
if(array_key_exists($numeros3[38], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[38]);}
if(array_key_exists($numeros3[39], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[39]);}
if(array_key_exists($numeros3[40], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[40]);}
if(array_key_exists($numeros3[41], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[41]);}
if(array_key_exists($numeros3[42], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[42]);}
if(array_key_exists($numeros3[43], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[43]);}
if(array_key_exists($numeros3[44], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[44]);}
if(array_key_exists($numeros3[45], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[45]);}
if(array_key_exists($numeros3[46], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[46]);}
if(array_key_exists($numeros3[47], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[47]);}
if(array_key_exists($numeros3[48], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[48]);}
if(array_key_exists($numeros3[49], $resultarray)){$pontuação3 ++;$numeroscertos3[]=($numeros3[49]);}



echo '<div class="resultado">';
if($pontuação1==20){
    echo "<h1>Parabéns, você acertou 20 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
    

}

elseif($pontuação1==0){
    echo "<h1>Parabéns, você não acertou nenhum numero no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</h1>';
    
}

elseif($pontuação1==19){
    echo "<h1>Parabéns, você acertou 19 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
    
}


elseif($pontuação1==18){
    echo "<h1>Parabéns, você acertou 18 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo' </p></h1>';
}

elseif($pontuação1==17){
    echo "<h1>Parabéns, você acertou 17 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação1==16){
    echo "<h1>Parabéns, você acertou 16 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação1==15){
    echo "<h1>Parabéns, você acertou 15 números no primeiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

else{
    echo "<h1>Você acertou $pontuação1 números no primeiro volante, por isso não recebeu premiação, mas tente novamente, vai que um dia ganhe </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação1; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

echo'</br></br></</br>';

if($pontuação2==20){
    echo "<h1>Parabéns, você acertou 20 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==00){
    echo "<h1>Parabéns, você não acertou nenhum numero no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==19){
    echo "<h1>Parabéns, você acertou 19 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==18){
    echo "<h1>Parabéns, você acertou 18 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==17){
    echo "<h1>Parabéns, você acertou 17 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==16){
    echo "<h1>Parabéns, você acertou 16 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação2==15){
    echo "<h1>Parabéns, você acertou 15 números no segundo volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

else{
    echo "<h1>Você acertou $pontuação2 números no segundo volante, por isso não recebeu premiação, mas tente novamente, vai que um dia ganhe </h1> </br>";
    echo '<h1>';
    for ($i=0; $i<$pontuação2; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

echo'</br></br></</br>';

if($pontuação3==20){
    echo "<h1>Parabéns, você acertou 20 números no  terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==00){
    echo "<h1>Parabéns, você não acertou nenhum numero no terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==19){
    echo "<h1>Parabéns, você acertou 19 números no terceira volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==18){
    echo "<h1>Parabéns, você acertou 18 números no terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==17){
    echo "<h1>Parabéns, você acertou 17 números no terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==16){
    echo "<h1>Parabéns, você acertou 16 números no terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

elseif($pontuação3==15){
    echo "<h1>Parabéns, você acertou 15 números no terceiro volante </h1>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}

else{
    echo "<h1>Você acertou $pontuação3 números no terceiro volante, por isso não recebeu premiação, mas tente novamente, vai que um dia ganhe </h1> </br>";
    echo '<h1><p>Número(s) correto(s): ';
    for ($i=0; $i<$pontuação3; $i++){
        
        echo $numeroscertos[$i]. ' ';
        }
    echo'</p></h1>';
}



echo'</br>';
echo '</div>';

}?>
</div >
</div>
</body>
</html>
