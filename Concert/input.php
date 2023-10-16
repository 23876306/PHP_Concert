<form action="select_ans_2.php" method="Post">
請選擇您專長的電腦語言:<Br>
<Select name="language[]" multiple Size=5>
<Option Value="VB">VB</Option>
<Option Value="Delphi">Delphi</Option>
<Option Value="C++">C++</Option>
<Option Value="PHP">PHP</Option>
<Option Value="Java">Java</Option>
</Select>
<input type="Submit">
</form>

<form method="POST" method="post">
   <select name="concert">
   <option value="五月天2023諾亞方舟｜10週年進化復刻">五月天2023諾亞方舟｜10週年進化復刻</option>
   <option value="盧廣仲 14 週年 勵志的早晨 勵志的夜">盧廣仲 14 週年 勵志的早晨 勵志的夜</option>
   <option value="周興哲〔Odyssey~旅程">周興哲〔Odyssey~旅程〕</option>
   <option value="五月天《好好好想見到你》台中場">五月天《好好好想見到你》台中場</option>
  </select>
<input type="submit" name="Submit" value="Submit">
</form>


<form method="POST">
   <select name="seat">
   <option value="普通區">普通區</option>
   <option value="搖滾區">搖滾區</option>
  </select>
<input type="submit" name="Submit" value="Submit">
</form>

<?php
if(isset($_POST['concert'])) {
  echo "你所選的演唱會: ".htmlspecialchars($_POST['concert']);
}
if(isset($_POST['seat'])) {
  echo "你所選的座位類型: ".htmlspecialchars($_POST['seat']);
}
?>
