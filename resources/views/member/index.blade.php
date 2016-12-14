@extends('layouts.admin')

@section('styles')
  <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/pages/table-data.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <h4>Data Anggota <a class="right waves-effect waves-light btn green m-b-xs" href="/member/edit/1">+ Tambah</a></h4>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kota Lahir</th>
                                <th>Usia</th>
                                <th>Tanggal Bergabung</th>
                                <th>No Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>+0812-320-800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>+0812-170-750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>+0812-86-123</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>+0812-433-060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>+0812-162-700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>+0812-372-123</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>

                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>+0812-137-500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>

                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>+0812-327-900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>

                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>+0812-205-500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>

                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>+0812-103-600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>

                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>+0812-90-560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>

                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>+0812-342-123</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>

                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>+0812-470-600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>

                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>+0812-313-500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>

                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>+0812-385-750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>

                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>+0812-198-500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>

                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>+0812-725-123</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>

                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>+0812-237-500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>

                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>+0812-132-123</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>

                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>+0812-217-500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>

                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>+0812-345-123</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>

                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>+0812-675-123</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>

                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>+0812-106-450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>

                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>+0812-85-600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>

                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>+0812-1-200-123</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>

                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>+0812-92-575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>

                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>+0812-357-650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>

                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>+0812-206-850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>

                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>+0812-850-123</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>

                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>+0812-163-123</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>

                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>+0812-95-400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>

                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>+0812-114-500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>

                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>+0812-145-123</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>

                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>+0812-235-500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>

                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>+0812-324-050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>

                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>+0812-85-675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>

                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>+0812-164-500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>

                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>+0812-109-850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>

                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>+0812-452-500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>

                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>+0812-136-200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>

                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>+0812-645-750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>

                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>+0812-234-500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>

                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>+0812-163-500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>

                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>+0812-139-575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>

                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>+0812-98-540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>

                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>+0812-87-500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>

                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>+0812-138-575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>

                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>+0812-125-250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>

                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>+0812-115-123</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>

                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>+0812-75-650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>

                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>+0812-145-600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>

                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>+0812-356-250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>

                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>+0812-103-500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>

                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>+0812-86-500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>

                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>+0812-183-123</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>

                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>+0812-183-123</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>

                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>+0812-112-123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
