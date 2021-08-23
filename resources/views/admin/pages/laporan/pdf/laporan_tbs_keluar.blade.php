<!DOCTYPE html>
<html>
<head>
<style>

.table{
  width: 100%;
  border: 1px solid #000;
  border-collapse: collapse;
}


</style>
</head>
<body>

<h2>Laporan TBS Keluar</h2>
<p>CV. Tunas Alam Perkasa</p>
<table style="width: 100%">
    <tr>
      <td>
        <h3>TBS Keluar</h3>
        <table class="table">
            <tr>
                <th>Tanggal</th>
                <th>Supir/Plat</th>
                <th>Tara</th>
                <th>Gross</th>
                <th>Nettor Keluar</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->sopir->nama}}</td>
                    <td>{{$item->tara}}</td>
                    <td>{{$item->gross}}</td>
                    <td>{{$item->netto}}</td>
                </tr>
            @endforeach
        </table>
      </td>
      <td>
        <h3>NP Tbs</h3>
        <table class="table">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
          </tr>
          <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
          </tr>
        </table>
      </td>
    </tr>
</table>
</body>
</html>
