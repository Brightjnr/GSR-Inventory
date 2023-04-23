<?php
session_start();
?>
<div class="input-field">
                            <label>Processed By</label>
                            <input type="text" id="proccessedby" name="proccessedby" value=<?php  echo $_SESSION['surname']; ?> >
                        </div>