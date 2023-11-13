@extends('layouts.app')
@section('title', 'Competition')

@section('content')

    <!-- Breadcrumbs Section Start -->
		<div class="rs-breadcrumbs sec-color">
            <img src="frontend/images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">PGFC Competition 2023</h1>
    						<ul>
    							<li>
    								<a class="active" href="{{ route('index') }}">Home</a>
    							</li>
    							<li>PGFC Competition 2023</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->
        
        <!-- Point Table Section Start -->
        <div class="world-cup-page sec-spacer">
	        <div class="container">
                <h3>Group List</h3>
				<div class="match-summary text-center list-one">
                    <table>
                        <tr>
                            <td>Group A</td>
                            <td>Group B</td>
                            <td>Group C</td>
                            <td>Group D</td>
                        </tr> 
                        <tr>
                            <td>SMK YPI DARUSSALAM 1 CERME</td>
                            <td>SMAN 1 GRESIK</td>
                            <td>SMAN 2 LAMONGAN</td>
                            <td>SMAN 1 WRINGINANOM</td>
                        </tr>  
                        <tr>
                            <td>SMAN 1 KEBOMAS</td>
                            <td>SMAN 2 MOJOKERTO</td>
                            <td>SMAN 1 CERME</td>
                            <td>SMA SEMEN GRESIK</td>
                        </tr>  
                        <tr>
                            <td>SMA MUHAMMADIYAH 8 CERME</td>
                            <td>SMKN 5 SURABAYA</td>
                            <td>SMK MANBAUL ULUM</td>
                            <td>SMA NU2 GRESIK</td>
                        </tr>  
                        <tr>
                            <td>SMA NEGERI 1 KRIAN</td>
                            <td>SMA NU 1 GRESIK</td>
                            <td>SMKN 1 CERME</td>
                            <td>SMK YASMU MANYAR</td>
                        </tr>    			
                    </table>
				</div>
				<div class="match-summary text-center list-two">
                    <table>
                        <tr>
                            <td>Group E</td>
                            <td>Group F</td>
                            <td>Group G</td>
                            <td>Group H</td>
                        </tr> 
                        <tr>
                            <td>SMAN 1 MENGANTI</td>
                            <td>SMK SEMEN GRESIK</td>
                            <td>SMAN 1 PURI</td>
                            <td>MA YKUI MASKUMAMBANG</td>
                        </tr>  
                        <tr>
                            <td>SMAN 1 DRIYOREJO</td>
                            <td>SMAN 1 MANYAR</td>
                            <td>SMK PGRI 1 GRESIK</td>
                            <td>MAN 1 GRESIK</td>
                        </tr>  
                        <tr>
                            <td>SMA NEGERI 1 LAMONGAN</td>
                            <td>SMKN 7 SURABAYA</td>
                            <td>SMA MUHAMMADIYAH 10 GKB GRESIK</td>
                            <td>SMA NEGERI 1 BABAT</td>
                        </tr>  
                        <tr>
                            <td>SMA NEGERI 9 SURABAYA</td>
                            <td>SMA ANTARTIKA SIDOARJO</td>
                            <td>SMA MUHAMMADIYAH 1 GRESIK</td>
                            <td>SMA NEGERI 1 SIDAYU</td>
                        </tr>    			
                    </table>
                </div> 
                <h3>Match Fixtures</h3>
				<div class="match-summary text-center list-three">
                    <table>
                        <tr>
                            <td>Tanggal</td>
                            <td>No Pertandingan</td>
                            <td>Pertandingan</td>
                            <td>Waktu</td>
                            <td>Tempat</td>
                        </tr> 
                        <tr class="full-area">
                            <td>Penyisihan Grub</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>  
                        <tr>
                            <td>22 Agustus 2023</td>
                            <td>01</td>
                            <td>SMAN 1 GRESIK VS SMAN 2 LAMONGAN</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>  
                        <tr>
                            <td>22 Agustus 2023</td>
                            <td>02</td>
                            <td>SMAN 1 KEBOMAS VS SMAN 2 MOJOKERTO</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>  
                        <tr>
                            <td>22 Agustus 2023</td>
                            <td>03</td>
                            <td>SMK YPI DARUSSALAM 1 CERME VS SMAN 1 WRINGINANOM</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>22 Agustus 2023</td>
                            <td>04</td>
                            <td>SMAN 1 CERME VS SMA SEMEN GRESIK</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>   
                        <tr>
                            <td>23 Agustus 2023</td>
                            <td>05</td>
                            <td>SMKN 5 SURABAYA VS SMK MANBAUL ULUM</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>   
                        <tr>
                            <td>23 Agustus 2023</td>
                            <td>06</td>
                            <td>SMA MUHAMMADIYAH 8 CERME VS SMA NU2 GRESIK</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>23 Agustus 2023</td>
                            <td>07</td>
                            <td>SMA NEGERI 1 KRIAN VS SMKN 1 CERME</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>23 Agustus 2023</td>
                            <td>08</td>
                            <td>SMK YASMU MANYAR VS SMA NU 1 GRESIK</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>  
                        <tr>
                            <td>24 Agustus 2023</td>
                            <td>09</td>
                            <td>SMAN 1 PURI VS SMK SEMEN GRESIK</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>24 Agustus 2023</td>
                            <td>10</td>
                            <td>MA YKUI MASKUMAMBANG VS SMAN 1 MENGANTI</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>24 Agustus 2023</td>
                            <td>11</td>
                            <td>SMAN 1 MANYAR VS SMAN 1 DRIYOREJO</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>24 Agustus 2023</td>
                            <td>12</td>
                            <td>MAN 1 GRESIK VS SMK PGRI 1 GRESIK</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>24 Agustus 2023</td>
                            <td>13</td>
                            <td>SMA NEGERI 1 LAMONGAN VS SMA NEGERI 1 BABAT</td>
                            <td>20:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2023</td>
                            <td>14</td>
                            <td>SMA MUHAMMADIYAH 10 GKB GRESIK VS SMKN 7 SURABAYA</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>25 Agustus 2023</td>
                            <td>15</td>
                            <td>SMA ANTARTIKA SIDOARJO VS SMA NEGERI 9 SURABAYA</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>25 Agustus 2023</td>
                            <td>16</td>
                            <td>SMA NEGERI 1 SIDAYU VS SMA MUHAMMADIYAH 1 GRESIK</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>25 Agustus 2023</td>
                            <td>17</td>
                            <td>SMAN 2 LAMONGAN VS SMAN 1 WRINGINANOM</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>25 Agustus 2023</td>
                            <td>18</td>
                            <td>SMAN 1 GRESIK VS SMK YPI DARUSSALAM 1 CERME</td>
                            <td>20:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>19</td>
                            <td>SMK MANBAUL ULUM VS SMA NU2 GRESIK</td>
                            <td>09:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>20</td>
                            <td>SMAN 2 MOJOKERTO VS SMA SEMEN GRESIK</td>
                            <td>10:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>21</td>
                            <td>SMKN 5 SURABAYA VS SMA MUHAMMADIYAH 8 CERME</td>
                            <td>11:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>22</td>
                            <td>SMAN 1 PURI VS MA YKUI MASKUMAMBANG</td>
                            <td>12:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>23</td>
                            <td>SMA NEGERI 1 KRIAN VS SMK YASMU MANYAR</td>
                            <td>13:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>24</td>
                            <td>SMKN 1 CERME VS SMA NU 1 GRESIK</td>
                            <td>14:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>25</td>
                            <td>SMAN 1 MANYAR VS MAN 1 GRESIK</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>26</td>
                            <td>SMK SEMEN GRESIK VS SMAN 1 MENGANTI</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>27</td>
                            <td>SMAN 1 KEBOMAS VS SMAN 1 CERME</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>26 Agustus 2023</td>
                            <td>28</td>
                            <td>SMAN 1 DRIYOREJO VS SMK PGRI 1 GRESIK</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>29</td>
                            <td>SMA NEGERI 1 LAMONGAN VS SMA MUHAMMADIYAH 10 GKB GRESIK</td>
                            <td>09:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>30</td>
                            <td>SMA NEGERI 1 BABAT VS SMKN 7 SURABAYA</td>
                            <td>10:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>31</td>
                            <td>SMA ANTARTIKA SIDOARJO VS SMA NEGERI 1 SIDAYU</td>
                            <td>11:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>32</td>
                            <td>SMA NEGERI 9 SURABAYA VS SMA MUHAMMADIYAH 1 GRESIK</td>
                            <td>12:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>33</td>
                            <td>SMAN 1 GRESIK VS SMAN 1 WRINGINANOM</td>
                            <td>13:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>34</td>
                            <td>SMAN 2 LAMONGAN VS SMK YPI DARUSSALAM 1 CERME</td>
                            <td>14:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>35</td>
                            <td>SMKN 5 SURABAYA VS SMA NU2 GRESIK</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>36</td>
                            <td>SMAN 2 MOJOKERTO VS SMAN 1 CERME</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>37</td>
                            <td>SMAN 1 KEBOMAS VS SMA SEMEN GRESIK</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>27 Agustus 2023</td>
                            <td>38</td>
                            <td>SMK MANBAUL ULUM VS SMA MUHAMMADIYAH 8 CERME</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>28 Agustus 2023</td>
                            <td>39</td>
                            <td>SMA NEGERI 1 KRIAN VS SMA NU 1 GRESIK</td>
                            <td>14:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>28 Agustus 2023</td>
                            <td>40</td>
                            <td>SMAN 1 PURI VS SMAN 1 MENGANTI</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>28 Agustus 2023</td>
                            <td>41</td>
                            <td>SMAN 1 MANYAR VS SMK PGRI 1 GRESIK</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>28 Agustus 2023</td>
                            <td>42</td>
                            <td>SMK SEMEN GRESIK VS MA YKUI MASKUMAMBANG</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>28 Agustus 2023</td>
                            <td>43</td>
                            <td>SMKN 1 CERME VS SMK YASMU MANYAR</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>29 Agustus 2023</td>
                            <td>44</td>
                            <td>SMAN 1 DRIYOREJO VS MAN 1 GRESIK</td>
                            <td>14:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>29 Agustus 2023</td>
                            <td>45</td>
                            <td>SMA NEGERI 1 LAMONGAN VS SMKN 7 SURABAYA</td>
                            <td>15:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>29 Agustus 2023</td>
                            <td>46</td>
                            <td>SMA NEGERI 1 BABAT VS SMA MUHAMMADIYAH 10 GKB GRESIK</td>
                            <td>16:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>29 Agustus 2023</td>
                            <td>47</td>
                            <td>SMA ANTARTIKA SIDOARJO VS SMA MUHAMMADIYAH 1 GRESIK</td>
                            <td>18:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>29 Agustus 2023</td>
                            <td>48</td>
                            <td>SMA NEGERI 9 SURABAYA VS SMA NEGERI 1 SIDAYU</td>
                            <td>19:00 WIB</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                       <tr class="full-area">
                            <td>Babak 16 Besar</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>  
                        <tr>
                            <td>-</td>
                            <td>49</td>
                            <td>1A VS 2B</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>-</td>
                            <td>50</td>
                            <td>1C VS 2D</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr>
                            <td>-</td>
                            <td>51</td>
                            <td>1E VS 2F</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>  
                        <tr>
                            <td>-</td>
                            <td>52</td>
                            <td>1G VS 2H</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>53</td>
                            <td>1B VS 2A</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>54</td>
                            <td>1D VS 2C</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>55</td>
                            <td>1F VS 2E</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>56</td>
                            <td>1H VS 2G</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr class="full-area">
                            <td>Babak 8 Besar</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>-</td>
                            <td>57</td>
                            <td>W49 VS W50</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>58</td>
                            <td>W53 VS W54</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>59</td>
                            <td>W55 VS W56</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>60</td>
                            <td>W51 VS W52</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr class="full-area">
                            <td>Semi Final</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>-</td>
                            <td>61</td>
                            <td>W57 VS W58</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>  
                        <tr>
                            <td>-</td>
                            <td>62</td>
                            <td>W59 VS W60</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>
                        <tr class="full-area">
                            <td>Perebutan Juara 3 & 4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>63</td>
                            <td>L61 VS L62</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr> 
                        <tr class="full-area">
                            <td>Perebutan Juara 1 & 2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>64</td>
                            <td>W61 VS W62</td>
                            <td>-</td>
                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                        </tr>    			
                    </table>
				</div>
			</div>
        </div>
        <!-- Point Table Section End -->
    
@endsection

@push('prepend-style')
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in tde root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js')}}"></script>
@endpush

@push('addon-script')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ url('frontend/js/jquery.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js')}}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js')}}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js')}}"></script>
@endpush