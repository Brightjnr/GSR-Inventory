<style>
    @import 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/yeti/bootstrap.min.css';
@import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';

form label {
  cursor: pointer;
}

.table-searchable .is-hidden {
  display: none;
}

.table-searchable .is-match {
  background-color: lawngreen;
  transition: background-color .5s ease-in;
}

.table-searchable td[data-searchable="false"] {
  background-color: lightcoral;
}
</style>

<div class="container">
  <div class="card shadow my-5">
    <h4 class="card-header">All Employee Details</h4>
    <div class="card-body">
      <form class="mb-3">
        <label for="searchBox">Search employee form</label>
        <input type="text" id="searchBox" name="searchBox" class="form-control">
        <small class="form-text feedback"></small>
      </form>
      <table class="table table-searchable table-striped table-bordered table-hover table-responsive">
        <thead>
          <tr>
            <th>#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Department</th>
            <th>Position</th>
            <th>Username</th>
            <th>Proccessedby</th>
            <th>Status</th>
            <th>Delete</th>
            <th>View More</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $db = mysqli_connect('localhost','root','');
     
            mysqli_select_db($db,'gsrproject');
     
            $sql= "SELECT * FROM finaltable";
     
            $records = mysqli_query($db,$sql);
     
            while ($row = mysqli_fetch_array($records)) {
             echo "<tr>";
             echo "<td>".$row['id']."</td>";
             echo "<td>".$row['lname']."</td>";
             echo "<td>".$row['fname']."</td>";
             echo "<td>".$row['dep']."</td>";
             echo "<td>".$row['ptitle']."</td>";
             echo "<td>".$row['itusername']."</td>";
             echo "<td>".$row['proccessedby']."</td>";
             echo "<td>".$row['statuz']."</td>";
             echo "<td><a href=delfinal.php?id=".$row['id'].">Delete</a></td>";
             echo "<td><a href=viewmore.php?id=".$row['id'].">View More</a></td>";
             }
             ?>
          </tr>
          
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer"></div>
  </div>
</div>

<script>
  const [form] = document.forms;
const feedback = document.querySelector('.feedback');
const table = document.querySelector('table');
const tbodyRows = [...table.tBodies[0].rows];

const getCellValue = cell => {
  return cell.innerText || cell.textContent;
}

form.searchBox.addEventListener('input', e => {
  const term = e.target.value.toLowerCase();
  const hasValue = !!e.target.value.length;
  let resultCount = 0;
  
  tbodyRows.forEach(row => {
    const cells = row.querySelectorAll('td:not([data-searchable="false"])');
    let isFound = false;
    
    cells.forEach(cell => {
      const value = getCellValue(cell).toLowerCase();
      const isMatch = value.includes(term);
      
      if (isMatch) {
        isFound = true;
      }
      
      cell.classList.toggle('is-match', hasValue && isMatch);
    });
    
    row.classList.toggle('is-hidden', !isFound);
    resultCount += isFound ? 1 : 0;
  });
  
  feedback.textContent = hasValue
    ? resultCount === 1
      ? 'Showing 1 result'
      : `Showing ${resultCount} results`
    : null;
});
</script>